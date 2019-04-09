@extends('layouts.app')
@section('title','Create Page')
@section('content')

     <div class="card mb-4 shadow-sm">

              {!! Form::open(['method'=>'PATCH', 'action'=>['TodosController@update', $todo->id]]) !!}
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                      {{Form::label('title')}}
                      {{Form::text('title',$todo->title,['class'=>'form-control','placeholder'=>'Title'])}}

                    </div>

                    <div class="form-group">
                      {{Form::label('content')}}
                      {{Form::textarea('body',$todo->body,['class'=>'form-control','placeholder'=>'Content'])}}

                    </div>

                    <div class="form-group">
                      {{Form::label('Due')}}
                      {{Form::text('due',$todo->due,['class'=>'form-control'])}}

                    </div>
                    <div class="form-group">

                      {{Form::submit('submit',['class'=>'btn btn-primary'])}}


                    </div>


             {!!Form::close()!!}

     </div>


@endsection
