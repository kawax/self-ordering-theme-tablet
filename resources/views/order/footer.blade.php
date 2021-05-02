<x-ordering::fixed-footer>
    <span>{{ $this->items->count() }}{{ __('個の商品') }}</span>

    <span class="font-bold">{{ __('合計') }}{{ $this->items->sum('price') }}{{ __('円') }}
</span>

    <x-ordering::button wire:click="redirectTo"
                        :disabled="empty(session('cart'))"
                        wire:loading.attr="disabled">
        {{ __('注文確認に進む') }}
    </x-ordering::button>

    <div class="mt-3">
        <x-ordering::secondary-button wire:click="resetCart"
                                      wire:loading.attr="disabled">
            {{ __('すべて削除') }}
        </x-ordering::secondary-button>
    </div>
</x-ordering::fixed-footer>
