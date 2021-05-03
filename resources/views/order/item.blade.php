<div id="{{ $category }}">
    <div class="bg-primary-500 p-3 text-center rounded-md">
        <h3 class="text-xl font-bold text-white">{{ $category }}</h3>
    </div>
    <div class="flex flex-row flex-wrap">
        @foreach($items as $item)
            <x-ordering-theme::item-card :item="$item">
                @if(\Illuminate\Support\Facades\Date::parse(Arr::get($item, 'sold_out_until'))->lessThanOrEqualTo(now()))
                    <x-ordering-theme::button
                        class="w-full"
                        wire:click="addCart('{{ Arr::get($item, 'id')  }}')">
                        {{ __('カートに追加') }}
                    </x-ordering-theme::button>
                @else
                    <x-ordering-theme::button class="w-full" :disabled="true">
                        {{ __('売り切れ') }}
                    </x-ordering-theme::button>
                @endif
            </x-ordering-theme::item-card>
        @endforeach
    </div>
</div>
