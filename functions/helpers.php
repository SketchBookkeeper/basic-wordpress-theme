<?php

/**
* Check for Empty Array, returns true if the array is not empty
* @author Paul Allen
* @see https://stackoverflow.com/questions/8328983/check-whether-an-array-is-empty
* @param Array
* @return boolean
*/

function basic_check_for_empty_array( $array ) {
	if ( 'array' !== gettype( $array ) ) {
		return;
	}

	$filtered_array = array_filter( $array );

	if ( ! empty( $filtered_array ) ) {
		return true;
	}

	return false;
}
