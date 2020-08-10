<?php


function covid_datas(){
    $fname = dirname(__FILE__, 2)."/_anp/asd.json";
    $datjs =  date("d");
    $fndate = dirname(__FILE__, 2)."/_anp/asdjsonDATE.txt";
    $hnddat = fopen( $fndate, "r");
    $jdat = fread( $hnddat, filesize( $fndate ) );
    fclose( $hnddat );
    if(strcmp($jdat, $datjs)!=0 ){
        $json = file_get_contents( "https://opendata.ecdc.europa.eu/covid19/casedistribution/json/" );
        $hnddat = fopen( $fname, "w");
        fwrite( $hnddat, $json );
        fclose( $hnddat );
        //
        //
        $hnddat = fopen( $fndate, "w");
        fwrite( $hnddat, $datjs );
        fclose( $hnddat );
        //
        //
    }
    
    
    
    
    

if( file_exists ( $fname )  ){
    if( filesize( $fname )==0 ){
        $hnddat = fopen( $fndate, "w");
        fwrite( $hnddat, "00" );
        fclose( $hnddat );
        exit( "Intente mas tarde!!!" );
    }
    $handlec = fopen( $fname, "r");
    $json = fread( $handlec, filesize( $fname ) );
    fclose( $handlec );
}else{
    $json = file_get_contents( "https://opendata.ecdc.europa.eu/covid19/casedistribution/json/" );
    $hnddat = fopen( $fname, "w");
    fwrite( $hnddat, $json );
    fclose( $hnddat );
}
/*


//*/
//

//
//
//
$t2ret = "".


"<br>".
"<br>".
"<table style=\"font-size:32px;\">".
"<tr>".
"    <th>Pais</th>".
"    <th>Contagios</th>".
"    <th>Muertes</th>".
"    <th>%</th>".
"  </tr>".
"";
// 

$cnt_deaths_tot = 0;

//echo gettype($json)."<br>";
$json = (json_decode($json, true));
//println( gettype($json) );
$json = $json['records'];
//println( "json['records']:  resulta en: ".gettype($json) );
//println( "TOP: ".count($json) );

$top = count($json);
$ncnt = 0;
$cnt_deaths = 0;
$contry = $json['0']['countriesAndTerritories'];
$Ncontry = 1;

$ncnt_prv = 0;


$cnt_total = 0;



for( $i=0; $i<$top; $i++ ){
    $a = ''.$i;
    $pais = $json[$a]['countriesAndTerritories'];
    if( strcmp( $contry, $pais )!=0 ){
        $contry_T = str_replace('_', ' ', $contry)."";
        $contry = str_replace('_', ' ', $contry);
        $deperc = (100*$cnt_deaths/$ncnt);
        if( $deperc>=5 ){
            $deperc = "<a style=\"color:red;font-weight: 900;\">".sprintf("%5.1f%%", $deperc )."</a>";
            $contry_sel = "<a style=\"color:red;font-weight: 900;\">".$contry."</a>";
        }else{
            $deperc = sprintf("%5.1f%%", (100*$cnt_deaths/$ncnt) );
            $contry_sel = $contry."";
        }
        
        
        
        
        
        $t2ret = $t2ret.
                    "<tr>".
                    "<td>$contry_sel".
                    "<br><div><canvas id=\"".$contry."\" style='border:3px solid #000000;' ".
                    "onclick=\"canon( '".$contry_T."')\" ".
                    "></canvas></div>".
                    "</td>".
                    
                    "<td><center>$ncnt</center></td>".
                    "<td><center>$cnt_deaths</center></td>".
                    "<td><center>".$deperc."</center></td>".
                    "</tr>".
                "\n";
        //
        $cnt_deaths_tot = $cnt_deaths_tot + $cnt_deaths;
        //
        //
        $cnt_total = $cnt_total + $ncnt;
        //
        //
        //
        //
        $Ncontry++;
        $contry = $pais;
        $ncnt = (int)$json[$a]['cases'];
        $cnt_deaths = (int)$json[$a]['deaths'];
    }else{
        if( strcmp( $pais, $contry )==0 ){
            $ncnt       = $ncnt         + (int)$json[$a]['cases'];
            $cnt_deaths = $cnt_deaths   + (int)$json[$a]['deaths'];
        }
    }
    //
    if( strcmp( $pais, "Afghanistan" )==0 ){
        $ncnt_prv = $ncnt_prv + (int)$json[$a]['cases'];
    }
    //println( $json[$a]['countriesAndTerritories'] );
}
$t2ret = $t2ret.
                "</table>".
                
        "";


$percmund = (100*$cnt_deaths_tot/$cnt_total);
if( $percmund>=5 ){
    $percmund = ( "<pre style=\"font-size:20px;color:red;font-weight: 900;\"  >Porcentaje:                  ".
                 sprintf("%5.1f", $percmund )."%"."</pre>" );
}else{
    $percmund = ( "<pre style=\"font-size:20px;\"  >Porcentaje:                  ".
                 sprintf("%5.1f", $percmund )."%"."</pre>" );
}
$t2ret = ( "<pre style=\"font-size:20px;\"  >Contagiados a nivel mudial:   $cnt_total</pre>" ).
         ( "<pre style=\"font-size:20px;\"  >Muertos a nivel mudial:       $cnt_deaths_tot</pre>" ).
         
        
        $percmund.
         
        
        ( "<pre style=\"font-size:22px; color:red;font-weight: 900;\" >Los casos mayores o iguales al 5%<br>de mortalidad están en color rojo.<br></pre>" ).
         // ("Los casos mayores o iguales al 5% de mortalidad están en color rojo.<br>").
        
        
        
         $t2ret;

// println( "Casos Afghanistan: ".$ncnt_prv );
    return $t2ret;
}




