@extends('layouts.main')


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
      <a href="#" class="listings-filter__button">
        search now
      </a>
     </div>
    </div>
  </div>
@endsection




