<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
		include "../connection.php";
		$stmt=$conn->prepare("SELECT event_id,name,email,description from event");
		$stmt->execute();
		$stmt->bind_result($id,$name,$email,$desc);
		?>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="css/admin.css" rel="stylesheet">
		<div class="heading">Events awaiting Approval<a href="index.php"><button class="right btn btn-primary">Admin Panel</button></a></div>
		<table class="table table-hover">
			<thead>
		      <tr>
		        <th>Name</th>
		        <th>Email</th>
		        <th>Description</th>
		        <th>Edit</th>
		      </tr>
		    </thead>
		<?php
		while($stmt->fetch()){
				if(strlen($desc)>200){
				$desc=substr($desc,0,200);
				$desc="$desc...";
			}
			?>
			<tr>
			<td><?php echo $name; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $desc; ?></td>
			<td><button class="btn btn-default" data-toggle="modal" data-target="#myModal" onclick="getdata(<?php echo $id; ?>)"><?php echo "Check" ?></button></td>
			</tr>
			<?php
		}
		?>
		</table>
		 <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Approval Form</h4>
		        </div>
		        <div class="modal-body">
		          <form method="post">
		         	<div class="form-group">
				      <label for="eventhead">Heading</label>
				      <input type="text" required="required" class="form-control" id="eventhead" name="eventhead" placeholder="Appropriate Heading to be given by Admin">
				    </div>
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
				    <button class="btn btn-default" onclick="approve()">Approve</button>
				</form>
		        </div>
		      </div>
		      
		    </div>
		  </div>	  
		<?php
	}else
		header("location: ../index.php");
?>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
	var id=0;
	function getdata(a) {
		id=a;
		$.ajax({
              url: 'getEvent.php',
              type: 'POST',
              data: { id: id },
               success: function(data){
                var obj=$.parseJSON(data);
                $("#eventname").val(obj.name);
                $("#eventemail").val(obj.email);
                $("#eventmssg").val(obj.desc);
               },
              error: function(textStatus, errorThrown){
                alert(errorThrown);
               }
            });  
	}
	function approve() {
		var head=$("#eventhead").val();
		var desc=$("#eventmssg").val();
		$.ajax({
              url: 'event_done.php',
              type: 'POST',
              data: { id: id, heading: head, desc: desc },
               success: function(data){
                var obj=$.parseJSON(data);
                alert(obj.mssg);
               
               },
              error: function(textStatus, errorThrown){
                alert(errorThrown);
               }
            });  
	}
</script>