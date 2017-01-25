<?php
/**
 * PQRS Measure 0347 -- Initial Patient Population
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0347_InitialPatientPopulation extends PQRSFilter
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
" INNER JOIN pqrs_ptsf AS codelist_a ON (b1.code = codelist_a.code)".
" JOIN patient_data AS p ON (p.pid = b1.pid)".
" WHERE b1.pid = ? ".
" AND fe.provider_id = '".$this->_reportOptions['provider']."'".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date) >= '18' ".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0347_a') ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){
	$query = 
	"SELECT sex AS count".
	" FROM patient_data".
	" WHERE pid = ? ;";
	$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
	
	if ($result['count']='Male'){ 
								$query =
								" SELECT COUNT(b1.code) AS count".  
								" FROM billing AS b1".
								" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
								" WHERE b1.pid = ? ".
								" AND fe.date >= '".$beginDate."' ".
								" AND fe.date <= '".$endDate."' ".
								" AND NOT b1.code = '9004F'; ";
								
								$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id))); 
								
								if ($result['count']> 0){ return true;} else {return false;}  
								
								} else {
									
								$query =
								" SELECT COUNT(b1.code) AS count".  
								" FROM billing AS b1".
								" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
								" WHERE b1.pid = ? ".
								" AND fe.date >= '".$beginDate."' ".
								" AND fe.date <= '".$endDate."' ".
								" AND NOT b1.code IN ('9003F','9004F'); ";
								
								$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id))); 
								
								if ($result['count']> 0){ return true;} else {return false;}  
		
								}
					  } else {return false;}  
    }
}
