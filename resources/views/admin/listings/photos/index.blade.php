@extends('layouts.admin')

@section('page-title', 'Show All Photos')


@section('content')

<div id="MainContent">
  <div class="row">
    <div class="col-md-10">
      <h1>Show All Listings Photos</h1>
    </div>
    <div class="col-md-2">
      <a href="{{ route('admin.listings.edit',['slug' => $slug, 'id' => $id]) }}"
                      class="btn cur-p" style="color: black; width: 100%; margin-bottom: .5rem;">
                      Back To Edit
                    </a>
      <a href="{{ route('admin.listings.photos.create',['slug' => $slug, 'id' => $id]) }}"
                      class="btn cur-p btn-primary btn-color" style="width: 100%; margin-bottom: .5rem;">
                      Add New Photo
                    </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Photos</th>
              <th scope="col">Name</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($photos as $photo)
              <tr>
                <th scope="row">{{$photo->id}}</th>
                <td>
                   <img src="/img/{{$photo->name}}" style="width: 300px;">
                </td>
                <td>
                  {{$photo->name}}
                </td>
                <td>
                  @if ($photo->featured)  
                    <div class="btn cur-p btn-success" style="color: #fff; width: 100px; text-transform: capitalize; font-size: .8rem;">
                      Featured
                    </div>
                  @endif
                </td>
                <td>
                  <a href="{{ route('admin.listings.photos.featured',['slug' => $slug, 'id' => $id, 'photo_id' => $photo->id]) }}" onclick="return confirm('Are you sure?')"
                      class="btn cur-p btn-secondary btn-color" style="width: 100%;">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      Feature
                    </a>
                  <a href="{{ route('admin.listings.photos.delete',['slug' => $slug, 'id' => $id, 'photo_id' => $photo->id]) }}" onclick="return confirm('Are you sure you want to delete this photo?')"
                      class="btn cur-p btn-danger btn-color" style="margin-top: 1rem; width: 100%;">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                      Delete
                    </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{$photos->links()}}
      </div>
    </div>
  </div>
</div>
@endsection