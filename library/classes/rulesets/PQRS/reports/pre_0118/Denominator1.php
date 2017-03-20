<?php
/**
 * pre Measure 0118 -- Denominator 1
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class pre_0118_Denominator1 extends PQRSFilter
{
    public function getTitle() 
    {
        return "Denominator 1";
    }
    
    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
return true;
    }
}

?>