@extends('site.template')
@section('meropage')
  <section id="slider">
    <img src="{{asset('Site/image/backgraound-image.jpg')}}" alt="">
  </section>

  <section id="information">
    <div class="container">
      <div class="row">
        <div class="informationcontent">
          <h5>Search Food</h5>
         <form action="">
          <div class="row">
            <div class="col-md-4">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Food Name"  style="width:100%">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Resturant Name"  style="width:100%">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
              <input type="Submit" value="Search" class="btn btn-primary"   style="width:100%">
            </div>
            </div>
          </div>
         </form>
        </div>
      </div>
    </div>
  </section>

    <section id="leatest-product">
      <div class="container">
        <div class="row">
          @foreach($foods as $xyz)
          <div class="col-md-3 productbox">
            <div class="card">
              <img src="{{asset('uploads/products/'.$xyz->photo)}}" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{$xyz->name}}</h5>
                <p class="card-text">Rs. {{$xyz->cost}}</p>
                <a href="{{route('getProductDetail', $xyz->id)}}" class="btn btn-primary">View Details</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    @stop