<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Reclamacao;
use Flash;
use Hash;
use Validator;
use App\Traits\UploadTrait;

class UsuarioController extends Controller
{
    use UploadTrait;

    public function __construct(){
        $this->middleware('auth');
    }

    public function perfil(){
        $titulo = 'Perfil';

        return view('front.user.perfil');
    }

    public function perfilPost(Request $request){
        
        $validateData = $request->validate([
            'name' => 'required',
            'cpf' => 'required'
        ]);

        $dados = $request->except('_token');

        $save = User::where('id',Auth::user()->id)->update($dados);

        if($save){
            Flash::success('','Perfil atualizado com sucesso!');
            return redirect(route('usuario.perfil'));
        }else{

        }
       
    }

    public function foto(){
        $titulo = 'Foto';

        return view('front.user.foto');
    }

    public function fotoPost(Request $request){
        
        $validator = Validator::make($request->all(), [
            
            'photo_url'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            Flash::error('','Não foi possível enviar a imagem.');
            
            return redirect()
                ->route('usuario.foto')
                ->withErrors($validator)
                ->withInput();
        }

        // Get current user
        $user = User::findOrFail(Auth::user()->id);
       

        // Check if a profile image has been uploaded
        if ($request->has('photo_url')) {
            // Get image file
            $image = $request->file('photo_url');
            // Make a image name based on user name and current timestamp
            $name = str_slug(Auth::user()->name).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->photo_url = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        Flash::success('','Foto do Perfil atualizada com sucesso.');//flash message teste
        return redirect()->back();
    

    }

    public function conta(){
        $titulo = 'Conta';

        return view('front.user.conta');
    }

    public function contaPost(Request $request){
        $input = $request->except('_token');

        if (! Hash::check($input['password_old'],Auth::user()->password)){
            Flash::error('','Senha atual está incorreta');
            return back()->withInput();
        }

        $validator = Validator::make($request->all(), [
            
            'password'   => ["required"],
            'password_confirmation' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            Flash::error('','Verifique os dados digitados e tente novamente.');

            return redirect()
                ->route('usuario.conta')
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::where('id',Auth::user()->id);

        $input['password'] = bcrypt($input['password']);//criptografa password
        unset($input['password_old']);
        unset($input['password_confirmation']);


        $user->update($input);
        Flash::success('','Dados atualizado com sucesso.');//flash message teste
        return redirect()->route('usuario.conta');
    }

    /**
     * metodo para listar reclamacoes feito pelo usuario
     */
    public function reclamacoes(Request $request){
        $titulo = 'Minhas Reclamações';

        $keyword = $request->get('pesquisar');
        $perPage = 10;

        if (!empty($keyword)) {
            $reclamacoes = Reclamacao::
                where('titulo', 'LIKE', "%$keyword%")
                ->where('user_id',Auth::user()->id)
                ->orderby('id','desc')
                ->latest()->paginate($perPage);
           
        } else {
            $reclamacoes = Reclamacao::where('user_id',Auth::user()->id)->orderby('id','desc')->paginate(10);
        }


        return view('front.user.reclamacao', compact('titulo', 'reclamacoes'));
    }
}
