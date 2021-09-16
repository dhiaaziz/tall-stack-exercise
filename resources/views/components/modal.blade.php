@props(['trigger'])

<div class="fixed top-0 flex items-center w-full h-full bg-gray-900 bg-opacity-60" x-show="{{ $trigger }}"
    x-on:click.self="{{ $trigger }} = false" x-on:keydown.escape.window="{{ $trigger }} = false" x-cloak>
    <div {{ $attributes->merge(['class' => 'bg-gray-200 m-auto shadow-xl rounded-xl p-8']) }}>
        {{ $slot }}
    </div>
</div>
