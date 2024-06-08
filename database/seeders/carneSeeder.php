<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class carneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        $Alumno = new Alumno();
        $Alumno->Carne = "0909215575";
        $Alumno->Nombre_Alumno = "Okkan";
        $Alumno->Correo_institucional = "ochavez@hotmail.com";
        $Alumno->Telefono = "45412489";
        $Alumno->save();


    }

}
