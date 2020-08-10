
            //
            //
            var hd_cnt = false;
            function closeQEWLAB(){toggleQEWLAB();return;
                document.getElementById("CHANN_OPT").style.display = "block";
                document.getElementById("QEWLAB").style.display = "none";
                hd_cnt = false;
            }
            function openQEWLAB(){toggleQEWLAB();return;
                document.getElementById("CHANN_OPT").style.display = "none";
                document.getElementById("QEWLAB").style.display = "block";
                hd_cnt = true;
            }
            
            function toggleQEWLAB(){
                
                var urlscript2 = window.location.protocol + "//" + window.location.host + "";
                var urlscript = urlscript2;
                while( urlscript.endsWith("/") ){
                    urlscript = urlscript.substring( 0, urlscript.length-1 );
                }
                urlscript = urlscript + "/QEWLAB.html";
                window.open( urlscript,'_blank');
                return;
                
                if( (document.URL+"").endsWith("/") ){
                    window.open( document.URL + "QEWLAB.html",'_blank');
                }else{
                    window.open( urlscript,'_blank');
                }
                return;
        
                if( hd_cnt ){
                    document.getElementById("CHANN_OPT").style.display = "block";
                    document.getElementById("QEWLAB").style.display = "none";
                    hd_cnt = false;
                }else{
                    document.getElementById("CHANN_OPT").style.display = "none";
                    document.getElementById("QEWLAB").style.display = "block";
                    hd_cnt = true;
                }
            }