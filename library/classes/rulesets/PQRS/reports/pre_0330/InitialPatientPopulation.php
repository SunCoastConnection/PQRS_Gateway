<?php
/**
 * pre Measure 0330 -- Initial Patient Population
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class pre_0330_InitialPatientPopulation extends preFilter
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
" AND b1.code ='G9240'".
$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return false;}    
        
$query =
"SELECT COUNT(b1.code) as count ".  
" FROM billing AS b2". 
" JOIN form_encounter AS fe ON (b2.encounter = fe.encounter)".
" JOIN patient_data AS p ON (p.pid = b2.pid)".
" INNER JOIN billing AS b3 ON (b3.pid = b2.pid)".
" INNER JOIN pqrs_ptsf AS codelist_a ON (b2.code = codelist_a.code)".
" INNER JOIN pqrs_ptsf AS codelist_b ON (b3.code = codelist_b.code)".
" WHERE b2.pid = ? ".
" AND fe.provider_id = '".$this->_reportOptions['provider']."'".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date) >= '18' ".
" AND (b2.code = codelist_a.code AND codelist_a.type = 'pqrs_0330_a') ".
" AND (b3.code = codelist_b.code AND codelist_b.type = 'pqrs_0330_b'); ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}  
    }
}
