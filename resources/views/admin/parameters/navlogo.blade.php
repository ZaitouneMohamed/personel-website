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
    {{-- <img src="/profile/{{$picture->nav_logo}}" alt="" width="100px" height="100px"> --}}
    <h1>add new logo</h1>
    <form method="POST" action="{{route('navlogo.update')}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">navbar logo :</label>
            <input class="form-control" type="file" id="formFileMultiple" name="image" >
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

@endsection
