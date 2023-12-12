@extends("layout")

@section("title", "{{$post->title}}")

@section("content")


        <div class="card">
            <h4>{{$post->title}}</h4>
            <p>{{$post->content}}</p>

            <div class="card-footer">
                <a href="{{route("posts.edit", $post)}}">Modifier</a>
                <form action="{{route("posts.destroy", $post)}}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
@endsection
