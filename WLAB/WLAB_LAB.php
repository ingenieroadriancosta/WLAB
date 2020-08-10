<?php
//*
if( !defined('frommain') ){
    echo 'ERROR:';
    sleep( 10 );
    header("Location: erno.a");
    exit("");
}

function createauth(){
    return (microtime()."");
}

for( $i=0; $i<strlen($arrcharT); $i++ ){
    $i_T = (63 & rand(0,63) );
    $arrcharT[$i] = $arrcharT[$i_T];
}

$auth = $arrcharT."";
$handle = fopen("authfiles/".$auth.".txt", "w");
fclose( $handle );


$handlec = fopen($filefolder."_NCNT.txt", "r");
$contents = fread( $handlec, filesize( $filefolder."_NCNT.txt" ) );
fclose( $handlec );

$incnt = intval( $contents );
$incnt++;

$handlec2 = fopen($filefolder."_NCNT.txt", "w");
fwrite($handlec2,  $incnt );
fclose( $handlec2 );





function getauth(){
    return ($auth."");
}


//*/
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/CLAB_ICON.png" />
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" >
<title>
    
    
    
    WLAB
</title>
<meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles_all.css">
        <link rel="stylesheet" href="css/stylebazz.css">
        
        <script data-ad-client="ca-pub-1008180701679242" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        
</head>
<body bgcolor="#ffffff" topmargin="0" leftmargin="0" rightmargin="0" onload="onload_fun(event)" >
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
    <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||  -->
<table align="center" bgcolor="#0000a0" border="0" cellpadding="3" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <td id="buttsd" class="noselect">
            <p align="center">
                <strong>
                    
                    
                    <!--
                    <font color="#c0c0c0" size="2">&nbsp;
                    <a class="navwhite" href="javascript:saveimagefnc()" id="idsaveimage" >
                        <font color="#ffffff">Guardar gráfica</font> 
                    </a>
                    
                    <font color="#ffffff" class="noselect">&nbsp; |&nbsp; </font>
                    <a class="navwhite" href="javascript:savefnc()" id="idsave" >
                        <font color="#ffffff"> Guardar datos </font>
                    </a>
                    <font color="#ffffff">&nbsp; |&nbsp;</font>
                    -->
                    
                    
                    
                    
                    
                    
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <a class="navwhite" href="javascript:claddown(0)" id="claddown" >
                        <font color="#ffffff">Descargar CLAB PIC</font>
                        <img src="images/CLAB_ICON.png" 
                             style='height: 24px; width: 24px; '
                             alt="asads"
                             >
                    </a>
                    <!-- -->
                    <!-- -->
                    <!-- -->
                    <font color="#ffffff">&nbsp; |&nbsp;</font>
                    <a class="navwhite" href="javascript:claddown(1)" id="claddown" >
                        <font color="#ffffff">Descargar CLAB ARDUINO</font>
                        <img src="images/CLAB_ICON_ARDUINO.png"
                             style='height: 24px; width: 24px; '
                             alt="asads"
                             >
                    </a>
                    <!-- -->
                    <!-- -->
                    <!-- -->
                    <font color="#ffffff">&nbsp; |&nbsp;</font>
                    <a class="navwhite" href="javascript:claddown(2)" id="claddown" >
                        <font color="#ffffff">Descargar TLAB</font>
                        <img src="images/TLAB.png"
                             style='height: 24px; width: 24px; '
                             alt="asads"
                             >
                    </a>
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    <!-- D O W N L O A D   S O F T W A R E  -->
                    
                    
                    
                    
                    
                    <!-- -->
                    <font color="#ffffff">&nbsp; |&nbsp; </font>
                    <a class="navwhite" href="javascript:toggleQEWLAB()">
                        <font color="#ffffff">QUE ES TADV</font>
                    </a>
                    </font>
                    
                    
                    <!-- -->
                    <font color="#ffffff">&nbsp; |&nbsp; </font>
                    <a class="navwhite" href="javascript:about()">
                        <font color="#ffffff">ACERCA DE WLAB</font>
                    </a>
                    </font>
                    
                    
                    
                    <a style="float:right" >
                        
                        <font color="#ffffff" >
                            CEL: +57 3008053163
                            <br>
                            email: adrianjocos@hotmail.com
                        </font>
                        
                    </a>
                    
                    
                    
                    
                </strong>
                
            </p>
            
            
                    
            
            </td>
        </tr>
        
        
        <tr>
            <td bgcolor="#8080ff" align="center" >
                
                <!-- 
                <a style="float:left" >
                    sdasd&nbsp;
                    sdasd&nbsp;sdasd&nbsp;sdasd&nbsp;
                    sdasd
                    <br>
                    sdasd
                    <br>
                    sdasd
                    <br>
                    sdasd
                </a>
                -->
                
                
                <left style="float:left; border-style: dotted;" onclick="covid19fnc()">
        <font color="#000000" 
                  style="font-family: Arial, sans-serif; font-size: 16px;font-weight: bold;" 
                  class="noselect" id="fntcvd19">

                                COVID-19

                        <img src="images/covid19.png"
                            style='height: 36px; width: 36px;'
                            alt="asads"
                            id="titnm2"
                        >
                </font>
    </left>
        
                
                
                
                <font color="#000000" 
                  style="font-family: Arial, sans-serif; font-size: 30px;font-weight: bold;" 
                  class="noselect" onclick="pruebas()">

                                WLAB

                        <img src="images/CLAB_ICON.png"
                            style='height: 36px; width: 36px;'
                            alt="asads"
                            id="titnm2"
                        >
                </font>
                
                
                
                
                
                <left style="float:right; border-style: dotted;" onclick="publicaciones()">
        <font color="#000000" 
                  style="font-family: Arial, sans-serif; font-size: 16px;font-weight: bold;" 
                  class="noselect" id="fntpublica">

                                PUBLICACIONES

                        <img src="images/_anp/multimic.png"
                            style='height: 36px; width: 36px;'
                            alt="asads"
                            id="titnm2"
                        >
                </font>
    </left>
        
                
                
                
                
                
                
            </td>
        </tr>
        
        
            <tr id="CHANN_OPT" >
                <td bgcolor="#ffffff" pbzloc="0">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" >
                    <tbody>
                        <tr>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <td valign="top" width="150px"   >
                            <table align="left" bgcolor="#8080ff" border="0" cellpadding="6" cellspacing="1" width="0%" height="100%">
                                <tbody>
                                    <tr style="height: 0px">
                                        <td height="10">
                                        <p align="center" class="noselect">
                                            

