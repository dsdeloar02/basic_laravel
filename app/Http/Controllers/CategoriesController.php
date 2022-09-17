<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::orderBy('id', 'DESC')->paginate(6);
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {

        // Validation


        // Modify and do something

        // Database Insert / Update / Delete

        // ----> way 01

        $category = new category();
        $category->name = $request->name;
        // $category->image = Storage::putFile('public', $request->image, env('FILESYSTEM_DISK'));
        $file = $request->file('image');
        $image_name = Str::of($request->name)->slug(). '-'. time() . '.' . $file->extension();
        // $category->image = Storage::putFileAs('public', $request->image, $image_name, 'public');
        $category->image = $request->file('image')->storePubliclyAs('public', $image_name);
        $category->save();

        


        // ----> way 02 

        // $data = [
        //     'name' => $request->name,
        // ];

        // category::create($data);

        // ----> Way 03

        // category::create($request->all());


        // Session a

        session()->flash('success', 'Category Created successful!');

        return redirect()->route('categories.create');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
