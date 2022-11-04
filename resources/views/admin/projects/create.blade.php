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
    <h1>add new project</h1>
    <form method="POST" action="{{route('projects.store')}}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name :</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">picture :</label>
            <input class="form-control" type="file" id="formFileMultiple" name="picture" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">technologies :</label>
            <input type="text" class="form-control" name="technologies">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">link :</label>
            <input type="text" class="form-control" name="link">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

@endsection
