@extends('layouts.app')
@section('title','Home Page')
@section('content')

@if(count($todos) > 0)
@foreach($todos as $todo)


     <div class="card mb-4 shadow-sm">
       <div class="card-header">
         <h4 class="my-0 font-weight-normal"><a href="{{url('/todo/'.$todo->id)}}">{{$todo->title}}</a></h4>
       </div>
       <div class="card-body">

         <span class="label label-danger">
           {{$todo->due}}
         </span>

       </div>
     </div>

@endforeach
@endif

@endsection
