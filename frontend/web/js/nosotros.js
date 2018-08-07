// A $( document ).ready() block.
$( document ).ready(function() {
    //console.log( "ready!" );
    
    $("#boton").click(function(){
        var i;
        for (i = 0; i < 50; i++) { 
       $("#parrafo1").append("<div class='col-md-12'> Lorem </div>");
       $("#parrafo1").append("  <br><br>  ");
        }
    });
    $("#boton").click();
    
    //La primera ves se revisa si se tiene que poner el sticky
    sticky();
    fixedMenu();
    /*('#sticker').on('sticky-start', function() { $("#full_width div:first-child").removeClass("container"); });
    $('#sticker').on('sticky-end', function() { $("#full_width div:first-child").addClass("container"); });
    /*$('#sticker').on('sticky-update', function() { console.log("Update"); });
    $('#sticker').on('sticky-bottom-reached', function() { console.log("Bottom reached"); });
    $('#sticker').on('sticky-bottom-unreached', function() { console.log("Bottom unreached"); });*/
    
    //Cada vez que se cambia de tamaño la pantalla se tiene que revisar si poner el sticky
    $(window).resize(function(){
        sticky();
        fixedMenu();
    });
    
});

//Funcion que aplica o quita el pluging de sticky
function sticky(){
    if($( window ).width() >= 992){
        //$("#full_width div:first-child").removeClass("container");
        $("#sticker").sticky({
            topSpacing:0,
            zIndex: 1,
            getWidthFrom: '#full_width',
            responsiveWidth: false
        });
        
    }else{
        //$("#full_width div:first-child").addClass("container");
        $("#sticker").unstick();
    }
}

function fixedMenu(){
    if($( window ).width() >= 768){
        $("#w0").removeClass("navbar-fixed-top");
    }else{
        $("#w0").addClass("navbar-fixed-top");
    }
}