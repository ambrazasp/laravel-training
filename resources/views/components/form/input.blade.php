<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" name="{{ $name }}" class="form-control" id="{{ $name }}" value="{{ old($name, $value ?? '') }}">

    @if ($errors->has($name))
        <small class="text-danger">{{ $errors->first($name) }}</small>
    @endif
</div>