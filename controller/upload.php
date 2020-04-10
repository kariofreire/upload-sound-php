<?php

	$pasta = dirname(__DIR__)."/music/";

	if (move_uploaded_file($_FILES["fileSound"]["tmp_name"], $pasta.$_FILES["fileSound"]["name"])) {
		echo "success";
	}else {
		echo "error";
	}

?>