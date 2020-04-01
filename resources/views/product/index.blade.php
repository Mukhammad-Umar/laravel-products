@extends('product.layout')

@section('css')
    <style>
        .product {
            opacity: 0.7;
        }
        .product:hover{
            opacity: 1;
        }
    </style>
@endsection

@section('main')

<div class="super_container_inner">
    <div class="super_overlay"></div>
    <div class="products">
        <div class="container">
            <div class="row products_row">

                @php
                    // print_r($products) 
                @endphp

                @include('product.brick-standard')

            </div>
        </div>
    </div>

    <div class="button load_more ml-auto mr-auto"><a href="#" class="link_again">больше</a>

</div>

@endsection

@section('js')

<script>
    $(document).ready(function(){
        $('.load_more').click(function () {
            BaseRecord.top9 = 0;
            BaseRecord.more();
            return false;
          });
        $('.header_search_button').click(function(){
            BaseRecord.search = $('.search_input').val();
            BaseRecord.more();
            return false;
        });  
    });
</script>

@endsection