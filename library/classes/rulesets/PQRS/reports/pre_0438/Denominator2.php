<?php
/**
 * pre Measure 0438 -- Denominator 2
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class pre_0438_Denominator2 extends PQRSFilter
{
    public function getTitle() 
    {
        return "Denominator 2";
    }
    
    public function test( prePatient $patient, $beginDate, $endDate )
    {
return true;
    }
}

?>