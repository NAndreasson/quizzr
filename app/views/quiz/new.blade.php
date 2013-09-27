@extends('layouts.base')

@section('content')
  <div class="new-quiz">
    <h1>New quiz</h1>

    <div class="row">
      {{ Form::open(array('url' => 'quiz', 'method' => 'POST', 'class' => 'col-md-6')) }}

         <div class="form-group">
          {{ Form::label('title', 'Name') }}
          {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Enter name')) }}
         </div>

         <div class="form-group">
          {{ Form::label('desc', 'Description') }}
          {{ Form::textarea('desc', null, array('class' => 'form-control', 'rows' => '3')) }}
         </div>

         <div class="form-group">
          {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
          {{ Form::button('Cancel', array('class' => 'btn btn-danger')) }}
        </div>
    {{ Form::close() }}
    </div>
  </div>
@stop
