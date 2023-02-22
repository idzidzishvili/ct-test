<div class="form-group row">
   <label for="tasks" class="col-sm-2 col-form-label">Task</label>
   <div class="col-sm-10">
      <select class="form-control multiselect w-100" id="project_id" name="project_id" >
         @foreach ($projects as $project)
            <option value="{{$project->id}}" {{ $project->id == $task->project_id ? 'selected' : '' }}>{{$project->name}}</option>
         @endforeach
      </select>
      <small class="text-danger">{{ $errors->first('project_id') }}</small>
   </div>
</div>

<div class="form-group row">
   <label for="name" class="col-sm-2 col-form-label">Task name</label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
      <small class="text-danger">{{ $errors->first('name') }}</small>
   </div>
</div>