



$( document ).ready(function() {
    $(".faq-container").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        let $this = $(this);

        if ( !$this.hasClass('open') ) {

            $this.find('.faq-title').fadeOut(250);
            $this.animate({
                height: '500px',
            }, 250, function() {
                $this.find('.faq-info').fadeIn("fast");
                $this.addClass('open');
            });
        } else {
            $this.find('.faq-info').fadeOut(250);
            $this.animate({
                height: '75px',
            }, 250, function() {
                $this.find('.faq-title').fadeIn("fast");
                $this.removeClass('open');
            });
        }



    });
});
