@extends('layouts.layout')
    @section('content')
        <a href="{{url('crear')}}">
            <input type="button" class="btn btn-success mb-2" value='Crear'>
        </a>
        <table class='table table-striped table-dark'>
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
                <tr>
                    <td scope='row'>1</td>
                    <td>Wonder</td>
                    <td>Keng Chang Salas</td>
                    <td>01/02/1999</td>
                    <td>
                        <a href="{{url('editar')}}">
                            <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    @stop