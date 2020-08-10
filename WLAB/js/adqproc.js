function adqproc(){
    try{
    var Nactual = (toc())|0;
    if( Nactual>=(Fs*Tiempo) ){
        Nactual = (Fs*Tiempo)|0;
    }
    
    var tactual = Nactual/(Fs+0.0);
    if( tactual>=Tiempo ){
        tactual = Tiempo;
    }
    var StrTime = tactual + "0000";
    var n = StrTime.indexOf(".");
    StrTime = StrTime.substring(0, n+4);
    StrTime = "tadq: " + StrTime + " Seg";
    timeinfo.innerHTML = StrTime.fontsize(1);
    //
    pend_tt = ( Nactual )|0;
    //
    //
    //
    //
    //pend_tt = (Tiempo * Fs)|0;
    //
    //
    //
    //alert( "" + Ch1_O );
    //
    for( var i=pini_tt; i<pend_tt; i++ ){
        //
        buffOC1[i] = Ch1_O; //
        buffIC1[i] = buffOC1[i] * b0_1 + buffOC1[i-1] * b1_1 + buffOC1[i-2] * b2_1 + buffOC1[i-3] * b3_1 + buffOC1[i-4] * b4_1
                        - buffIC1[i-1] * a1_1 - buffIC1[i-2] * a2_1 - buffIC1[i-3] * a3_1 - buffIC1[i-4] * a4_1;
        //
        //
        buffIC1_CNRLR[i] = buffOC1[i] * b0_1_C + buffOC1[i-1] * b1_1_C + buffOC1[i-2] * b2_1_C + buffOC1[i-3] * b3_1_C + buffOC1[i-4] * b4_1_C
                        - buffIC1_CNRLR[i-1] * a1_1_C - buffIC1_CNRLR[i-2] * a2_1_C - buffIC1_CNRLR[i-3] * a3_1_C - buffIC1_CNRLR[i-4] * a4_1_C;
        
        //
        //
        //
        /*
        buffOC2[i] = K_2*Ch2_O; //
        buffIC2[i] = buffOC2[i] * b0_2 + buffIC2[i-1] * b1_2 + buffIC2[i-2] * b2_2
                    - buffIC2[i-1] * a1_2 - buffIC2[i-2] * a2_2;
        //*/
        //
        //
        //
        //
    }
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
    //
    pltr.plotall( buffIC1, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
    //
    if( PID_ACT_1 ){
        pltr.setlinecolor( 0, 0, 200 );
        pltr.plotall( buffIC1_CNRLR, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
    }
    //
    //
    //
    /*
    pltr.setlinecolor( 200, 0, 0 );
    pltr.plotall( buffIC2, 0, pend_tt, (Tiempo*Fs)|0, Top_Val, Top_Low_Val );
    //*/
    pltr.plot_OK();
    //
    //
    //
    //
    //
    }catch( ex ){
        alert( ex );
    }
    pini_tt = pend_tt;
    //
    //
    //
    //
    var var2 = buffIC1[pend_tt-1];
    if( Math.abs(var2)>0.00001 ){
        StrTime = buffIC1[pend_tt-1] + "000000";
        n = StrTime.indexOf(".");
        StrTime = StrTime.substring(0, n+4);
        StrTime = "In1: " + StrTime + " V";
    }else{
        StrTime = "In1: 0.000" + " V";
    }
    document.getElementById("In1lbl").innerHTML = StrTime.fontsize(1);
    //
    //
    /*
    var2 = buffIC2[pend_tt-1];
    if( Math.abs(var2)>0.00001 ){
        StrTime = buffIC2[pend_tt-1] + "000000";
        n = StrTime.indexOf(".");
        StrTime = StrTime.substring(0, n+4);
        StrTime = "In2: " + StrTime + " V";
    }else{
        StrTime = "In2: 0.000" + " V";
    }
    document.getElementById("In2lbl").innerHTML = StrTime.fontsize(1);
    //*/
    //
    //
    //
    //
    //
    //
    if( tactual>=Tiempo ){
        StrTime = "tadq: " + tactual + " Seg";
        timeinfo.innerHTML = StrTime.fontsize(1);
        staradq();
    }
    //
    // timeinfo.innerHTML = "" + buffIC1[pend_tt-1];
    //
}
