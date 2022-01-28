@extends('master') @section('content')
<div class="container">
    <div class="row custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                <a
                    style="margin-bottom: 10px"
                    class="btn btn-success"
                    href="/ordernow"
                    >Order Now</a
                >
                @foreach($products as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img
                                class="trending-image"
                                src="{{$item->gallery}}"
                            />
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                            <small
                                >Rs. <strong>{{$item->price}}</strong></small
                            >
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a
                            class="btn btn-warning"
                            href="/removecart/{{$item->cart_id}}"
                            >Remove from cart</a
                        >
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
