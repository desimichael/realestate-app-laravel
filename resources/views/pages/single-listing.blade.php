@extends('layouts.main')

@section('page-title', '123 Piedmont Ave - Rhea Realty')
@section('content')
  <div class="single-listing-page">
    <div class="listing-top">
      <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Top Image" class="listing-top__img">
      <div class="listing-top__form-wrapper">
      <div class="container">
        <form action="#" class="listing-top__form">
          <span class="listing-top__form-label">Book A Tour</span>
          <div class="listing-top__form-group listing-top__form-group--horiz">
            <div class="listing-top__form-option">In Person</div>
            <div class="listing-top__form-option">Video</div>
          </div>
          <label class="listing-top__form-label">Date</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">March 3</div>
          </div>
          <label class="listing-top__form-label">Time</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">4 PM</div>
          </div>
          <label class="listing-top__form-label">Personal Info</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Number</div>
          </div>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Email</div>
          </div>
          <div class="listing-top__form-group">
            <button type="submit" class="listing-top__form-button button">Book It</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection




