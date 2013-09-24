@extends('layouts.base')

@section('content')
<div class="quiz">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">{{ $quiz->title}}</li>
  </ol>

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#summary">Summary</a></li>
    <li class="pull-right"><a href="#questions">Questions</a></li>
    <li class="pull-right"><a href="#answers">Review answers</a></li>
  </ul>

<div class="tab-content">
    <div class="tab-pane active" id="summary">.

      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info">
            This quiz is still unpublished
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-7">
          <h1>{{ $quiz->title}}</h1>
          <p>{{ $quiz->desc }}</p>
        </div>

        <div class="col-md-4 col-md-offset-1">
          <h6>Questions</h6>
          <ol>
          	@foreach ($quiz->questions as $question)
            	<li>{{ $question->title }}</li>
            @endforeach
          </ol>
       </div>

      </div>

    </div>

    <div class="tab-pane" id="answers">
      <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, incidunt, eos recusandae provident id mollitia sit eveniet est architecto assumenda asperiores quos sequi consectetur accusantium quo? Neque adipisci voluptates odit!</div>
      <div>Molestias, impedit, ipsum, distinctio dicta id inventore amet quaerat sit molestiae quae aliquam dolores voluptatibus possimus ab necessitatibus laudantium ipsa architecto ea sed voluptate magni quod laborum magnam suscipit provident.</div>
    </div>
  </div>

</div>

@stop
