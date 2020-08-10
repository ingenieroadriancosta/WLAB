function Apple (type) {
    this.type = type;
    this.color = "red";
    
}
Apple.prototype.getInfo = function() {
    return this.color + ' ' + this.type + ' apple';
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
function Plotter( id_text_of_ploter ) {
    this.cntrl = document.getElementById( id_text_of_ploter );
    this.widthplt  = this.cntrl.width;
    this.heightplt = this.cntrl.height;
    
    this.init_w = 50;
    this.init_h = 30;
    
    this.topw = this.widthplt-60;
    this.toph = this.heightplt-40;
    
    this.w_plt = this.topw - this.init_w;
    this.h_plt = this.toph - this.init_h;
    
    this.wmod = (this.w_plt)/10;
    this.hmod = (this.h_plt)/10;
    
    this.cntrl.width = this.widthplt;
    this.cntrl.height = this.heightplt;
    
    
    this.context = this.cntrl.getContext('2d');
    
    
    
    
    
    this.context.moveTo(0, 0);
    this.context.strokeStyle = "#FF0000";
    this.context.strokeRect(20, 20, 150, 100);
    
    this.context.lineTo(this.widthplt, this.heightplt);
    this.context.stroke(); 
    
    
    
    
    this.context.font = "30px Verdana";
    this.context.strokeText("Big smile!", 10, 50);
    this.context.stroke(); 
    
    
    this.pixels = this.context.getImageData( 0, 0, this.widthplt, this.heightplt );
    this.data = this.pixels.data;
    this.all = this.pixels.data.length;
    
    
    this.dataGrid = new Uint8Array(this.all);
    for( var y = 0; y<(this.all); y++ ){
        this.data[y]   = 255|0;
        this.dataGrid[y] = 255|0;
    }
    
    
    this.xlabel = "Segundos";
    this.ylabel = "Voltios";
    
    this.fontSize = 14;
    this.fontType = "Arial";
    this.font = this.fontSize + "px " + this.fontType;
    
    this.xposinit = 0;
    this.xposend = 1;
    
    
    
    this.yposinit = 0;
    this.yposend = 1;
    
    this.R = 0;
    this.G = 0;
    this.B = 0;
    
    
    this.R_B = 255;
    this.G_B = 255;
    this.B_B = 255;
    
    this.R_L = 0;
    this.G_L = 0;
    this.B_L = 255;
    
    
    
    this.setauth();
    
    this.getInfo = function() {
        return '' + (this.widthplt+100.5) + ', ' + this.heightplt;
    };
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.fillbuff = function(){
    this.context = this.cntrl.getContext('2d');
    this.pixels = this.context.getImageData( 0, 0, this.widthplt, this.heightplt );
    this.data = this.pixels.data;
    this.all = this.pixels.data.length;
    this.dataGrid = new Uint8Array(this.all);
    for( var y = 0; y<(this.all); y++ ){
        this.data[y]   = 255|0;
        this.dataGrid[y] = 255|0;
    }
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.setgrid = function(){
    var i_t = 0|0;
    //alert( this.all );
    var y = 0|0;
    for( y = 0; y<(this.all); y = (y + 4) ){
        this.data[y]     = 210|0;
        this.data[(y+1)] = 210|0;
        this.data[(y+2)] = 210|0;
        
        this.dataGrid[y]     = 210|0;
        this.dataGrid[(y+1)] = 210|0;
        this.dataGrid[(y+2)] = 210|0;
        
    }
    for( var y = 0; y<this.h_plt+1; y++ ){
        for( var x = 0; x<this.w_plt+1; x++){
            i_t = (4*( (x+this.init_w) + (y+this.init_h)*this.widthplt))|0;
            if( (x%this.wmod)===0 || (y%this.hmod)===0 ){
                this.data[i_t|0  ]   = 0|0;
                this.data[(i_t+1)|0] = 0|0;
                this.data[(i_t+2)|0] = 0|0;
                
                this.dataGrid[i_t|0  ]   = 0|0;
                this.dataGrid[(i_t+1)|0] = 0|0;
                this.dataGrid[(i_t+2)|0] = 0|0;
            }else{
                this.data[i_t|0  ]   = 255|0;
                this.data[(i_t+1)|0] = 255|0;
                this.data[(i_t+2)|0] = 255|0;
                
                this.dataGrid[i_t|0  ]   = 255|0;
                this.dataGrid[(i_t+1)|0] = 255|0;
                this.dataGrid[(i_t+2)|0] = 255|0;
            }
        }
    }
    //this.context.putImageData(this.pixels, 0, 0 );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.fillgrid = function(){
    for( var y = 0; y<(this.all); y++ ){
        this.data[y]   = this.dataGrid[y]|0;
    }
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.applypixels = function(){
    this.context.putImageData(this.pixels, 0, 0 );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.drawtext = function( text2f, xp, yp ){
    this.context.font = "16px Ariel";
    this.applytextcolor();
    this.context.textAlign = "left";
    this.context.fillText( text2f, xp, yp );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.set_X_label = function( text2f ){
    this.xlabel = text2f + "";
    this.context.textAlign = "center";
    this.context.font = this.font;
    this.applytextcolor();
    this.context.fillText( this.xlabel, this.init_w + this.w_plt/2, this.toph + this.fontSize );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.set_Y_label = function( text2f ){
    this.ylabel = text2f;
    this.context.textAlign = "center";
    this.context.font = this.font;
    this.applytextcolor();
    this.context.save();
    this.context.textAlign = "center";
    this.context.rotate( -1 * Math.PI/2.0 );
    this.context.fillText( this.ylabel, -this.h_plt/2 - this.init_h, this.init_w - this.fontSize/2 );
    this.context.restore();
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.set_xpos_init = function( val0 ){
    this.xposinit = val0;
    this.context.textAlign = "center";
    this.context.font = this.font;
    this.applytextcolor();
    this.context.fillText(this.xposinit, this.init_w, this.toph + this.fontSize);
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.set_xpos_end = function( val0 ){
    this.xposend = val0;
    this.context.textAlign = "center";
    this.context.font = this.font;
    this.applytextcolor();
    this.context.fillText(""+this.xposend, this.init_w + this.w_plt, this.toph + this.fontSize);
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.set_ypos_init = function( val0 ){
    this.yposinit = val0;
    this.context.textAlign = "center";
    this.context.font = this.font;
    this.applytextcolor();
    this.context.fillText( this.yposinit, this.init_w - this.fontSize, this.toph );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.set_ypos_end = function( val0 ){
    this.yposend = val0;
    this.context.textAlign = "center";
    this.context.font = this.font;
    this.applytextcolor();
    this.context.fillText( this.yposend, this.init_w - this.fontSize, this.init_h + this.fontSize/1.5 );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.settextcolor = function( Ri, Gi, Bi ){
    this.R = parseInt(Ri);
    this.G = parseInt(Gi);
    this.B = parseInt(Bi);
    this.applytextcolor();
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.applytextcolor = function(){
    this.context.strokeStyle = this.RGBToHex( this.R, this.G, this.B );
    this.context.fillStyle = this.context.strokeStyle;
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.RGBToHex = function(r,g,b){
    var r = r.toString(16);
    var g = g.toString(16);
    var b = b.toString(16);
    if (r.length === 1){ r = "0" + r; }
    if (g.length === 1){ g = "0" + g; }
    if (b.length === 1){ b = "0" + b; }
    return "#" + r + g + b;
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.setauth = function(){
    this.context.textAlign = "right";
    this.context.fillText("Powered by Adrian Costa  ", this.widthplt, 20 );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.setlinecolor = function( R, G, B ){
    this.R_L = R;
    this.G_L = G;
    this.B_L = B;
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.setbkcolor = function( R, G, B ){
    this.R_B = R;
    this.G_B = G;
    this.B_B = B;
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.resize = function( W, H ){
    this.widthplt  = W;
    this.heightplt = H;
    this.init_w = 50;
    this.init_h = 30;
    
    this.topw = this.widthplt-60;
    this.toph = this.heightplt-40;
    
    this.w_plt = this.topw - this.init_w;
    this.h_plt = this.toph - this.init_h;
    
    this.wmod = (this.w_plt)/10;
    this.hmod = (this.h_plt)/10;
    
    this.cntrl.width = this.widthplt;
    this.cntrl.height = this.heightplt;
    
    this.context = this.cntrl.getContext('2d');
    
    this.pixels = this.context.getImageData( 0, 0, this.widthplt, this.heightplt );
    this.data = this.pixels.data;
    this.all = this.pixels.data.length;
    
    this.dataGrid = new Uint8Array(this.all);
    for( var y = 0; y<(this.all); y++ ){
        this.data[y]   = 255|0;
        this.dataGrid[y] = 255|0;
    }
    this.setgrid();
    this.applypixels();
    this.set_X_label( this.xlabel );
    this.set_Y_label( this.ylabel );
    this.set_xpos_init( this.xposinit );
    this.set_xpos_end( this.xposend );
    this.setauth();
    
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.setlimall = function(){
    this.set_X_label( this.xlabel );
    this.set_Y_label( this.ylabel );
    this.set_xpos_init( this.xposinit );
    this.set_xpos_end( this.xposend );
    
    this.set_ypos_init( this.yposinit );
    this.set_ypos_end( this.yposend );
    
    this.setauth();
};
Plotter.prototype.plot_OK = function(){
    this.applypixels();
    this.setlimall();
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.plotuint8 = function( buff8 ){
    this.plotall( buff8, 0, buff8.length, buff8.length, 255, 0 );
};
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
Plotter.prototype.plotall = function(   buff8,
                                        p_init,
                                        p_end,
                                        p_cmpl,
                                        valmax,
                                        valmin
                                        ){
    var i_t2 = 0|0;
    var x_d = 0|0;
    var y_t = 0|0;
    var y_t_n = 0|0;
    var vtmp = 0.0;
    
    var vminabs = Math.abs( valmin );
    var valmamin = Math.abs( valmax ) + vminabs;
    // alert( p_init );
    var p_end_1 = p_end - 1;
    
    
    x_d = ( (this.w_plt*p_end_1)/p_cmpl ) | 0;
    if( x_d>this.w_plt ){
        p_end_1 = p_cmpl|0;
    }
    
    
    for( var i = p_init; i<p_end_1; i++ ){
        x_d = ( (this.w_plt*i)/p_cmpl ) | 0;
        
        
        vtmp = (1-(buff8[i]+vminabs)/valmamin);
        if( vtmp>1 ){ vtmp = 1; }
        if( vtmp<0 ){ vtmp = 0; }
        y_t = (( (this.h_plt* (vtmp) ) ) | 0);
        
        
        vtmp = (1-(buff8[i+1]+vminabs)/valmamin);
        if( vtmp>1 ){ vtmp = 1; }
        if( vtmp<0 ){ vtmp = 0; }
        y_t_n = (( (this.h_plt* (vtmp) ) ) | 0);
        
        
        if( y_t_n<=y_t ){
            while( y_t_n<=y_t ){
                i_t2 = ( 4 * ((this.widthplt* (y_t_n+this.init_h)) + (x_d + this.init_w)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t_n+this.init_h)) + (x_d + this.init_w+1)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t_n+this.init_h)) + (x_d + this.init_w-1)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t_n+this.init_h+1)) + (x_d + this.init_w)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t_n+this.init_h-1)) + (x_d + this.init_w)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                y_t_n = y_t_n + 1;
            }
        }else{
            /////////////
            while( y_t_n>=y_t ){
                i_t2 = ( 4 * ((this.widthplt* (y_t+this.init_h)) + (x_d + this.init_w)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t+this.init_h)) + (x_d + this.init_w+1)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t+this.init_h)) + (x_d + this.init_w-1)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t+this.init_h+1)) + (x_d + this.init_w)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                
                i_t2 = ( 4 * ((this.widthplt* (y_t+this.init_h-1)) + (x_d + this.init_w)) ) | 0;
                this.data[i_t2  ] = this.R_L;
                this.data[i_t2+1] = this.G_L;
                this.data[i_t2+2] = this.B_L;
                y_t = y_t + 1;
            }
        }

    }
};



