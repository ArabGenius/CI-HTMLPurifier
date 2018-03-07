<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * CI Security (HTMLPurifier)
 *
 * HTMLPurifier class/function for Codeigniter
 *
 * @package   CI Security
 * @subpackage Core
 * @author    Ahmed Al-Maskari
 * @copyright 2018 Ahmed Al-Maskari and Github contributors
 * @link      http://www.abqariservice.com
 * @license   GPL
 * @version   1.0
 */




class MY_Security extends CI_Security {

	public function htmlpurify($html,$conf='') {
	    $getHTMLPurifier_folder = glob(APPPATH . 'third_party/htmlpurifier-*-standalone',GLOB_ONLYDIR);
	    if(count($getHTMLPurifier_folder) > 0){
		    include_once $getHTMLPurifier_folder[0].'/HTMLPurifier.standalone.php';
		    $HTMLPurifier = new HTMLPurifier;
		    $html = $HTMLPurifier->purify($html);
		    return $html;	    	
	    }else{
	    	die("You need to download HTMLPurifier.standalone and put it in the third_party folder");
	    }
	}
}