function covid_data_name( $namecntr ){
    $fname = dirname(__FILE__, 2)."/_anp/asd.json";
    if( !file_exists ( $fname ) ){
        $jsond = file_get_contents( "https://opendata.ecdc.europa.eu/covid19/casedistribution/json/" );
        $hnddat = fopen( $fname, "w");
        fwrite( $hnddat, $jsond );
        fclose( $hnddat );
    }
    $handlec = fopen( $fname, "r");
    $jsonr = fread( $handlec, filesize( $fname ) );
    fclose( $handlec );
    
    $jsond = (json_decode($jsonr, true));
    $json = $jsond['records'];
    $top = count($json);
    $datas2 = "0, 0";
    
    $ncnt = 0;
    $cnt_deaths = 0;
    
    for( $i=0; $i<$top; $i++ ){
        $a = ''.$i;
        $paisT = $json[$a]['countriesAndTerritories'];
        $pais = str_replace('_', ' ', $paisT);
        if( strcmp( $namecntr, $pais )==0 ){
            $ncnt       = $ncnt + (int)$json[$a]['cases'];
            $cnt_deaths = $cnt_deaths + (int)$json[$a]['deaths'];
            $datas2 = $datas2.", $ncnt, $cnt_deaths";
        }
    }
    return ($datas2);
}




function covid_data_name_prnt( $namecntr ){
    $fname = dirname(__FILE__, 2)."/_anp/asd.json";
    $handlec = fopen( $fname, "r");
    $jsonr = fread( $handlec, filesize( $fname ) );
    fclose( $handlec );
    
    $jsond = (json_decode($jsonr, true));
    $json = $jsond['records'];
    $top = count($json);
    
    $ncnt = 0;
    $cnt_deaths = 0;
    
    
    $datas2 = "";
    
    $ntm = 0;
    for( $i=0; $i<$top; $i++ ){
        $a = ''.$i;
        $paisT = $json[$a]['countriesAndTerritories'];
        $pais = str_replace('_', ' ', $paisT);
        if( strcmp( $namecntr, $pais )==0 ){
            $ncnt       = $ncnt + (int)$json[$a]['cases'];
            $cnt_deaths = $cnt_deaths + (int)$json[$a]['deaths'];
            $datas2 = $datas2.(100*$cnt_deaths/$ncnt)."<br>";
            $ntm++;
        }
    }
    $datas2 = "Tam: ".$ntm."<br><br>".$datas2;
    echo $datas2."";
}




// exit( $t2ret );

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
