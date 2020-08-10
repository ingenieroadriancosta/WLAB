function saveimagefnc(){
    try{
        var image = cntrl_0.toDataURL();
        var aLink = document.createElement('a');
        var evt = document.createEvent("HTMLEvents");
        evt.initEvent("click");
        aLink.download = 'image.png';
        aLink.href = image;
        aLink.dispatchEvent(evt);
        aLink.click();
    }catch( e ){
        alert( e );
    }
}
////////////////////////////////////////////////////////////////////////////////		
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
var strInput = "";
function savefnc(){
    tinfo = document.getElementById("tinfo");
    //
    var tend_all = ( Fs*Tiempo )|0;
    //
    strInput = "Tiempo;Entrada 1;Salida 1;Entrada 2;Salida 2;\n";
    //
    //
    //
    //
    //
    strInput = strInput + "Tiempo;Entrada 1;Salida 1;\n";
    //strInput = strInput + "1.232; 34.3443; 902.23\n";
    //alert( strInput.split(".") );
    try{
        tinfo.innerHTML = "Guardando...";
        if( PID_ACT_1 ){
            for( var i=0; i<tend_all; i++ ){
                strInput = strInput + 
                                (i/Fs) + "; " + 
                                buffOC1[i] + "; " + 
                                buffIC1_CNRLR[i] + "; " +
                                /*
                                buffIC2[i] + "; " + buffOC2[i] + "; " +
                                //*/
                                "\n";
            }
        }else{
            for( var i=0; i<tend_all; i++ ){
                strInput = strInput + 
                                (i/Fs) + "; " + 
                                buffOC1[i] + "; " + 
                                buffIC1[i] + "; " +
                                /*
                                buffIC2[i] + "; " + buffOC2[i] + "; " +
                                //*/
                                "\n";
            }
        }
        strInput = strInput.split(".");
        var filename = "datos.csv";
        var textToSaveAsBlob = new Blob([strInput], {type:"text/plain"});
        var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
        var fileNameToSaveAs = filename;
        var downloadLink = document.createElement("a");
        downloadLink.download = fileNameToSaveAs;
        downloadLink.innerHTML = "Download File";
        downloadLink.href = textToSaveAsURL;
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
        downloadLink.click();
    } catch (ex) {
            tinfo.innerHTML = "Script Error:<br>" + ex;
    }
}
////////////////////////////////////////////////////////////////////////////////		
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
function claddown( typcTlab ){
    try{
        // Construct the 'a' element
        var link = document.createElement("a");
        link.target = "_blank";
        // Construct the URI
        var url_l = "";
        
        var urlscript2 = window.location.protocol + "//" + window.location.host + "";
        var urlscript = urlscript2;//document.URL.substr(0,document.URL.lastIndexOf('/')) + "";
        while( urlscript.endsWith("/") ){
            urlscript = urlscript.substring( 0, urlscript.length-1 );
        }
        urlscript = urlscript + "/";
        //
        switch( typcTlab ){
            case 0:
                link.download = "CLAB.zip";
                url_l = urlscript;
                link.href = url_l + "files/" + link.download;
                break;
            case 1:
                link.download = "CLAB20arduino.zip";
                url_l = urlscript;
                link.href = url_l + "files/" + link.download;
                break;
            case 2:
                link.download = "TLAB.zip";
                url_l = urlscript;
                link.href = url_l + "files/" + link.download;
                break;
        }
        document.body.appendChild(link);
        link.click();
        // Cleanup the DOM
        document.body.removeChild(link);
        }catch( e ){
            alert( e );
        }
}