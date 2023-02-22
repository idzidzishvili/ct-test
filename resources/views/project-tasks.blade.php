@extends('template')

@section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h2 class="h2">Tasks by projects</h2>   
         
      </div>
   
         <div class="col-12 d-flex">
            {{-- <label class="mx-2">Select project to view tasks</label> --}}
            <select id="projects" >
               @foreach ($projects as $project)
                  <option value="{{$project->id}}">{{$project->name}}</option>
               @endforeach
            </select>         
         </div>


            <div class="table-responsive">
               <table class="table table-sm m-0">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Task name</th>
                        <th>Create date</th>
                     </tr>
                  </thead>
                  <tbody id="tasks">
                     @foreach ($tasks as $i=>$task)
                        <tr>
                           <td>{{$i+1}}</td>
                           <td>{{$task->name}}</td>
                           <td>{{$task->created_at}}</td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
 
@endsection