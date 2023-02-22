
@extends('template')

@section('content')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="h2">Projects</h2>

      <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group me-2">
         <a href="{{route('projects.create')}}" class="btn btn-sm btn-outline-success">Add project</a>
         </div>      
      </div>
   </div>
   <div class="table-responsive">
      <table class="table table-striped table-sm">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Project name</th>
               <th scope="col">Date created</th>
               <th scope="col">Actions</th>
         </tr>
         </thead>
      <tbody>
            @foreach ($projects as $i => $project)
               <tr>
                  <td>{{$i+1}}</td>
                  <td>{{$project->name}}</td>
                  <td>{{$project->created_at}}</td>
                  <td class="col-3 ">
                     <div class="d-flex">
                        <a href="{{route('projects.edit', ['project' => $project->id])}}" class="btn btn-xsm btn-outline-primary me-2">Edit</a>   
                        <button type="submit" class="btn btn-xsm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-id="{{$project->id}}" data-action="projects">Delete</button>   
                     </div>
                  </td>
               </tr>             
            @endforeach
         </tbody>
      </table>
   </div>

   @include('partials.confirm_delete')

@endsection