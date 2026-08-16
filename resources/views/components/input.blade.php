<label style="text-transform: capitalize" for="{{ $name }}">{{ $label ?? '' }} </label>
<input type="{{ $type ?? 'text' }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
    required="{{ $required ?? 'required' }}" class="{{ $class ?? '' }}" name="{{ $name }}">
