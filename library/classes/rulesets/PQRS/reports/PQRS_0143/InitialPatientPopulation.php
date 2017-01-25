<?php
/**
 * PQRS Measure 0143 -- Initial Patient Population
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0143_InitialPatientPopulation extends PQRSFilter
{
    public function getTitle() 
    {
        return "Initial Patient Population";
    }
    
    public function test(PQRSPatient $patient, $beginDate, $endDate )
    {
$query =
"SELECT COUNT(b1.code) as count ".  
" FROM billing AS b1". 
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" JOIN patient_data AS p ON (p.pid = b1.pid)".
" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
" INNER JOIN pqrs_ptct AS codelist_a ON (b1.code = codelist_a.code)".
" INNER JOIN pqrs_ptct AS codelist_b ON (b2.code = codelist_b.code)".
	" WHERE b1.pid = ? ".
    " AND p.providerID = '".$this->_reportOptions['provider']."'".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date) >= '18' ".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0143_a') ".
" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0143_b'); ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {
		$query =
		"SELECT COUNT(b1.code) as count ".  
		" FROM billing AS b1". 
		" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
		" JOIN patient_data AS p ON (p.pid = b1.pid)".
		" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
		" INNER JOIN pqrs_ptct AS codelist_a ON (b1.code = codelist_a.code)".
		" INNER JOIN pqrs_ptct AS codelist_b ON (b2.code = codelist_b.code)".
			" WHERE b1.pid = ? ".
    " AND p.providerID = '".$this->_reportOptions['provider']."'".
		" AND fe.date >= '".$beginDate."' ".
		" AND fe.date <= '".$endDate."' ".
		" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date) >= '18' ".
		" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0143_c') ".
		" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0143_d'); ";
		
		$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
		if ($result['count']> 0){ return true;} else {return false;}
	
	} 
    }
}
