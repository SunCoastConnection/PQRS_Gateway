<?php
/**
 * PQRS Measure Group_AOE_0155 -- Denominator 
 *
 * Copyright (C) 2016      Suncoast Connection

 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 
*/

class PQRS_Group_AOE_0155_Denominator implements PQRSFilterIF
{
    public function getTitle() 
    {
        return "Denominator";
    }
    
    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
 $query =
" SELECT COUNT(b1.code) as count ".  
" FROM billing AS b1".
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" WHERE b1.pid = ? ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,'".$endDate."') >='65'; ";
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND b1.code ='1100F' ; ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));

if ($result['count'] > 0){ return true;} else {return false;}  
    }
}

?>

