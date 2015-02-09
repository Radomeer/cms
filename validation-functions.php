
<?php

	function has_presence($value) {
		return isset($value) || $value !== "";
	}



	function has_max_lenght($value, $max) {
		return strlen($value) <= $max;
	}


	function has_inclusion_in($value, $set) {
		return in_array($value, $set);
	}


	function form_errors($errors=array()) {
		$output = "";

		if(!empty($errros)) {
			$output .= "<div>";
			$output .= "<ul>";
			foreach($errors as $key => $error) {
				$output .= "<li>{$error}</li>" ;
			}
			$output .= "</ul>";
			$output .= "</div>";
		}
		return $output;
	}

?>

