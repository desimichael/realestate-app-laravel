@extends('layouts.account')

@section('page-title', 'Listing Request Status - Rhea Realty')

@section('page-bg', 'https://images.pexels.com/photos/170781/pexels-photo-170781.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')
    
@section('content')
 <div class="request-list">
   <h2>All Requests</h2>
    @for ($i = 0; $i < 10; $i++)
    <div class="request-list__wrapper">
      <div class="request-list__item">
        <h4>221 piedmont rd</h4>
        <span class="request-list__item-details">
          <i class="fa-solid fa-bed"></i>
          4
          <i class="fa-solid fa-shower"></i>
          3
          <i class="fa-solid fa-ruler-combined"></i>
          2550 SQFT
        </span>
      </div>
      <div class="request-list__info">
        <span class="request-list__info-title">
          Status
        </span>
          <div class="request-list__info-status 
          request-list__info-status--success">
          Success
        </div>
      </div>
    </div>
    @endfor
 </div>
@endsection




