@extends('layouts.base')

@section('content')
<div class="quiz">
  <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">{{ $quiz->title}}</li>
  </ol>

  <ul class="nav nav-tabs">
    <li class="active pull-right"><a href="#summary">Summary</a></li>
    <li class="pull-right"><a href="/quiz/{{ $quiz->id }}/questions/">Questions</a></li>
    <li class="pull-right"><a href="/quiz/{{ $quiz->id }}/questions/create">New question</a></li>
    <li class="pull-right"><a href="#answers">Review answers</a></li>
  </ul>

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


@stop

