@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('updatetask') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        @foreach($tasks as $key)
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ $key->name }}">
                                <input type="hidden" name="id" id="id" class="form-control" value="{{ $key->id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-description" class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-6">
                                <textarea cols="42" row collapses="5"  class="form-control" id="task-description" name="description"value="" >{{ $key->description }}</textarea>
                              
                            </div>
                        </div>
                        @endforeach

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
