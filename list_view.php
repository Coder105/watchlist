<h2>Watch List</h2>
<?php foreach ($watchlist_results as $row) { ?>
	<p class="detail-row" data-id="<?php echo $row['film_id']; ?>"><button class="edit">Edit</button> <?php echo $row['title'] . ' - ' . date('m/d/Y', strtotime($row['release_date'])); ?> <button class="delete">X</button></p>
<?php } ?>