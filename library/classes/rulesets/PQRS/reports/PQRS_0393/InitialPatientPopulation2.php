<?php
/**
 * PQRS Measure 0393 -- Initial Patient Population 2
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 ///This measure is for a revised CIED/ICD (replaced, lead reconfigure etc)
 /// but the code does not make that distinction.
class PQRS_0393_InitialPatientPopulation2 implements PQRSFilterIF
{
    public function getTitle() 
    {
        return "Initial Patient Population";
    }
    
    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
$query =
"SELECT COUNT(b1.code) as count ".  
"  FROM billing AS b1". 
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
" JOIN billing AS b3 ON (b3.pid = b1.pid)".
" INNER JOIN pqrs_ptsf AS codelist_a ON (b1.code = codelist_a.code)".
" INNER JOIN pqrs_ptsf AS codelist_b ON (b2.code = codelist_b.code)".
" WHERE b1.pid = ? ".
" AND fe.date >= '".$beginDate."' ".
" AND fe.date >= DATE_SUB('".$endDate."', INTERVAL 6 MONTH)".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0393_a') ".
" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0393_b')".
" AND NOT b3.code = '02YA0Z2' ;";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}   

    }
}

?>