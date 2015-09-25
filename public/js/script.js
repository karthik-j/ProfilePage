$(document).ready(function() {
$('#myNavBar').affix({
    offset: {
        top: $('#home-page')[0].clientHeight - 100
    }
});
        // Portfolio contents
	$('a.expand-view').click(function(e){
		e.preventDefault();
        var $this = $(this),
        project_id = $this.attr('data-id'),
        $container = $('.expander');
        $this.find('.loader').show();
        $container.slideUp(500, function() {
            $.ajax({
                method: 'post',
                url: 'projects',
                data: {'id':project_id},

                success: function(data) {

                    $container.empty().append(data).slideDown(500, function() {
                        $('html, body').animate({
    						scrollTop: $container.offset().top - 100,
    					}, 500);
                    });
                    $this.find('.loader').hide();
                },
                error:function(data) {
                    var data1 = "<div class='content span_6 col'>			<h2 class='single-title'>Error</h2>			<div class='portfolio-content'>	            <p>Oops! there has be an unexpected error</p>			</div>			<div class='close-view'>				<a href='#'><i class='fa fa-times'></i></a>			</div>		</div>";
                    $container.empty().append(data1).slideDown(500, function() {
                        $('html, body').animate({
    						scrollTop: $container.offset().top - 100,
    					}, 500);
                    });
                    $this.find('.loader').hide();
                }
            });
        }).on('click', '.close-view', function(e) { e.preventDefault(); $container.slideUp(500); });
	});


})

$(window).resize(function() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
});

$(window).load(function(){


    //Projects page
    var $container = $('.projects-container');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.projects-filter a').click(function(){
        $('.projects-filter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });

    //Contact Form

    var form = $('#contactForm');
    var formMessages = $('#success');
    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
            type: 'POST',
            url: 'mailer',
            data: formData
        })
        .done(function(response) {

            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');


            $(formMessages).text(response);

            $('#name').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#message').val('');
        })
        .fail(function(data) {
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');

            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });
    });


});
