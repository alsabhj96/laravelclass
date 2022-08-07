@extends('layouts.app', ['activePage' => 'FAQ', 'titlePage' => __('Frequently Ask Question')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
          <div class="row">
            <div class="col-md-6">
               <h4 class="card-title ">FAQ</h4>
               <p class="card-category"> Faq</p>
              <div class="col-md-6" style="text-align:right">
              </div>
            </div>
          </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">

      <form action="{{ route('PostEditFAQ', $Frequently->id) }}" method="post" enctype="multipart/form-data"> 
      <div class="modal-body">
        @csrf()
          Title: <input type="text" name="name" value="{{$Frequently->title}}"> <br />
          Detail: <textarea name="detail"> "{{$Frequently->detail}}" </textarea><br />
          Photo: <input type="file" name="photo" value="{{$Frequently->photo}}"> <br />

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection