@props(['label', 'labelRequired' => false, 'name', 'type' => 'text'])

<label for="{{ $name ?? $slot }}" class="form-label"> {{ $label ?? $slot }}<span class="text-danger">
        {{ $labelRequired ? ' * ' : '' }} </span></label>
<input type="{{ $type }}" name="{{ $name ?? $slot }}" id="{{ $name ?? $slot }}" {!! $attributes->merge(['class' => 'form-control']) !!}>
<span class="error" id="{{ $name . '_err' ?? $slot }}"></span>
