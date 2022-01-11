<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\librosModel;

class librosController extends Controller
{
    protected $librosModel;

    function __construct(librosModel $_librosModel){
        $this->librosModel = $_librosModel;
    }

    //regresa a la vista la lista de personas
    function index(){
        return view('libros.index');
    }

    //devuelve la vista para crear
    function crear(){
        return view('libros.crear');
    }

    //Recibe la informacion de la vista de crear, crea y envia al modelo
    function crearLibro(Request $REQUEST){
        if($REQUEST->nombre == '' || $REQUEST->autor == '' || $REQUEST->dia == '' || $REQUEST->mes == '' || $REQUEST->año == ''){
            return back();
        }
        $libro = array(
            'Nombre_del_libro'=>$REQUEST->nombre,
            'Autor'=>$REQUEST->autor,
            'Dia'=>$REQUEST->dia,
            'Mes'=>$REQUEST->mes,
            'Año'=>$REQUEST->año
            
        );

        $agregarLibros = $this->librosModel->agregarLibros($libro);
        if($agregarLibros == true){
            return redirect('index');
        }
        else{
            return back();
        }
    }

    function editar($id){
        return view('libros.editar');
    }
}
