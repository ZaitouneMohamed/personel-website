@extends('adminlte::page')

@section('content')

@if (session('success'))
    <div class="alert alert-succes" role="alert">
        {{session('success')}}
    </div>
@endif

<div class="container">

    @if ($projects->count()==0)
        ra makayn walo <a href="{{route('projects.create')}}" class="btn btn-success">add new project</a>

    @else
    <br>

        <b>projects</b> ({{$projects->count()}})  @if ($projects->count()<3)| <a href="{{route('projects.create')}}" class="btn btn-success">add new project</a>
    @endif
    <br><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">picture</th>
                    <th scope="col">technologies</th>
                    <th scope="col">link</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->name}}</td>
                        <td><img src="/projects/{{$project->picture}}" alt="" width="50px" height="50px"></td>
                        <td>{{$project->technologies}}</td>
                        <td>{{$project->link}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('projects.edit',$project->id)}}" class="btn btn-warning">update</a>
                                <a href="{{route('projects.show',$project->id)}}" class="btn btn-success">show</a>
                                <form action="{{route('projects.destroy',$project->id)}}" method="post">
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
