@extends('site.template')
@section('aboutpage')

<div class="about-section">
  <div class="about-container">
   <div class="about-title">
     <h1>Cart</h1>
   </div>
  <div class="abosdfut-content">
    <div class="col-md-12">
      <table class="table">
        <tr>
          <th>Product Name</th>
          <th>Cost</th>
          <th>QTY</th>
          <th>Amount</th>
        </tr>
        @if($carts->count())
          @foreach($carts as $cart)
            <tr>
              <td>{{$cart->product_name}}</td>
              <td>Rs.{{$cart->product_cost}}</td>
              <td>{{$cart->product_quantity}}</td>
              <td>Rs.{{ $cart->total_amount}}</td>
            </tr>
          @endforeach
          <tr>
            <td colspan="3">Grand Total</td>
            <td>Rs. {{$grandtotal}}</td>
          </tr>
        @else
          <tr>
            <td colspan="4">No Item(s)</td>
          </tr>
        @endif
      </table>
      <br />
      <div class="row">
        <div class="col-md-12" style="text-align:right">
        <a href="{{route('gethome')}}" class="btn btn-primary">Continous Shipping</a>
        @if($carts->count())
          
          <a href="" class="btn btn-primary">Check Out</a>
        @endif
        </div>
      </div>
    </div>
  </div>
    
  </div> 
</div>




<!-- <div class="aboutus">
<h1>Who are we  </h1>
<p>GoodFood is a technology company that connects people with the best of their neighborhoods across the Pokhara. We enable local businesses to meet consumers’ needs of ease and convenience, and, in turn, generate new ways for people to earn, work, and live. By building the last-mile logistics infrastructure for local commerce, we’re fulfilling our mission to grow and empower local economies.</p>
</div>

<div class="con">
  <div class="row">
    <h1>Who we serve </h1>
    <div class="col-md-6 divison">
      <h3>Customers</h3>
      <p>With thousands of restaurants, convenience stores, pet stores, grocery stores, and more at your fingertips, DoorDash delivers the best of your neighborhood on-demand.</p>
    </div>
    <div class="col-md-6 photo">
      <img src="{{asset('Site/image/burger.jpg')}}" alt="" width=100%>
    </div>
  </div>
</div> -->

 @stop