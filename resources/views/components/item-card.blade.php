@props(['item'])

<div {{ $attributes->merge(['class' => 'm-3 p-3 rounded shadow-lg max-w-sm flex flex-wrap flex-col justify-between dark:bg-gray-800']) }}>
    <div class="mx-auto">
        <x-ordering-tablet::image :src="Arr::get($item, 'image')"></x-ordering-tablet::image>
    </div>
    <div>
        <h4 class="font-bold">{{ Arr::get($item, 'name') }}</h4>
        <div>{{ Arr::get($item, 'text') }}</div>
        <span>{{ Arr::get($item, 'price', 0) }}{{ __('円') }}</span>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>
