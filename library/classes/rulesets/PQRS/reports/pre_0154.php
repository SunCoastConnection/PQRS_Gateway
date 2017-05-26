<?php
/**
 * Pre Measure 0154 -- Call to createPopulationCriteria()
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */

class pre_0154 extends AbstractPQRSReport
{   
    public function createPopulationCriteria()
    {
        return new pre_0154_PopulationCriteria();
    }
}

?>