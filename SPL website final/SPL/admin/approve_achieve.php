<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
		include "../connection.php";
		$stmt=$conn->prepare("SELECT achieve_id,name,email,achievement from achieve where display=0");
		$stmt->execute();
		$stmt->bind_result($id,$name,$email,$desc);
		?>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="css/admin.css" rel="stylesheet">
		<div class="heading">Achievements awaiting Approval<a href="index.php"><button class="right btn btn-primary">Admin Panel</button></a></div>
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
				      <label for="achievehead">Heading</label>
				      <input type="text" required="required" class="form-control" id="achievehead" name="achievehead" placeholder="Appropriate Heading to be given by Admin">
				    </div>
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
              url: 'getAchieve.php',
              type: 'POST',
              data: { id: id },
               success: function(data){
                var obj=$.parseJSON(data);
                $("#achievename").val(obj.name);
                $("#achieveemail").val(obj.email);
                $("#achievemssg").val(obj.achieve);
               },
              error: function(textStatus, errorThrown){
                alert(errorThrown);
               }
            });  
	}
	function approve() {
		var head=$("#achievehead").val();
		$.ajax({
              url: 'achieve_done.php',
              type: 'POST',
              data: { id: id, heading: head },
               success: function(data){
                var obj=$.parseJSON(data);
                alert(obj.mssg);
               // window.location.href="approve_achieve.php";
               },
              error: function(textStatus, errorThrown){
                alert(errorThrown);
               }
            });  
	}
</script>