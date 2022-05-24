<?php include('inc/header.php');?>
<title class="title">Data User</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<script src="js/ajax.js"></script>
<?php include('inc/container.php');?>
<div class="container">
<!--  -->
<button class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-info-sign"></span></button>
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content bg-dark text-light">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body">
						<h4>You can only see the data, because some part can't change.</h4>
					</div>
				</div>
			</div>
		</div>
<!--  -->
	<h2>Data Pengguna</h2>
		<table id="recordListing" class="table table-bordered table-striped-dark text-light" style="width: 100%;">
			<thead>
				<tr>
					<th>#</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th>Role</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>

		</table>
	</div>
	<div id="recordModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="recordForm">
    			<div class="modal-content bg-dark text-light">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Record</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="nis" class="control-label">NIS</label>
							<input type="number" class="form-control" id="nis" name="nis" placeholder="Input NIS" required>
						</div>
						<div class="form-group">
							<label for="name" class="control-label">Nama</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Input Nama" required>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Username</label>
							<input type="text" class="form-control"  id="username" name="username" placeholder="Input Username" required>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Password</label>
							<input type="text" class="form-control" id="password" name="password" placeholder="Input Password" required>
						</div>
						<div class="form-group">
							<label for="role" class="control-label">Role</label>
							<select name="role" class="form-control" id="role">
								<option value="admin">Admin</option>
								<option value="user">User</option>
							</select>
						</div>
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>
<?php include('inc/footer.php');?>