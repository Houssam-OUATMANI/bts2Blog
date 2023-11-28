
@extends("layout")
@section("title", "Login page")

@section("content")

    @if(session("success"))
        <div class="alert alert-info">
            {{  session("success")}}
        </div>
    @endif

    <h1 class="text-center my-5 ">Login page</h1>
    <form method="POST" class="w-50 mx-auto mt-5" >
        @csrf
        @include("components.input", ["name" => "email", "label" => "email", "type" => "email"])
        @include("components.input", ["name" => "password", "label" => "password", "type" => "password"])
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
@endsection
