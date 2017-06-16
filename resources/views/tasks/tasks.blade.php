@extends('layouts.app')

@section('content')
<div class="container">
     <h1 class="center">Listed Todo's</h1>
 @if (count($tasks) > 0)
 @foreach ($tasks as $task)
  <div class="row">
    <div class="card col-lg-3">
    <div style="width: 20rem;">
      <div class="card-block">
        <h4 class="card-title center"><b>{{ $task->name }}</b></h4>
        <p class="card-text">{{ $task->description }}</p>
        
         <div class="col-lg-6"> 
             <form action="{{url('task/' . $task->id)}}" method="POST">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
          <i class="fa fa-btn fa-trash"></i>Delete
          </button>
         </form>
        </div>
        <div class="col-lg-6">
          <a href="{{ url('edittasks/' . $task->id) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil-square-o"></i>Update</a>
     </div>
     
     </div>
    </div>
    </div>
@endforeach
@endif
</div>

</div>
@endsection