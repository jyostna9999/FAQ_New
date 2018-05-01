<aside class="sidebar-module  ml-2">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">Recent Questions</h4>

        @foreach($latestQuestions as $question)
        <ol class="list-unstyled mb-0">
            <li>{{$question->body}}</li>

        </ol>
@endforeach


    </div>
</aside>