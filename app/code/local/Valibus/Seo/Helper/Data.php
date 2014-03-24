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