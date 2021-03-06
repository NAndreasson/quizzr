@extends('layouts.base')

@section('content')
<div class="quiz">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">{{ $quiz->title }}</li>
  </ol>

  <ul class="nav nav-tabs">
    <li class="pull-right"><a href="/quiz/{{ $quiz->id }}/">Summary</a></li>
    <li class="pull-right"><a href="/quiz/{{ $quiz->id }}/questions/">Questions</a></li>
    <li class="active pull-right"><a href="#newquestion">New question</a></li>
    <li class="pull-right"><a href="#answers">Review answers</a></li>
  </ul>

  <div class="row">
      <h1>New question</h1>

      <div class="row">
        {{ Form::open(array('url' => '/quiz/'.$quiz->id.'/questions', 'method' => 'POST', 'class' => 'col-md-6')) }}
         <div class="form-group">
          {{ Form::label('title', 'Name') }}
          {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Enter name')) }}
         </div>

         <div class="form-group">
          {{ Form::label('question', 'Question') }}
          {{ Form::textarea('question', null, array('class' => 'form-control', 'rows' => '3')) }}
         </div>

        <div class="form-group">
          <div class="radio">
            {{ Form::radio('radio1') }}
            {{ Form::text('alternative1', null, array('class' => 'form-control', 'placeholder' => 'Alternative')) }}
          </div>

          <div class="radio">
            {{ Form::radio('radio2') }}
            {{ Form::text('alternative2', null, array('class' => 'form-control', 'placeholder' => 'Alternative')) }}
          </div>
        </div>
         <div class="form-group">
          {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
          {{ Form::button('Cancel', array('class' => 'btn btn-danger')) }}
        </div>
        {{ Form::close() }}
      </div>
    </div>

  </div>

</div>

@stop

