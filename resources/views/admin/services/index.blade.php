@extends('adminlte::page')

@section('content')

@if (session('success'))
    <div class="alert alert-succes" role="alert">
        {{session('success')}}
    </div>
@endif

<div class="container">

    @if ($services->count()==0)
        no service detected <a href="{{route('services.create')}}" class="btn btn-success">add new service</a>
    @else
    <br>
    <b>services</b> ({{$services->count()}}) | <a href="{{route('services.create')}}" class="btn btn-success">add new service</a>
    <br><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">type</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>{{$service->description}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('services.edit',$service->id)}}" class="btn btn-warning">update</a>
                                <a href="{{route('services.show',$service->id)}}" class="btn btn-success">show</a>
                                <form action="{{route('services.destroy',$service->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>
@endsection
