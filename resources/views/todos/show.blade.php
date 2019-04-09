@extends('layouts.app')
@section('title','Home Page')
@section('content')

     <div class="card mb-4 shadow-sm">
       <div class="card-header">
         <h4 class="my-0 font-weight-normal">{{$todo->title}}</h4>
       </div>
       <div class="card-body">
         <p>{{$todo->body}}</p>
         <span class="label label-danger">
           {{$todo->due}}
         </span>

       </div>

        <a href="{{url('/todo')}}" class="btn btn-info">Go Back</a>
        <a href="{{url('/todo/'.$todo->id.'/edit')}}"
          class="btn btn-primary">
            Edit
        </a>
        {!! Form::open(['method'=>'DELETE', 'action'=>['TodosController@destroy', $todo->id]]) !!}
              {{csrf_field()}}
              
              <div class="form-group">

                {{Form::submit('delete',['class'=>'btn btn-danger'])}}

              </div>
          {!! Form::close() !!}

     </div>


@endsection
