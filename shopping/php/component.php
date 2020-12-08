<?php

function component($productname,$productprice,$productimg){
	$element="

 <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
<form action=\"index.php\" method=\"post\">
<div class=\"card shadow\">
<div>
<img src=\"$productimg\" alt=\"image1\"class=\"img-fluid card-img-top\">
</div>
<div class=\"card-body\">
<h5 class=\"card-title\">$productname</h5> 
<h6>
<i class=\"fa fa-star\"></i>
<i class=\"fa fa-star\"></i>
<i class=\"fa fa-star\"></i>
<i class=\"fa fa-star\"></i>
 <i class=\"fa fa-star-half-o\"></i>
</h6>
<p class=\"card-text\">
some quick example text to build on the card
</p>
<h5>
<small> <s>$519</s></small>
<span class=\"price\">$$productprice</span>
</h5>
<button type=\"submit\" class=\"btn btn-danger my-3\" name=\"add\">Add to Cart<i class=\"fa fa-shopping-cart\"></i> </button>
</div>
</div>
</form>
</div>
	"
	;
	echo $element;
}
?>