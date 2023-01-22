<h2>Watch List</h2>
<?php foreach ($watchlist_results as $row) { ?>
	<div class="border p-1 my-1 detail-row" data-id="<?php echo $row['film_id']; ?>"><button class="btn btn-secondary btn-sm edit">Edit</button>
	<?php echo $row['title'] . ' - ' . date('m/d/Y', strtotime($row['release_date'])); ?>
	<button class="btn p-0 mx-1 mb-2 delete">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
	  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
	  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
	</svg>
	</button>
	</div>
<?php } ?>