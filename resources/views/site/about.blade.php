@extends('site.template')
@section('aboutpage')

<div class="about-section">
  <div class="about-container">
   <div class="about-title">
     <h1>About Us</h1>
   </div>
  <div class="about-content">
    <div class="about-article">
      <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque magni, eius voluptatum dignissimos autem, iusto qui incidunt dolores excepturi ut cumque praesentium architecto placeat! Aliquam nesciunt sapiente architecto esse suscipit.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vitae ipsam animi reprehenderit quia aperiam necessitatibus libero quas, illum expedita nulla consequuntur cupiditate in aliquid, sequi nemo id vero inventore?</p>
      <div class="button">
        <a href="">Read More</a>
      </div>
    </div>
  </div>
    <div class="about-image-section">
      <img src="{{asset('Site/image/aboutus.jpg')}}" alt="" width="100%">
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