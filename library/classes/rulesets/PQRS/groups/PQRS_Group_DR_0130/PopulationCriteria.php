<?php
/**
 * PQRS Measure Group_DR_0130 -- Population Criteria
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package OpenEMR
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <leebc 11 at acm dot org>
 * @author  Suncoast Connection
 */
 
class PQRS_Group_DR_0130_PopulationCriteria implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria";
    }
    
    public function createInitialPatientPopulation()
    {
        return new PQRS_Group_DR_0130_InitialPatientPopulation();
    }
    
    public function createNumerators()
    {
        return new PQRS_Group_DR_0130_Numerator();
    }
    
    public function createDenominator()
    {
        return new PQRS_Group_DR_0130_Denominator();
    }
    
    public function createExclusion()
    {
        return new PQRS_Group_DR_0130_Exclusion();
    }
}

?>