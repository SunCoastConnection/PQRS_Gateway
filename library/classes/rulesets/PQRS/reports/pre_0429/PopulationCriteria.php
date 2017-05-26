<?php
/**
 * pre Measure 0429 -- Population Criteria
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package OpenEMR
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <leebc 11 at acm dot org>
 * @author  Suncoast Connection
 */
 
class pre_0429_PopulationCriteria implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria";
    }
    
    public function createInitialPatientPopulation()
    {
        return new pre_0429_InitialPatientPopulation();
    }
    
    public function createNumerators()
    {
        return new pre_0429_Numerator();
    }
    
    public function createDenominator()
    {
        return new pre_0429_Denominator();
    }
    
    public function createExclusion()
    {
        return new pre_0429_Exclusion();
    }
}

?>