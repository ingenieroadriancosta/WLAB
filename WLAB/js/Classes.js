// T i m e C l a s s ///////////////////////////////////////////////////////////
function TimeClass() {
    this.ticv = 0.0;
    this.tocv = 0.0;
    tic();
}
TimeClass.prototype.tic = function(){
    this.ticv = Date.now();
};
TimeClass.prototype.toc = function(){
    this.tocv = ( Date.now() - this.ticv );
    return (this.tocv);
};
// T i m e C l a s s ///////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
