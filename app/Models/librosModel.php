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
}
