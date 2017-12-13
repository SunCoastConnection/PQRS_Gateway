<?php
/**
 * Translate Rule IDs to Report Types & Class Names
 *
 * Copyright (C) 2011      Ken Chapple <ken@mi-squared.com>
 * Copyright (C) 2016      Suncoast Connection
 *
 * @link    http://SuncoastConnection.com
 */

class ReportTypes
{
    const TYPE_INDEX = 0;
    const CLASS_INDEX = 1;
    
    const PQRS = 'pqrs';
    
    public static function getType( $ruleId ) {
        $type = self::$_types[$ruleId][self::TYPE_INDEX];
        return $type;
    }
    
    public static function getClassName( $ruleId ) {
        $class = self::$_types[$ruleId][self::CLASS_INDEX];
        return $class;
    }
    
    protected static $_types = array(
 
        "PQRS_0001" => array( ReportTypes::PQRS, "PQRS_0001" ),
        "PQRS_0005" => array( ReportTypes::PQRS, "PQRS_0005" ),
        "PQRS_0006" => array( ReportTypes::PQRS, "PQRS_0006" ),
        "PQRS_0007" => array( ReportTypes::PQRS, "PQRS_0007" ),
        "PQRS_0008" => array( ReportTypes::PQRS, "PQRS_0008" ),
        "PQRS_0012" => array( ReportTypes::PQRS, "PQRS_0012" ),
        "PQRS_0014" => array( ReportTypes::PQRS, "PQRS_0014" ),
        "PQRS_0019" => array( ReportTypes::PQRS, "PQRS_0019" ),
        "PQRS_0021" => array( ReportTypes::PQRS, "PQRS_0021" ),
        "PQRS_0023" => array( ReportTypes::PQRS, "PQRS_0023" ),
        "PQRS_0024" => array( ReportTypes::PQRS, "PQRS_0024" ),
        "PQRS_0032" => array( ReportTypes::PQRS, "PQRS_0032" ),
        "PQRS_0039" => array( ReportTypes::PQRS, "PQRS_0039" ),
        "PQRS_0043" => array( ReportTypes::PQRS, "PQRS_0043" ),
        "PQRS_0044" => array( ReportTypes::PQRS, "PQRS_0044" ),
        "PQRS_0046" => array( ReportTypes::PQRS, "PQRS_0046" ),
        "PQRS_0047" => array( ReportTypes::PQRS, "PQRS_0047" ),
        "PQRS_0048" => array( ReportTypes::PQRS, "PQRS_0048" ),
        "PQRS_0050" => array( ReportTypes::PQRS, "PQRS_0050" ),
        "PQRS_0051" => array( ReportTypes::PQRS, "PQRS_0051" ),
        "PQRS_0052" => array( ReportTypes::PQRS, "PQRS_0052" ),
        "PQRS_0065" => array( ReportTypes::PQRS, "PQRS_0065" ),
        "PQRS_0066" => array( ReportTypes::PQRS, "PQRS_0066" ),
        "PQRS_0067" => array( ReportTypes::PQRS, "PQRS_0067" ),
        "PQRS_0068" => array( ReportTypes::PQRS, "PQRS_0068" ),
        "PQRS_0069" => array( ReportTypes::PQRS, "PQRS_0069" ),
        "PQRS_0070" => array( ReportTypes::PQRS, "PQRS_0070" ),
        "PQRS_0076" => array( ReportTypes::PQRS, "PQRS_0076" ),
        "PQRS_0091" => array( ReportTypes::PQRS, "PQRS_0091" ),
        "PQRS_0093" => array( ReportTypes::PQRS, "PQRS_0093" ),
        "PQRS_0099" => array( ReportTypes::PQRS, "PQRS_0099" ),
        "PQRS_0100" => array( ReportTypes::PQRS, "PQRS_0100" ),
        "PQRS_0102" => array( ReportTypes::PQRS, "PQRS_0102" ),
        "PQRS_0104" => array( ReportTypes::PQRS, "PQRS_0104" ),
        "PQRS_0109" => array( ReportTypes::PQRS, "PQRS_0109" ),
        "PQRS_0110" => array( ReportTypes::PQRS, "PQRS_0110" ),
        "PQRS_0111" => array( ReportTypes::PQRS, "PQRS_0111" ),
        "PQRS_0112" => array( ReportTypes::PQRS, "PQRS_0112" ),
        "PQRS_0113" => array( ReportTypes::PQRS, "PQRS_0113" ),
        "PQRS_0116" => array( ReportTypes::PQRS, "PQRS_0116" ),
        "PQRS_0117" => array( ReportTypes::PQRS, "PQRS_0117" ),
        "PQRS_0118" => array( ReportTypes::PQRS, "PQRS_0118" ),
        "PQRS_0119" => array( ReportTypes::PQRS, "PQRS_0119" ),
        "PQRS_0122" => array( ReportTypes::PQRS, "PQRS_0122" ),
        "PQRS_0126" => array( ReportTypes::PQRS, "PQRS_0126" ),
        "PQRS_0127" => array( ReportTypes::PQRS, "PQRS_0127" ),
        "PQRS_0128" => array( ReportTypes::PQRS, "PQRS_0128" ),
        "PQRS_0130" => array( ReportTypes::PQRS, "PQRS_0130" ),
        "PQRS_0131" => array( ReportTypes::PQRS, "PQRS_0131" ),
        "PQRS_0134" => array( ReportTypes::PQRS, "PQRS_0134" ),
        "PQRS_0137" => array( ReportTypes::PQRS, "PQRS_0137" ),
        "PQRS_0138" => array( ReportTypes::PQRS, "PQRS_0138" ),
        "PQRS_0140" => array( ReportTypes::PQRS, "PQRS_0140" ),
        "PQRS_0141" => array( ReportTypes::PQRS, "PQRS_0141" ),
        "PQRS_0143" => array( ReportTypes::PQRS, "PQRS_0143" ),
        "PQRS_0144" => array( ReportTypes::PQRS, "PQRS_0144" ),
        "PQRS_0145" => array( ReportTypes::PQRS, "PQRS_0145" ),
        "PQRS_0146" => array( ReportTypes::PQRS, "PQRS_0146" ),
        "PQRS_0147" => array( ReportTypes::PQRS, "PQRS_0147" ),
        "PQRS_0154" => array( ReportTypes::PQRS, "PQRS_0154" ),
        "PQRS_0155" => array( ReportTypes::PQRS, "PQRS_0155" ),
        "PQRS_0156" => array( ReportTypes::PQRS, "PQRS_0156" ),
        "PQRS_0164" => array( ReportTypes::PQRS, "PQRS_0164" ),
        "PQRS_0165" => array( ReportTypes::PQRS, "PQRS_0165" ),
        "PQRS_0166" => array( ReportTypes::PQRS, "PQRS_0166" ),
        "PQRS_0167" => array( ReportTypes::PQRS, "PQRS_0167" ),
        "PQRS_0168" => array( ReportTypes::PQRS, "PQRS_0168" ),
        "PQRS_0176" => array( ReportTypes::PQRS, "PQRS_0176" ),
        "PQRS_0177" => array( ReportTypes::PQRS, "PQRS_0177" ),
        "PQRS_0178" => array( ReportTypes::PQRS, "PQRS_0178" ),
        "PQRS_0179" => array( ReportTypes::PQRS, "PQRS_0179" ),
        "PQRS_0180" => array( ReportTypes::PQRS, "PQRS_0180" ),
        "PQRS_0181" => array( ReportTypes::PQRS, "PQRS_0181" ),
        "PQRS_0182" => array( ReportTypes::PQRS, "PQRS_0182" ),
        "PQRS_0185" => array( ReportTypes::PQRS, "PQRS_0185" ),
        "PQRS_0187" => array( ReportTypes::PQRS, "PQRS_0187" ),
        "PQRS_0191" => array( ReportTypes::PQRS, "PQRS_0191" ),
        "PQRS_0192" => array( ReportTypes::PQRS, "PQRS_0192" ),
        "PQRS_0195" => array( ReportTypes::PQRS, "PQRS_0195" ),
        "PQRS_0204" => array( ReportTypes::PQRS, "PQRS_0204" ),
        "PQRS_0205" => array( ReportTypes::PQRS, "PQRS_0205" ),
        "PQRS_0217" => array( ReportTypes::PQRS, "PQRS_0217" ),
        "PQRS_0218" => array( ReportTypes::PQRS, "PQRS_0218" ),
        "PQRS_0219" => array( ReportTypes::PQRS, "PQRS_0219" ),
        "PQRS_0220" => array( ReportTypes::PQRS, "PQRS_0220" ),
        "PQRS_0221" => array( ReportTypes::PQRS, "PQRS_0221" ),
        "PQRS_0222" => array( ReportTypes::PQRS, "PQRS_0222" ),
        "PQRS_0223" => array( ReportTypes::PQRS, "PQRS_0223" ),
        "PQRS_0224" => array( ReportTypes::PQRS, "PQRS_0224" ),
        "PQRS_0225" => array( ReportTypes::PQRS, "PQRS_0225" ),
        "PQRS_0226" => array( ReportTypes::PQRS, "PQRS_0226" ),
        "PQRS_0236" => array( ReportTypes::PQRS, "PQRS_0236" ),
        "PQRS_0238" => array( ReportTypes::PQRS, "PQRS_0238" ),
        "PQRS_0243" => array( ReportTypes::PQRS, "PQRS_0243" ),
        "PQRS_0249" => array( ReportTypes::PQRS, "PQRS_0249" ),
        "PQRS_0250" => array( ReportTypes::PQRS, "PQRS_0250" ),
        "PQRS_0251" => array( ReportTypes::PQRS, "PQRS_0251" ),
        "PQRS_0254" => array( ReportTypes::PQRS, "PQRS_0254" ),
        "PQRS_0255" => array( ReportTypes::PQRS, "PQRS_0255" ),
        "PQRS_0257" => array( ReportTypes::PQRS, "PQRS_0257" ),
        "PQRS_0258" => array( ReportTypes::PQRS, "PQRS_0258" ),
        "PQRS_0259" => array( ReportTypes::PQRS, "PQRS_0259" ),
        "PQRS_0260" => array( ReportTypes::PQRS, "PQRS_0260" ),
        "PQRS_0261" => array( ReportTypes::PQRS, "PQRS_0261" ),
        "PQRS_0262" => array( ReportTypes::PQRS, "PQRS_0262" ),
        "PQRS_0263" => array( ReportTypes::PQRS, "PQRS_0263" ),
        "PQRS_0264" => array( ReportTypes::PQRS, "PQRS_0264" ),
        "PQRS_0265" => array( ReportTypes::PQRS, "PQRS_0265" ),
        "PQRS_0268" => array( ReportTypes::PQRS, "PQRS_0268" ),
        "PQRS_0271" => array( ReportTypes::PQRS, "PQRS_0271" ),
        "PQRS_0275" => array( ReportTypes::PQRS, "PQRS_0275" ),
        "PQRS_0276" => array( ReportTypes::PQRS, "PQRS_0276" ),
        "PQRS_0277" => array( ReportTypes::PQRS, "PQRS_0277" ),
        "PQRS_0278" => array( ReportTypes::PQRS, "PQRS_0278" ),
        "PQRS_0279" => array( ReportTypes::PQRS, "PQRS_0279" ),
        "PQRS_0282" => array( ReportTypes::PQRS, "PQRS_0282" ),
        "PQRS_0283" => array( ReportTypes::PQRS, "PQRS_0283" ),
        "PQRS_0284" => array( ReportTypes::PQRS, "PQRS_0284" ),
        "PQRS_0286" => array( ReportTypes::PQRS, "PQRS_0286" ),
        "PQRS_0288" => array( ReportTypes::PQRS, "PQRS_0288" ),
        "PQRS_0290" => array( ReportTypes::PQRS, "PQRS_0290" ),
        "PQRS_0291" => array( ReportTypes::PQRS, "PQRS_0291" ),
        "PQRS_0293" => array( ReportTypes::PQRS, "PQRS_0293" ),
        "PQRS_0294" => array( ReportTypes::PQRS, "PQRS_0294" ),
        "PQRS_0303" => array( ReportTypes::PQRS, "PQRS_0303" ),
        "PQRS_0304" => array( ReportTypes::PQRS, "PQRS_0304" ),
        "PQRS_0317" => array( ReportTypes::PQRS, "PQRS_0317" ),
        "PQRS_0320" => array( ReportTypes::PQRS, "PQRS_0320" ),
        "PQRS_0322" => array( ReportTypes::PQRS, "PQRS_0322" ),
        "PQRS_0323" => array( ReportTypes::PQRS, "PQRS_0323" ),
        "PQRS_0324" => array( ReportTypes::PQRS, "PQRS_0324" ),
        "PQRS_0325" => array( ReportTypes::PQRS, "PQRS_0325" ),
        "PQRS_0326" => array( ReportTypes::PQRS, "PQRS_0326" ),
        "PQRS_0327" => array( ReportTypes::PQRS, "PQRS_0327" ),
        "PQRS_0328" => array( ReportTypes::PQRS, "PQRS_0328" ),
        "PQRS_0329" => array( ReportTypes::PQRS, "PQRS_0329" ),
        "PQRS_0330" => array( ReportTypes::PQRS, "PQRS_0330" ),
        "PQRS_0331" => array( ReportTypes::PQRS, "PQRS_0331" ),
        "PQRS_0332" => array( ReportTypes::PQRS, "PQRS_0332" ),
        "PQRS_0333" => array( ReportTypes::PQRS, "PQRS_0333" ),
        "PQRS_0334" => array( ReportTypes::PQRS, "PQRS_0334" ),
        "PQRS_0335" => array( ReportTypes::PQRS, "PQRS_0335" ),
        "PQRS_0336" => array( ReportTypes::PQRS, "PQRS_0336" ),
        "PQRS_0337" => array( ReportTypes::PQRS, "PQRS_0337" ),
        "PQRS_0338" => array( ReportTypes::PQRS, "PQRS_0338" ),
        "PQRS_0340" => array( ReportTypes::PQRS, "PQRS_0340" ),
        "PQRS_0342" => array( ReportTypes::PQRS, "PQRS_0342" ),
        "PQRS_0343" => array( ReportTypes::PQRS, "PQRS_0343" ),
        "PQRS_0344" => array( ReportTypes::PQRS, "PQRS_0344" ),
        "PQRS_0345" => array( ReportTypes::PQRS, "PQRS_0345" ),
        "PQRS_0346" => array( ReportTypes::PQRS, "PQRS_0346" ),
        "PQRS_0347" => array( ReportTypes::PQRS, "PQRS_0347" ),
        "PQRS_0348" => array( ReportTypes::PQRS, "PQRS_0348" ),
        "PQRS_0350" => array( ReportTypes::PQRS, "PQRS_0350" ),
        "PQRS_0351" => array( ReportTypes::PQRS, "PQRS_0351" ),
        "PQRS_0352" => array( ReportTypes::PQRS, "PQRS_0352" ),
        "PQRS_0353" => array( ReportTypes::PQRS, "PQRS_0353" ),
        "PQRS_0354" => array( ReportTypes::PQRS, "PQRS_0354" ),
        "PQRS_0355" => array( ReportTypes::PQRS, "PQRS_0355" ),
        "PQRS_0356" => array( ReportTypes::PQRS, "PQRS_0356" ),
        "PQRS_0357" => array( ReportTypes::PQRS, "PQRS_0357" ),
        "PQRS_0358" => array( ReportTypes::PQRS, "PQRS_0358" ),
        "PQRS_0359" => array( ReportTypes::PQRS, "PQRS_0359" ),
        "PQRS_0360" => array( ReportTypes::PQRS, "PQRS_0360" ),
        "PQRS_0361" => array( ReportTypes::PQRS, "PQRS_0361" ),
        "PQRS_0362" => array( ReportTypes::PQRS, "PQRS_0362" ),
        "PQRS_0363" => array( ReportTypes::PQRS, "PQRS_0363" ),
        "PQRS_0364" => array( ReportTypes::PQRS, "PQRS_0364" ),
        "PQRS_0370" => array( ReportTypes::PQRS, "PQRS_0370" ),
        "PQRS_0383" => array( ReportTypes::PQRS, "PQRS_0383" ),
        "PQRS_0384" => array( ReportTypes::PQRS, "PQRS_0384" ),
        "PQRS_0385" => array( ReportTypes::PQRS, "PQRS_0385" ),
        "PQRS_0386" => array( ReportTypes::PQRS, "PQRS_0386" ),
        "PQRS_0387" => array( ReportTypes::PQRS, "PQRS_0387" ),
        "PQRS_0388" => array( ReportTypes::PQRS, "PQRS_0388" ),
        "PQRS_0389" => array( ReportTypes::PQRS, "PQRS_0389" ),
        "PQRS_0390" => array( ReportTypes::PQRS, "PQRS_0390" ),
        "PQRS_0391" => array( ReportTypes::PQRS, "PQRS_0391" ),
        "PQRS_0392" => array( ReportTypes::PQRS, "PQRS_0392" ),
        "PQRS_0393" => array( ReportTypes::PQRS, "PQRS_0393" ),
        "PQRS_0394" => array( ReportTypes::PQRS, "PQRS_0394" ),
        "PQRS_0395" => array( ReportTypes::PQRS, "PQRS_0395" ),
        "PQRS_0396" => array( ReportTypes::PQRS, "PQRS_0396" ),
        "PQRS_0397" => array( ReportTypes::PQRS, "PQRS_0397" ),
        "PQRS_0398" => array( ReportTypes::PQRS, "PQRS_0398" ),
        "PQRS_0400" => array( ReportTypes::PQRS, "PQRS_0400" ),
        "PQRS_0401" => array( ReportTypes::PQRS, "PQRS_0401" ),
        "PQRS_0402" => array( ReportTypes::PQRS, "PQRS_0402" ),
        "PQRS_0403" => array( ReportTypes::PQRS, "PQRS_0403" ),
        "PQRS_0404" => array( ReportTypes::PQRS, "PQRS_0404" ),
        "PQRS_0405" => array( ReportTypes::PQRS, "PQRS_0405" ),
        "PQRS_0406" => array( ReportTypes::PQRS, "PQRS_0406" ),
        "PQRS_0407" => array( ReportTypes::PQRS, "PQRS_0407" ),
        "PQRS_0408" => array( ReportTypes::PQRS, "PQRS_0408" ),
        "PQRS_0409" => array( ReportTypes::PQRS, "PQRS_0409" ),
        "PQRS_0410" => array( ReportTypes::PQRS, "PQRS_0410" ),
        "PQRS_0411" => array( ReportTypes::PQRS, "PQRS_0411" ),
        "PQRS_0412" => array( ReportTypes::PQRS, "PQRS_0412" ),
        "PQRS_0413" => array( ReportTypes::PQRS, "PQRS_0413" ),
        "PQRS_0414" => array( ReportTypes::PQRS, "PQRS_0414" ),
        "PQRS_0415" => array( ReportTypes::PQRS, "PQRS_0415" ),
        "PQRS_0416" => array( ReportTypes::PQRS, "PQRS_0416" ),
        "PQRS_0417" => array( ReportTypes::PQRS, "PQRS_0417" ),
        "PQRS_0418" => array( ReportTypes::PQRS, "PQRS_0418" ),
        "PQRS_0419" => array( ReportTypes::PQRS, "PQRS_0419" ),
        "PQRS_0420" => array( ReportTypes::PQRS, "PQRS_0420" ),
        "PQRS_0421" => array( ReportTypes::PQRS, "PQRS_0421" ),
        "PQRS_0422" => array( ReportTypes::PQRS, "PQRS_0422" ),
        "PQRS_0423" => array( ReportTypes::PQRS, "PQRS_0423" ),
        "PQRS_0424" => array( ReportTypes::PQRS, "PQRS_0424" ),
        "PQRS_0425" => array( ReportTypes::PQRS, "PQRS_0425" ),
        "PQRS_0426" => array( ReportTypes::PQRS, "PQRS_0426" ),
        "PQRS_0427" => array( ReportTypes::PQRS, "PQRS_0427" ),
        "PQRS_0428" => array( ReportTypes::PQRS, "PQRS_0428" ),
        "PQRS_0429" => array( ReportTypes::PQRS, "PQRS_0429" ),
        "PQRS_0430" => array( ReportTypes::PQRS, "PQRS_0430" ),
        "PQRS_0431" => array( ReportTypes::PQRS, "PQRS_0431" ),
        "PQRS_0432" => array( ReportTypes::PQRS, "PQRS_0432" ),
        "PQRS_0433" => array( ReportTypes::PQRS, "PQRS_0433" ),
        "PQRS_0434" => array( ReportTypes::PQRS, "PQRS_0434" ),
        "PQRS_0435" => array( ReportTypes::PQRS, "PQRS_0435" ),
        "PQRS_0436" => array( ReportTypes::PQRS, "PQRS_0436" ),
        "PQRS_0437" => array( ReportTypes::PQRS, "PQRS_0437" ),
        "PQRS_0438" => array( ReportTypes::PQRS, "PQRS_0438" ),
        "PQRS_0439" => array( ReportTypes::PQRS, "PQRS_0439" ),
        "PQRS_0440" => array( ReportTypes::PQRS, "PQRS_0440" ),
        "PQRS_0441" => array( ReportTypes::PQRS, "PQRS_0441" ),
        "PQRS_0442" => array( ReportTypes::PQRS, "PQRS_0442" ),
        "PQRS_0443" => array( ReportTypes::PQRS, "PQRS_0443" ),
        "PQRS_0444" => array( ReportTypes::PQRS, "PQRS_0444" ),
        "PQRS_0445" => array( ReportTypes::PQRS, "PQRS_0445" ),
        "PQRS_0446" => array( ReportTypes::PQRS, "PQRS_0446" ),
        "PQRS_0447" => array( ReportTypes::PQRS, "PQRS_0447" ),
        "PQRS_0448" => array( ReportTypes::PQRS, "PQRS_0448" ),
        "PQRS_0449" => array( ReportTypes::PQRS, "PQRS_0449" ),
        "PQRS_0450" => array( ReportTypes::PQRS, "PQRS_0450" ),
        "PQRS_0451" => array( ReportTypes::PQRS, "PQRS_0451" ),
        "PQRS_0452" => array( ReportTypes::PQRS, "PQRS_0452" ),
        "PQRS_0453" => array( ReportTypes::PQRS, "PQRS_0453" ),
        "PQRS_0454" => array( ReportTypes::PQRS, "PQRS_0454" ),
        "PQRS_0455" => array( ReportTypes::PQRS, "PQRS_0455" ),
        "PQRS_0456" => array( ReportTypes::PQRS, "PQRS_0456" ),
        "PQRS_0457" => array( ReportTypes::PQRS, "PQRS_0457" ),
        
        "pre_0005" => array( ReportTypes::PQRS, "pre_0005" ),
        "pre_0007" => array( ReportTypes::PQRS, "pre_0007" ),
        "pre_0008" => array( ReportTypes::PQRS, "pre_0008" ),
        "pre_0032" => array( ReportTypes::PQRS, "pre_0032" ),
        "pre_0047" => array( ReportTypes::PQRS, "pre_0047" ),
        "pre_0048" => array( ReportTypes::PQRS, "pre_0048" ),
        "pre_0050" => array( ReportTypes::PQRS, "pre_0050" ),
        "pre_0052" => array( ReportTypes::PQRS, "pre_0052" ),
        "pre_0065" => array( ReportTypes::PQRS, "pre_0065" ),
        "pre_0066" => array( ReportTypes::PQRS, "pre_0066" ),
        "pre_0068" => array( ReportTypes::PQRS, "pre_0068" ),
        "pre_0099" => array( ReportTypes::PQRS, "pre_0099" ),
        "pre_0100" => array( ReportTypes::PQRS, "pre_0100" ),
        "pre_0102" => array( ReportTypes::PQRS, "pre_0102" ),
        "pre_0104" => array( ReportTypes::PQRS, "pre_0104" ),
        "pre_0111" => array( ReportTypes::PQRS, "pre_0111" ),
        "pre_0112" => array( ReportTypes::PQRS, "pre_0112" ),
        "pre_0113" => array( ReportTypes::PQRS, "pre_0113" ),
        "pre_0116" => array( ReportTypes::PQRS, "pre_0116" ),
        "pre_0117" => array( ReportTypes::PQRS, "pre_0117" ),
        "pre_0118" => array( ReportTypes::PQRS, "pre_0118" ),
        "pre_0119" => array( ReportTypes::PQRS, "pre_0119" ),
        "pre_0128" => array( ReportTypes::PQRS, "pre_0128" ),
        "pre_0134" => array( ReportTypes::PQRS, "pre_0134" ),
        "pre_0146" => array( ReportTypes::PQRS, "pre_0146" ),
        "pre_0154" => array( ReportTypes::PQRS, "pre_0154" ),
        "pre_0155" => array( ReportTypes::PQRS, "pre_0155" ),
        "pre_0167" => array( ReportTypes::PQRS, "pre_0167" ),
        "pre_0176" => array( ReportTypes::PQRS, "pre_0176" ),
        "pre_0204" => array( ReportTypes::PQRS, "pre_0204" ),
        "pre_0205" => array( ReportTypes::PQRS, "pre_0205" ),
        "pre_0217" => array( ReportTypes::PQRS, "pre_0217" ),
        "pre_0218" => array( ReportTypes::PQRS, "pre_0218" ),
        "pre_0219" => array( ReportTypes::PQRS, "pre_0219" ),
        "pre_0220" => array( ReportTypes::PQRS, "pre_0220" ),
        "pre_0221" => array( ReportTypes::PQRS, "pre_0221" ),
        "pre_0222" => array( ReportTypes::PQRS, "pre_0222" ),
        "pre_0223" => array( ReportTypes::PQRS, "pre_0223" ),
        "pre_0224" => array( ReportTypes::PQRS, "pre_0224" ),
        "pre_0225" => array( ReportTypes::PQRS, "pre_0225" ),
        "pre_0236" => array( ReportTypes::PQRS, "pre_0236" ),
        "pre_0238" => array( ReportTypes::PQRS, "pre_0238" ),
        "pre_0249" => array( ReportTypes::PQRS, "pre_0249" ),
        "pre_0250" => array( ReportTypes::PQRS, "pre_0250" ),
        "pre_0251" => array( ReportTypes::PQRS, "pre_0251" ),
        "pre_0258" => array( ReportTypes::PQRS, "pre_0258" ),
        "pre_0259" => array( ReportTypes::PQRS, "pre_0259" ),
        "pre_0260" => array( ReportTypes::PQRS, "pre_0260" ),
        "pre_0262" => array( ReportTypes::PQRS, "pre_0262" ),
        "pre_0263" => array( ReportTypes::PQRS, "pre_0263" ),
        "pre_0264" => array( ReportTypes::PQRS, "pre_0264" ),
        "pre_0271" => array( ReportTypes::PQRS, "pre_0271" ),
        "pre_0278" => array( ReportTypes::PQRS, "pre_0278" ),
        "pre_0279" => array( ReportTypes::PQRS, "pre_0279" ),
        "pre_0284" => array( ReportTypes::PQRS, "pre_0284" ),
        "pre_0326" => array( ReportTypes::PQRS, "pre_0326" ),
        "pre_0327" => array( ReportTypes::PQRS, "pre_0327" ),
        "pre_0329" => array( ReportTypes::PQRS, "pre_0329" ),
        "pre_0330" => array( ReportTypes::PQRS, "pre_0330" ),
        "pre_0332" => array( ReportTypes::PQRS, "pre_0332" ),
        "pre_0337" => array( ReportTypes::PQRS, "pre_0337" ),
        "pre_0340" => array( ReportTypes::PQRS, "pre_0340" ),
        "pre_0344" => array( ReportTypes::PQRS, "pre_0344" ),
        "pre_0345" => array( ReportTypes::PQRS, "pre_0345" ),
        "pre_0346" => array( ReportTypes::PQRS, "pre_0346" ),
        "pre_0347" => array( ReportTypes::PQRS, "pre_0347" ),
        "pre_0348" => array( ReportTypes::PQRS, "pre_0348" ),
        "pre_0358" => array( ReportTypes::PQRS, "pre_0358" ),
        "pre_0364" => array( ReportTypes::PQRS, "pre_0364" ),
        "pre_0370" => array( ReportTypes::PQRS, "pre_0370" ),
        "pre_0384" => array( ReportTypes::PQRS, "pre_0384" ),
        "pre_0385" => array( ReportTypes::PQRS, "pre_0385" ),
        "pre_0386" => array( ReportTypes::PQRS, "pre_0386" ),
        "pre_0388" => array( ReportTypes::PQRS, "pre_0388" ),
        "pre_0391" => array( ReportTypes::PQRS, "pre_0391" ),
        "pre_0394" => array( ReportTypes::PQRS, "pre_0394" ),
        "pre_0395" => array( ReportTypes::PQRS, "pre_0395" ),
        "pre_0396" => array( ReportTypes::PQRS, "pre_0396" ),
        "pre_0397" => array( ReportTypes::PQRS, "pre_0397" ),
        "pre_0403" => array( ReportTypes::PQRS, "pre_0403" ),
        "pre_0404" => array( ReportTypes::PQRS, "pre_0404" ),
        "pre_0405" => array( ReportTypes::PQRS, "pre_0405" ),
        "pre_0406" => array( ReportTypes::PQRS, "pre_0406" ),
        "pre_0408" => array( ReportTypes::PQRS, "pre_0408" ),
        "pre_0410" => array( ReportTypes::PQRS, "pre_0410" ),
        "pre_0411" => array( ReportTypes::PQRS, "pre_0411" ),
        "pre_0412" => array( ReportTypes::PQRS, "pre_0412" ),
        "pre_0413" => array( ReportTypes::PQRS, "pre_0413" ),
        "pre_0414" => array( ReportTypes::PQRS, "pre_0414" ),
        "pre_0415" => array( ReportTypes::PQRS, "pre_0415" ),
        "pre_0416" => array( ReportTypes::PQRS, "pre_0416" ),
        "pre_0417" => array( ReportTypes::PQRS, "pre_0417" ),
        "pre_0418" => array( ReportTypes::PQRS, "pre_0418" ),
        "pre_0419" => array( ReportTypes::PQRS, "pre_0419" ),
        "pre_0421" => array( ReportTypes::PQRS, "pre_0421" ),
        "pre_0424" => array( ReportTypes::PQRS, "pre_0424" ),
        "pre_0425" => array( ReportTypes::PQRS, "pre_0425" ),
        "pre_0426" => array( ReportTypes::PQRS, "pre_0426" ),
        "pre_0427" => array( ReportTypes::PQRS, "pre_0427" ),
        "pre_0429" => array( ReportTypes::PQRS, "pre_0429" ),
        "pre_0430" => array( ReportTypes::PQRS, "pre_0430" ),
        "pre_0437" => array( ReportTypes::PQRS, "pre_0437" ),
        "pre_0438" => array( ReportTypes::PQRS, "pre_0438" ),
        "pre_0440" => array( ReportTypes::PQRS, "pre_0440" ),
        "pre_0441" => array( ReportTypes::PQRS, "pre_0441" ),
        "pre_0442" => array( ReportTypes::PQRS, "pre_0442" ),
        "pre_0443" => array( ReportTypes::PQRS, "pre_0443" ),
        "pre_0444" => array( ReportTypes::PQRS, "pre_0444" ),
        "pre_0447" => array( ReportTypes::PQRS, "pre_0447" ),
        "pre_0448" => array( ReportTypes::PQRS, "pre_0448" ),
        "pre_0449" => array( ReportTypes::PQRS, "pre_0449" ),
        "pre_0450" => array( ReportTypes::PQRS, "pre_0450" ),
        "pre_0452" => array( ReportTypes::PQRS, "pre_0452" ),
        "pre_0453" => array( ReportTypes::PQRS, "pre_0453" ),
        "pre_0454" => array( ReportTypes::PQRS, "pre_0454" ),
        "pre_0455" => array( ReportTypes::PQRS, "pre_0455" ),
        "pre_0456" => array( ReportTypes::PQRS, "pre_0456" ),
        "pre_0457" => array( ReportTypes::PQRS, "pre_0457" )

    );
}
?>
