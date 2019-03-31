
$( document ).ready(function() {
    $(".product").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        $(this).parents(".category").fadeOut("fast");

        $(this).parents(".big-container").find('.product-details').fadeIn("fast");

    });

    $(".back").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        $(this).parents(".big-container").find('.product-details').fadeOut("fast");
        $(this).parents(".big-container").find('.category').fadeIn("fast");

    });
});
