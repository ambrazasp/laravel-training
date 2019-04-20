<form action="{{ $action }}" method="POST">

    @csrf

    <input type="hidden" name="id" value="{{ $id }}">

    <button type="submit" class="btn btn-link p-0 m-0"><img src="{{ asset('images/icons/bx-copy.svg') }}"/></button>
</form>