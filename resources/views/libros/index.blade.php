@extends('layouts.layout')
    @section('content')
        <a href="{{url('crear')}}">
            <input type="button" class="btn btn-success mb-2" value='Crear'>
        </a>
        <table class='table' id='tabla_libros'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Nombre del libro</th>
                    <th scope='col'>Autor</th>
                    <th scope='col'>Fecha de publicacion</th>
                    <th scope='col'>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lista_Libros as $libro)
                    <tr>
                        <td>{{$libro->ID}}</td>
                        <td>{{$libro->Nombre_del_libro}}</td>
                        <td>{{$libro->Autor}}</td>
                        <td>{{$libro->Dia.'/'.$libro->Mes.'/'.$libro->Año}}</td>
                        <td>
                            <a href="{{url('editar', $libro)}}">
                                <input type="button" class="btn btn-warning" value='Editar'>
                            </a>
                            <a href="{{url('borrar',$libro)}}">
                                <input type="button" class="btn btn-danger" value='Borrar'>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            $(document).ready(function(){
                $('#tabla_libros').DataTable();
            });
        </script>
    @stop