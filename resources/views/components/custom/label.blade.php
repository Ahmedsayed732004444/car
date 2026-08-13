@props(['label', 'labelRequired' => false, 'name'])

<label for="{{ $name ?? $slot }}" class="form-label"> {{ $label ?? $slot }}<span class="text-danger">
        {{ $labelRequired ? ' * ' : '' }} </span></label>
