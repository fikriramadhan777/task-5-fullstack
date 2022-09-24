<?php

namespace App\Http\CategoriesControllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Categories'] = Categories::orderBy('id','desc')->paginate(10);
        return view('Categories.Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'user_id' => 'required',
        ]);

        $Categories = new Categories;

        $Categories->id = $request->id;
        $Categories->name = $request->name;
        $Categories->user_id = $request->user_id;

        $Categories->save();
        return redirect()->route('categories.index')
        ->with('success','Categories Baru Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        return view('Categories.show',compact('Categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $Categories)
    {
        return view('categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'user_id' => 'required',
 
        ]);

        $Categories = Categories::find($id);
        $Categories->name = $request->name;
        $Categories->user_id = $request->user_id;


        $Categories->save();
        return redirect()->route('categories.index')
        ->with('success','Categories Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $Categories)
    {
        $Categories->delete();
        return redirect()->route('Categories.index')
        ->with('success','Categories Telah Dihapus');
    }
}