@foreach($questions as $question)
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="text-secondary"><i class="fa fa-user-md "></i> {{$question->specialization}}</h5>
                <h3 class="mb-3"><strong>{{$question->title}}</strong></h3>
                <p>{{$question->body}}</p>
                <span>{{$question->created_at->diffforhumans()}}</span>
                <a class="btn btn-outline-secondary float-right" href="{{ route('questions.show', ['question' => $question->id ]) }}">read more</a>
            </div>
        </div>
    </div>
@endforeach
