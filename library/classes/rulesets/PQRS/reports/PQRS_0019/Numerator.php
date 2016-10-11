<?php
/**
 * PQRS Measure 0019 -- Numerator
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0019_Numerator implements PQRSFilterIF
{
    public function getTitle()
    {
        return "Numerator";
    }

    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
	    $query =
"SELECT COUNT(b1.code) as count".  
" FROM billing AS b1".
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
" WHERE b1.pid = ? ".
" AND fe.date >= '".$beginDate."' ".
" AND fe.date <= '".$endDate."' ".
" AND b1.code = 'G8397' ". 
" AND b2.code = '5010F' AND b2.modifier ='' ;";
$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}    
		
    }
}
