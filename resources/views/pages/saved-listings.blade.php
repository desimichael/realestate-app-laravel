@extends('layouts.account')

@section('page-title', 'User Saved Listings - Rhea Realty')

@section('page-bg', 'https://images.pexels.com/photos/170781/pexels-photo-170781.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')
    
@section('content')
  <div class="listings-properties">
    <div class="row">
      <div class="col-sm-6 col-lg-4 col-xl-4">
        <a href="#" class="listings-properties__item">
          <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="item image">
          <div class="listings-properties__saved">
            <i class="fa-solid fa-heart"></i>
          </div>
          <span class="listings-properties__item-price">
            $300,000
          </span>
          <span class="listings-properties__item-details">
            <i class="fa-solid fa-bed"></i>
            4
            <i class="fa-solid fa-shower"></i>
            3
            <i class="fa-solid fa-ruler-combined"></i>
            2550 SQFT
          </span>
          <span class="listings-properties__item-address">
            221 piedmont rd <br>
            buckhead, ga 11222
          </span>
          <div class="listings-properties__item-line"></div>
          <span class="listings-properties__item-agent">
            stephon rhea
          </span>
        </a>
      </div>
    </div>
  </div>
@endsection




