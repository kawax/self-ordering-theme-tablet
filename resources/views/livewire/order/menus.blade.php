<div class="mx-auto pb-40">
    @include('ordering-tablet::order.header')

    @include('ordering-tablet::order.category')

    <div class="px-3">
        @foreach($menus->groupBy('category') as $category => $items)
            @include('ordering-tablet::order.item')
        @endforeach
    </div>

    @include('ordering-tablet::order.footer')
</div>
