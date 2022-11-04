@extends('adminlte::page')

@section('content')

<div class="container">

    <h1>readed messages | (<b>{{$readed_messages->count()}}</b>)</h1> 
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    <th scope="col">time</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($readed_messages as $message )    
                    <tr>
                        <th scope="row">{{$message->name}}</th>
                        <th scope="row">{{$message->phone}}</th>
                        <th scope="row">{{$message->email}}</th>
                        <th scope="row">{{$message->created_at}}</th>
                        <th scope="row">
                            <a href="{{route('message.show',$message->id)}}" class="btn btn-success">read</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">
            {{$readed_messages->links()}}
        </div>

</div>

@endsection
