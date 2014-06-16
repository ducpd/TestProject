<?php

class Ducpd_Layouttest_Helper_Layout extends Mage_Core_Helper_Abstract
{
    public function createSubBlock($layoutObject,$fatherName, $childName, $type, $link)
    {
        //get father
        $father = $layoutObject->getBlock($fatherName);
        //create child block
        $subBlock = $layoutObject->createBlock($type, $childName);
        //assign for template type
        if ($type == 'core/template') {
            $subBlock->setTemplate("$link/$childName.phtml");
        }
        //append
        $father->append($subBlock, $childName);
    }
}