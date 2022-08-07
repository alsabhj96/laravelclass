<?php 
print_r(session()->all()); 
?>
<form action="{{ Route('Posttestcart')}}" method="POST">
  @csrf()
  Product Id: <input type="text" name="product_id"> <br/>
  Product Cost: <input type="text" name="product_cost"> <br/>
  Product Quantity: <input type="text" name="product_quantity"> <br/>
  <input type="submit" name="" value="Add to cart"> 
</form>