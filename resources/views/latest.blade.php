@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card" style="width: 35rem;">
            <div class="card-header">
                Recently added Questions
            </div>

            @foreach($latestQuestions as $question)

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$question->body}}
                            <a class="btn btn-primary float-right" href="{{ route('question.show', ['id' => $question->id]) }}">Answer Question </a>
                        </li>

                    </ul>

            @endforeach


        </div>
    </div>
@endsection