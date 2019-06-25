<?php
/**
 * pre Measure 0447 -- Initial Patient Population
 *
 * Copyright (C) 2015 - 2017      Suncoast Connection
  * 
 * LICENSE: This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0
 * See the Mozilla Public License for more details. 
 * If a copy of the MPL was not distributed with this file, You can obtain one at https://mozilla.org/MPL/2.0/.
 * 
 * @author  Art Eaton <art@suncoastconnection.com>
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @package LibreEHR 
 * @link    http://suncoastconnection.com
 * @link    http://LibreEHR.org
 *
 * Please support this product by sharing your changes with the LibreEHR.org community.
 */
 
class pre_0447_InitialPatientPopulation extends PQRSFilter
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
" JOIN patient_data AS p ON (p.pid = b1.pid)".
" INNER JOIN pqrs_mips AS codelist_a ON (b1.code = codelist_a.code)".
" WHERE b1.pid = ? ".
" AND p.sex = 'Female'".
" AND fe.date BETWEEN '2015-01-01' AND '".$beginDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,fe.date) >= '15' ".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0447_a'); ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ 
    $query =
"SELECT COUNT(b1.code) as count ".  
" FROM billing AS b1". 
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" JOIN patient_data AS p ON (p.pid = b1.pid)".
" INNER JOIN pqrs_mips AS codelist_a ON (b1.code = codelist_a.code)".
" WHERE b1.pid = ? ".
        "";
        $thisprov = $this->_reportOptions['provider'];
        if ($thisprov != 1000000001){ $query .=
        " AND fe.provider_id = '".$this->_reportOptions['provider']."'";}
        $query .=
" AND fe.date BETWEEN '".$beginDate."' AND '".$beginDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.DOB,'".$beginDate."') >= '16' ".
" AND (b1.code = codelist_a.code AND codelist_a.type = 'pqrs_0447_a'); ";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}  
    
    } else {return false;}  
    }
}