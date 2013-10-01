@extends('layouts.base')

@section('content')
<ul class="list-unstyled quizzes">

  @foreach ($quizzes as $quiz)
    <li class="quiz">
      <header>
        <h2>
          <a href="/quiz/{{ $quiz->id }}">{{ $quiz->title }}</a>
        </h2>
      </header>

      <section>
        <p class="desc">{{ $quiz->desc }}</p>
      </section>

      <footer>
        <ul class="list-inline quiz-stats">
          <li class="quiz-stat">
            <span class="label label-success">Open</span>
          </li>
          <li class="quiz-stat">
            <span class="label label-default">{{ count($quiz->questions) }} questions</span>
          </li>
          <li class="quiz-stat">
            <span class="label label-info">12 answers</span>
          </li>
        </ul>
      </footer>
    </li>
  @endforeach

</ul>
@stop