<!DOCTYPE html>
<html>
<head>
	<title>Watchlist Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="jquery-3.6.0.min.js"></script>
	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			function reloadList() {
				$.get('list.php', function(html){
					$('#list-wrap').html(html);
				});
			}
			
			$(document).on('click', '#logout', function() {
				window.location.href = "logout.php";
			});
			
			$(document).on('click', '#add', function() {
				let title = $('#title').val().trim();
				let date = $('#release-date').val().trim();
				
				if ( ! title || ! date) {
					alert('All fields are required');
				} else {
					$.post('add.php', {title: title, release_date: date}, function(){
						reloadList();
						$('#title').val('');
						$('#release-date').val('');
					});
				}
			});
			
			$(document).on('click', '.delete', function() {
				let filmID = $(this).closest('.detail-row').data('id');
				$.post('delete.php', {film: filmID}, function(){
					reloadList();
				});
			});
			
			$(document).on('click', '.edit', function() {
				let row = $(this).closest('.detail-row');
				let filmID = row.data('id');
				$.post('edit_form.php', {film: filmID}, function(html){
					row.replaceWith(html);
				});
			});
			
			$(document).on('click', '.cancel', function() {
				reloadList();
			});
			
			$(document).on('click', '.save', function() {
				let row = $(this).closest('.edit-row');
				let filmID = row.data('id');
				let title = row.find('.title').val().trim();
				let date = row.find('.release-date').val().trim();
				
				if ( ! title || ! date) {
					alert('All fields are required');
				} else {
					$.post('edit.php', {film: filmID, title: title, release_date: date}, function(){
						reloadList();
					});
				}
			});
		});
	</script>
</head>

<body>
	<div class="mt-2 mx-3">
		<div class="container">
			<button id="logout" class="btn btn-secondary float-end">Logout</button>
		</div>
	
		<div class="w-50 bg-secondary rounded p-3">
			<h4>Add Film</h4>
			<label for="title" class="form-label mt-2">Title</label>
			<input id="title" type="text" name="title" class="form-control"/>
			<label for="release-date" class="form-label mt-2">Release Date</label>
			<input id="release-date" type="date" name="release_date" class="form-control"/>
			<button id="add" class="btn btn-light mt-3">Add</button>
		</div>

		<div id="list-wrap" class="w-50 border border-3 rounded p-3 mt-4">
			<?php include("list_view.php"); ?>
		</div>
	
	</div>

</body>
</html>