<?php 
	//khai bao bien $layout de load template
	$this->layout = "views/backend/layoutAdmin2.php";
 ?>
<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $formAction; ?>">		
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Name</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->fullname)?$record->fullname:''; ?>" name="fullname" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Email</div>
				<div class="col-md-10">
					<input type="email" value="<?php echo isset($record->email)?$record->email:''; ?>" <?php if(isset($record->email)): ?> disabled <?php endif; ?> name="email" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Password</div>
				<div class="col-md-10">
					<input type="password" name="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" value="Process" class="btn btn-primary">
				</div>
			</div>
			<!-- end rows -->
		</form>
		</div>
	</div>
</div>