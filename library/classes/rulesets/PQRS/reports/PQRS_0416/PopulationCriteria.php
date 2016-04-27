<?php
/**
 * PQRS Measure 0416 -- Population Criteria
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package OpenEMR
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <leebc 11 at acm dot org>
 * @author  Suncoast Connection
 */
 
class PQRS_0416_PopulationCriteria implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria";
    }
    
    public function createInitialPatientPopulation()
    {
        return new PQRS_0416_InitialPatientPopulation();
    }
    
    public function createNumerators()
    {
        return new PQRS_0416_Numerator();
    }
    
    public function createDenominator()
    {
        return new PQRS_0416_Denominator();
    }
    
    public function createExclusion()
    {
        return new PQRS_0416_Exclusion();
    }
}

?>
