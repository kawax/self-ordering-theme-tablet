<div class="mx-auto pb-40">
    @include('ordering-theme::order.header')

    @include('ordering-theme::order.category')

    <div class="px-3">
        @foreach($menus->groupBy('category') as $category => $items)
            @include('ordering-theme::order.item')
        @endforeach
    </div>

    @include('ordering-theme::order.footer')
</div>
