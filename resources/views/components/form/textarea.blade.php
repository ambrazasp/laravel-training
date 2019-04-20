<div class="form-group">
    @if (!empty($label))
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" class="form-control" id="{{ $name }}">{{ old($name, $value ?? '') }}</textarea>


    @if ($errors->has($name))
        <small class="text-danger">{{ $errors->first($name) }}</small>
    @endif
</div>