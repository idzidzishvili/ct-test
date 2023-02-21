<div class="form-group row mb-3">
   <label for="name" class="col-sm-2 col-form-label">Project name</label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Project name" value="{{$project->name}}">
      <small class="text-danger">{{ $errors->first('name') }}</small>
   </div>
</div>

