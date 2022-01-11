@extends('layouts.layout')
    @section('content')
        <form action="{{route('crear.crearLibro')}}" method="POST">
        {{ csrf_field() }}
            <div class='form-row'>
                <div class='form-group col-md-12'>
                    <label for="inputNombre">Nombre del libro</label>
                    <input type="text" class='form-control' id='inputNombre' placeholder='Ej: Harry Potter' name='nombre'>
                </div>
                <div class='form-group col-md-12'>
                    <label for="inputAutor">Autor</label>
                    <input type="text" class='form-control' id='inputAutor' placeholder='Ej: J. K. Rowling' name='autor'>
                </div>
                <div class='form-row'>
                    <div class='form-group col-md-4'>
                        <label for="inputDia">Dia</label>
                        <select id="inputDia" class='form-control' name='dia'>
                            <option selected value=''>Seleccionar...</option>
                            @for($i = 1; $i <= 31; $i++)
                                <option value='{{$i}}'>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for="inputMes">Mes</label>
                        <select id="inputMes" class='form-control' name='mes'>
                            <option selected value=''>Seleccionar...</option>
                            @for($i = 1; $i <= 12; $i++)
                                <option value='{{$i}}'>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for="inputAño">Año</label>
                        <select id="inputAño" class='form-control' name='año'>
                            <option selected value=''>Seleccionar...</option>
                            @for($i = 2022; $i <= 2122; $i++)
                                <option value='{{$i}}'>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    @stop