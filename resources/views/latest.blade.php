
    <div class="container">
        <div class="row justify-content-lg-end">
            <div class="col-md-4">
                <div class="card">
                    Recently added Questions
                </div>

                @foreach($latestQuestions as $question)

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item"> <a href="{{ route('question.show', ['id' => $question->id]) }}">{{$question->body}}</a>
                        </li>



                @endforeach

                        <li class="list-group-item"><a class= "btn btn-primary" href="#">More Questions..</a></li>
                    </ul>
            </div>
        </div>
    </div>
