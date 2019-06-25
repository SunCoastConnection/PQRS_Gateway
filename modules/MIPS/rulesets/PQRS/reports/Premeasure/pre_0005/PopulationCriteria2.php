<?php
/**
 * pre Measure 0005 -- Population Criteria 2
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
 
class pre_0005_PopulationCriteria2 implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria 2";
    }
    
    public function createInitialPatientPopulation()
    {
        return new pre_0005_InitialPatientPopulation2();
    }
    
    public function createNumerators()
    {
        return new pre_0005_Numerator2();
    }
    
    public function createDenominator()
    {
        return new pre_0005_Denominator2();
    	// Both varients use same Denominator
    }
    
    public function createExclusion()
    {
        return new pre_0005_Exclusion2();
        // Both varients use same Exclusion
    }
}

?>