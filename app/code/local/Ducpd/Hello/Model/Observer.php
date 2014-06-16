<?php

class Ducpd_Hello_Model_Observer
{
    public function showBeforeSendResponse()
    {
        $actionName = Mage::app()->getFrontController()->getAction()->getFullActionName();
        echo "<br/>" . 'Action name: ' . $actionName;
    }

    public function reducePriceInProductDetail(Varien_Event_Observer $observer)
    {
        $product = $observer->getProduct();
        $product->setFinalPrice(10);
    }

    public function reducePriceInProductList(Varien_Event_Observer $observer)
    {
        foreach ($observer->getCollection() as $product) {

                $product->setFinalPrice(10);

        }
    }
}