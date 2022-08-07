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
               <h4 class="card-title ">Manages News and Event</h4>
               <p class="card-category"> Read News</p>
              <div class="col-md-6" style="text-align:right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add News and Event </a>
              </div>
            </div>
          </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th> ID </th>
                  <th> Title </th>
                  <th> Photo </th>
                  <th>created_at </th>
                  <th>Action</th>
                </thead>

                <tbody>
                  @foreach($news as $item)
                  <tr>
                    <td> {{$item->id}} </td>
                    <td> {{$item->title}} </td>
                    <td><img src="{{asset('uploads/news/'.$item->photo)}}" alt="" width="80"></td>
                    <td> {{$item->created_at->format('d M, Y')}} </td>
                    <td> 
                      <a href="{{route('getnewsdelete',$item->id)}}"> Delete </a>  | <a href="{{route('getnewsedit',$item->id)}}"> Edit </a>
                    </td>
                  </tr>
                  @endforeach
                 

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Copy from bootstrap -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add News and Events</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('AddNewsandEvent') }}" method="post" enctype="multipart/form-data"> 
      <div class="modal-body">
        @csrf()
          Title: <input type="text" name="name"> <br />
          Detail: <textarea name="detail"> </textarea><br />
          Photo: <input type="file" name="photo"> <br />

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