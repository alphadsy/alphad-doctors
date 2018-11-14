@foreach($articles as $article)
    <div class="bg-white mb-3 p-3">
        <div class="row">
            <div class="col-md-4">
                <div class="rounded mb-4">
                    <img class="img-fluid" src="/storage/{{$article->cover}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="mb-3"><strong>{{$article->title}}</strong></h3>
                <p>{{str_limit($article->body, 250)}}...</p>
                <p><a href="{{route('doctors.show', ['doctor' => $article->doctor])}}"><strong>{{$article->doctor->user->name}}</strong></a></p>
                <a class="btn btn-primary float-right" href="{{ route('articles.show', ['article' => $article]) }}">more</a>
            </div>
        </div>
    </div>
@endforeach
