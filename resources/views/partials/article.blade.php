<img src="/storage/{{$article->cover}}" alt="" class="img-fluid">
<div class="mt-4">
    <h2>{{$article->title}}</h2>
    <p>{{$article->created_at->diffforhumans()}}</p>
    <p>{{$article->body}}</p>
</div>