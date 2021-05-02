
<header class="p-3 text-white text-center font-bold bg-primary-500 flex justify-around">
    <span class="text-2xl">{{ config('app.name', 'Laravel') }}</span>
    <span class="text-2xl">
        {{ __('テーブル : ') }}{{ session('table') }}
    </span>
{{--    @include('ordering-tablet::order.info')--}}
    @include('ordering-tablet::order.history')
</header>
