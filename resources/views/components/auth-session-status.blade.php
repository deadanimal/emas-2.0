@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-red-100']) }}>
        {{ $status }}
    </div>
@endif
