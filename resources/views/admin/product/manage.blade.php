@extends('layouts.app', ['activePage' => 'Product', 'titlePage' => __('Product')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <div class="row">
              <div class="col-md-6">
                <h4 class="card-title mt-0"> Product List</h4>
                <p class="card-category">Manage Your Product</p>
              </div>
              <div class="col-md-6" style="text-align:right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Product</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td> ID</td>
                  <td> Product</td>
                  <td> Cost</td>
                  <td> Created_at</td>
                  <td> Action</td>
                </tr>
                @foreach($products as $item) 
                <tr> 
                  <td> {{$item->id}} </td>
                  <td> {{$item->name}} </td>
                  <td> NPR. {{ $item->cost}} </td>
                  <td> {{$item->created_at->format('d M, Y')}} </td>
                  <td> <a href="">Delete </a> | <a href="">Edit </a>   </td>
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
      <form action="{{ route('postAddProduct') }}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        @csrf()
          Product Name : <input type="text" name="name">  <br />
          Detail : <textarea name="detail"></textarea> <br />
          Cost : <input type="number" name="cost"> <br />
          Photo : <input type="file" name="photo"> <b />

       
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