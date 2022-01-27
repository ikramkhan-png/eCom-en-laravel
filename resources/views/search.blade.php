@extends('master') @section('content')
<div class="custom-product">
    <div class="col-sm-4">
      <a href="#">Filter</a>
    </div>
    <div class="col-sm-12">
      <div class="text-center">
        <h4>Result for  Products</h4>
        @foreach($products as $item)
        <div class="searched-item">
            <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}" />
                <div class="">
                    <h2>{{$item->name}}</h2>
                    <h5>{{$item->description}}</h>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
