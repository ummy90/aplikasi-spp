<?php
    if (!function_exists('listLevel')) {
    	function listLevel($a){
    		switch ($a) {
    			case '1':
    			    return "Administrator";
    			    break;
    			case '2':
    			    return "Pegawai";
    			    break;
    			default:
    			    return "None";
    			    break;
    		}
    	}
    }