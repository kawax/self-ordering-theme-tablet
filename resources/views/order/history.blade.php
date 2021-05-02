<span class="text-2xl">
    @if(session()->has('history'))
        <a href="{{ route('history') }}">{{ __('注文履歴') }}</a>
    @endif
</span>