<a class="navwhite" href="javascript:saveimagefnc()" id="idsaveimage" style="border:dotted;">
    <font color="#000000" style="font-size: 12px;">Guardar gráfica</font> 
</a>
<!-- -->
<br>
<br>

<a class="navwhite" href="javascript:savefnc()" id="idsave" style="border:dotted;">
    <font color="#000000" style="font-size: 12px;"> Guardar datos </font>
</a>    


<br>
<br>

<a class="navwhite" href="javascript:Copy_Code()" id="idsave" style="border:dotted;">
    <font color="#000000" style="font-size: 12px;"> Código MATLAB </font>
</a>

                                        
                                        </p>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td bgcolor="#ffffff" >

<fieldset style="align:center" style="display: inline-block" valing="top" >
    <center>
        <input type="image" src="images/STOPREC.jpg" id="startadq" onclick="staradq()" alt="A" class="noselect"/>
    </center>
    <br>
    
    <label  class="noselect" id="tiempolbl">Tiempo</label>
    <input size="1" onblur="tiempoobfnc(event)"
           type='text' onkeypress='validateonlynumber(event)'
           id="tiempo" maxlength="3"
           onkeyup="tiempofnc(event)"
           />
    
    
    
    <br>
    <center>
        <label class="noselect" id="timeinfo"> ... </label>
    </center>
</fieldset>

<br>

<fieldset  style="display: inline-block" >
    <legend style="background-color:whitesmoke" class="noselect"> CANAL 1 </legend>
    <label  class="noselect">Salida</label>
    <input size="6" onblur="onbl_selector(event)"
           type='text' onkeypress='validate(event)'
           id="ampl1" maxlength="8" />
    <button onclick="onbl_selector(event)">Enviar</button>
    <br>

    <button id="opt_1" onclick="openmodal(1)" > Opciones </button>
    <br>
    <label  class="noselect" id="In1lbl">In1:0.0000</label>
</fieldset>


<br>
<br>

<!-- C A N A L   2  -->
<!--
<fieldset  style="display: inline-block" >
    <legend style="background-color:whitesmoke" class="noselect"> CANAL 2 </legend>
    <label  class="noselect">Salida</label>
    <input size="6" onblur="onbl_selector(event)"
           type='text' onkeypress='validate(event)'
           id="ampl2" maxlength="8" />
    <button onclick="onbl_selector(event)">Enviar</button>
    <br>

    <button id="opt_2" onclick="openmodal(2)" > Opciones </button>
    <br>
    <label  class="noselect" id="In2lbl">In1:0.0000</label>
