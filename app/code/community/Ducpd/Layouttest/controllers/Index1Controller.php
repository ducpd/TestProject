<?php


class Ducpd_Layouttest_Index1Controller extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        //echo 'dsdsd';die;
        $this->loadLayout();
        //load helper
        $helper = Mage::helper('Layouttest/layout');
        //Generate blank layout
        echo $this->getBlockRoot($helper)->toHtml();

    }

    protected function getBlockRoot($helper)
    {
        /* @var $root Mage_Core_Block_Abstract */
        $layoutObject = $this->getLayout();
        //generate new one
        $root = $layoutObject->createBlock('core/template', 'root');
        //header
        $helper->createSubBlock($layoutObject, 'root', 'header', 'core/template', 'header');
        //logo
        $helper->createSubBlock($layoutObject, 'header', 'logo', 'core/template', 'logo');

        //content
        $helper->createSubBlock($layoutObject, 'root', 'content', 'core/text_list', 'content');
        //contain a
        $helper->createSubBlock($layoutObject, 'content', 'block_a', 'core/template', 'subblock');
        //contain b
        $helper->createSubBlock($layoutObject, 'content', 'block_b', 'core/template', 'subblock');

        //left
        $helper->createSubBlock($layoutObject, 'root', 'left', 'core/text_list', 'left');
        //contain c
        $helper->createSubBlock($layoutObject, 'left', 'block_c', 'core/template', 'subblock');

        //right
        $helper->createSubBlock($layoutObject, 'root', 'right', 'core/text_list', 'right');
        //contain d
        $helper->createSubBlock($layoutObject, 'right', 'block_d', 'core/template', 'subblock');

        //footer
        $helper->createSubBlock($layoutObject, 'root', 'footer', 'core/template', 'footer');

        //finish
        $root->setTemplate('root/layout1.phtml');
        return $root;
    }


}