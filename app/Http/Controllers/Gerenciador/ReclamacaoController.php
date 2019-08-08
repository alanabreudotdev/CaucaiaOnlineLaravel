<?php

namespace App\Http\Controllers\Gerenciador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reclamacao;
use App\ReclamaAnswer;
use Validator;
use Flash;
use Auth;

class ReclamacaoController extends Controller
{
    public function __construct(Reclamacao $rcl){
        $this->rcl = $rcl;
    }
    /*
    *
    * VER RECLAMAÇÃO(DETALHES)
    *param: id da reclamacao
    *
    */

    public function reclamacaoVer($id){

        $reclamacao = Reclamacao::where('id',$id)->with('answers','user','categories', 'subcategories')->first();
        
        $titulo = $reclamacao->titulo;
         //pega a localizao para passar ao mapa
         $locations = $this->rcl->getLocationsToMap($id);

        return view('gerenciador.reclamacao.ver',compact('titulo','reclamacao','locations'));
    }

    /**
     * reposta reclamacao 
     * Tipo: 
     * 1 - primeira reposta servico
     * 2 - resposta user == Nao resolvido
     * 3 - resposta user == Resolvido
     * 4 - ultima resposta serviço publico
     */
    public function reclamacaoResponder(Request $request){
        
        $validator = Validator::make($request->all(), [
            'texto_comentario' => 'required',
            'reclamacao_id' => 'required',
            'tipo'  => 'required'
        ]);
            if($validator->fails()){
                Flash::error('','Verifique os dados digitados e tente novamente.');

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }

            $input = $request->except('_token');
            $input['user_id'] = Auth::user()->id;
            
            $save = ReclamaAnswer::create($input);

            if($save){
                $dados = [
                    'respondida' => 1
                ];
            $reclamacao = Reclamacao::where('id',$input['reclamacao_id'])->first();
            $reclamacao->update($dados);
            
            }
            Flash::success('','Resposta enviada com sucesso!');
            return redirect()->back();
        
    }
}
