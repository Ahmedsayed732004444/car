@props(['label', 'labelRequired' => false, 'name', 'rows' => 3])

<label for="{{ $name ?? $slot }}" class="form-label mt-2"> {{ $label ?? $slot }}<span class="text-danger">
        {{ $labelRequired ? '*' : '' }} </span></label>
<textarea name="{{ $name ?? $slot }}" id="{{ $name ?? $slot }}" class="form-control" rows="{{ $rows }}"></textarea>
<span class="error" id="{{ $name . '_err' ?? $slot }}"> </span>
