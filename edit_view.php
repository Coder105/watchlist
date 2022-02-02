<p class="edit-row" data-id="<?php echo $watchlist_record['film_id']; ?>">
	<input class="title" type="text" name="title" value="<?php echo $watchlist_record['title'];?>"/>
	<span>-</span>
	<input class="release-date" type="date" name="release_date"  value="<?php echo $watchlist_record['release_date'];?>"/>
	<button class="save">Save</button>
	<button class="cancel">Cancel</button>
</p>