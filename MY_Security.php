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

	public function htmlpurify($html,$conf = array()) {
	    $getHTMLPurifier_folder = glob(APPPATH . 'third_party/htmlpurifier-*-standalone',GLOB_ONLYDIR);
	    if(count($getHTMLPurifier_folder) > 0){
		    include_once $getHTMLPurifier_folder[0].'/HTMLPurifier.standalone.php';
		    if(count($conf) > 0){
		    	$conf = HTMLPurifier_Config::createDefault();
		    	if(isset($conf['HTML.AllowedElements']))$conf->set('HTML.AllowedElements', $conf['HTML.AllowedElements']);
		    	if(isset($conf['HTML.AllowedAttributes']))$conf->set('HTML.AllowedAttributes', $conf['HTML.AllowedAttributes']);
		    	if(isset($conf['CSS.AllowedProperties']))$conf->set('CSS.AllowedProperties', $conf['CSS.AllowedProperties']);
		    	if(isset($conf['HTML.MaxImgLength']))$conf->set('HTML.MaxImgLength', $conf['HTML.MaxImgLength']);
		    	if(isset($conf['CSS.MaxImgLength']))$conf->set('CSS.MaxImgLength', $conf['CSS.MaxImgLength']);
		    	if(isset($conf['AutoFormat.AutoParagraph']))$conf->set('AutoFormat.AutoParagraph', $conf['AutoFormat.AutoParagraph']);
		    }else{
		    $conf = HTMLPurifier_Config::createDefault();
		    //$conf->set('HTML.AllowedElements', 'p, a, ul, ol, li, h1, h2, h3, h4, h5, h6, br, strong, em, b, i');
		    $conf->set('HTML.AllowedAttributes', 'src,style,href,height,width,title,alt');
		    $conf->set('CSS.AllowedProperties','color,font-size,float,height,width,font-weight,font-style,font-family,text-align');
		    $conf->set('HTML.MaxImgLength', '800');
		    $conf->set('CSS.MaxImgLength', '800');
		    $conf->set('AutoFormat.RemoveEmpty', true);
		    $conf->set('AutoFormat.AutoParagraph', true);
		    }

		    $HTMLPurifier = new HTMLPurifier;
		    $html = $HTMLPurifier->purify($html,$conf);
		    return $html;
	    }else{
	    	die("You need to download HTMLPurifier.standalone and put it in the third_party folder");
	    }
	}


	public function purify($html,$conf = array()) {
	   return $this->htmlpurify($html,$conf);
	}

	
}
