<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ReclamaSubCategory;
use App\ReclamaCategory;
use Illuminate\Http\Request;

class ReclamaSubCategoryController extends Controller
{
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
            $reclamasubcategory = ReclamaSubCategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('reclama_category_id', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reclamasubcategory = ReclamaSubCategory::latest()->with('categories')->paginate($perPage);
           
        }

        return view('admin.reclama-sub-category.index', compact('reclamasubcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = ReclamaCategory::pluck('name','id');
        return view('admin.reclama-sub-category.create', compact('categories'));
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
			'name' => 'required',
			'reclama_category_id' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();
        
        ReclamaSubCategory::create($requestData);

        return back()->with('flash_message', 'ReclamaSubCategory added!');
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
        $reclamasubcategory = ReclamaSubCategory::findOrFail($id);

        return view('admin.reclama-sub-category.show', compact('reclamasubcategory'));
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
        $reclamasubcategory = ReclamaSubCategory::findOrFail($id);
        $categories = ReclamaCategory::pluck('name','id');

        return view('admin.reclama-sub-category.edit', compact('reclamasubcategory','categories'));
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
			'name' => 'required',
			'reclama_category_id' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();
        
        $reclamasubcategory = ReclamaSubCategory::findOrFail($id);
        $reclamasubcategory->update($requestData);

        return redirect('admin/reclama-sub-category')->with('flash_message', 'ReclamaSubCategory updated!');
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
        ReclamaSubCategory::destroy($id);

        return redirect('admin/reclama-sub-category')->with('flash_message', 'ReclamaSubCategory deleted!');
    }
}
