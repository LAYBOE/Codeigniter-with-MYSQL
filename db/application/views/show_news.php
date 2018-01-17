<!DOCTYPE html>
<html>
<head>
	<title>All News</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
    <a href="<?php echo site_url('news/add'); ?>">Add News</a>
		<table class="table table-bordered table-hover table-striped" >
            <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Source</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
            </thead>
            <tbody>
            	<?php 
            		if (isset($view_data) && is_array($view_data) && count($view_data)) 

            			foreach ($view_data as $key => $data) {
            			
            	?>
            	<tr>
            	<td><?php echo $data['post_id']; ?></td>
            	<td><?php echo $data['post_title']; ?></td>
            	<td><?php echo $data['post_author']; ?></td>
            	<td><?php echo $data['post_date']; ?></td>
            	<td><?php echo $data['source']; ?></td>
            	<td><a href="<?php echo base_url('News/edit_data/'.$data['post_id']) ; ?>">Edit</a></td>
            	<td><a href="<?php echo site_url('News/delete_data/'.$data['post_id']) ; ?>">Delete</a></td>
            	</tr>
            	<?php } ?>
            </tbody>
            </table>
</body>
</html>