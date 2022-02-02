<!DOCTYPE html>
<html>
<head>
	<title>Watchlist Page</title>
	<link rel="stylesheet" href="styles.css" />
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
	<div id="navbar">
		<button id="logout">Logout</button>
	</div>
	
	<div id="add-form-wrap">
		<h4>Add Film</h4>
		<p><label for="title">Title</label>
		<input id="title" type="text" name="title" />
		<p><label for="release-date">Release Date</label>
		<input id="release-date" type="date" name="release_date" /></p>
		<button id="add">Add</button>
	</div>
	
	<div id="list-wrap">
		<?php include("list_view.php"); ?>
	</div>

</body>
</html>