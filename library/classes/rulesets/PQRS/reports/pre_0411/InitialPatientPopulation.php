<?php
/**
 * pre Measure 0411 -- Initial Patient Population
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package PQRS_Gateway
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <leebc 11 at acm dot org>
 * @author  Suncoast Connection
 */
 
class pre_0411_InitialPatientPopulation extends preFilter
{
    public function getTitle() 
    {
        return "Initial Patient Population";
    }
    
    public function test( prePatient $patient, $beginDate, $endDate )
    {
        
 $query ="SELECT COUNT(b1.code) as count ".  
" FROM billing AS b1".
" WHERE b1.pid = ? ".
" AND (b1.code = 'G9572'); ";        
$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return false;}  
      
$query =
"SELECT COUNT(b1.code) as count ".  
"  FROM billing AS b1". 
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" JOIN patient_data AS p ON (p.pid = b1.pid)".
" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
" INNER JOIN pqrs_ccco AS codelist_a ON (b1.code = codelist_a.code)".
" INNER JOIN pqrs_ccco AS codelist_b ON (b1.code = codelist_b.code)".
" WHERE b1.pid = ? ".
" AND fe.provider_id = '".$this->_reportOptions['provider']."'".
" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date)>='18' ".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0411_a')".
" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0411_b'); ";
$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}
    }
}

?>
