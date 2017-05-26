<?php
/**
 * Pre Measure 0119 -- Call to createPopulationCriteria()
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */

class pre_0119 extends AbstractPQRSReport
{   
    public function createPopulationCriteria()
    {
        return new pre_0119_PopulationCriteria();
    }
}

?>
