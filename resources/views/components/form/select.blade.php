@props(['label', 'id', 'name', 'required' => false])

<div class="mb-3">
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    <select class="form-select" name="{{ $name }}" id="{{ $id }}"
        @if ($required) required @endif>
        <option value="" selected hidden>Pilih</option>
        {{ $slot }}
    </select>
</div>
