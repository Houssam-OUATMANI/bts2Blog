@extends("layout")

@section("title", "Ajouter une  publication")

@section("content")
    <div class="container">
        <h1 class="text-center">Modifier une  publication</h1>
        <form action="{{route("posts.update", $post)}}" method="post">
            @csrf
            @method("put")
            @include("components.input", ["name" => "title", "label" => "titre", "value" => $post->title])
            @include("components.input", ["name" => "fileUrl", "label" => "Image", "type" => "file"])
            @include("components.input", ["name" => "content", "label" => "contenu", "type" => "textarea", "value" => $post->content])
            <button class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
