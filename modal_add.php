	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>
	<br>
	<br>
	<br>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Add</h3>
</div>
<div class="modal-body">
<form method="post" action="upload.php"  enctype="multipart/form-data">
<table class="table1">
	<tr>
		<td><label style="color:red; font-size:18px;">Name</label></td>
		<td width="30"></td>
		<td><input type="text" name="u_name" placeholder="FirstName" required /></td>
	</tr>
	<tr>
		<td><label style="color:red; font-size:18px;">Email</label></td>
		<td width="30"></td>
		<td><input type="text" name="email" placeholder="LastName" required /></td>
	</tr>
	<tr>
		<td><label style="color:red; font-size:18px;">chouse your Image</label></td>
		<td width="30"></td>
		<td><input type="file" name="image"></td>
	</tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cleare</button>
<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>			