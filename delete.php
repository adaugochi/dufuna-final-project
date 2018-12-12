<?php

	require 'db.php';

		if (isset($_POST['deletebtn'])) {
			$delete_id = str_replace("'", "", ($_POST['delete']));
		
			$query_delete = "DELETE FROM `posts` WHERE id = '$delete_id'";
			$run_query_delete = mysqli_query($conn, $query_delete);

			if ($run_query_delete) {
			 	header('location:welcome.php');
			} else {
				echo "<script> alert('not deleted')</script>";
			}

		}
?>