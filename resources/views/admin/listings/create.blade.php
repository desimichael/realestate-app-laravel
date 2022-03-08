@extends('layouts.admin')

@section('page-title', 'Create A Listing')


@section('content')
  <div id="mainContent">
    <div class="col-md-6">
      <div class="bgc-white p-20 bd">
        <h1>Create A Listing</h1>
        <div class="mT-30">
          <form method="POST" action="{{ route('admin.listings.store') }}">
            @csrf
            <div class="mb-3"><label class="form-label"
                    for="address">Address</label> <input
                    type="text" class="form-control"
                    name="address" id="address"
                    placeholder="1234 Main St" value="{{ old('address') }}"></div>
            <div class="mb-3"><label class="form-label"
                    for="address2">Address 2</label>
              <input type="text" class="form-control"
                    name="address2" id="address2"
                    placeholder="Apartment, studio, or floor" value="{{ old('address2') }}">
            </div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label"
                      for="city">City
                </label> 
                      <input
                      type="text" class="form-control"
                      name="city"
                      id="city" value="{{ old('city') }}">
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label" name="state" for="state">State</label> <select id="state" class="form-control">
                  <option 
                    value="GA"
                    @selected(old('version') == 'GA')>Georgia</option>
                  <option value="TX"
                    @selected(old('version') == 'TX')>Texas</option>
                </select></div>
              <div class="mb-3 col-md-2"><label
                      class="form-label"
                      for="zipcode">Zipcode</label> <input
                      type="text" class="form-control"
                      name="zipcode"
                      id="zipcode" value="{{ old('zipcode') }}">></div>
            </div> 
            <div class="row">
              <div class="mb-3 col-md-6"><label
                      class="form-label"
                      name="bedrooms"
                      for="bedrooms">Bedrooms</label> <input
                      type="text" class="form-control"
                      id="bedrooms" placeholder="3" value="{{ old('bedrooms') }}">>
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6"><label
                      class="form-label"
                      name="bathrooms"
                      for="bathrooms">Bathrooms</label> <input
                      type="text" class="form-control"
                      id="bedrooms" placeholder="2" value="{{ old('bathrooms') }}">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6"><label
                      class="form-label"
                      name="squarefootage"
                      for="squarefootage">SQFT</label> <input
                      type="text" class="form-control"
                      id="squarefootage" placeholder="2025" value="{{ old('squarefootage') }}">
              </div>
            </div>
            <button type="submit"
                    class="btn btn-primary btn-color">Create Listing</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection






