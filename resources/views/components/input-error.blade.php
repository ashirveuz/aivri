@props(['messages', 'addHiddenField' => false, 'hiddenFieldId' => null])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li style="color: crimson">{{ $message }}</li>
        @endforeach
    </ul>
@endif

@if ($addHiddenField ?? false)
    <ul>
        <li style="color: crimson; display:none" id="{{ $hiddenFieldId }}"></li>
    </ul>
@endif
