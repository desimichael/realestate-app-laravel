@extends('layouts.admin')

@section('page-title', 'Edit a Listing')


@section('content')
<div id="mainContent">
  <form method="POST" action="{{ route('admin.listings.update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
    <div class="row">
      <div class="col-md-9">
        <div class="bgc-white p-20 bd">
          <h1>Edit Listing</h1>
          <div class="mT-30">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <h3>Address</h3>
                <label class="form-label" for="address">Address</label> 
                <input type="text" class="form-control" name="address" id="address" placeholder="ex: 123 Piedmont Rd" value="{{old('address', $listing->address)}}">
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
                      placeholder="ex: Apartment, studio, or floor" value="{{old('address2', $listing->address2)}}">
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
                        id="city" value="{{old('city', $listing->city)}}">
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
                      @selected(old('state', $listing->state) == 'GA')>Georgia</option>
                    <option value="TX"
                      @selected(old('state', $listing->state) == 'TX')>Texas</option>
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
                  id="zipcode" value="{{old('zipcode', $listing->zipcode)}}">
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
                    <input type="text" class="form-control" name="bedrooms" id="bedrooms" placeholder="ex: 3" 
                    value="{{old('bedrooms', $listing->bedrooms)}}">
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
                    name="bathrooms" id="bathrooms" placeholder="ex: 2" value="{{old('bathrooms', $listing->bathrooms)}}">
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
                  name="squarefootage" id="squarefootage" placeholder="ex: 2025" value="{{old('squarefootage', $listing->squarefootage)}}">
                  @error('squarefootage')
                    <div class="error-sub-text">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="row">
                <h3>Details</h3>
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="description">Description</label>
                  <textarea type="text" class="form-control" name="description" id="description" placeholder="ex: Property Description...">{{ old('description', $listing->description) }}</textarea>
                  @error('description')
                    <div class="error-sub-text">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bgc-white p-20 bd">
          <div>
            <h3>Settings</h3>
            <div class="form-group"> 
                  <select id="status" class="form-control" name="status">
                    <option 
                      value="draft"
                      @selected(old('status', $listing->status) == 'draft')>Draft</option>
                    <option value="published"
                      @selected(old('status', $listing->status) == 'published')>Published</option>
                  </select>
                  @error('status')
                    <div class="error-sub-text">
                        {{$message}}
                    </div>
                  @enderror
            </div>
            <div class="form-group" style="margin-top: 1rem; display: flex; flex-direction: column;">
              <a href="{{ route('admin.listings.photos',['slug' => $listing->slug, 'id' => $listing->id]) }}" onclick="return confirm('Have you saved your updates?')"
                      class="btn cur-p btn-success btn-color" style="margin-top: 1rem; width: 100%;">Photos</a>
              <button type="submit"
                      class="btn btn-primary btn-color" style="margin-top: .5rem; width: 100%;">Save</button>
              <a href="{{ route('admin.listings.delete',['slug' => $listing->slug, 'id' => $listing->id]) }}" onclick="return confirm('Are you sure you want to delete this listing?')"
                      class="btn btn-danger btn-color" style="margin-top: .5rem; width: 100%;">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection






