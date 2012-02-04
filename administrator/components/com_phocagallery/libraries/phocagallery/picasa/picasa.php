<?php
/*
 * @package Joomla 1.5
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @component Phoca Gallery
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

class PhocaGalleryPicasa
{

	function getSize(&$mediumT) {
	
		// If small and medium can be taken from $thumbSize, take it from here as these images can be cropped
		$thumbSize 	= array(32, 48, 64, 72, 104, 144, 150, 160);
		$imgMax		= array(94, 110, 128, 200, 220, 288, 320, 400, 512, 576, 640, 720, 800, 912, 1024, 1152, 1280, 1440, 1600);
		$paramsC 	= JComponentHelper::getParams('com_phocagallery');
		
		$lw 		= $paramsC->get( 'large_image_width', 640 );
		$mw 		= $paramsC->get( 'medium_image_width', 100 );
		$sw 		= $paramsC->get( 'small_image_width', 50 );
		$crop 		= $paramsC->get( 'crop_thumbnail', 5 );
		$output		= array();
		$outputS	= $outputM	= $outputL	=	$outputLargeSize = '';
		
		// Large
		foreach ($imgMax as $value) {
			// First value which is greater than the large_image_width will be taken
			if ((int)$value > (int)$lw || (int)$value == (int)$lw) {
				$outputL		= '&imgmax='.(int)$value;
				$outputLargeSize= $value;
				break;
			}
		}
		// Small
		foreach ($thumbSize as $value) {
			// First value which is greater than the large_image_width will be taken
			if ((int)$value > (int)$sw || (int)$value == (int)$sw) {
				$outputS		= '&thumbsize='.(int)$value;
				break;
			}
		}
		
		// Medium
		// Try to handle it as thumbnail
		foreach ($thumbSize as $value) {
			// First value which is greater than the large_image_width will be taken
			if ((int)$value > (int)$mw || (int)$value == (int)$mw) {
				//$outputM		= '&thumbsize='.(int)$value;
				$outputM		= ','.(int)$value;
				$mediumT		= 1;
				break;
			}
		}
		// Try to find it in imgmax
		if ($mediumT != 1) {
			foreach ($imgMax as $value) {
				// First value which is greater than the large_image_width will be taken
				if ((int)$value > (int)$mw || (int)$value == (int)$mw) {
					$outputM		= '&imgmax='.(int)$value;
					$mediumT		= 0;
					break;
				}
			}
		
		}
		
		// Small Crop
		
		if ($crop == 3 || $crop == 5 || $crop == 6 ||$crop == 7) {
			$outputS = $outputS . 'c';
		} else {
			$outputS = $outputS . 'u';
		}
		
		// Medium Crop
		if ($mediumT == 1) {
			if ($crop == 2 || $crop == 4 || $crop == 5 ||$crop == 7) {
				$outputM = $outputM . 'c';
			} else {
				$outputM = $outputM . 'u';
			}
		}
		if ($mediumT == 1) {
			$output['lsm'] = $outputL . $outputS . $outputM;
		} else {
			$output['lsm'] = $outputL . $outputS;
		}
		if ($mediumT != 1) {
			$output['m'] = $outputM;
		}
		// This we need for getting info about size and and removing this size to get an original image
		// It is not lsm
		$output['ls']	= $outputLargeSize;
		
		return $output;
	}
	
	function correctSizeWithRate($width, $height, $corWidth = 100, $corHeight = 100) {
		
		$image['width']		= $corWidth;
		$image['height']	= $corHeight;
		
		if ($width > $height) {
			if ($width > $corWidth) {
				$image['width']		= $corWidth;
				$rate 				= $width / $corWidth;
				$image['height']	= $height / $rate;
			} else {
				$image['width']		= $width;
				$imageHeight	= $height;
			}
		} else {
			if ($height > $corHeight) {
				$image['height']	= $corHeight;
				$rate 				= $height / $corHeight;
				$image['width'] 	= $width / $rate;
			} else {
				$image['width']		= $width;
				$image['height']	= $height;
			}
		}
		return $image;
	}
	
	/* 
	 * Used while pagination
	 */
	function renderProcessPage($id, $refreshUrl, $countInfo = '') {
		
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . "\n";
		echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-en" lang="en-en" dir="ltr" >'. "\n";
		echo '<head>'. "\n";
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'. "\n\n";
		echo '<title>'.JText::_( 'PHOCAGALLERY_PICASA_LOADING_DATA').'</title>'. "\n";
		echo '<link rel="stylesheet" href="'.JURI::base(true).'/components/com_phocagallery/assets/phocagallery.css" type="text/css" />';

		echo '</head>'. "\n";
		echo '<body>'. "\n";
		
		echo '<div style="text-align:right;padding:10px"><a style="font-family: sans-serif, Arial;font-weight:bold;color:#fc0000;font-size:14px;" href="index.php?option=com_phocagallery&controller=phocagalleryc&task=edit&cid[]='.(int)$id.'">' .JText::_( 'PHOCAGALLERY_STOP_LOADING_PICASA_IMAGES' ).'</a></div>';
		
		echo '<div id="loading-ext-img-process" style="font-family: sans-serif, Arial;font-weight:normal;color:#666;font-size:14px;padding:10px"><div class="loading"><center>'. JHTML::_('image.site',  'icon-loading.gif', '/components/com_phocagallery/assets/images/', NULL, NULL, JText::_('Loading') ) .'  '.JText::_('PHOCAGALLERY_PICASA_LOADING_DATA').'</center>';
		
		echo $countInfo;
		echo '</div></div>';
		
		echo '<meta http-equiv="refresh" content="1;url='.$refreshUrl.'" />';
		echo '</body></html>';
		exit;
	}

}
?>