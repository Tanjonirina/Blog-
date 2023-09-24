<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(('Admin.index'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view(('Admin.create'));
    }

    public function user(){
        return view(('Admin.user.creat'));
    }
    public function article(){

        $article = Article::paginate(5);
        
        return view(('Admin.article.list'),compact('article'));
    }
    public function list()
    {
        $user= User::paginate(5);
         return view(('Admin.user.liste'),compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $article=Article::Where('id',$id)->first()->toJson();
      return $article;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user =User::all();
        $article=Article::where('id',$id)->first()-toJson();
        return $article;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
