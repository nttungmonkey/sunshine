<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loai;
use Carbon\Carbon;
use DataTables;
use Validator;
use Session;
use App\Http\Requests\CategoryCreateRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Loai::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $url_edit = route("categorys.edit", [$row->l_ma]);
                    $actionBtn =    '<a href="'.$url_edit.'" data-id="'.$row->l_ma.'" id="edit-category" class="edit btn btn-success btn-sm">Edit</a> 
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a href="javascript:void(0)" data-id='.$row->l_ma.' id="delete-category" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend/categorys.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $category = new Loai();
        $category->l_ten = $request->l_ten;
        $category->l_trangThai = $request->l_trangThai;
        $category->l_taoMoi = Carbon::now();
        $category->l_capNhat = Carbon::now();
        $category->save();
        $request->session()->flash('alert-success', 'Successfully!');
        return redirect()->route('categorys.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Loai::find($id);
        return view('backend/categorys.edit')
            ->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryCreateRequest $request, $id)
    {   
        $category = Loai::find($id);
        $category->l_ten = $request->l_ten;
        $category->l_trangThai = $request->l_trangThai;
        $category->l_taoMoi = Carbon::now();
        $category->l_capNhat = Carbon::now();
        $category->save();
        $request->session()->flash('alert-success', 'Successfully!');
        return redirect()->route('categorys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Loai::find($id);
        $category->delete();

        Session::flash('alert-info', 'Xóa sản phẩm thành công ^^~!!!');
        return redirect()->route('categorys.index');
    }
}
