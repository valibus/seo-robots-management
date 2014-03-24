<?php

class Valibus_Seo_Model_Observer
{
    public function editMetas($observer)
    {
        try {
            /* @var $layout Mage_Core_Model_Layout */

            $layout = $observer->getLayout();

            //if isset information robots
            $robots=$layout->getBlock('head')->getRobots();
            if (isset($robots)){
                $robotsParam=strtoupper(Mage::helper('valibus_seo')->getRobotsInfo());
                $layout->getBlock('head')->setRobots($robotsParam);
            }
        } catch (Exception $e) {
            mage::log($e->getMessage(), null, 'valibus_seo_crawl_management.log');

        }
    }
}