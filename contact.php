
        <?php

/*
* Template name: Контакты
*/

get_header('example');
?> 

<div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
		
			<?php get_sidebar(); ?>
            
      
      

        
        <div id="content">
        	<h2>Обратная связь</h2>
			
            <div class="col col_13">
            <p>Etiam eget leo nisl. Morbi magna enim, lobortis vitae condimentum. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
            <div id="contact_form">
           
               <form id="my_form">
 
  <!-- Hidden Required Fields -->
  <input type="hidden" name="project_name" value="Free CSS Templates">
  <input type="hidden" name="admin_email" value="sharfikplay@gmail.com">
  <input type="hidden" name="form_subject" value="Заявка">
  <!-- END Hidden Required Fields -->
 
                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>
						
                    <label for="email">Email:</label> <input type="text" name="email" id="email" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>
                        
                    <label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                    <div class="cleaner h10"></div>
        
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>
 					
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
 
 
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/ajax.js"></script>
        </div>
        </div>
        <div class="col col_13">
        	<h5>Местоположение Первое</h5>
            111-303 Fusce nec ante at odio blandit, <br />
            In vitae lacus in purus interdum, 10640<br />
            Nam rhoncus, diam a mollis tempor<br /><br />
			<strong>Телефон:</strong> 010-225-1800<br />
            <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a> <br />
            <div class="cleaner divider"></div>
			
			<div class="cleaner h30"></div>
			
            <h5>Местоположение Второе</h5>
            120-300 Duis lacinia dictum, <br />
            Ullamcorper mattis magna non, 15520<br />
            Maecenas a diam, a mollis magna<br /><br />
			<strong>Телефон:</strong> 010-226-1200<br />
            <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a> <br />           
        </div>
        
        <div class="cleaner h30"></div>
        
        <iframe width="660" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"></iframe>
            
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
   
    <?php

get_footer(); 

?>  
</body>
</html>