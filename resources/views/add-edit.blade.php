

@extends('template')

@section('content')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="h2">{{$action}} {{$sing}}</h2>
   </div>


   <div class="row">
      <div class="col-12">
         <form class="form-horizontal" method="POST" action="{{
            $action=='Edit'
            ? route($resource.'.update', [$sing => $id]) 
            : route($resource.'.store')}}">
            @csrf
            @if($action=='Edit') 
               @method('patch') 
            @endif
            @include('partials.'.$resource)

            <div class="form-group row pt-3">
               <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-success px-4">Save</button>
               </div>
            </div>
         </form>
      </div>
   </div>
@endsection