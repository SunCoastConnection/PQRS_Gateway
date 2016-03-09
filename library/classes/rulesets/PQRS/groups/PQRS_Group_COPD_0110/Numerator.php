<?php
/*
 * PQRS measure Group_COPD_0110 -- Numerator
 *
 * Copyright (C) 2016 Suncoast Connection
 *
 * LICENSE: This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://opensource.org/licenses/gpl-license.php>;.
 *
 * @package OpenEMR
 * @author  Suncoast Connection
 * @link    http://suncoastconnection.com
 * @link    http://www.oemr.org
*/

class PQRS_Group_COPD_0110_Numerator implements PQRSFilterIF
{
    public function getTitle()
    {
        return "Numerator";
    }

    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
$query =
" SELECT COUNT(b1.code)".  
" FROM billing AS b1".
" JOIN form_encounter AS fe ON (b1.encounter = fe.encounter)".
" WHERE b1.pid = '$Patient' ".
" AND b1.user = '$Provider' ".
" AND YEAR(fe.date) ='2015' ".
" AND b1.code IN ('G8482','G8482')  ; ";

$result = sqlStatement($query); 

if ($result > 0){ return true;} else {return false;}   	
    }
}

?>

