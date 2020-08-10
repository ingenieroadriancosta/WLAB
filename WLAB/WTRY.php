<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<meta name="GENERATOR" content="PageBreeze Free HTML Editor (http://www.pagebreeze.com)">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" >
<title>WLAB</title>
<style>
</style>
<meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles_all.css">
        <link rel="stylesheet" href="css/stylebazz.css">
        <script src="js/vars.js"> </script>
        <script src="js/funcs.js"> </script>
</head>
<body bgcolor="#cecece" topmargin="0" leftmargin="0" rightmargin="0" onload="onload_fun(event)" >
<table align="center" bgcolor="#0000a0" border="0" cellpadding="3" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <td id="buttsd" class="noselect">
            <p align="center">
                <strong>
                    <font color="#c0c0c0" size="2">&nbsp;
                    <a class="navwhite" href="javascript:saveimagefnc()" id="idsaveimage" >
                        <font color="#ffffff">Guardar gráfica</font> 
                    </a>
                    <!-- -->
                    <font color="#ffffff" class="noselect">&nbsp; |&nbsp; </font>
                    <a class="navwhite" href="javascript:savefnc()" id="idsave" >
                        <font color="#ffffff"> Guardar datos </font>
                    </a>
                    <!-- -->
                    <font color="#ffffff">&nbsp; |&nbsp;</font>
                    <a class="navwhite" href="javascript:claddown()" id="claddown" >
                        <font color="#ffffff">Descargar CLAB</font>
                        <img src="images/CLAB_ICON.png" 
                             style='height: 24px; width: 24px; '
                             alt="asads"
                             >
                        <img src="images/CLAB_ICON_ARDUINO.png" 
                             style='height: 24px; width: 24px; '
                             alt="asads"
                             >
                    </a> 
                    <!-- -->
                    <font color="#ffffff">&nbsp; |&nbsp; </font>
                    <a class="navwhite" href="javascript:about()">
                        <font color="#ffffff">ACERCA DE WLAB</font>
                    </a>
                    
                    </font>
                </strong>
            </p>
            
            </td>
        </tr>
        
        
        <tr>
            <td bgcolor="#8080ff">
            <h1 align="center"><font color="#000000" class="noselect">WLAB
                <img src="images/CLAB_ICON.png" 
                             style='height: 40px; width: 40px; '
                             alt="asads"
                             >
                </font></h1>
            
            </td>
        </tr>
            <tr>
                <td bgcolor="#ffffff" pbzloc="0">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" >
                    <tbody>
                        <tr>
                            <td valign="top" width="150">
                            <table align="left" bgcolor="#8080ff" border="0" cellpadding="6" cellspacing="1" width="0%" height="100%">
                                <tbody>
                                    <tr style="height: 0px">
                                        <td>
                                        <p align="center" class="noselect">Configuración y adquisición</p>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td bgcolor="#ffffff" >




<fieldset style="align:center" style="display: inline-block" valing="top" >
    <center>
        <input type="image" src="images/STOPREC.jpg" id="startadq" onclick="staradq()" alt="A" class="noselect"/>
    </center>
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
                                <canvas  id="canv_ploter"  style="border:1px solid #000000;" width="700" height="400">
                                </canvas>
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
<div id="myModal" class="modal" >
    <div class="modal-content" style="background-color:lightblue">
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
            </fieldset>
        
        
        
        <center>
        <fieldset   >
            
            
        
        <label class="noselect" id="k_a_lbl"> K </label>
        <input type='text' onkeypress='validateonlydecimal(event)' id="k_a_" maxlength="10"  
               size="20"
               />
        <br>
        <br>
        
        
        <label class="noselect" id="taulbl"> &tau;:</label>
        <input type='text' onkeypress='validateonlydecimal(event)' id="tau" maxlength="10"  
               size="20"
               />
        
        <br>
        <br>
        <label class="noselect" id="zetalbl"> &zeta;:</label>
        <input type='text' onkeypress='validateonlydecimal(event)' id="zeta" maxlength="10"  
               size="20"
               />
        <br>
        <br>
        <label class="noselect" id="omegalbl"> &omega; </label>
        <input type='text' onkeypress='validateonlydecimal(event)' id="omega" maxlength="10"  
               size="20"
               />
        </fieldset>
        </center>
        
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

        <button class="w_h" onclick="pruebas(event)" id="idpruebas" > PRUEBAS </button>
        
<script>
    function onload_fun(){
                try{
                    //
                    load_all();
                    //
                    //
                }catch( ex ){
                    alert( ex );
                }
            }
</script>


</body>
</html>

