@extends('adminlte::page')

@section('content')

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>add new skill</h1>
    <form method="POST" action="{{route('skills.store')}}">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name :</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">type :</label>
            <select class="form-select" name="type" aria-label="Default select example">
                <option value="Front-End">Front end</option>
                <option value="Back-End">Back end</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">percentage :</label>
            <input type="number" class="form-control" name="prct">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

@endsection
