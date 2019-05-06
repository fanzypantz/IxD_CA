
$( document ).ready(function() {
    let currentProduct = null;

    $(".product").on('click', function(event){
        currentProduct = $(this);
        event.stopPropagation();
        event.stopImmediatePropagation();
        currentProduct.parents(".category").fadeOut("fast");
        let $parent = currentProduct.parents(".big-container").find('.product-details');

        $parent.fadeIn("fast", function () {
            $parent.get(0).scrollIntoView()
        });

    });

    $(".back").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        $(this).parents(".big-container").find('.product-details').fadeOut("fast");
        $(this).parents(".big-container").find('.category').fadeIn("fast", function () {
            currentProduct.get(0).scrollIntoView()
        });

    });
});
