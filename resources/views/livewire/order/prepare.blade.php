<div class="mx-auto pb-40">
    @include('ordering-theme::order.header')

    <div class="mx-auto max-w-5xl">

        <div class="p-3 m-6 text-center">
            <h2 class="text-3xl">{{ __('注文の確認') }}</h2>
            @unless(config('ordering.payment.enabled'))
                <div class="font-bold">{{ config('ordering.shop.disabled_pay_message') }}</div>
            @endunless
        </div>

        @if(config('ordering.payment.enabled'))
            @include('ordering::prepare.payments')
        @endif

        <div class="px-6">
            <div>{{ __('追加メモ') }}</div>
            <x-ordering::textarea class="w-full" wire:model="memo"></x-ordering::textarea>
        </div>
        <div class="px-3">
            @include('ordering::prepare.item')
        </div>

    </div>

    @include('ordering::prepare.footer')
</div>
