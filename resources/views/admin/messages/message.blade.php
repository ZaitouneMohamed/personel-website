@extends('adminlte::page')

@section('content')

<div class="container">

    
    time : {{$message->created_at}} <br>
    name : {{$message->name}} <br>
    email : {{$message->email}} <br>
    phone : {{$message->phone}} <br>
    content : {{$message->content}} <br>

</div>

@endsection
