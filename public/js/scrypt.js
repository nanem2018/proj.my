$(function(){
    $( "#slider-range" ).slider({
        range: true,
        min: minP,
        max: maxP,
        values: [ minP, maxP ],
        step: 100,
        slide: function( event, ui ) {
            $( "#priceMin" ).val(ui.values[ 0 ]  );
            $( "#priceMax" ).val(ui.values[ 1 ]  );
        }
    });
    $( "#priceMin" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ));
    $( "#priceMax" ).val( "$" + $( "#slider-range" ).slider( "values", 1 ));

});