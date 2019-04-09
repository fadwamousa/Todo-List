@extends('layouts.app')
@section('title','Create Page')
@section('content')

     <div class="card mb-4 shadow-sm">

             {!!Form::open(['method'=>'POST','action'=>'TodosController@store','files'=>true])!!}
                    {{csrf_field()}}
                    <div class="form-group">
                      {{Form::label('title')}}
                      {{Form::text('title',null,['class'=>'form-control','placeholder'=>'Title'])}}

                    </div>

                    <div class="form-group">
                      {{Form::label('content')}}
                      {{Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Content'])}}

                    </div>

                    <div class="form-group">
                      {{Form::label('Due')}}
                      {{Form::text('due',null,['class'=>'form-control'])}}

                    </div>
                    <div class="form-group">

                      {{Form::submit('submit',['class'=>'btn btn-primary'])}}


                    </div>


             {!!Form::close()!!}

     </div>


@endsection
