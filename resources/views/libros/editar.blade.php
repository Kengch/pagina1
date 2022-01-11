@extends('layouts.layout')
    @section('content')
        <h1>Editar</h1>

        <div>
        <form action="{{route('editar')}}" method="POST">
        {{ csrf_field() }}
            <div class='form-row'>
                <div class='form-group col-md-12'>
                    <label for="inputNombre">Nombre del libro</label>
                    <input type="text" class='form-control' id='inputNombre' placeholder='Ej: Harry Potter'>
                </div>
                <div class='form-group col-md-12'>
                    <label for="inputAutor">Autor</label>
                    <input type="text" class='form-control' id='inputAutor' placeholder='Ej: J. K. Rowling'>
                </div>
                <div class='form-row'>
                    <div class='form-group col-md-4'>
                        <label for="inputDia">Dia</label>
                        <select id="inputDia" class='form-control'>
                            <option selected>Seleccionar...</option>
                            <option>1</option>
                        </select>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for="inputMes">Mes</label>
                        <select id="inputMes" class='form-control'>
                            <option selected>Seleccionar...</option>
                            <option>1</option>
                        </select>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for="inputAño">Año</label>
                        <select id="inputAño" class='form-control'>
                            <option selected>Seleccionar...</option>
                            <option>1</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
    @stop