
@extends('template')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h2 class="h2">Tasks</h2>

   <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="{{route('tasks.create')}}" class="btn btn-sm btn-outline-success">Add task</a>
      </div>      
    </div>
</div>
<div class="table-responsive">
   <table id="sort" class="table-hover table table-striped table-sm">
      <thead>
         <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Task ID</th>
            <th scope="col">Project name</th>
            <th scope="col">Task</th>
            <th scope="col">Create date/time</th>
            <th scope="col">Actions</th>
       </tr>
      </thead>
      <tbody>
            @foreach ($tasks as $i=>$task)
               <tr>
                  {{-- <td class="col-1">
                     {{$i+1}}                     
                  </td> --}}
                  <td class="col-1">
                     {{$task->id}}
                     <input type="hidden" name="priority[]" value="{{$task->id}}">
                  </td>
                  <td class="col-3">{{$task->project->name}}</td>
                  <td class="col-3">{{$task->name}}</td>
                  <td class="col-3">{{$task->created_at}}</td>
                  <td class="col-3 ">
                     <div class="d-flex">
                     <a href="{{route('tasks.edit', ['task' => $task->id])}}" class="btn btn-xsm btn-outline-primary me-2">Edit</a>   
                     <form action="{{route('tasks.destroy', ['task' => $task->id])}}" method="post" class="mb-0">
                        @csrf @method('delete')
                        <button class="btn btn-xsm btn-outline-danger">Delete</button>   
                     </form>
                  </div>
                  </td>
               </tr>
            @endforeach
      </tbody>
   </table>
</div>

@endsection