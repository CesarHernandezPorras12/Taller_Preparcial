<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VentaMoto;
use App\Http\Controllers\Controller; // Import the missing Controller class

class VentaMotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $ventasMotos = VentaMoto::all(); // Obtener todos los registros de venta de motos

                        // Agrega un mensaje de depuración para verificar los datos recibidos
                        //dd($ventasMotos->all());

        return view('venta_motos.index', ['ventasMotos' => $ventasMotos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venta_motos.create'); // Retorna la vista para crear una nueva
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_vendedor' => 'required',
            'nombre_comprador' => 'required',
            'marca_moto' => 'required',
            'valor_moto' => 'required',
            'fecha_venta' => 'required',
        ]);

        // Crea un nuevo registro de VentaMotos
        $ventaMoto = new VentaMoto();
        $ventaMoto->fill([
            'Nombre_Vendedor' => $request->input('nombre_vendedor'),
            'Nombre_Comprador' => $request->input('nombre_comprador'),
            'Marca_Moto' => $request->input('marca_moto'),
            'Valor_Moto' => $request->input('valor_moto'),
            'Fecha_Venta' => $request->input('fecha_venta'),
        ]);
        $ventaMoto->save();

        // Agrega un mensaje de depuración para verificar los datos recibidos
        //dd($request->all());

        // Redirigir a la vista index con un mensaje de éxito
        return redirect()->route('venta-motos.index')
                         ->with('success', 'Venta de moto creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventaMotos = VentaMoto::findOrFail($id);
        return view('venta-motos.show', compact('ventaMotos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventaMoto = VentaMoto::findOrFail($id);
        return view('venta_motos.edit', compact('ventaMoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VentaMoto $ventaMoto)
    {    
                // Agrega un mensaje de depuración para verificar los datos recibidos
        //dd($request->all());

        // Valida y actualiza los datos del formulario
        $request->validate([
            // Agrega aquí las reglas de validación para cada campo
        ]);
            $ventaMoto->update($request->all());
        // Encuentra el registro existente de VentaMotos
        //$ventaMotos = VentaMoto::where('id', $id)->firstOrFail();
        //$ventaMotos = VentaMoto::findOrFail($id);

                        // Agrega un mensaje de depuración para verificar los datos recibidos
                        dd($ventaMoto->all());

        // Actualiza los datos del registro
        //$ventaMotos->update($request->all());

        // Redirecciona a la vista index con un mensaje de éxito
        return redirect()->route('venta-motos.index')
                         ->with('success', 'Venta de moto actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Encuentra y elimina el registro de VentaMotos
        VentaMoto::findOrFail($id)->delete();

        // Redirecciona a la vista index con un mensaje de éxito
        return redirect()->route('venta-motos.index')
                         ->with('success', 'Venta de moto eliminada exitosamente.');
    }
}
