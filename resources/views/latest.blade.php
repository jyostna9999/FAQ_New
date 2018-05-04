

                <div class="card">
                    <div class="card-header">
                   <b> Recently added Questions</b>
                    </div>
                </div>


                @foreach($latestQuestions as $question)

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item"> <a href="{{ route('question.show', ['id' => $question->id]) }}">{{$question->body}}</a>
                        </li>



                @endforeach

                        <li class="list-group-item"><a class= "btn btn-primary" href="{{route('all.questions')}}">More Questions..</a></li>
                    </ul>


