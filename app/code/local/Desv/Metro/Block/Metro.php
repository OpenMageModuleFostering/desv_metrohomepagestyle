<?php
class Desv_Metro_Block_Metro extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getMetro()     
     { 
        if (!$this->hasData('metro')) {
            $this->setData('metro', Mage::registry('metro'));
        }
        return $this->getData('metro');
        
    }
	public function getFeaturedProducts() {
		$idsProduct = Mage::getStoreConfig("metro/metro/ids");
		$featured_product = explode(",",$idsProduct);
		return $featured_product;
	}
	public function getCategoryIDS() {
		$idcs = Mage::getStoreConfig("metro/metro/idcs");
		$idcs1 = explode(",",$idcs);
		return $idcs1;
	}
	public function getMetroColors() {
		$colorcodes = Mage::getStoreConfig("metro/metro/metrocolor");
		$colorcode = explode(",",$colorcodes);
		return $colorcode;
	}
	public function getRandomMetroColors() {
		$colorcodes = Mage::getStoreConfig("metro/metro/metrocolor");
		$colorcode = explode(",",$colorcodes);
		shuffle($colorcode);
		return $colorcode;
	}
	public function cutText($text,$cond) {
		$a=@explode(" ",$text); $b=count($a);
		if ($cond>=$b) $str=$text;
		else {
			$str="";
			for ($i=0;$i<$cond;$i++) {
				$str.=$a[$i]." ";
			}
			$str.="...";
		}
		return strip_tags($str);
	}
}