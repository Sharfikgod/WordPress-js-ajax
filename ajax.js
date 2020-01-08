$(document).ready(function() {
 
	//E-mail Ajax Send
	$("#my_form").submit(function() { //Change
	  var th = $(this);
	  $.ajax({
		type: "POST",
		url: "http://sharfikp.beget.tech/wp-content/themes/lesson3/mail/mail.php", //Change
		data: th.serialize()
	  }).done(function() {
		  
		alert("Thank you!", ); 
		setTimeout(function() {
		  // Done Functions
		  th.trigger("reset");
		}, 1000);
	  });
	  return false;
	});
   
  });