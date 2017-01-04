<?php
/**
 * PQRS Measure 0255 -- Initial Patient Population
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0255_InitialPatientPopulation extends PQRSFilter
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
" INNER JOIN facility AS fac ON (fe.facility = fac.id)".
" JOIN patient_data AS p ON (p.pid = b1.pid)".
" INNER JOIN billing AS b2 ON (b2.pid = b1.pid)".
" INNER JOIN billing AS b3 ON (b3.pid = b1.pid)".
" INNER JOIN pqrs_efcc AS codelist_a ON (b1.code = codelist_a.code)".
" INNER JOIN pqrs_efcc AS codelist_b ON (b2.code = codelist_b.code)".
" INNER JOIN pqrs_efcc AS codelist_c ON (b3.code = codelist_c.code)".

" WHERE b1.pid = ? ".
" AND fac.pos_code = '23' ".
" AND fe.date BETWEEN '".$beginDate."' AND '".$endDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date) BETWEEN '14' AND '50' ".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0255_a') ".
" AND (b2.code = codelist_b.code AND codelist_b.type = 'pqrs_0255_b') ".
" AND (b3.code = codelist_c.code AND codelist_c.type = 'pqrs_0255_c'); ";
$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}  
    }
}
