<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::latest()->get();

        return view('ad.index',[
            'ads' => $ads,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'img' => 'required|file',
        ]);

        $img = $request->file('img');

        Ad::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'img' => $img->store('img_ads','public'),
        ]);

        return redirect()->route('anuncios.index')->with('status','Se creo el anuncio exitosamente');

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
        $ad = Ad::where('id',$id)->first();

        return view('ad.edit',[
            'ad'=>$ad,
        ]);
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
        //dd($request);
        Ad::where('id',$id)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
        ]);

        if (!is_null($request->file('img'))) {
            
            $img = $request->file('img'); 

            Ad::where('id',$id)->update([
                'img'=>$img->store('img_ads','public'),
            ]);            

        }

        return redirect()->route('anuncios.index')->with('status','Se edito el anuncio de manera exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ad::where('id',$id)->delete();

        return back()->with('status','Anuncio Eliminado Exitosamente');
    }

    public function ad()
    {
        $ad = Ad::latest()->first();

        return view('hotel',[
            'ad' => $ad,
        ]);
    }

    public function adEstandar()
    {
        $ad = Ad::latest()->first();
        
        return view('estandar',[
            'ad' => $ad,
        ]);
    }

    public function adSuperior()
    {
        $ad = Ad::latest()->first();
        
        return view('superior',[
            'ad' => $ad,
        ]);
    }
}
