@extends('adminlte::page')

@section('content')

<div class="container">
    @if (session('success'))
        <div class="alert alert-succes" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="row my-5 d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-header">
                    <h1></h1>
                    <h5 class="card-title">{{auth()->user()->name}}</h5>
                    <p class="card-text">{{auth()->user()->email}}</p>
                    <a href="{{route('settings.edit',auth()->user()->id)}}" class="btn btn-primary">update</a><br>
                </div>
            </div>
        </div>
    </div>
    <h1>admin list</h1>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>
                        <form action="{{route('settings.destroy',$admin->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
