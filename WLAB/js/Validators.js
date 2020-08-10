function onbl_selector(event){
    if( event.target===ch1_I ){
        if( event.target.value.length>0 ){
            var v_l = parseFloat( event.target.value );
            if( isNaN(v_l) ){
                v_l = Ch1_O;
                event.target.value = v_l;
            }
            if( v_l>Top_Val ){
                v_l = Top_Val;
                event.target.value = v_l;
            }
            if( v_l<Top_Low_Val ){
                v_l = Top_Low_Val;
                event.target.value = v_l;
            }
            Ch1_O = v_l;
        }else{
            event.target.value = Ch1_O;
        }
    }
    
    if( event.target===ch2_I ){
        if( event.target.value.length>0 ){
            var v_l = parseFloat( event.target.value );
            if( isNaN(v_l) ){
                v_l = Ch2_O;
                event.target.value = v_l;
            }
            if( v_l>Top_Val ){
                v_l = Top_Val;
                event.target.value = v_l;
            }
            if( v_l<Top_Low_Val ){
                v_l = Top_Low_Val;
                event.target.value = v_l;
            }
            Ch2_O = v_l;
        }else{
            event.target.value = Ch2_O;
        }
    }
    
}

function validate(evt){
    var theEvent = evt || window.event;
    // Handle paste
    if( theEvent.type === 'paste' ){
        var key = event.clipboardData.getData('text/plain');
    }else{
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\.|\-/;
    var v_l = evt.target.value;
    var lng = v_l.length;
    if( lng>0 ){
        var setpt = false;
        for( var i=0; i<lng; i++ ){
            if( v_l[i]==='.' ){
                setpt = true;
            }
        }
        if( setpt && key==='.' ){
            key = String.fromCharCode('');
        }
        if( key==='-' ){
            setpt = false;
            for( var i=0; i<lng; i++ ){
                if( v_l[i]==='-' ){
                    setpt = true;
                }
            }
            if( setpt || lng>0 ){
                key = String.fromCharCode('');
            }
        }
    }
    if( evt.keyCode===13 ){
        onbl_selector( evt );
    }
    if( !regex.test(key) ){
        theEvent.returnValue = false;
        if(theEvent.preventDefault){
            theEvent.preventDefault();
        }
    }
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
function validateonlydecimal(evt) {
    var theEvent = evt || window.event;
    // Handle paste
    if( theEvent.type === 'paste' ){
        var key = event.clipboardData.getData('text/plain');
    }else{
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    var v_l = evt.target.value;
    var lng = v_l.length;
    if( lng>0 ){
        var setpt = false;
        for( var i=0; i<lng; i++ ){
            if( v_l[i]==='.' ){
                setpt = true;
            }
        }
        if( setpt && key==='.' ){
            key = String.fromCharCode('');
        }
    }
    if( evt.keyCode===13 ){
        onbl_selector( evt );
    }
    if( !regex.test(key) ){
        theEvent.returnValue = false;
        if(theEvent.preventDefault){
            theEvent.preventDefault();
        }
    }
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
function validateonlynumber(evt) {
    var theEvent = evt || window.event;
    // Handle paste
    if( theEvent.type === 'paste' ){
        var key = event.clipboardData.getData('text/plain');
    }else{
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    //
    //
    //
    //
    var regex = /[0-9]/;
    if( !regex.test(key) ){
        theEvent.returnValue = false;
        if(theEvent.preventDefault){
            theEvent.preventDefault();
        }
    }
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
