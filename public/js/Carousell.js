$(document).ready(function(){
    if ($(".ulpgcds-carrusel--medium").length){
                   $(".ulpgcds-carrusel--medium").slick({
                   slidesToShow: 3,
                   slidesToScroll: 3,                                  
                    prevArrow: '<button type="button" class="slick-prev"><span>Anterior</span></button>',
                     nextArrow: '<button type="button" class="slick-next"><span>Siguiente</span></button>',
                     dots: true, 
                   responsive: [
                     {
                       breakpoint: 1280,
                       settings: {
                         slidesToShow: 3,
                       }
                     },                                
                     {
                       breakpoint: 1024,
                       settings: {
                         slidesToShow: 2,
                         slidesToScroll:2,
                       }
                     },
                     {
                       breakpoint: 768,
                       settings: {                             
                         slidesToShow: 1,
                         slidesToScroll:1,
                       }
                     }
                   ]
               });   
           }
}); 