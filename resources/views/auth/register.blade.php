
@extends("layout")
@section("title", "Register page")

@section("content")



    <h1 class="text-center my-5 ">Register page</h1>
    <form method="POST" class="w-50 mx-auto mt-5" >
        @csrf
        @include("components.input", ["name" => "firstname", "label" => "firstname"])
        @include("components.input", ["name" => "lastname", "label" => "lastname"])
        @include("components.input", ["name" => "email", "label" => "email", "type" => "email"])
        @include("components.input", ["name" => "password", "label" => "password", "type" => "password"])
        <button class="btn btn-primary" type="submit">Register</button>
    </form>
@endsection
