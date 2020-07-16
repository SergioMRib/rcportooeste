@extends('layouts.app')

@section('body')

    @component('components.contacts')

    @endcomponent

    <h2>Contactos do clube</h2>
    <ul>
        <li>Telefone</li>
        <li>email</li>
        <li>local de reunião</li>
        <li>local de jantar</li>
    </ul>
@endsection
