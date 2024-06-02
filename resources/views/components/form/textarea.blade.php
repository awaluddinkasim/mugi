@props(['label', 'id', 'name', 'rows' => 5, 'required' => false])

<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <textarea class="form-control" name="{{ $name }}" id="{{ $id }}" rows="{{ $rows }}"
        @if ($required) required @endif>{{ $slot }}</textarea>
</div>
