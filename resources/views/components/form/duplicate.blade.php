<form action="{{ $action }}" method="POST">

    @csrf

    <input type="hidden" name="id" value="{{ $id }}">

    <button type="submit" class="btn btn-sm btn-warning">{{ $title ?? 'Duplicate' }}</button>
</form>