//java script for order page. 

// team 

// when page is loaded call the start function


function start() {
document.getElementById("vb-btn").addEventListener("click",function(){update_cart("vb01")},false)
document.getElementById("eb-btn").addEventListener("click",function(){update_cart("eb01")},false)
document.getElementById("cb-btn").addEventListener("click",function(){update_cart("cb01")},false)

	
} // end 

function update_cart(item) {
		
	// based on item pass the inputs to update table function
	switch(item) {
		case "vb01":
		  var q1 = document.getElementById("vb-box").value;
		  update_table("Veg Biryani",q1,10.99);
		  break;
		case "eb01":
		  var q2 = document.getElementById("eb-box").value;
		  update_table("Egg Biryani",q2,11.99);
		  break;
		case "cb01":
		  var q3 = document.getElementById("cb-box").value;
		  update_table("Chicken Biryani",q3,12.99);
		  break;
		
	} //end switch 
	
} // end of function

function update_table(name,quntity,price) {
	
	// Create a row and appned it 
	var tbody = document.getElementById("cartTable")
	var name_col = document.createElement("td");
	var qunat_col = document.createElement("td");
	var price_col = document.createElement("td");
	var newRow = document.createElement("tr");
	name_col.appendChild(document.createTextNode(name));
	qunat_col.appendChild(document.createTextNode(quntity));
	price_col.appendChild(document.createTextNode(price * quntity));
	newRow.appendChild(name_col);
	newRow.appendChild(qunat_col);
	newRow.appendChild(price_col);
	tbody.appendChild(newRow);
	
	
}//end function

window.addEventListener("load",start,false);