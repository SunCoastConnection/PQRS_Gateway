<?php
/**
 * PQRS Measure 0424 -- Call to createPopulationCriteria()
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package OpenEMR
 * @link    http://suncoastconnection.com
 * @author  Suncoast Connection
 */

class pre_0424 extends AbstractPQRSReport
{   
    public function createPopulationCriteria()
    {
        return new pre_0424_PopulationCriteria();
    }
}

?>