<form action="{{ $action }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-link p-0 m-0"><img src="{{ asset('images/icons/bx-trash.svg') }}"/></button>
</form>