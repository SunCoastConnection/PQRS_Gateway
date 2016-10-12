<?php
/**
 * PQRS Measure 0143 -- Population Criteria
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0143_PopulationCriteria implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria";
    }
    
    public function createInitialPatientPopulation()
    {
        return new PQRS_0143_InitialPatientPopulation();
    }
    
    public function createNumerators()
    {
        return new PQRS_0143_Numerator();
    }
    
    public function createDenominator()
    {
        return new PQRS_0143_Denominator();
    }
    
    public function createExclusion()
    {
        return new PQRS_0143_Exclusion();
    }
}
