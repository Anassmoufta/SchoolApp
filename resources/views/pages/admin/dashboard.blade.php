@extends('layouts.master')
@section('page_title', 'Mon Tableau de Bord')


@section('content')
    <h2>BIENVENUE {{ Auth::user()->name }}. Voici votre TABLEAU DE BORD</h2>
@endsection
