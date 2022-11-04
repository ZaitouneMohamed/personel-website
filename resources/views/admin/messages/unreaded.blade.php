@extends('adminlte::page')

@section('content')

<div class="container">

    <h1>unreaded messages | (<b>{{$unreaded_messages->count()}}</b>)</h1> 

    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">phone</th>
                <th scope="col">emai</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unreaded_messages as $message )    
                <tr>
                    <th scope="row">{{$message->name}}</th>
                    <th scope="row">{{$message->phone}}</th>
                    <th scope="row">{{$message->email}}</th>
                    <th scope="row">
                        <a href="{{route('message.show',$message->id)}}" class="btn btn-success">read</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="">
        {{$unreaded_messages->links()}}
    </div>

</div>

@endsection
