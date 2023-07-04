@extends('layout.app')

@section('title', 'home')
    
@section('content')

<div class="container">
<form action="{{route('task.update', $task->id)}}" method="Post">

    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="name" class="form-label">Nom</label>
      <input type="text" class="form-control" name="name" value="{{$task->name}}">
    </div>
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" name="description" value="{{$task->description}}">
    </div>
    @error('description')
    <span>{{$message}}</span>
    @enderror
 
   
    <button type="submit" class="btn btn-primary"> Modifier</button>
  </form>
</div>
    
@endsection