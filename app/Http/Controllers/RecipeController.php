<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    function search()
    {
        $auth = "1dea5c571b2d4d97851d0a8b848f4479";
        // $auth = "7e62daec2fac48a7be42615812f3df98";
        // $auth = "485e76e7fda5407e9cc3385e554a67c5";
        // $auth = "fdee1eda935c40aa8311451bc8d3157f";
        $perPage = 8;
        $search_text = $_GET['query'];
        $collections =  http::get("https://api.spoonacular.com/recipes/complexSearch?apiKey=${auth}&query=${search_text}")
                        ->json();
        // dd($collections['results']);

        $items = array();
        foreach($collections['results'] as $cp){
            $id = $cp['id'];
            $fetch = http::get("https://api.spoonacular.com/recipes/${id}/information?apiKey=${auth}")
                    ->json();
            array_push($items, $fetch);
        }
        // // dd($items);
        return view('search', ['collection'=>$items, 'perPage'=>$perPage]);
    }

    function show_mine()
    {
        return view('mine');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = "1dea5c571b2d4d97851d0a8b848f4479";
        // $auth = "7e62daec2fac48a7be42615812f3df98";
        // $auth = "485e76e7fda5407e9cc3385e554a67c5";
        // $auth = "fdee1eda935c40aa8311451bc8d3157f";
        $perPage = 8;
        $collection =  http::get("https://api.spoonacular.com/recipes/random?apiKey=${auth}&number=${perPage}")
                        ->json();
        // echo json_encode($collection); die();

        return view('index', ['collection'=>$collection, 'perPage'=>$perPage]);
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
    public function store($item)
    {
        dd($item);
        // Recipe::create([
        //     'id_makanan' => $item['id'],
        //     'nama' => $item['nama'],
        // ]);

        // return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo json_encode($id); 
        // die();
        $auth = "1dea5c571b2d4d97851d0a8b848f4479";
        // $auth = "7e62daec2fac48a7be42615812f3df98";
        // $auth = "485e76e7fda5407e9cc3385e554a67c5";
        // $auth = "fdee1eda935c40aa8311451bc8d3157f";
        $item = http::get("https://api.spoonacular.com/recipes/${id}/information?apiKey=${auth}")
                    ->json();

        return view('show', ['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
