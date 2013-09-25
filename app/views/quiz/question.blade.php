@extends('layouts.base')

@section('content')
<div class="quiz">

  <div class="row">
    <div class="col-md-12">

      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/quiz/{{ $question->quiz->id }}">{{ $question->quiz->title}}</a></li>
        <li class="active">{{ $question->title}}</li>
      </ol>

    </div>
  </div>


  <h2>{{ $question->title }}</h2>

  <p>{{ $question->question }}</p>

</div>

@stop

