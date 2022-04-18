@extends('layouts.admin')

@section('page-title', 'Show All Photos')


@section('content')

<div id="MainContent">
  <h1>Show All Photos</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Photos</th>
              <th scope="col">Name</th>
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
                  {{-- @if ($listing->status === 'published')  
                    <div class="btn cur-p btn-success" style="color: #fff; width: 100px; text-transform: capitalize; font-size: .8rem;">
                      {{$listing->status}}
                    </div> 
                  @else
                    <div class="btn cur-p btn-secondary btn-color" style="width: 100px; text-transform: capitalize; font-size: .8rem;">
                      {{$listing->status}}
                    </div> 
                  @endif --}}
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