@extends('frontend.layouts.master')
@section('frontend.title')
    Dashboard
@endsection
@section('frontend.content')
    <!-- top Products -->
    {{-- @include('frontend.pages.Dashboard.topProducts') --}}

    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Our Top Products
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <!-- //tittle heading -->
            <!-- product left -->
            @include('frontend.pages.Dashboard.sidebar')
            <!-- //product left -->
            <!-- product right -->
            <div class="agileinfo-ads-display col-md-9">
                <div class="wrapper">
                    <!-- first section (nuts) -->
                    @if (sizeof($category_products) > 0)
                        @foreach ($category_products as $category_products)
                            @if (sizeof($category_products['product_list']) > 0)
                                <div class="product-sec1">
                                    <h3 class="heading-tittle">{{ $category_products->category_name }}</h3>
                                    @foreach ($category_products['product_list'] as $product)
                                        <div class="col-md-4 product-men">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item">
                                                    <img src="{{ url("storage/productImage/$product->product_image") }}"
                                                        alt="{{ $product->product_image }}">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>

                                                    {{-- for check New or old Product --}}
                                                    @php
                                                        $date = new DateTime();
                                                        $date->modify('this week');
                                                        $week_dates = [];
                                                        for ($i = 0; $i < 7; $i++) {
                                                            $week_dates[] = $date->format('Y-m-d');
                                                            $date->modify('+1 day');
                                                        }
                                                        $product_date = $product->updated_at->format('Y-m-d');
                                                        // Check if the current date exists in the week list array
                                                        if (in_array($product_date, $week_dates)) {
                                                            echo '<span class="product-new-top" style="background:#FFC107">New</span>';
                                                        } else {
                                                            echo '<span class="product-new-top" style="background:#fc636b">Old</span>';
                                                        }
                                                    @endphp

                                                </div>
                                                <div class="item-info-product ">
                                                    <h4>
                                                        <a href="single.html">{{ $product->product_name }}</a>
                                                    </h4>
                                                    <div class="info-product-price">
                                                        <span class="item_price">&#8377;
                                                            {{ number_format($product->product_price, 2) }} </span>
                                                        <del>&#8377;{{ number_format($product->close_price, 2) }}</del>
                                                    </div>
                                                    <div
                                                        class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                    value="Almonds, 100g" />
                                                                <input type="hidden" name="amount" value="149.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                    value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                    class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            @endif
                        @endforeach
                    @endif

                    <!-- second section (nuts special) -->
                    <div class="product-sec1 product-sec2">
                        <div class="col-xs-7 effect-bg">
                            <h3 class="">Pure Energy</h3>
                            <h6>Enjoy our all healthy Products</h6>
                            <p>Get Extra 10% Off</p>
                        </div>
                        <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
                        <div class="col-xs-5 bg-right-nut">
                            <img src="{{ asset('assets/front/images/nut1.png') }}" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- special offers -->
    @include('frontend.pages.Dashboard.specialOffers')
@endsection
@section('frontend.styles')
@endsection
@section('frontend.scripts')
@endsection
