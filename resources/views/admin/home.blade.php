@extends('adminlte::page')

@section('content')

@if (session('success'))
    <div class="alert alert-succes" role="alert">
        {{session('success')}}
    </div>
@endif

admin home

@endsection
