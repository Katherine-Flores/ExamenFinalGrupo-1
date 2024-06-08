<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlumno;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function __invoke()
    {
        $alumnos = Alumno::paginate(5);
        return view('layouts.TablaRegistro', compact('alumnos'));
    }

    public function index(Request $request)
    {
        $query = Alumno::query();

        if ($request->filled('busqueda')) {
            $search = $request->busqueda;
            $query->where(function ($q) use ($search) {
                $q->where('Carne', 'like', "%{$search}%")
                    ->orWhere('Nombre_Alumno', 'like', "%{$search}%");
            });
        }

        $alumnos = $query->paginate(5);
        return view('layouts.TablaRegistro', compact('alumnos'));
    }

    public function create(CreateAlumno $request)
    {
        $alumno = new Alumno();

        $alumno->Carne = $request->Carne;
        $alumno->Nombre_Alumno = $request->Nombre_Alumno;
        $alumno->Correo_institucional = $request->Correo_institucional;
        $alumno->Telefono = $request->Telefono;

        $alumno->save();

        if ($alumno->save() == true) {
            return back()->with("correcto", "Alumno registrado correctamente");
        } else {
            return back()->with("incorrecto", "Error al registrar alumno");
        }
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->Carne = $request->Carne;
        $alumno->Nombre_Alumno = $request->Nombre_Alumno;
        $alumno->Correo_institucional = $request->Correo_institucional;
        $alumno->Telefono = $request->Telefono;
        $alumno->save();

        return $alumno->save()
            ? back()->with("correcto", "Alumno modificado correctamente")
            : back()->with("incorrecto", "Error al modificar alumno");
    }

    public function delete($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return $alumno->delete()
            ? back()->with("incorrecto", "Error al eliminar alumno")
            : back()->with("correcto", "Alumno eliminado correctamente");
    }
}
