<?php
/**
 *
 */
class Valibus_Seo_Helper_Data extends Mage_Core_Helper_Data
{
    public function getRobotsInfo()
    {
        if (Mage::getStoreConfig('seo/robots/robots_activation')) {
            $robotsArray = unserialize(Mage::getStoreConfig('seo/robots/robots_route'));
            //request
            $request = Mage::app()->getRequest()->getRouteName();
            //controller
            $controller = Mage::app()->getRequest()->getControllerName();

            //Test if tracking log are activated
            if (Mage::getStoreConfig('seo/robots/log_activation')){
                Mage::log("TRACK:: router: ".$request." #controller: ".$controller, null, 'valibus_seo_crawl_management.log');
            }

            foreach ($robotsArray as $elem) {
                if ($elem['router'] == $request) {
                    if ($elem['controller']== $controller && !empty($elem['controller']))
                    {
                        $robots = $elem['robotsdirective'];
                    }
                    elseif (empty($elem['controller'])){
                        $robots = $elem['robotsdirective'];
                    }
                }
            }
            if (isset($robots))
                return $robots;
        }

    }
}