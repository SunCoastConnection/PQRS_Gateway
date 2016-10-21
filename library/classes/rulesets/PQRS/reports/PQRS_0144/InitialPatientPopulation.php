<?php
/**
 * PQRS Measure 0144 -- Initial Patient Population
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0144_InitialPatientPopulation implements PQRSFilterIF
{
    public function getTitle() 
    {
        return "Initial Patient Population";
    }
    
    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
$query =
"SELECT COUNT(b1.code) as count ".  
" FROM billing AS b1". 
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
" INNER JOIN billing AS b3 ON (b3.pid = b1.pid)".
" INNER JOIN pqrs_ptct AS codelist_a ON (b1.code = codelist_a.code)".
" INNER JOIN pqrs_ptct AS codelist_b ON (b2.code = codelist_b.code)".
" WHERE b1.pid = ? ".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND (b3.code = '1125F' AND b1.modifier ='')".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0144_a') ".
" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0144_b'); ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {
	$query =
"SELECT COUNT(b1.code) as count ".  
" FROM billing AS b1". 
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
" INNER JOIN billing AS b3 ON (b3.pid = b1.pid)".
" INNER JOIN pqrs_ptct AS codelist_a ON (b1.code = codelist_a.code)".
" INNER JOIN pqrs_ptct AS codelist_b ON (b2.code = codelist_b.code)".
" WHERE b1.pid = ? ".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND (b3.code = '1125F' AND b1.modifier ='')".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0144_c') ".
" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0144_d'); ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;} 
	} 
    }
}
