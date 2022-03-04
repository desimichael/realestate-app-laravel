@extends('layouts.main')

@section('page-title', 'All Properties - Rhea Realty')
@section('content')
  <div class="listings-page">
    <div class="listings-city">
      <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="listings image" class="listings-city__image">
      <h1 class="listings-city__title">
        Buckhead
      </h1>
    </div>
    <div class="listings-filter">
     <div class="listings-filter__wrapper">
        <div class="listings-filter__option">
          any price
          <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="listings-filter__option">
          all beds
          <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="listings-filter__option">
          hometype
          <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="listings-filter__option">
          more
          <i class="fa-solid fa-chevron-down"></i>
        </div>
        <a href="#" class="listings-filter__button button">
          search now
        </a>
     </div>
    </div>
    <div class="listings-properties">
      <div class="container">
        <div class="row">
          @for ($i = 1; $i <= 12; $i++)
            <div class="col-sm-6 col-lg-4 col-xl-4 col-xxl-3">
              <a href="/listing/123-piedmont-ave-buckhead-ga-33454/1" class="listings-properties__item">
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
          @endfor    
      </div>
    </div>
  </div>
@endsection




