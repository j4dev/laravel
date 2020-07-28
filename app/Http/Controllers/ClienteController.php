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
        $cliente= cliente::create($request->all());//
        return $cliente;
    }

    public function show(cliente $cliente)
    {
        return $cliente;//
    }

    public function update(Request $request, cliente $cliup)
    {
        $client = $cliup->update($request->all());
        return $client;//hola
    }


    public function destroy(cliente $cliente)
    {
        //hola
    }
}
