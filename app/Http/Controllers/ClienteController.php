<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function index()
    {
    $clientes = cliente::all();
      return $clientes;  //
    }


    public function store(Request $request)
    {
        $clientes = cliente::created($request->all());//
        return $clientes;
    }

    public function show(cliente $cliente)
    {
        return $cliente;//
    }

    public function update(Request $request, cliente $cliente)
    {
        $cliente = cliente::updated($request->all());
        return $cliente;//hola
    }


    public function destroy(cliente $cliente)
    {
        //hola
    }
}
