@extends('adminlte::page')

@section('content')

@if (session('success'))
    <div class="alert alert-succes" role="alert">
        {{session('success')}}
    </div>
@endif

<div class="container">

    @if ($skills->count()==0)
        no skill detected <a href="{{route('skills.create')}}" class="btn btn-success">add new skill</a>
    @else
    <br>
    <b>skills</b> ({{$skills->count()}}) | <a href="{{route('skills.create')}}" class="btn btn-success">add new skill</a>
    <br><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">type</th>
                    <th scope="col">percentage</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <td>{{$skill->name}}</td>
                        <td>{{$skill->type}}</td>
                        <td>{{$skill->prct}} %</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('skills.edit',$skill->id)}}" class="btn btn-warning">update</a>
                                <a href="{{route('skills.show',$skill->id)}}" class="btn btn-success">show</a>
                                <form action="{{route('skills.destroy',$skill->id)}}" method="post">
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
