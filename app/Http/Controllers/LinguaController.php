<?php

namespace App\Http\Controllers;


use App\Models\Lingua;
use Illuminate\Http\Request;

class LinguaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linguas = Lingua::all();

        return response()->json(['linguas'=>$linguas,'status'=>200]);
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
        $lingua= new Lingua();

        $lingua=$request->all();
        Lingua::create($lingua);
        response()->json(['lingua'=>$lingua,'status'=>200]);
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

        $lingua = Lingua::find($id);

        $lingua->update($request->all());
        return response()->json(['lingua'=>$lingua,'status'=>200]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lingua = Lingua::find($id);

        $lingua->delete();
        return response()->json(['status'=>200]);
    }
}
