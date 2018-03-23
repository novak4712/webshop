

<ul class="list-group">
    @foreach($products as $product)
        <li class="list-group-item">
            {{--{{ $product['item'] ['name'] }}--}}
            {{ $product['price'] }}
            <span class="badge">{{ $product['qty'] }}</span>
        </li>
    @endforeach
</ul>
