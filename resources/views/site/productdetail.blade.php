@extends('site.template')
@section('aboutpage')

<div class="container">
  <div class="row">
    <div class="about-section">
      <div class="about-container">
        <div class="about-title">
          <h1>Food Details</h1>
        </div>
        <div class="row">
        <div class="col-md-6">
          <div class="about-content">
            <div class="about-article">
              <h3><strong>{{$food->name}}</strong></h3>
              <h5>Rs. {{$food->cost}}</h5>
              <p>{!! $food->detail !!}</p>
              <form action="{{ route('postAddCart') }}" method="post">
                @csrf()
                Qty : <input type="number" name="qty" required> <br /> <br />
                <input type="hidden" name="product_id" value="{{$food->id}}">
                <input type="hidden" name="product_name" value="{{$food->name}}">
                <input type="hidden" name="product_cost" value="{{$food->cost}}">
                <input class="btn btn-primary" type="submit" value="Add To Cart">
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="about-imageasd-section">
              <img src="{{asset('uploads/products/'.$food->photo)}}" alt="" width="100%">
            </div>
        </div>
        </div>
      </div> 
    </div>
  </div>
</div>
 @stop