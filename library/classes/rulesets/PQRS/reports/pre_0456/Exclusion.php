<?php
/**
 * pre Measure 0456 -- Exclusion 
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */

class pre_0456_Exclusion extends PQRSFilter
{
    public function getTitle() 
    {
        return "Exclusion";
    }
    
    public function test( prePatient $patient, $beginDate, $endDate )
    {
       	// Default return 
        return false;
    }
}