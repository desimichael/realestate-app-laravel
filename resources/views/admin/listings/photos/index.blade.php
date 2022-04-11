@extends('layouts.admin')

@section('page-title', 'Show Listing Photos')


@section('content')

<div id="MainContent">
  <h1>Show Listing Photos</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Photo</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($listings as $listing)
              <tr>
                <th scope="row">{{$listing->id}}</th>
                <td>
                  <a href=" {{route('admin.listings.edit', [
                    'slug' => $listing->slug,
                    'id' => $listing->id
                  ])}} ">
                    {{$listing->address}} 
                    {{$listing->address2}} <br>
                    {{$listing->city}}, 
                    {{$listing->state}} 
                    {{$listing->zipcode}}
                  </a>
                </td>
                <td>
                  @if ($listing->status === 'published')  
                    <div class="btn cur-p btn-success" style="color: #fff; width: 100px; text-transform: capitalize; font-size: .8rem;">
                      {{$listing->status}}
                    </div> 
                  @else
                    <div class="btn cur-p btn-secondary btn-color" style="width: 100px; text-transform: capitalize; font-size: .8rem;">
                      {{$listing->status}}
                    </div> 
                  @endif
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{$listings->links()}}
      </div>
    </div>
  </div>
</div>
@endsection