<form action="{{ route('xyz1') }}" method ="POST">
  @csrf()

  <div class = "form">
    Name: <input type="text" name="fullname" placeholder ="Full Name">
  </div> <br/>

  <div class ="form">
    Date of Birth: <input type="date" name="dob">
  </div> <br/>

  <div class ="form">
  Address: <input type="text" name="address">
    <!-- Address: <textarea  name="address"> </textarea> -->
  </div> <br/>

  <div class ="form">
    Mobile No: <input type="number" name="mobile">
  </div> <br/> 
 
  <input type="submit" value="Submit">

 
</form>

