<div class="alert alert-{{ $type ?? 'success'}}">
    @if (isset($title)) <h4 class="alert-heading">{{ $title }}</h4> @endif
    <p>{{ $slot }}</p>
</div>