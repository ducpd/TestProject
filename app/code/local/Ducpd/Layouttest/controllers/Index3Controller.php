<?php

class Ducpd_Layouttest_Index3Controller extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout('Layouttest_index3_handle');
        $this->renderLayout();
    }
}