</fieldset>
-->





<label class="noselect" id="tinfo" style="display:none">...</label>






                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <td pbzloc="17">
                                <font color="#ffffff" class="noselect">&nbsp; |&nbsp; </font>
                            </td>
                            
                            
                            
                            <td pbzloc="17">
                                <center>
                                    <canvas  id="canv_ploter"  style="border:1px solid #000000;" width="700" height="400">
                                    </canvas>
                                </center>
                            </td>
                            
                            
                            
                            
                            
                            
                        </tr>
                    </tbody>
                </table>

                <p>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td pbzloc="16">&nbsp;</td>
            </tr>
    </tbody>
</table>




<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- The Modal -->
<div id="myModal" class="modal" style="padding-top:0px;display: none;" >
    <div class="modal-content" style="background-color:lightblue">
        <button onclick="closemodal()" style="float:left;">
            X
        </button>
        <center>
        <p class="noselect" id="titlemodal">Opciones para el canal 1</p>
        </center>
            
            <fieldset>
                <center>
                <label class="noselect" id="ordenlbl">Tipo de planta</label>
                <br>
                <select id="orden" onchange="typeplantmodal()">
                  <option value="PO">Primer Orden &tau; </option>
                  <option value="SO">Segundo Orden &zeta; &omega; </option>
                </select>
                <br>
                <br>
                <img src="images/p1ord.png" alt="Italian Trulli" class="noselect" id="imord">
                </center>
                
                
                
                
                <br>
              <center>   
        <label class="noselect" id="k_a_lbl"> K 
        <input type='text' onkeypress='validateonlydecimal(event)' id="k_a_" maxlength="8"  
               size="6"
               />
        </label>
        
        
        
        <label class="noselect" id="taulbl" style="visibility:auto;"> &tau;:</label>
        <input type='text' onkeypress='validateonlydecimal(event)' id="tau" maxlength="8"  
               size="6"
               />
        
        
        <label class="noselect" id="zetalbl"> &zeta;:</label>
        <input type='text' onkeypress='validateonlydecimal(event)' id="zeta" maxlength="8"  
               size="6"
               />
        
        <label class="noselect" id="omegalbl"> &omega; </label>
        <input type='text' onkeypress='validateonlydecimal(event)' id="omega" maxlength="8"  
               size="6"
               />
         </center>
            </fieldset>
        
        
        
        
        
        
        
        
        
        
        
        
        
        <fieldset >
            <center>
            <a class="noselect">OTRAS OPCIONES</a>
            </center>
            
            
            <label class="noselect">
                <input type="checkbox" checked="checked" id="cntrldractvd">
                <span >Controlador</span>
            </label>
            
            <br>
            <center>
            <label class="noselect" style="float:center; font-size: 12px;">
                C<sub>(s)</sub> = K<sub>p</sub> + K<sub>i</sub>/s + K<sub>d</sub>s/(0.1 K<sub>d</sub> s + 1);
            </label>
            </center>
            
            
            
            
            <br>
            <label class="noselect"
                   id="Kplbl"
                   style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 900; color: #000000;"
                   >K<sub>p</sub>
            
            <input type='text' onkeypress='validateonlydecimal(event)' id="Kp" maxlength="8"  
               size="6"
               />
            
            </label>
            
            
            
            <label class="noselect"
                   id="Kilbl"
                   style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 900; color: #000000;"
                   >K<sub>i</sub>
            <input type='text' onkeypress='validateonlydecimal(event)' id="Ki" maxlength="8"  
               size="6"
               />
            
            </label>
            
            
            
            
            <label class="noselect"
                   id="Kdlbl"
                   style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 900; color: #000000;"
                   >K<sub>d</sub>
            
            <input type='text' onkeypress='validateonlydecimal(event)' id="Kd" maxlength="8"  
               size="6"
               />
            
            </label>
            
            
            
            
            <br>
            <label class="noselect"
                   style="font-family: Arial, sans-serif; font-size: 10px; font-weight: 600; color: #000000;"
                   >
                Cuando aplica el controlador la señal de salida aparece en azul
                y en amarillo la señal sin controlador.
                
            </label>
            
            
            
            
            
        </fieldset>
        
        
        
        
        
        
        
        
        
        <br>
        <br>
        <div align="right">
            <button onclick="applymodal()" > Aplicar </button>
            <button onclick="closemodal()" > Cerrar </button>
        </div> 
        
        
        
    </div>
