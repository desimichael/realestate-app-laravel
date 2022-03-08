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
    <section class="listing-info">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1>123 Piedmont Ave <br>
              Buckhead, Ga 30045
            </h1>
            <div class="listing-info__details">
              <span class="listing-info__details-text">
                <i class="fa-solid fa-bed"></i> 4
              </span>
              <span class="listing-info__details-text">
                <i class="fa-solid fa-shower"></i> 3
              </span>
              <span class="listing-info__details-text">
                <i class="fa-solid fa-ruler-combined"></i> 2550 SQFT
              </span>
            </div>
          </div>
          <div class="col-md-5">
            <span class="listing-info__agent-title">
              Agent:
            </span>
            <span class="listing-info__agent-name">
              Stephon Rhea
            </span>
            <p class="listing-info__agent-profile">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est nemo maiores aspernatur porro commodi, quibusdam nesciunt hic saepe consequuntur fugiat!</p>
          </div>
        </div>
      </div>
    </section>
    <section class="listing-extras">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="listing-extras__details">
              <h2>
                More Info
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur provident, magnam assumenda dicta sed fugiat corrupti eum omnis, ipsam quidem at totam distinctio enim dolore ut. Quaerat provident maxime nostrum, adipisci aliquam enim repudiandae similique vel non dolorem soluta facere ea at, consequuntur sunt asperiores. Quaerat temporibus nisi, laborum suscipit molestias ex voluptatem officiis itaque aut necessitatibus quas, natus esse?</p>
              <h3>Details</h3>
              <ul>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
              </ul>
            </div>
          </div>
          <div class="col-md-5">
            <span class="listing-extras__gallery">
              <h2>
                More Info
              </h2>
              <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="gallery image">
              <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="gallery image">
              <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="gallery image">
              <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="gallery image">
              <img src="https://images.pexels.com/photos/7031595/pexels-photo-7031595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="gallery image">
            </span>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection




