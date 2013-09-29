@extends('layouts.base')

@section('content')
<div class="quiz">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">{{ $quiz->title}}</li>
  </ol>

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#summary" data-toggle="tab">Summary</a></li>
    <li class="pull-right"><a href="#questions">Questions</a></li>
    <li class="pull-right"><a href="#newquestion" data-toggle="tab">New question</a></li>
    <li class="pull-right"><a href="#answers">Review answers</a></li>
  </ul>

<div class="tab-content">
    <div class="tab-pane active" id="summary">.

    @if ($quiz->status === 'unpublished')
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info">
            This quiz is still unpublished
          </div>
        </div>
      </div>
    @endif

      <div class="row">

        <div class="col-md-7">
          <h1>{{ $quiz->title}}</h1>
          <p>{{ $quiz->desc }}</p>
        </div>

        <div class="col-md-4 col-md-offset-1">
          <h6>Questions</h6>
          <ol>
          	@foreach ($quiz->questions as $question)
              <li><a href="/quiz/{{ $quiz->id }}/questions/{{ $question->id }}">{{ $question->title }}</a></li>
            @endforeach
          </ol>
       </div>

      </div>

      <div class="row" style="margin-top: 30px">
        <div class="col-md-7">
          <button class="btn">Publish</button>
        </div>
      </div>

    </div>

    <div class="tab-pane" id="newquestion">
      <h1>New questiion</h1>

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

    <div class="tab-pane" id="answers">
      <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, incidunt, eos recusandae provident id mollitia sit eveniet est architecto assumenda asperiores quos sequi consectetur accusantium quo? Neque adipisci voluptates odit!</div>
      <div>Molestias, impedit, ipsum, distinctio dicta id inventore amet quaerat sit molestiae quae aliquam dolores voluptatibus possimus ab necessitatibus laudantium ipsa architecto ea sed voluptate magni quod laborum magnam suscipit provident.</div>
    </div>
  </div>

</div>

@stop

