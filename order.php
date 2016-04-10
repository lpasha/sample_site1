<!DOCTYPE html>
<html>
<!--
Created by : Your projects team names 

-->
	<head>
	
	<script src="order_page.js"></script>
	</head>

	<body>
	
	<?php include("header.php"); ?>
	
		 
	 <div class="contentTitle"><h1>Order Now </h1></div>
	
	
	<div class="contentText">
	<p> Following items can be ordered online  </p> 
	  <div class="product-item">
		
		  <div class="product-image"><img height="95" width="130" src="images/prod/vb.jpg"></div>
		  <div><strong>Veg Biryani</strong></div>
		  <div class="product-price">$10.99</div>
		  <div><input id="vb-box" type="number" name="quantity" value="1" min="1" max="15"/><input id="vb-btn" type="button" value="Add to cart" class="btnAddAction" /></div>
		
	  </div>
	    <div class="product-item">
		
		  <div class="product-image"><img height="95" width="130" src="images/prod/eb.jpg"></div>
		  <div><strong>Egg Biryani</strong></div>
		  <div class="product-price">$11.99</div>
		  <div><input id="eb-box" type="number" name="quantity" value="1" min="1" max="15" /><input id="eb-btn" type="button" value="Add to cart" class="btnAddAction" /></div>
		
	  </div>
	    <div class="product-item">
		
		  <div class="product-image"><img height="95" width="130" src="images/prod/cb.jpg"></div>
		  <div><strong>Chicken Biryani</strong></div>
		  <div class="product-price">$12.99</div>
		  <div><input id="cb-box" type="number" name="quantity" value="1" min="1" max="5" />
		  <input type="button" value="Add to cart" class="btnAddAction" id="cb-btn" /></div>
		
	  </div>

	
	 </div>
	 <!-- class: product-item takes space defined in css. so as a work around adding pages breaks here-->
	 <br /><br /><br /><br /><br /><br /><br /><br /><br />
	 <br /><br /><br /><br /><br /><br /><br /><br /><br />
	 
	
	<div class="contentTitle"><h1>CART  </h1></div>
	
	<div class="contentText">
	  
	 <p>Your cart</p>
	 <table cellpadding="10" cellspacing="1">
	<tbody id="cartTable">
	<tr>
		<th><strong>Name</strong></th>
		<th><strong>Quantity</strong></th>
		<th><strong>Price</strong></th>
	</tr>
	</tbody>
	</table>
	 
	 </div> 
		
</div>
	<?php include("footer.php"); ?> 
	</body>

</html>
