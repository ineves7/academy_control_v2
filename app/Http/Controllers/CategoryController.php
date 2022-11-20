<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        /*if (! Gate::allows('Ver e Listar Canecas')) {
            return abort(401);
        }*/

        try {
            $categories = Category::all();
    
            return view('admin.category.index', compact('categories'));
            
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }

    public function store(
        Request $request
    ){
            DB::beginTransaction();

            $categories = new Category;

            $categories->category = $request->category;

            $categories->save();

            DB::commit();
            return redirect()->back();
    }

    public function show( $category_id ){
    

        try {
            $category = Category::find ($category_id);
            
            return view ('admin.category.show', compact('category'));
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
    }

    public function create ()
    {


        try {
            $categories = Category::all();
    
            return view('admin.category.create', compact('categories'));
            
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
            
    }

    public function update (
        Request $request, $category_id
    )
    {

        //dd($request->all());
        try {

            DB::beginTransaction();

                $category = Category::find($category_id);

                $category->category = $request->category;

            $category->save();

            DB::commit();
            
            return redirect()->back();
        }catch (\Throwable $throwable){
            DB::rollBack();
            dd($throwable);
            //return redirect()->back()->withInput();
        }
    }

    public function destroy ( 
        $category_id
    )
    { 
        try {
            $category = Category::find($category_id);

            $category->delete();

            return redirect()->route('ritmo.index');
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }
}
