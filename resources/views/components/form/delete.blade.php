<form action="{{ $action }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-sm btn-danger">{{ $title ?? 'Delete' }}</button>
</form>