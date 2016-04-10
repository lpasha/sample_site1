// java script for index page 

// This function is to chnage images automatically

// saving the image names into an array (images/food folder)
img_array=["food1.jpg","food2.jpg","food3.jpg","food4.jpg","food5.jpg","food6.jpg","food7.jpg","food8.jpg","food9.jpg","food10.jpg","food11.jpg"]


function change_image() {
	
	// Get the img element from index page 
	var image_tag = document.getElementById("imageRoll")
	
	// generate a random number between 1 and 10
	var x = Math.floor((Math.random() * 10) + 1);
	
	// Set random image from our array
	image_tag.src = "images/food/" + img_array[x];
	
	//call function again
	setTimeout(change_image, 2000);
	
}

// call the change_image function when page is loaded 
window.addEventListener("load",change_image,false);

