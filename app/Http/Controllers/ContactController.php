<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'telefono' => 'required|string',
            'asunto' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        Contacto::create([
            'user_id' => Auth::id(),
            'nombre' => Auth::user()->name,
            'correo' => Auth::user()->email,
            'telefono' => $request->telefono,
            'asunto' => $request->asunto,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('contacto.create')->with('success', 'Mensaje enviado con éxito!');
    }
}
