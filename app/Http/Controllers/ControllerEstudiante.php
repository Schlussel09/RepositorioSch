<?php

namespace App\Http\Controllers;

use App\Mail\enviarCorreo;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class ControllerEstudiante extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $estudiante = new Estudiante;
    $estudiante->nombre = $request->input('nombre');
    $estudiante->carnet = $request->input('carnet');
    $estudiante->edad = $request->input('edad');
    $estudiante->save();
    $id=$estudiante->id;
    
    log($estudiante->id);

    $envCorreo = new ControllerEstudiante();
    $envCorreo->correo();

    /*$es = Estudiante::findOrFail($id);
    $pdf = Pdf::loadView('estudiante.pdf', compact('es'));

    Mail::send('estudiante.correo',compact('es'), function ($mail) use ($pdf) {
        $mail->to('keyredondocastro@gmail.com');
        $mail->subject('Lista de Estudiantes');
        $mail->SMTPAutoTLS = false;
        $mail->attachData($pdf->output(), 'estudiante.pdf');
    });*/

    // Agregar un mensaje de sesión flash
    session()->flash('success', 'Estudiante guardado correctamente.');

    // Redirigir al usuario a la vista de edición del estudiante recién creado
    return redirect()->route('estudiante.edit', $estudiante->id);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
    
       return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->nombre=$request->input('nombre');
        $estudiante->carnet=$request->input('carnet');
        $estudiante->edad=$request->input('edad');
        $estudiante->save();
        return redirect()->route('estudiante.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $estudiante = Estudiante::findOrFail($id);
       $estudiante->delete();
       return redirect()->route('estudiante.index');
    }

    public function pdf(){

        $estudiantes = Estudiante::all();
        $pdf = Pdf::loadView('estudiante.pdf', compact('estudiantes'));
        return $pdf->stream();
    }

    public function correo(){

        $estudiantes = Estudiante::orderBy('id', 'desc')->limit(1)->get();
        $pdf = Pdf::loadView('estudiante.pdf', compact('estudiantes'));

        Mail::send('estudiante.correo',compact('estudiantes'), function ($mail) use ($pdf) {
            $mail->to('keyredondocastro@gmail.com');
            $mail->subject('Lista de Estudiantes');
            $mail->SMTPAutoTLS = false;
            $mail->attachData($pdf->output(), 'estudiante.pdf');
        });
        return redirect('/');
    } 

}
