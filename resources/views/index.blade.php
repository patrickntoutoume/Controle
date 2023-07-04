@extends('layout.app')

@section('title', 'home')
    
@section('content')

<div class="container"> <br><br>
   <div class="card">
    <h1>Liste des taches</h1>
   </div>
  <table class="table table-bordered">
     <thead>
         <tr>
            <th>id</th>
            <th>nom</th>
            <th>description</th>
            <th>terminee</th>
            <th>creer à : </th>
            <th>action </th>
         </tr>
      
     </thead>
     <tbody>
        @foreach ($tasks as $task)

        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->name}}</td>
            <td>{{$task->description}}</td>
            <button href="{{route('update_ter',$task->id)}}" class="btn btn-primary"> Terminer</button>
            <td> <form action="{{route('update_ter',$task->id)}}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary"> Terminer</button>
            </form></td>
            <td>{{$task->created_at}}</td>
            <td> <a href="{{route('task.edit',$task->id)}}" class="btn btn-primary"> modifier</a>
              <form action="{{ route('task.destroy', $task->id)}}" method="post" >
                @csrf
                @method('delete')
                <button class="btn btn-danger"> supprimer</button>
              </form>
            </td>
        </tr>
            
        @endforeach
     </tbody>
     <table></table>
    
@endsection