<?php
include( dirname(__FILE__, 3)."/Includes.php" );
/*
$fname = dirname(__FILE__, 1)."/asd.json";
$handlec = fopen( $fname, "r");
$json = fread( $handlec, filesize( $fname ) );
fclose( $handlec );
//*/
$json = file_get_contents( "https://opendata.ecdc.europa.eu/covid19/casedistribution/json/" );
//echo gettype($json)."<br>";
$json = (json_decode($json, true));
//println( gettype($json) );
$json = $json['records'];
//println( "json['records']:  resulta en: ".gettype($json) );
//println( "TOP: ".count($json) );
$t2ret = "";
$top = count($json);
$ncnt = 0;
$contry = $json['0']['countriesAndTerritories'];
$Ncontry = 1;

$ncnt_prv = 0;

for( $i=0; $i<$top; $i++ ){
    $a = ''.$i;
    $pais = $json[$a]['countriesAndTerritories'];
    
    
    if( strcmp( $contry, $pais )!=0 ){
        $t2ret = $t2ret."".
                "<pre>".$contry."              ".$ncnt."</pre>"
                ;
        $Ncontry++;
        $contry = $pais;
        $ncnt = (int)$json[$a]['cases'];
    }else{
        if( strcmp( $pais, $contry )==0 ){
            $ncnt = $ncnt + (int)$json[$a]['cases'];
        }
    }
    
    if( strcmp( $pais, "Afghanistan" )==0 ){
        $ncnt_prv = $ncnt_prv + (int)$json[$a]['cases'];
    }
    
    
    //println( $json[$a]['countriesAndTerritories'] );
}

println( "Numero de paises: ".$Ncontry );

println( "Casos Afghanistan: ".$ncnt_prv );

        
exit( $t2ret );

/*
    "dateRep": "15/04/2020",
    "day": "15",
    "month": "4",
    "year": "2020",
    "cases": "49",
    "deaths": "2",
    "countriesAndTerritories": "Afghanistan",
    "geoId": "AF",
    "countryterritoryCode": "AFG",
    "popData2018": "37172386"
//*/






?>
<html></html>
