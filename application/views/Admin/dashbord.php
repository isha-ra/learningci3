<?php include ('header.php');?>
<div class="container" style="margin-top: 20px">



<div class="table">
	<table>
		<thead>


			
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
	
		
<?php if(is_array($articles)): ?>
<?php foreach($articles as $row):?>  
		<tr>
			<td>1.</td>
			<td><?php echo $row->article_title; ?></td>
			<td>id</td>
			<td><a href="" class="btn btn-primary">Edit</a>
				<a href="" class="btn btn-danger">Delete</a>

			</td>

		</tr>
  
<?php endforeach;?>  
<?php else: ?>
	<tr>
		<td colspan="3">No data available</td>
	</tr>

<?php endif; ?>


		





	</tbody>

	</table>


</div>


</div>
<?php include ('footer.php');?>
