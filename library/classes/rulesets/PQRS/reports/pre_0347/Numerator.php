<?php
/**
 * pre Measure 0347 -- Numerator
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class pre_0347_Numerator extends PQRSFilter
{
    public function getTitle()
    {
        return "Numerator";
    }

    public function test( prePatient $patient, $beginDate, $endDate )
    {
 $query =
" SELECT COUNT(b1.code) AS count".  
" FROM billing AS b1".
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" WHERE b1.pid = ? ".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND b1.code = 'G9262'; ";
//G9263 hard fail INVERSE MEASURE
$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id))); 

if ($result['count']> 0){ return true;} else {return false;}  
		
    }
}