<?php

function productListTemplates($r,$o){
	return $r.<<<HTML


	<div class="col-xs-12 col-md-4">

	
			<figure class="figure product display-flex flex-column">
			
			<div class="flex-stretch">
			<img src="img/$o->thumbnail" alt="">
			</div>
			<figcaption class="flex-none">
				
				<div>&dollar;$o->price</div>
				<div>$o->name</div>

		</figcaption>
	</figure>
		</div>

	HTML;


}