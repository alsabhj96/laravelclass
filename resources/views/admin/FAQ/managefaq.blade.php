@extends('layouts.app', ['activePage' => 'FAQ', 'titlePage' => __('Frequently Ask Question')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <div class="row">
              <div class="col-md-6">
                <h4 class="card-title mt-0"> Frequently Ask Question</h4>
                <p class="card-category">FAQ</p>
              </div>
              <div class="col-md-6" style="text-align:right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add FAQ</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <p>
              @if (session('message'))
          <div class="alert alert-success alert-block">
	        <button type="button" class="close" data-dismiss="alert">×</button>	
          <strong>{{ session('message') }}</strong>
          </div>
          @endif
              </p>
              <table class="table">
                <tr>
                  <td> ID</td>
                  <td> Question</td>
                  <td> Answer</td>
                  <td> photo</td>
                  <td> Action</td>
                </tr>

                @foreach($Faq as $item)
                <tr> 
                  <td> {{$item->id}}</td>
                  <td> {{$item->title}} </td>
                  <td> {{$item->detail}}</td>
                  <td> <img src="{{asset('uploads/faq/'.$item->photo)}}" alt="" width="80"> </td>
                  <td> <a href="{{route ('getfaqdelete',$item->id)}}">Delete </a> | <a href="{{route ('getfaqedit',$item->id)}}">Edit </a>   </td>
                </tr>  
                @endforeach


              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('postAddFAQ') }}" method="POST" enctype="multipart/form-data"> 
      <div class="modal-body">
        @csrf()
          Title : <input type="text" name="name">  <br />
          Detail : <textarea name="detail"></textarea> <br />
          Photo : <input type="file" name="photo"> <br />

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add FAQ</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection