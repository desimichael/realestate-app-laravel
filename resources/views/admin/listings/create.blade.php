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
            <div class="mb-3">
              <label class="form-label" for="address">Address</label> 
              <input type="text" class="form-control" name="address" id="address" placeholder=" ex: 123 Piedmont Rd" value="{{ old('address') }}">
                @error('address')
                  <div class="error-sub-text">
                      {{$message}}
                  </div>
                @enderror
            </div>
            <div class="mb-3"><label class="form-label"
                    for="address2">Address 2</label>
              <input type="text" class="form-control"
                    name="address2" id="address2"
                    placeholder=" ex: Apartment, studio, or floor" value="{{ old('address2') }}">
                     @error('address2')
                      <div class="error-sub-text">
                          {{$message}}
                      </div>
                    @enderror
            </div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label"
                      for="city">City
                </label> 
                      <input
                      type="text" class="form-control"
                      name="city" placeholder="ex: Buckhead"
                      id="city" value="{{ old('city') }}">
                      @error('city')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                      @enderror
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label" for="state">State</label> 
                <select id="state" class="form-control" name="state">
                  <option 
                    value="GA"
                    @selected(old('state') == 'GA')>Georgia</option>
                  <option value="TX"
                    @selected(old('state') == 'TX')>Texas</option>
                </select>
                @error('state')
                  <div class="error-sub-text">
                      {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label" for="zipcode">Zipcode</label> 
                <input
                type="text" class="form-control"
                name="zipcode" placeholder="ex: 30367"
                id="zipcode" value="{{ old('zipcode') }}">
                @error('zipcode')
                  <div class="error-sub-text">
                      {{$message}}
                  </div>
                @enderror
              </div>
            </div> 
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label" for="bedrooms">Bedrooms</label> 
                  <input type="text" class="form-control" name="bedrooms" id="bedrooms" placeholder=" ex: 3" 
                  value="{{ old('bedrooms') }}">
                    @error('bedrooms')
                      <div class="error-sub-text">
                          {{$message}}
                      </div>
                    @enderror
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label" for="bathrooms">Bathrooms</label> 
                  <input type="text" class="form-control"
                  name="bathrooms" id="bathrooms" placeholder=" ex: 2" value="{{ old('bathrooms') }}">
                  @error('bathrooms')
                    <div class="error-sub-text">
                        {{$message}}
                    </div>
                  @enderror
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label" for="squarefootage">SQFT</label> 
                      <input type="text" class="form-control"
                      name="squarefootage" id="squarefootage" placeholder=" ex: 2025" value="{{ old('squarefootage') }}">
                      @error('squarefootage')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                      @enderror
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






