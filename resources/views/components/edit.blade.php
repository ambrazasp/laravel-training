<div class="edit">
    <img src="{{ asset('images/icons/bx-dots-vertical-rounded.svg') }}"/>

    <div class="edit-menu">

        <a href="{{ route( $type . '.edit', $id)  }}" class="btn btn-link p-0 m-0"><img src="{{ asset('images/icons/bx-edit.svg') }}"/></a>

        @duplicate(['action' => route($type . '.duplicate', $id), 'id' => $id ])

        @delete(['action' => route($type . '.destroy', $id) ])

    </div>
</div>