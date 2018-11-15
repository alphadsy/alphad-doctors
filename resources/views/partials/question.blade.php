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
