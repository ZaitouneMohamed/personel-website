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
    {{-- here is your <a href="{{$cv->cv}}" target="blank">cv</a> --}}
    <h1>add new cv</h1>
    <form method="POST" action="{{route('cv.update')}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">navbar logo :</label>
            <input class="form-control" type="file" id="formFileMultiple" name="cv" >
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

@endsection
