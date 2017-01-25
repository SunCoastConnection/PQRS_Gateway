<?php
/*
 * PQRS Measure 0005 -- Population Criteria 1
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0005_InitialPatientPopulation1 extends PQRSFilter
{


    public function getTitle() 
    {
        return "Initial Patient Population";
    }
    
    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {

$query =
"SELECT COUNT(b1.code) as count ". 
" FROM billing AS b1 ".  
" INNER JOIN billing AS b2 ON (b1.pid = b2.pid) ".  
" JOIN form_encounter AS fe ON (b2.encounter = fe.encounter)".  
" JOIN patient_data AS p ON (b1.pid = p.pid)".  
" INNER JOIN pqrs_efcc1 AS codelist_a ON (b1.code = codelist_a.code)".
" INNER JOIN pqrs_efcc1 AS codelist_b ON (b2.code = codelist_b.code)".
	" WHERE b1.pid = ? ".
    " AND p.providerID = '".$this->_reportOptions['provider']."'". 
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date) >= '18'  ". 
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0005_a') ".
" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0005_b') ;";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}  

    
	}
}

?>
