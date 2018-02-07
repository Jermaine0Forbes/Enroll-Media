

jQuery( document ).ready(function( $ ) {
// Code that uses jQuery's $ can follow here.
    let adminBar = $('#wpadminbar').height();
    let menuBar = $('.sticky-menu').height();
    // console.log(adminBar)
    if(adminBar){
         $('.sticky-menu').scrollFix({ topPosition:adminBar, topFixClass:"on", topFixOffset:10, topUnfixOffset:(adminBar+50) });

    }else{
        $('.sticky-menu').scrollFix({ topPosition:0, topFixClass:"on" });
    }


});
