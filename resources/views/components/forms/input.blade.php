@props(['name','title','type' => 'text','hint','value' => ''])

<div class="mb-3">
    @isset($title)
    <label for="{{ $name }}">{{ $title }}</label>
    @endisset
    <input class="form-control @error( $name ) is-invalid @enderror" id="{{ $name }}" type="{{ $type }}"
        name="{{ $name }}" value="{{ old( $name , $value ) }}" @isset($hint) placeholder="{{ $hint }}" @endisset>
    @error($name)
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
