<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function servicios($servicio = null) {
        return view('servicios', compact('servicio'));
    }

    public function proyectos($proyecto = null) {
        return view('proyectos', compact('proyecto'));
    }

    public function clientes($cliente = null) {
        return view('clientes', compact('cliente'));
    }

    public function blog($post = null) {
        return view('blog', compact('post'));
    }

    public function contacto() {
        return view('contacto');
    }

    public function contactoSubmit(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        
        return back()->with('success', 'Tu mensaje ha sido enviado correctamente');
    }
}
