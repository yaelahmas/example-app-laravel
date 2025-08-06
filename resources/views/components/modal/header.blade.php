@props(['title', 'label'])

<div class="modal-header">
    <h5 class="modal-title" id="{{ $label }}">{{ $title }}</h5>
    <x-button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </x-button>
</div>
