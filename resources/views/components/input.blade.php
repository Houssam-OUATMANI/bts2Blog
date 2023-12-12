@php
    $name ??= "";
    $label ??= "";
    $type ??= "text";
    @endphp


<div class="form-group">
    <label for="{{ $name  }}">{{ $label  }}</label>
    @if($type === "textarea")
        <textarea name="{{$name}}"></textarea>
    @else
        <input type="{{ $type  }}" class= "form-control @error($name) is-invalid @enderror" name="{{$name}}">
    @endif

</div>



@error($name)
        <div class="alert alert-danger">
            {{  $message  }}
        </div>
@enderror
