@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Answer</div>
                    <div class="card-body">
                        {{$answer->body}}
                    </div>
                    <div class="card-footer">
                        {{ Form::open(['method'  => 'DELETE','onsubmit'=> "return confirm('Do you really want to delete?');",'route' => ['answer.destroy', $question, $answer->id]])}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}



                            <a class="btn btn-primary float-right" href="{{ route('answer.edit',['question_id'=> $question, 'answer_id'=> $answer->id, ])}}">
                                Edit Answer
                            </a>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection