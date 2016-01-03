<?php namespace App\Helpers;

class Text {

    /**
     * Returns an excerpt from a given string (between 0 and passed limit variable).
     *
     * @param $string
     * @param int $limit
     * @param string $suffix
     * @return string
     */

    public static function shorten($string, $limit = 100, $suffix = '…')
	    {
	        if (strlen($string) < $limit) {
	            return $string;
	        }
	        return substr($string, 0, $limit) . $suffix;
	    }
	}