<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class librosModel extends Model
{
    use HasFactory;

    protected $table = 'libros';
    function __construct(){

    }

    //inserta al libro
    function agregarLibros($_libro){
        $libroResult = librosModel::insert($_libro);
        if($libroResult == true){
            return true;
        }
        else{
            return false;
        }
    }

    // regresa la lista de libros
    function listaLibros(){
        $libros = librosModel::select('ID', 'Nombre_del_libro', 'Autor', 'Dia', 'Mes', 'Año')
        ->where('Eliminado', '=', '0')
        ->get();
        return $libros;
    }
}
