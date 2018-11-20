<div class="card">
    <div class="bg-light p-3">
        <h4>patient information</h4>
        <p>{{$question->gender}} / {{$question->birth_year}}</p>
        <p>patient_story medical story:{{$question->patient_story}}</p>
    </div>

    <div class="card-body">
        <h5 class="text-secondary">{{$question->specialization}}</h5>
        <h3 class="mb-3"><strong>{{$question->title}}</strong></h3>
        <p>{{$question->created_at->diffforhumans()}}</p>
        <p>{{$question->body}}</p>
    </div>
</div>


@foreach($question->answers as $answer)
    @if($answer->isDoctor)
        <div class="card bg-light rounded p-2 mt-1">
            <h5><a  href="{{ route('doctors.show', ['doctor' => $answer->user->doctor]) }}">dr. {{$answer->user->name}}</a></h5>
            <p>{{$answer->body}}</p>
        </div>
    @else
        <h5>patient :</h5>
        <p>{{$answer->body}}</p>
    @endif
@endforeach

@auth()
    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('answers.store', ['question' => $question]) }}" method="POST">
                @csrf
                <label for="">reply</label>
                <textarea type="text" name="body" id="" class="form-control" cols="5"></textarea>
                <button type="submit" class="btn btn-primary mt-3">answer</button>
            </form>
        </div>
    </div>
@else
<p class="my-4">login to answer...</p>
@endauth
