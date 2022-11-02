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
    <form method="POST" action="{{route('links.update')}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">github link :</label>
            <input type="text" class="form-control" name="github" value="{{ $links->github_link }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">linkedIn link :</label>
            <input type="text" class="form-control" name="linkedin" value="{{ $links->linkedIn_link }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gmail :</label>
            <input type="text" class="form-control" name="gmail" value="{{ $links->gmail }}">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

@endsection
