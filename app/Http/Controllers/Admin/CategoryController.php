<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //validazione dati
        $request->validate([
            'name' => 'required | string | max:50'
        ]);
        //prendo i dati dal request e creo la nuova categoria
        $data = $request->all();
        $newCategory = new Category();
        $newCategory->fill($data);
        $newCategory->slug = $this->getSlug($data['name']);
        $newCategory->save();
        //reindirizzo a un altra pagina
        return redirect()->route('admin.category.index', $newCategory->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //validazione
        $request->validate([
            'name' => 'required | string | max:50'
        ]);
        //aggiornamento
        $data = $request->all();
        if( $category->name != $data['name']){
            $category->slug = $this->getSlug($data['name']);
        }
        $category->update($data);
        //redirect
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index');
    }

    private function getSlug($name)
    {
        $slug = Str::of($name)->slug('-');
        $count = 1;

        while(Category::where('slug' , $slug)->first() ){
            $slug = Str::of($name)->slug('-') . "-{$count}";
            $count++;
        }

        return $slug;
    }
}
