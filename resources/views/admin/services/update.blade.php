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
    <h1>update skill</h1>
    <form method="POST" action="{{route('services.update',$service->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name :</label>
            <input type="text" class="form-control" name="name" value="{{$service->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$service->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">icon :</label>
            <input type="icon" class="form-control" name="icon" value="{{$service->icon}}">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

@endsection
