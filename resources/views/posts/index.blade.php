@extends("layout")

@section("title", "Listes des publications")

@section("content")
    {{ dd($posts) }}
@endsection
