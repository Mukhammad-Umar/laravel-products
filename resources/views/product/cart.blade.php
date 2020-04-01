@extends('product.layout')

@section('css')

    <link rel="stylesheet" type="text/css" href="{{asset('public/styles/cart.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/styles/cart_responsive.css')}}">
    <style>
        .listbuttonremove{
	    margin: 10px;
        } 
    </style>
@endsection 

@section('main')

<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="cart_container">
                    
                    @php
                    //  print_r($carts);
                    @endphp

                    <!-- Cart Items -->
                    <div class="cart_items">
                        <ul class="cart_items_list">

                            @include('product.cart-standard')
                           
                        </ul>
                    </div>
                    <!-- Cart Buttons -->
                    <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                        <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="button button_clear trans_200"><a href="">clear</a></div>
                            <form name="form_clearall" method="post" action="{{route('clearall')}}" style="display:none;">
                                    {{ csrf_field() }}
                            </form> 
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>                  

@endsection


@section('js')

<script>
    $(document).ready(function () {
        $('.button_clear').click(function(){
            //form_clearall.submit();
            BaseRecord.clearall();
            return false;
        });
        $('.listbuttonremove').click(function(){
            BaseRecord.removeone($(this).attr('id'));
            return false;
        });
    });
</script>

@endsection