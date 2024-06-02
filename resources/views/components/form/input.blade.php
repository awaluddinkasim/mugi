@props(['label', 'id', 'name', 'value' => '', 'required' => false])

<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input class="form-control" type="text" id="{{ $id }}" name="{{ $name }}"
        value="{{ $value }}" @if ($required) required @endif>
</div>
