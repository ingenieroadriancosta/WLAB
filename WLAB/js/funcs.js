function setallcamp(){
    tinfo = document.getElementById("tinfo");
    tinfo.innerHTML = "Fs: " + Fs;
    ch1_I = document.getElementById("ampl1");
    ch1_I.value = "" + Ch1_O;
    
    
    //ch2_I = document.getElementById("ampl2");
    //ch2_I.value = "" + Ch2_O;
    
    
    timeinfo = document.getElementById("timeinfo");
    timeinfo.innerHTML = ("tadq: 100.000 Seg").fontsize(1);
    
    
    document.getElementById("tiempolbl").innerHTML = ("Tiempo").fontsize(1);
    document.getElementById("tiempo").value = "" + Tiempo;
    
    
}
function hola(){
    alert( "HOLA!!!" );
}

function load_all(){
    try{
    //
    //alert( "asdasd" );
    //
    window.addEventListener('beforeunload', function (e) {
        e.preventDefault();
        e.returnValue = '';
    });
    //
    document.getElementById("idpruebas").style.display = "none";
    //
    //
    //
    
    //
    document.getElementById("idsave").disabled = true;
    document.getElementById("idsaveimage").disabled = true;
    //
    //
    //
    //   
    //document.getElementById("claddown").style.height    = 70 + "px";
    //document.getElementById("claddown_im").style.height = document.getElementById("claddown").style.width;
    //
    //document.getElementById("idsaveimage").style.height = 1 + "px";
    //document.getElementById("idsave").style.height = 63 + "px";
    //
    //document.getElementById("claddown_im").style.width = 110 + "px";
    //
    //document.getElementById("cladf").style.width = 130 + "px";
    //
    //
    //
    //
    document.getElementById("In1lbl").innerHTML = "In1: ?V".fontsize(1);
    //document.getElementById("In2lbl").innerHTML = "In2: ?V".fontsize(1);
    //
    //
    //
    window.onunload = function(event){event.preventDefault();event.returnValue = '';};
    window.oncontextmenu = function( e ){ e.preventDefault(); };
    cntrl_0 = document.getElementById( "canv_ploter" );
    cntrl_0.oncontextmenu = function (e){
        e.preventDefault();
    };
    //document.body.style.backgroundColor = "#F0F0F0";cs
    //document.body.style.backgroundImage = "url('im/bk.jpg')";
    //document.body.style.background = "url('im/bk.jpg')";
    //document.body.style.backgroundImage = "url('im/bk0.jpg')";
    document.getElementById("startadq").src = "images/STOPREC.jpg";
    //
    setallcamp();
    //
    //
    //
    for( var i=0; i<buffIC1.length; i++ ){
        buffIC1[i] = 0.0;//( 5*Math.sin( ( (1*Math.PI*i)/Fs)) );
        //buffIC2[i] = 0.0;
        //
        buffOC1[i] = 0.0;
        //buffOC2[i] = 0.0;
    }
    //
    //
    pltr = new Plotter( "canv_ploter" );
    pltr.resize( 1100, 450 );
    pltr.setgrid();
    pltr.applypixels();
    pltr.set_X_label( "Segundos" );
    pltr.set_Y_label( "Voltios" );
    pltr.set_xpos_init( 0 );
    pltr.set_xpos_end( Tiempo );
    //
    pltr.set_ypos_end( Top_Val );
    pltr.set_ypos_init( Top_Low_Val );
    //
    //pltr.settextcolor( 255|0, 10|0, 0|0 );
    pltr.setauth();
    pltr.settextcolor( 0, 0, 0 );
    //
    //
    // getallinfobrowser();
    //
    //
    finterv = 0;
    var elements = document.querySelectorAll( '*' );
    for( var i=0; i<elements.length; i++ ){
        var str = elements[i].src + "";
        if( str.includes("powered-by-") ){
            elements[i].hidden = "true";
        }
    }
    //
    //
    //
    //
    }catch( ex ){
        alert( "ERROR( load_all )\n" + ex );
    }
    //
}

