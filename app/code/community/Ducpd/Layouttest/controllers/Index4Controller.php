<?php

class Ducpd_Layouttest_Index4Controller extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout('Layouttest_index4_handle');
        $this->renderLayout();
    }
}
