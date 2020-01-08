<?php

/*
* Template name: Главная1
*/

get_header();

?> 

 <!-- END of sidebar -->
        
        <div class="content">
       
        <?php 
        echo do_shortcode('[recent_products per_page="9" orderby="date" order="desc" ]');
       ?>


            <div class="cleaner h50"></div>
	     	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    



<?php

get_footer(); 

?>