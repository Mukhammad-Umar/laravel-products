@foreach($products as $product)
    <div class="col-xl-4 col-md-6">
        <a href="{{route('product', [$product->id])}}"> <!-- ?page=product --> 
            <div class="product"> 
                <!-- image - img src -->
                <div class="product_image"><img src="{{ asset('public/images/' . $product->image)}}" alt=""></div> 
                <div class="product_content">
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div>
                                <!-- name - <a href="#">...</a> -->
                                <div class="product_name"><a href="#">{{ $product->name}}</a></div> 
                            </div>
                        </div>
                        <div class="ml-auto text-right">
                            <!-- price - <span style="font-size: 0.8em;">...</span> -->
                            <div class="product_price text-right"><span style="font-size: 0.8em;">{{ $product->price}}</span></div> 
                        </div>
                    </div>
                    <div class="product_buttons">
                        <div class="text-right d-flex flex-row align-items-start justify-content-start">
                            <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                <div><div><img src="{{ asset('public/images/cart.svg')}}" class="svg" alt=""><div>+</div></div></div> <!-- product cart -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach