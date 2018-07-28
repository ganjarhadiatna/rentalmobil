<?php

function convert_single_word_string_to_array($string) {
    $array = explode(' ', $string);
    if (count($array) > 1) {
        echo 'WARNING: (convert_single_word_string_to_array) not single word string';
    }
    return $array;
}

/**
 * Remove elements by keys from $user_arr
 */
function array_ignore($ignore_keys, & $array) {
    if (gettype($ignore_keys) == 'string') {
        $ignore_keys = convert_single_word_string_to_array($ignore_keys);
    }

    foreach ($ignore_keys as $ignore_key) {
        unset($array[$ignore_key]);
    }
}

