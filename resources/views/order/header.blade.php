<header class="p-3 text-white text-center font-bold bg-primary-500 flex justify-around">
    <span class="text-2xl">
        <a href="{{ route('order', ['table' => session('table')]) }}">
        {{ config('app.name', 'Laravel') }}
        </a>
    </span>
    <span class="text-2xl">
        {{ __('テーブル : ') }}{{ session('table') }}
    </span>
    {{--    @include('ordering-tablet::order.info')--}}
    @include('ordering-tablet::order.history')
</header>
