@extends('layouts.app')

@section('header')
    <x-shared.header-page title="Nueva categoria" path="categories.index" button="Volver"
        description="Crea una nueva categoria" />
@endsection

@section('contenido')
    <form enctype="multipart/form-data" method="POST" action="{{ route('categories.store') }}" class="max-w-md mx-auto space-y-4">
        @csrf
        <div class="form-control">
            <label for="name">Nombre: </label>
            <input type="text" name="name" placeholder="Agrega un nombre a la categoria">
        </div>

        <div class="form-control">
            <label for="image">Nombre: </label>
            <input type="file" name="image">
        </div>

        <button class="btn-primary w-full">Guardar</button>

    </form>
@endsection