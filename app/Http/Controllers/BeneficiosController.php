<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;


class BeneficiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $beneficios =Beneficio::orderBy('vigencia')->get();

        return view('beneficios',compact('beneficios'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('beneficios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $title =  request('title');
        $description = request('description');
        $requisitos = request('requisitos');
        $vigencia = request('vigencia');

          Beneficio::create([
            'title' => $title,
            'description' => $description,
            'requisitos' => $requisitos,
            'vigencia' => $vigencia,

         ]);

          return redirect()->route('beneficios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficio $beneficio)
    {

         return view('beneficios.show', [
            'beneficio' => $beneficio
         ]);
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
