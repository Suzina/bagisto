{!! view_render_event('bagisto.shop.products.price.before', ['product' => $product]) !!}

<div class="product-price">
    @inject ('priceHelper', 'Webkul\Product\Helpers\Price')

    @if ($product->type == 'configurable')
        <span class="price-label">{{ __('shop::app.products.price-label') }}</span>

        <span class="final-price">RS {{ $priceHelper->getMinimalPrice($product) }}</span>
    @else
        @if ($priceHelper->haveSpecialPrice($product))
            <div class="sticker sale">
                {{ __('shop::app.products.sale') }}
            </div>

            <span class="regular-price">Rs {{ $product->price }}</span>

            <span class="special-price">Rs {{ $priceHelper->getSpecialPrice($product) }}</span>
        @else
            <span>Rs {{ $product->price }}</span>
        @endif
    @endif
</div>

{!! view_render_event('bagisto.shop.products.price.after', ['product' => $product]) !!}