<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use DB;


class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request)
    {

        $error = ['error' => 'No results found, please try with different keywords.'];
        if ($request->has('q')) {
            $posts = DB::search($request->get('q'))->get();
            return $posts->count() ? $posts : $error;
        }
        return view('front.search')->with([ 'error'=>$error]);

    }
    public function recherche(Request $request)
    {

        $error = ['error' => 'No results found, please try with different keywords.'];
        if ($request->has('q')) {
            $posts = Post::search($request->get('title'))->get();
            return $posts->count() ? $posts : $error;
        }
        $result = Post::where($request->get('q'));
        return view('front.search')->with(['request'=>$request, 'result'=>$result]);

    }
    public function research(Request $request)
    {
        // dd($request->search); // die avec vardump Laravel
        $query = $request->search;

        // Ici la requête permet de faire une recherche sur les différents champs de la table posts
        $posts = Post::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->orWhere('post_type', 'LIKE', '%' . $query . '%')
            ->paginate(5);

        return view('front.search', ['posts' => $posts]);

    }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
