<?php include "db.php";?>
<?php include "functions.php";?>

<?php readRows();?>

<?php include "includes/header.php";?>
    
		<div class="container">
			<div class="col-xs-6">
				
				<pre>
				<?php readRows();?>
				</pre>
				
			</div>
			
<?php include "includes/footer.php";?>