function Copy_Code(){
    try{
        var tend_all = ( Fs*Tiempo )|0;
        var strInput_H = "\n\n";
        strInput_H = "s = tf('s');\nFs = " + Fs + ";\n";
        strInput_H = strInput_H + "n = 0:(" + Tiempo + "*Fs)-1;\n";
        strInput_H = strInput_H + "t = n/Fs;\n";
        //
        var cntnon = 0;
        //
        var in_0 = buffOC1[0];
        //
        //
        // buffOC1
        strInput_H = strInput_H + "inp_1 = [" + in_0 + " * ones( ";
        //
        for( var i=0; i<tend_all; i++ ){
            cntnon++;
            if( in_0!==buffOC1[i] || i===(tend_all-1) ){
                in_0 = buffOC1[i];
                if( i===(tend_all-1) ){
                    strInput_H = strInput_H + "" + cntnon + ", 1) ];\n";
                }else{
                    strInput_H = strInput_H + "" + cntnon + ", 1); ";
                    strInput_H = strInput_H + in_0 + " * ones( ";
                }
                cntnon = 0;
            }
        }
        //
        //
        //
        //
        //
        //
        switch( ptype_1 ){
            case 0:
                strInput_H = strInput_H + "K_1 = " + K_1 + ";\n";
                strInput_H = strInput_H + "tao_1 = " + tao_1 + ";\n";
                strInput_H = strInput_H + "G_1 = K_1/( tao_1*s + 1 );\n";
                break;
            case 1:
                strInput_H = strInput_H + "K_1 = " + K_1 + ";\n";
                strInput_H = strInput_H + "zeta_1 = " + zeta_1 + ";\n";
                strInput_H = strInput_H + "wn_1 = " + wn_1 + ";\n";
                strInput_H = strInput_H + "G_1 = (K_1 * (wn_1^2))/( s^2 + 2*zeta_1*wn_1*s+ wn_1^2 );\n";
                break;
        }
        //
        //
        if( PID_ACT_1 ){
            strInput_H = strInput_H + "Kp_1 = " + Kp_1 + ";\n";
            strInput_H = strInput_H + "Ki_1 = " + Ki_1 + ";\n";
            strInput_H = strInput_H + "Kd_1 = " + Kd_1 + ";\n";
            strInput_H = strInput_H + "C_1 = Kp_1 + Ki_1/s + Kd_1 * s/(" + Fds_1 + " * s + 1);\n";
            strInput_H = strInput_H + "G_1_C = feedback( G_1 * C_1, 1 );\n";
        }
        //
        //
        strInput_H = strInput_H + "y_1 = lsim( G_1, inp_1, t );\n";
        if( PID_ACT_1 ){
            strInput_H = strInput_H + "yc_1 = lsim( G_1_C, inp_1, t );\n";
            strInput_H = strInput_H + "plot( t, [inp_1 yc_1 y_1] );\n";
        }else{
            strInput_H = strInput_H + "plot( t, [inp_1 y_1] );\n";
        }
        strInput_H = strInput_H + "grid on;\n";
        strInput_H = strInput_H + "ylim( [-5 5] );\n\n\n\n";
        //
        //
        //
        copyElementToClipboard( strInput_H );
        //
        //
        //
        //
        //
        //
        //
        MsgBox( "Código copiado!!!" );
        //
    //
    }catch( ex ){
        alert( ex );
    }
    //
    //
    //
}


function copyElementToClipboard(element) {
    var el = document.createElement('textarea');
    el.value = element;
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}