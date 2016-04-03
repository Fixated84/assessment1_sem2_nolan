function chpic(pic){


var filez = pic;
var newtitle;
var test;





if( filez == "../images/cars/1000_1.jpeg" ){	
	
   newtitle =  "1000";
    
	
}else if( filez == "../images/cars/1000_2.jpeg" ){	
	
   newtitle =  "1000";
   
}else if (filez == "../images/cars/1000_3.jpeg"){ 

   newtitle =  "1000";
   
   }else if (filez == "../images/cars/1000_4.jpeg"){ 
   
      newtitle =  "1000";
	 
	  
	   }else if (filez == "../images/cars/123456_1.jpeg"){ 
   
      newtitle =  "123456";
	  
	   }else if (filez == "../images/cars/123456_2.jpeg"){ 
   
      newtitle =  "123456";
	  
	   }else if (filez == "../images/cars/123456_3.jpeg"){ 
   
      newtitle =  "123456";
	  
	   }else if (filez == "../images/cars/123456_4.jpeg"){ 
   
      newtitle =  "123456";
	  test = 'test';
	  
	  	   }else if (filez == "../images/designs/property8.jpg"){ 
   
      newtitle =  "Alice&nbsp;152&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property9.jpg"){ 
   
      newtitle =  "Jodie&nbsp;154&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property10.jpg"){ 
   
      newtitle =  "Brook&nbsp;162&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property11.jpg"){ 
   
      newtitle =  "Halifax&nbsp;162&nbsp;-&nbsp;4&nbsp;Bedrooms&nbsp;1&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property12.jpg"){ 
   
      newtitle =  "Jodie&nbsp;163&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property13.jpg"){ 
   
    newtitle =  "Sorrento&nbsp;165&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Study&nbsp;1&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property14.jpg"){ 
   
     newtitle =  "Sorrento&nbsp;165&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Study&nbsp;2&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
}	
document.getElementById(newtitle).innerHTML =  '<a href=' + pic + ' class="highslide" onclick="return hs.expand(this)"> <img class="propertys img-responsive img-cool1z" border=0  src=' + pic + '>';

} 

 
 function chpic2(pic){
document.getElementById('container').innerHTML = ' <ul> <li class="tip1"><a href="#" title="">?<span class="note">landscaping to all outside areas is just part of our standard package.</span>  <li class="tip2"><a class="showitgood" href="#" title="">?<span class="note">A wipe range of additional features are avialable including a cosy fireplace.</span></a></li> <li class="tip3"><a class="showitgood1" href="#" title="">?<span class="note">A quality water tank is just one of our many standard inclusions.</span></a></li>   <li class="tip4"><a href="#" title="">?<span class="note">We use only the highest quality Australian building products.</span></a></li>   <li class="tip5"><a href="#" title="">?<span class="note">Quality fittings and fixtures throughout are standard features in all our homes.</span></a></li></a> </ul> <img class="propertys" border=0 src=' + pic + '>';
}
