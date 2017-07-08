@extends('layouts.master')

@section('title')
Perfil del {{$usr->name}}
@endsection

@section('content')
<p>Email: {{$usr->email}}</p>
<p>Contraseña: {{$usr->password}}</p>
@endsection