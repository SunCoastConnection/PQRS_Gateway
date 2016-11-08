<?php
/**
 * PQRS Measure 0438 -- Initial Patient Population 3
 *
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0438_InitialPatientPopulation3 implements PQRSFilterIF
{
    public function getTitle()
    {
        return "Initial Patient Population 3";
    }

    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
$query =
"SELECT COUNT(b1.code) as count ".  
" FROM billing AS b1". 
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" JOIN patient_data AS p ON (p.pid = b1.pid)".
" WHERE b1.pid = ? ".
" OR (TIMESTAMPDIFF(YEAR,p.DOB,fe.date) BETWEEN '45' AND '75' ".
" AND b1.code = 'G9666'; ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){
	$query =
	"SELECT COUNT(b1.code) as count ".  
	" FROM billing AS b1". 
	" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
	" INNER JOIN pqrs_efcc AS codelist_a ON (b1.code = codelist_a.code)".
	" WHERE b1.pid = ? ".
	" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
	" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0438_a'); ";
	
	$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
	if ($result['count']> 0){
			$query =
			"SELECT COUNT(b1.code) as count ".  
			" FROM billing AS b1". 
			" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
			" INNER JOIN pqrs_efcc AS codelist_a ON (b1.code = codelist_a.code)".
			" WHERE b1.pid = ? ".
			" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0438_b'); ";
			
			$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
			if ($result['count']> 0){ return true;}	
		
		}	
	
	
	
	} else {return false;}  

    
    }
}

?>
