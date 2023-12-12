@extends("layout")

@section("title", "Ajouter une  publication")

@section("content")
    <div class="container">
        <h1 class="text-center">Ajouter une  publication</h1>
        <form action="" method="post">
            @csrf
            @include("components.input", ["name" => "title", "label" => "titre"])
            @include("components.input", ["name" => "fileUrl", "label" => "Image", "type" => "file"])
            @include("components.input", ["name" => "content", "label" => "contenu", "type" => "textarea"])
            <button class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
