<?php

namespace Examen2\Http\Controllers;

use Illuminate\Http\Request;

use Examen2\Contacto;

use Illuminate\Support\Facades\Input;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto= Contacto::all();

        return view("contactos.index", compact("contacto"));

        return redirect ()->route('contactos.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contactos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contacto=new Contacto;

        $contacto->nombre=$request->nombre;

        $contacto->nombre= Input::get('nombre',false);

        $contacto->apellido=$request->apellido;

        $contacto->apellido= Input::get('apellido',false);

        $contacto->telefono=$request->telefono;

        $contacto->telefono= Input::get('telefono',false);

        $contacto->Fecha_Nacimiento=$request->Fecha_Nacimiento;

        $contacto->Fecha_Nacimiento= Input::get('Fecha_Nacimiento',false);

        $contacto->pais=$request->pais;

        $contacto->pais= Input::get('pais', false);

        $contacto->save();

        return redirect()->route('contactos.index');

              //  return redirect()->back();


         }

         public function byCountry($id){
            return Paises::where ('pais' , '=',$id)->get();
         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto=Contacto::findorFail($id);

        return view ("contactos.show", compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $contacto=Contacto::findorFail($id);

                return view("contactos.edit" , compact('contacto'));

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

                $contacto=Contacto::findorFail($id);

                $contacto->update($request->all());

                return redirect ("/contactos");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $contacto=Contacto::findorFail($id);

       $contacto->delete();

       return redirect ()->route('contactos.index');
    }
}
