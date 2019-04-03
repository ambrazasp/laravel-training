<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name }}" class="form-control" id="{{ $name }}">{{ old($name, $value ?? '') }}</textarea>


    @if ($errors->has($name))
        <small class="text-danger">{{ $errors->first($name) }}</small>
    @endif
</div>