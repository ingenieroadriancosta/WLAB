<?php

?>
<html>
    
    
    
    <button onclick="setbtn()">
        S T A R T
    </button>
    <audio id="player" controls src=""></audio>
    
    
    
    
<script>
  var player = document.getElementById('player');
  
  // https://developers.google.com/web/fundamentals/media/recording-audio
    function setbtn(){
        try{
            /*
            player.src = "http://localhost:8000/radio/nodal.mp3";
            player.controls  = true;
            player.loop = true;
            player.play();
            return;
            //*/
            
            var handleSuccess = function(stream) {
                try{
              if (window.URL) {
                player.srcObject = stream;
                //player.src = "http://localhost:8000/radio/nodal.mp3";
                //alert( "window.URL" );
              } else {
                player.src = stream;
              }
              
              }catch( ex ){
                    alert( ex );
                }
            };
            navigator.mediaDevices.getUserMedia({ audio: true, video: false }).then(handleSuccess);
            
            
            player.controls  = true;
            player.loop = true;
            player.play();
            
            
        }catch( ex ){
            alert( ex );
        }
    }
      
</script>


    
</html>

