@extends('layouts.app')

@section('titulo')
    Blog-IGRAM
@endsection

@section('contenido')

    <x-listar-post :posts="$posts"/>

@endsection
