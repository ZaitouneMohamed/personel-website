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
    <form method="POST" action="{{route('about.update')}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">about 1 :</label>
            <textarea class="form-control" name="about_1" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $about->about_1 }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">about 2 :</label>
            <textarea class="form-control" name="about_2" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $about->about_2 }}</textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

@endsection
