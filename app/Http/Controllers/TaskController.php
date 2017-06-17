<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use App\User;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\Input;
use Auth;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function tasks(Request $request)
    {
        return view('tasks.tasks', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/listtasks');
    }


    public function edit($id)
    {
      $task = Task::where('id','=', $id)->get();

      return view('tasks/edit')->with('tasks',$task);
    }


    public function update(Request $request)
    {
       $this->validate($request, [
           'name' => 'required|max:255',
           'description' => 'required|max:255',
        ]);
    
        $task_obj = new Task();
        $task_obj->id = $request->input('id');
        $task = Task::find($task_obj->id);
        $task->update($request->all());


        return redirect('/listtasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/listtasks');
    }

    public function editsettings(Request $request)
    {
      $id = Auth::user()->id;
      $user = User::where('id','=', $id)->get();

      return view('auth/profile')->with('users',$user);
    }


    public function updatesettings(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());

        return redirect('/setting');

        //return \Redirect::route('auth.profile', [$user->id])->with('message', 'User has been updated!');

}

}
