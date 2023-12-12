@extends("layout")

@section("title", "Listes des publications")

@section("content")

    @foreach($posts as $post)
        <div class="card">
            <h4>{{$post->title}}</h4>
            <p>{{$post->content}}</p>

            <a href="{{route("posts.show", $post)}}">Lire la suite</a>
        </div>

    @endforeach
@endsection