</div>
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<div id="ModalAbout" class="modal" style="padding-top:0px;display: none;" >
    <div class="modal-content" style="background-color:lightblue" id="ModalAboutI" >
        <button onclick="hideabout()" > x </button> 
        
        <h1 class="noselect" align="center">ACERCA DE WLAB</h1>
        
        
        
        
        <h2 class="noselect" >
            <fieldset style="display: inline-block" >
            <center>
            <img  class="img-circle" 
                  src="images/1.jpg" alt="Avatar" style="width:60%" class="img-circle" >
            </center>
                
                <h5 align="left">Creado por:</h5>
                
                <h2 align="center" style="font-size: 32px">
                    ADRIAN COSTA
                    <br>
                    <font color="#000000" class="noselect" style="font-size: 12px;" >
                    INGENIERO ELECTRÓNICO
                    </font>
                    <br>
                    <font color="#000000" class="noselect" style="font-size: 10px;" >
                    UNIVERSIDAD POPULAR DEL CESAR
                    </font>
                </h2>
                
                <h6> Contactos:<br>
                    CEL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                    <font color="#000000" > +57 3008053163</font>
                    <br>
                    email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                    <font color="#000000" > adrianjocos@hotmail.com</font>
                    <br>
                    
                    
                    <a style="float:left">
                         Instagram:
                    </a>
                    <a href="https://www.instagram.com/adriancostaiv/" target="_blank" style="float:left">
                         &nbsp;adriancostaiv
                    </a>
                    
                    
                </h6>
                
                
        </h2>
        
        
        
        
        
</div>
</div>

<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->



<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- The Modal -->
<div id="MsgBox" class="modalmsgbox" style="padding-top:0px;display: none;" 
     onkeydown="javacript:document.getElementById('MsgBox').style.display = 'none';" 
     >
    <div class="modal-contentmsgbox" style="background-color:lightblue"
         onkeydown="javacript:document.getElementById('MsgBox').style.display = 'none';" 
         >
        <button onclick="javacript:document.getElementById('MsgBox').style.display = 'none';" 
                style="float:left;"
                id="msgbbut"
                >
            X
        </button>
        <br>
        <center>
            <label id="msgboxlbl">
            </label>
        </center>
        <br>
    </div>
</div>
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->

<!--
<div id="QEWLAB">
    <button onclick="closeQEWLAB()">
        X
    </button>
    <br>
<iframe  sandbox="allow-same-origin" src="QEWLAB.html" 
        style="height:80%; width:99.4%;"
        id="ifrmQEWL"
        >
</iframe>
</div>
-->




        <button class="w_h" onclick="pruebas(event)" id="idpruebas" style="display:none;"> 
            PRUEBAS
        </button>



       
        
<script>

    function onload_fun(){
                try{
                    //
                    var urlscript2 = window.location.protocol + "//" + window.location.host + "";
                    var urlscript = urlscript2;//document.URL.substr(0,document.URL.lastIndexOf('/')) + "";
                    if( urlscript.endsWith("/") ){
                        urlscript = urlscript.substring( 0, urlscript.length-1 );
                    }else{
                        urlscript = urlscript + "/";
                    }
                    
                    
                    /*
                    alert( urlscript + "\n" + 
                            urlscript2
                            );
                    //*/
                    
                    
                    urlscript = urlscript + "?qweasdzxc=" + "<?php echo $auth; ?>";
                    
                    
                    
                    
                    
                    var ajax = new XMLHttpRequest();
                    ajax.open( 'GET', urlscript, false );
                    ajax.onreadystatechange = function () {
                        var script = ajax.response || ajax.responseText;
                        if (ajax.readyState === 4) {
                            switch( ajax.status) {
                                case 200:
                                    // alert( script );
                                    eval.apply( window, [script] );
                                    break;
                                default:
                                    alert( "From loadscript:\n" + "ERROR: script not loaded:\n", url );
                            }
                        }
                    };
                    ajax.send(null);
                    //
                    //
                    mainload();
                    load_all();
                    publishanp();
                    //
                    //
                    //  openmodal(1);
                    //
                    //
                    //
                    //
                    //
                    //
                    //
                    //
                    //
                    //
                }catch( ex ){
                    alert( "ERROR onload_fun\n" + ex );
                }
            }
            function pruebas(){toggleQEWLAB();return;
                try{
                    toggleQEWLAB();
                }catch( ex ){
                    alert( "ERROR:\n" + ex );
                }
                    
            }
            //

            
</script>


</body>
</html>

