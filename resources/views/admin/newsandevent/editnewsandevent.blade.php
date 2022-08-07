@extends('layouts.app', ['activePage' => 'NewsandEvent', 'titlePage' => __('News and Event List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
          <div class="row">
            <div class="col-md-6">
               <h4 class="card-title ">Edit News and Event</h4>
               <p class="card-category"> Read News</p>
              <div class="col-md-6" style="text-align:right">
              </div>
            </div>
          </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <form action="{{ route('PostEditNewsandEvent',$Newsandevents->id) }}" method="post" enctype="multipart/form-data"> 
          <div class="modal-body">
        @csrf()
          Title: <input type="text" name="name" value ="{{$Newsandevents->title}}"> <br />
          Detail: <textarea name="detail"> {{$Newsandevents->detail}} </textarea> <br />
          Photo: <input type="file" name="photo" value ="{{$Newsandevents->photo}}"> <br />

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quit changes</button>
        <button type="submit" class="btn btn-primary">Edit changes</button>
      </div>
      </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection