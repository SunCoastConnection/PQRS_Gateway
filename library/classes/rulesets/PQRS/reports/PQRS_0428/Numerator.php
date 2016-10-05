<?php
/**
 * PQRS Measure 0428 -- Numerator
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package OpenEMR
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <leebc 11 at acm dot org>
 * @author  Suncoast Connection
 */
 
class PQRS_0428_Numerator implements PQRSFilterIF
{
    public function getTitle()
    {
        return "Numerator";
    }

    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
$query =
"SELECT COUNT(b1.code) as count ".  
"FROM billing AS b1 ".
"JOIN form_encounter AS fe ON (b1.encounter = fe.encounter) ".
"WHERE b1.pid = ? ".
" AND fe.date >= '".$beginDate."' ".
" AND fe.date <= '".$endDate."' ".  
"AND b1.code ='G9615' AND b1.code ='G9616';"; 

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count'] > 0){ return true;} else {return false;} 	
    }
}

?>