function staradq(event){
    try{
        
    if( onadq ){
        document.getElementById("startadq").src = "images/STOPREC.jpg";
        onadq = false;
        clearTimeout( ADQTimer );
        document.getElementById("idsave").disabled = false;
        document.getElementById("idsaveimage").disabled = false;
        document.getElementById("opt_1").disabled = false;
        document.getElementById("tiempo").disabled = false;
        //document.getElementById("opt_2").disabled = false;
    }else{
        document.getElementById("idsave").disabled = true;
        document.getElementById("idsaveimage").disabled = true;
        document.getElementById("opt_1").disabled = true;
        document.getElementById("tiempo").disabled = true;
        //document.getElementById("opt_2").disabled = true;
        document.getElementById("startadq").src = "images/REC.jpg";
        onadq = true;
        //
        //
        //
        //
        //
        //
        CoefFuncs( ptype_1 );
        //CoefFuncs( (ptype_2+16)|0 );
        //
        //
        //
        //
        //
        pini_tt = 5;
        for( var i=0; i<pini_tt; i++ ){
            buffOC1[i]       = Ch1_O;
            buffIC1[i]       = 0.0;
            buffIC1_CNRLR[i] = 0.0;
            //
            /*
            buffOC2[i] = K_2 * Ch2_O;
            buffIC2[i] = 0.0;
            //*/
        }
        //
        buffIC1[0] = buffOC1[0] * b0_1;
        //
        buffIC1[1] = buffOC1[1] * b0_1 + buffOC1[0] * b1_1                                                             - ( buffIC1[0] * a1_1 );
        //
        buffIC1[2] = buffOC1[2] * b0_1 + buffOC1[1] * b1_1 + buffOC1[0] * b2_1                                         - ( buffIC1[1] * a1_1 + buffIC1[0] * a2_1 );
        //
        buffIC1[3] = buffOC1[3] * b0_1 + buffOC1[2] * b1_1 + buffOC1[1] * b2_1 + buffOC1[0] * b3_1                     - ( buffIC1[2] * a1_1 + buffIC1[1] * a2_1 + buffIC1[0] * a3_1 );
        //
        buffIC1[4] = buffOC1[4] * b0_1 + buffOC1[3] * b1_1 + buffOC1[2] * b2_1 + buffOC1[1] * b3_1 + buffOC1[0] * b4_1 - ( buffIC1[3] * a1_1 + buffIC1[2] * a2_1 + buffIC1[1] * a3_1 + buffIC1[0] * a4_1 );
        //
        //
        //
        //
        //
        buffIC1_CNRLR[0] = buffOC1[0] * b0_1_C;
        //
        buffIC1_CNRLR[1] = buffOC1[1] * b0_1_C + buffOC1[0] * b1_1_C                                                                   - ( buffIC1_CNRLR[0] * a1_1_C );
        //
        buffIC1_CNRLR[2] = buffOC1[2] * b0_1_C + buffOC1[1] * b1_1_C + buffOC1[0] * b2_1_C                                             - ( buffIC1_CNRLR[1] * a1_1_C + buffIC1_CNRLR[0] * a2_1_C );
        //
        buffIC1_CNRLR[3] = buffOC1[3] * b0_1_C + buffOC1[2] * b1_1_C + buffOC1[1] * b2_1_C + buffOC1[0] * b3_1_C                       - ( buffIC1_CNRLR[2] * a1_1_C + buffIC1_CNRLR[1] * a2_1_C + buffIC1_CNRLR[0] * a3_1_C );
        //
        buffIC1_CNRLR[4] = buffOC1[4] * b0_1_C + buffOC1[3] * b1_1_C + buffOC1[2] * b2_1_C + buffOC1[1] * b3_1_C + buffOC1[0] * b4_1_C - ( buffIC1_CNRLR[3] * a1_1_C + buffIC1_CNRLR[2] * a2_1_C + buffIC1_CNRLR[1] * a3_1_C + buffIC1_CNRLR[0] * a4_1_C );
        //
        //
        /*
        buffIC2[0] = buffOC2[0] * b0_2;
        //
        buffIC2[1] = buffOC2[1] * b0_2 + buffIC2[0] * b1_2
                    -( buffIC2[0] * a1_2 );
        //
        buffIC2[2] = buffOC2[2] * b0_2   + buffIC2[1] * b1_2 + buffIC2[0] * b2_2
                    -( buffIC2[1] * a1_2 + buffIC2[0] * a2_2 );
        //*/
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
        //
        //
        //
        pltr.setgrid();
        pltr.applypixels();
        pltr.set_X_label( "Segundos" );
        pltr.set_Y_label( "Voltios" );
        pltr.set_xpos_init( 0 );
        pltr.set_xpos_end( Tiempo );
        //
        pltr.set_ypos_end( Top_Val );
        pltr.set_ypos_init( Top_Low_Val );
        //
        //pltr.settextcolor( 255|0, 10|0, 0|0 );
        pltr.setauth();
        pltr.settextcolor( 0, 0, 0 );
        tic();
        ADQTimer = setInterval( adqproc, 20 );
    }
    }catch( ex ){
        alert( ex );
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
var ticv = 0.0;
var tocv = 0.0;
function tic(){ ticv = Date.now(); }
function toc(){ tocv = Date.now() - ticv; return tocv; }
//
var modopt = 1;
function openmodal( nchann ){
    try{
        modopt = nchann;
        var orden_m = document.getElementById("orden");
        switch( modopt ){
            case 1:
                orden_m.selectedIndex = ptype_1;
                document.getElementById("k_a_").value  = "" + K_1;
                document.getElementById("tau").value   = "" + tao_1;
                document.getElementById("zeta").value  = "" + zeta_1;
                document.getElementById("omega").value = "" + wn_1;
                //
                document.getElementById("Kp").value = "" + Kp_1;
                document.getElementById("Ki").value = "" + Ki_1;
                document.getElementById("Kd").value = "" + Kd_1;
                document.getElementById("cntrldractvd").checked = PID_ACT_1;
                
                //
                //
                break;
            case 2:
                orden_m.selectedIndex = ptype_2;
                document.getElementById("k_a_").value  = "" + K_2;
                document.getElementById("tau").value   = "" + tao_2;
                document.getElementById("zeta").value  = "" + zeta_2;
                document.getElementById("omega").value = "" + wn_2;
                break;
        }
        typeplantmodal();
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        var titlemodal = document.getElementById("titlemodal");
        titlemodal.innerHTML = "Opciones para el canal " + nchann;
    }catch( ex ){
        alert( ex );
    }
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function closemodal(){
    try{
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }catch( ex ){
        alert( ex );
    }
}
//
function typeplantmodal(){
    try{
        var sel = document.getElementById('orden');
        var imag = document.getElementById('imord');
        switch( sel.selectedIndex ){
            case 0:
                imag.src = "images/p1ord.png";
                
                document.getElementById('taulbl').style.display = "inline";
                document.getElementById('tau').style.display = "inline";
                
                document.getElementById('zeta').style.display = "none";
                document.getElementById('zetalbl').style.display = "none";
                
                document.getElementById('omegalbl').style.display = "none";
                document.getElementById('omega').style.display = "none";
                
                break;
            case 1:
                document.getElementById('taulbl').style.display = "none";
                document.getElementById('tau').style.display = "none";
                
                document.getElementById('zeta').style.display = "inline";
                document.getElementById('zetalbl').style.display = "inline";
                
                document.getElementById('omegalbl').style.display = "inline";
                document.getElementById('omega').style.display = "inline";
                imag.src = "images/p2ord.png";
                break;
        }
    }catch( ex ){
        alert( ex );
    }
}
//
//
//
function applymodal(){
    try{
        var sel = document.getElementById('orden');
        switch( modopt ){
            case 1:
                ptype_1 = sel.selectedIndex;
                K_1     = parseFloat( document.getElementById("k_a_").value );
                tao_1   = parseFloat( document.getElementById("tau").value );
                zeta_1  = parseFloat( document.getElementById("zeta").value );
                wn_1    = parseFloat( document.getElementById("omega").value );
                
                
                //
                Kp_1    = parseFloat( document.getElementById("Kp").value );
                Ki_1    = parseFloat( document.getElementById("Ki").value );
                Kd_1    = parseFloat( document.getElementById("Kd").value );
                PID_ACT_1 = document.getElementById("cntrldractvd").checked;
                
                Fds_1 = 0.01 * Kd_1;
                
                break;
            case 2:
                ptype_2 = sel.selectedIndex;
                K_2     = parseFloat( document.getElementById("k_a_").value );
                tao_2   = parseFloat( document.getElementById("tau").value );
                zeta_2  = parseFloat( document.getElementById("zeta").value );
                wn_2    = parseFloat( document.getElementById("omega").value );
                break;
        }
        closemodal();
    }catch( ex ){
        alert( ex );
    }
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function about(){
    document.getElementById("ModalAbout").style.display = "block";
}
function hideabout(){
    document.getElementById("ModalAbout").style.display = "none";
    
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function tiempofnc( event ){
    try{
        if( event.target.value.length<1 ){
            return;
        }
        var v_l = parseInt( event.target.value );
        if( v_l<1 ){
            Tiempo = (1|0);
            document.getElementById("tiempo").value = "" + Tiempo;
        }else{
            if( v_l>100 ){
                Tiempo = (100|0);
                document.getElementById("tiempo").value = "" + Tiempo;
            }else{
                Tiempo = v_l;
            }
        }
        //
        //
        //
        //
        //
        pltr.setgrid();
        pltr.applypixels();
        pltr.set_X_label( "Segundos" );
        pltr.set_Y_label( "Voltios" );
        pltr.set_xpos_init( 0 );
        pltr.set_xpos_end( Tiempo );
        //
        pltr.set_ypos_end( Top_Val );
        pltr.set_ypos_init( Top_Low_Val );
        //
        //pltr.settextcolor( 255|0, 10|0, 0|0 );
        pltr.setauth();
        pltr.settextcolor( 0, 0, 0 );
        //
        //
        //
        //
        //
        //
        pltr.setlinecolor( 0, 200, 0 );
        pltr.plotall( buffOC1, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
        //
        //
        pltr.setlinecolor( 0, 0, 200 );
        if( PID_ACT_1 ){
            pltr.setlinecolor( 255, 242, 0 );
        }
        pltr.plotall( buffIC1, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
        //
        if( PID_ACT_1 ){
            pltr.setlinecolor( 0, 0, 200 );
            pltr.plotall( buffIC1_CNRLR, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
        }
        //
        //
        //
        //
        pltr.plot_OK();
        //
        //
    }catch( ex ){
        alert( ex );
    }
    
}
//
function tiempoobfnc( event ){
    try{
        //
        //
        if( document.getElementById("tiempo").value.length<1 ){
            document.getElementById("tiempo").value = "" + Tiempo;
        }
        //
        //
        //
        //
        //
        //
        pltr.setgrid();
        pltr.applypixels();
        pltr.set_X_label( "Segundos" );
        pltr.set_Y_label( "Voltios" );
        pltr.set_xpos_init( 0 );
        pltr.set_xpos_end( Tiempo );
        //
        pltr.set_ypos_end( Top_Val );
        pltr.set_ypos_init( Top_Low_Val );
        //
        //pltr.settextcolor( 255|0, 10|0, 0|0 );
        pltr.setauth();
        pltr.settextcolor( 0, 0, 0 );
        //
        //
        //
        //
        //
        //
        pltr.setlinecolor( 0, 200, 0 );
        pltr.plotall( buffOC1, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
        //
        //
        pltr.setlinecolor( 0, 0, 200 );
        if( PID_ACT_1 ){
            pltr.setlinecolor( 255, 242, 0 );
        }
        pltr.plotall( buffIC1, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
        //
        if( PID_ACT_1 ){
            pltr.setlinecolor( 0, 0, 200 );
            pltr.plotall( buffIC1_CNRLR, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
        }
        //
        //
        //
        //
        pltr.plot_OK();
        //
        //
    }catch( ex ){
        alert( ex );
    }
}
//
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////



