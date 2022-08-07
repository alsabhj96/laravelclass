@extends('site.template')
@section('contactuspage')
<section class="contact">
  <div class="content">
    <h2>Contact Us</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, neque nulla quas corporis facere possimus maxime architecto mollitia deserunt ipsum accusantium fugit qui assumenda labore incidunt delectus quia alias. Iure?</p>
  </div>
  <div class="contact-container">
    <div class="contactInfo">
      <div class="box">
        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
        <div class="text">
          <h3>Address</h3>
          <p>4671 sugar camp Road,<br>Owatonna,Minnesota,<br>55060</p>
        </div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
        <div class="text">
          <h3>Phone</h3>
          <p>+977 9861967695</p>
        </div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
        <div class="text">
          <h3>Email</h3>
          <p>alishabhujel2017@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="contactform">
      <form>
        <h2>Send Message</h2>
        <div class="inputBox">
          <input type="text" nam="" require="required">
          <span>Full Name</span>
        </div>
        <div class="inputBox">
          <input type="text" nam="" require="required">
          <span>Email</span>
        </div>
        <div class="inputBox">
          <input type="text" nam="" require="required">
          <span>Type your </span>
        </div>
      </form>
    </div>
  </div>
</section>
@stop