@extends('layouts.base')

@section('content')
  <div class="new-quiz">
    <h1>New quiz</h1>

    <div class="row">
      <form role="form" class="col-md-6">

         <div class="form-group">
           <label for="quizName">Name</label>
           <input type="email" class="form-control" id="quizName" placeholder="Enter name">
         </div>

         <div class="form-group">
           <label for="quizDesc">Description</label>
          <textarea class="form-control" id="quizDesc" rows="3"></textarea>
         </div>

         <div class="form-group">
            <button type="submit" class="btn btn-success">Create</button>
            <button class="btn btn-danger">Cancel</button>
        </div>
     </form>
    </div>
  </div>
@stop
