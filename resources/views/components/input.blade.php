@php
    $name ??= "";
    $label ??= "";
    $type ??= "text";
    $value ??=  ""
    @endphp


<div class="form-group">
    <label for="{{ $name  }}">{{ $label  }}</label>
    @if($type === "textarea")
        <textarea class="form-control" name="{{$name}}">
            {{$value}}
        </textarea>
    @else
        <input value="{{$value}}" type="{{ $type }}" class= "form-control @error($name) is-invalid @enderror" name="{{$name}}">
    @endif

</div>



@error($name)
        <div class="alert alert-danger">
            {{  $message  }}
        </div>
@enderror
