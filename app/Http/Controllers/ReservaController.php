<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{

 
    public function __construct()
    {
        $this->middleware('auth');
    }
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role = Auth::user()->role;
        $user = Auth::user();

        if($role == 'admin'){

            $reservas = Reserva::all();
            return view('reserva.index')->with('reservas',$reservas);
            
        }

        else{

            $reservas = $user->reservas;
            return view('reserva.index')->with('reservas',$reservas);

        }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reserva.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{

    // Crear una nueva instancia de Reserva con los datos del formulario
    $reservas = new Reserva();
    $reservas->nombre = $request->get('nombre');
    $reservas->fecha = $request->get('fecha');
    $reservas->hora = $request->get('hora');
    $reservas->numero_personas = $request->get('numero_personas');
    $reservas->consola = $request->get('consola');
    $reservas->mensaje = $request->get('mensaje');
    $reservas->user_id = Auth::id();

    // Guardar la reserva en la base de datos
    $reservas->save();

    // Redireccionar a la página de índice de reservas
    return redirect('/reservas');
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
        $reserva = Reserva::find($id);
        return view('reserva.edit')->with('reserva', $reserva);

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
        $reserva = Reserva::find($id);

        // Actualizar los datos de la reserva con los datos del formulario
        $reserva->nombre = $request->get('nombre');
        $reserva->fecha = $request->get('fecha');
        $reserva->hora = $request->get('hora');
        $reserva->numero_personas = $request->get('numero_personas');
        $reserva->consola = $request->get('consola');
        $reserva->mensaje = $request->get('mensaje');

        // Guardar los cambios en la base de datos
        $reserva->save();

        // Redireccionar a la página de índice de reservas
        return redirect()->route('reservas.index');
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
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect('/reservas');
    }
}
