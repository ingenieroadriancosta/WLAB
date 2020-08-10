var setfrst = true;
function acov( namet, idelem ){
    try{
        var urlscript_T = urlscript + '/?covid19=' + namet;
        var ajax = new XMLHttpRequest();
        ajax.open( 'GET', urlscript_T, true );
        ajax.onreadystatechange = function () {
            var stext = ajax.responseText;
            if ( ajax.readyState === 4  ){
                switch( ajax.status ) {
                    case 200:
                        //printim( stext );
                        stext = stext.replace("<html></html>", "");
                        stext = stext.replace("<html></html>", "");
                        stext = stext.replace("\n", "");
                        stext = stext.replace("\n", "");
                        //alert( stext );
                        printim( stext, namet );
                        break;
                    default:
                        alert( "From acov ajax.status:\n" + ajax.status );
                }
            }
        };
        ajax.send();
    }catch( ex ){
        alert( 'Error acov\n:' + ex );
        
    }
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
function printim( stext, namet ){
    try{
        var array = stext.split(", ");
        var maxvC = 0;
        var maxvD = 0;
        var i2m = 0;
        for( var i=0; i<array.length; i = i + 2 ){
            maxvC = Math.max( maxvC, parseInt( array[i] ) );
            maxvD = Math.max( maxvD, parseInt( array[i+1] ) );
            i2m++;
        }
        var buff = new Array( i2m|0 );
        var buffD = new Array( i2m|0 );
        i2m = 0;
        for( var i=0; i<array.length; i = i + 2 ){
            buff[i2m] = parseInt( array[i] );
            buffD[i2m] = parseInt( array[i+1] );
            i2m++;
        }
        
        
        var pplus = 100;
        var buff10 = new Array( pplus*buff.length );
        var buffD10 = new Array( pplus*buffD.length );
        for( var i=0; i<buff10.length; i++ ){
            buff10[i] = buff[(i/pplus)|0];
            buffD10[i] = buffD[(i/pplus)|0];
        }
        
        
        
        
        
        
        
        
        
        pltr = new Plotter( namet );
        pltr.xlabel = "";
        pltr.ylabel = "";
        pltr.set_xpos_end( "" );
        pltr.set_ypos_end( maxvC );
        //pltr.resize( pltr.widthplt + 200, pltr.heightplt + 100 );
        pltr.resize( 500, 250 );
        
        
        //alert( pltr.widthplt + ", " + pltr.heightplt );
        
        
        pltr.setgrid();
        pltr.applypixels();
        pltr.setauth();
        pltr.settextcolor( 0, 0, 0 );
        pltr.setlinecolor( 0, 0, 200 );
        pltr.plotall( buff10, 0, buff10.length, buff10.length, maxvC, 0 );
        pltr.setlinecolor( 200, 0, 0 );
        pltr.plotall( buffD10, 0, buffD10.length, buffD10.length, maxvC, 0 );
        pltr.plot_OK();
    }catch( ex ){
        alert( 'Error acov:\n' + namet + "\n" + ex );
    }
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function loadscript( urlscript ){
    try{
        var ajax = new XMLHttpRequest();
        ajax.open( 'GET', urlscript, false );
        ajax.onreadystatechange = function () {
            var script = ajax.response || ajax.responseText;
            if (ajax.readyState === 4) {
                switch( ajax.status) {
                    case 200:
                        eval.apply( window, [script] );
                        break;
                    default:
                        alert( "From loadscript:\n" + "ERROR: script not loaded:\n", url );
                }
            }
        };
        ajax.send(null);
    }catch( ex ){
        alert( "From loadscript:\n" + ex );
    }
                    
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
loadscript( "js/Plotter.js" );