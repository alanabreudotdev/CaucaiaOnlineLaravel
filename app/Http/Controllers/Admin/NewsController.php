<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;
use App\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use Auth;

class NewsController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $news = News::where('title', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image_url', 'LIKE', "%$keyword%")
                ->orWhere('tags', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $news = News::latest()->paginate($perPage);
        }


        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = NewsCategory::pluck('name', 'id');

        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'description' => 'required',
            'status' => 'required',
            'image_url'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'

		]);
        $requestData = $request->all();
        $requestData['slug'] = Str::slug($request['title']);

        // Check if a profile image has been uploaded
        if ($request->has('image_url')) {
            // Get image file
            $image = $request->file('image_url');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['slug']).'_'.time();
            // Define folder path
            $folder = '/uploads/images/news/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['image_url'] = $filePath;
        }
        $requestData['user_id'] = Auth::user()->id;
        News::create($requestData);

        return redirect('admin/news')->with('flash_message', 'Notícias adicionada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = NewsCategory::pluck('name', 'id');

        return view('admin.news.edit', compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required',
			'description' => 'required',
            'status' => 'required',
            'image_url'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
		]);
        $requestData = $request->all();
        
        // Check if a profile image has been uploaded
        if ($request->has('image_url')) {
            // Get image file
            $image = $request->file('image_url');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['slug']).'_'.time();
            // Define folder path
            $folder = '/uploads/images/news/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['image_url'] = $filePath;
        }

        $news = News::findOrFail($id);
        $news->update($requestData);

        return redirect('admin/news')->with('flash_message', 'Noticia Atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect('admin/news')->with('flash_message', 'News deleted!');
    }
}
