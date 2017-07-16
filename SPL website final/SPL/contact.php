<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>SPL</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>

<?php include "header.php"; ?>

<div class="container menu">
  <ul class="nav nav-pills nav-justified">
    <li id="contact" class="item active"><a data-toggle="tab" href="#contactForm">Contact Us</a></li>
    <li id="achieve" class="item"><a data-toggle="tab" href="#achieveForm">Achievement you would like to share?</a></li>
    <li id="event" class="item"><a data-toggle="tab" href="#eventForm">Upcoming Event you would like to share?</a></li>
  </ul>

  <div class="tab-content">
  	<div class="tab-pane fade in active" id="contactForm">
	<form method="post" onsubmit="return checkContact()" action="contact_action.php">
		<div class="form-group">
	      <label for="contactname">Name</label>
	      <input type="text" required="required" class="form-control" id="contactname" name="contactname" placeholder="Your Name">
	    </div>
	    <div class="form-group">
	      <label for="contactemail">Email</label>
	      <input type="email" required="required" class="form-control" id="contactemail" name="contactemail" placeholder="Your E-Mail">
	    </div>
	    <div class="form-group ">
	      <label for="contactmssg">Your Message</label>
	     <textarea required="required" id="contactmssg" name="contactmssg" class="form-control" placeholder="Your Message"></textarea> 
	    </div>
	    <button type="submit" class="btn btn-default">Send Message</button>
	</form>
	</div>

	<div class="tab-pane fade" id="achieveForm">
	<form method="post" onsubmit="return checkAchieve()" action="achieve_action.php">
		<div class="form-group">
	      <label for="achievename">Name</label>
	      <input type="text" required="required" class="form-control" id="achievename" name="achievename" placeholder="Your Name">
	    </div>
	    <div class="form-group">
	      <label for="achieveemail">Email</label>
	      <input type="email" required="required" class="form-control" id="achieveemail" name="achieveemail" placeholder="Your E-Mail">
	    </div>
	    <div class="form-group ">
	      <label for="achievemssg">Describe the Event along with your Achievements</label>
	     <textarea required="required" id="achievemssg" name="achievemssg" class="form-control" placeholder="Description"></textarea> 
	    </div>
	    <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>

	<div class="tab-pane fade" id="eventForm">
	<form method="post" onsubmit="return checkEvent()" action="event_action.php">
		<div class="form-group">
	      <label for="eventname">Name</label>
	      <input type="text" required="required" class="form-control" id="eventname" name="eventname" placeholder="Your Name">
	    </div>
	    <div class="form-group">
	      <label for="eventemail">Email</label>
	      <input type="email" required="required" class="form-control" id="eventemail" name="eventemail" placeholder="Your E-Mail">
	    </div>
	    <div class="form-group ">
	      <label for="eventmssg">Describe the Event</label>
	     <textarea required="required" id="eventmssg" name="eventmssg" class="form-control" placeholder="Description"></textarea> 
	    </div>
	    <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
  </div>

</div>



<?php include "footer.php"; ?>

</body>
</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	function checkContact() {
		var name=$("#contactname").val().trim();
		var email=$("#contactemail").val().trim();
		var mssg=$("#contactmssg").val().trim();
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		res="";
		if(!re.test(email)){
            res=res+"\nEnter a valid email";
        }
        if(name.length<1)
        	res+="\nEnter Name";
        if(mssg.length<50)
        	res+="\nMessage should be atleast 50 characters long.";
        if(res.length==0)
        	return true;
        alert(res);
        return false;
	}

	function checkAchieve() {
		var name=$("#achievename").val().trim();
		var email=$("#achieveemail").val().trim();
		var mssg=$("#achievemssg").val().trim();
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		res="";
		if(!re.test(email)){
            res=res+"\nEnter a valid email";
        }
        if(name.length<1)
        	res+="\nEnter Name";
        if(mssg.length<50)
        	res+="\nMessage should be atleast 50 characters long.";
        if(res.length==0)
        	return true;
        alert(res);
        return false;
	}

	function checkEvent() {
		var name=$("#eventname").val().trim();
		var email=$("#eventemail").val().trim();
		var mssg=$("#eventmssg").val().trim();
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		res="";
		if(!re.test(email)){
            res=res+"\nEnter a valid email";
        }
        if(name.length<1)
        	res+="\nEnter Name";
        if(mssg.length<50)
        	res+="\nMessage should be atleast 50 characters long.";
        if(res.length==0)
        	return true;
        alert(res);
        return false;
	}
	$(document).ready(function(){
		$("#contact").addClass("active");
	});
</script>