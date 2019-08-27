<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EmpresaReview;
use Illuminate\Http\Request;

class EmpresaReviewController extends Controller
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
            $empresareview = EmpresaReview::where('note', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('comment', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('empresa_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empresareview = EmpresaReview::latest()->paginate($perPage);
        }

        return view('admin.empresa-review.index', compact('empresareview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.empresa-review.create');
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
			'note' => 'required'
		]);
        $requestData = $request->all();
        
        EmpresaReview::create($requestData);

        return redirect('admin/empresa-review')->with('flash_message', 'EmpresaReview added!');
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
        $empresareview = EmpresaReview::findOrFail($id);

        return view('admin.empresa-review.show', compact('empresareview'));
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
        $empresareview = EmpresaReview::findOrFail($id);

        return view('admin.empresa-review.edit', compact('empresareview'));
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
			'note' => 'required'
		]);
        $requestData = $request->all();
        
        $empresareview = EmpresaReview::findOrFail($id);
        $empresareview->update($requestData);

        return redirect('admin/empresa-review')->with('flash_message', 'EmpresaReview updated!');
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
        EmpresaReview::destroy($id);

        return redirect('admin/empresa-review')->with('flash_message', 'EmpresaReview deleted!');
    }
}
