@php
    $name ??= "";
    $label ??= "";
    $type ??= "text";

    @endphp


<div class="form-group">
    <label for="{{ $name  }}">{{ $label  }}</label>
    <input type="{{ $type  }}" class= "form-control @error($name) is-invalid @enderror" name="{{$name}}">
</div>



@error($name)
        <div class="alert alert-danger">
            {{  $message  }}
        </div>
@enderror
