<?php

class Ducpd_Hello_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $queryWords = $this->getRequest()->getParam('name');
        echo 'Hello '.$queryWords.'!';
        $this->loadLayout();
        $this->renderLayout();
    }

}
