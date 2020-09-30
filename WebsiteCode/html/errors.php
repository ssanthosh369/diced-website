<!-- Php page to count the number of elements in the $errors array and display them if number of array elements is not empty (more than 0) -->

<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
	<?php  endif ?>