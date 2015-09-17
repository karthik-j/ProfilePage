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
        post_id = $this.attr('data-id'),
        $container = $('.expander');
        $this.find('.loader').show();
        $container.slideUp(500, function() {
            $.ajax({
                method: 'post',
                url: '',
                data: {'id':post_id,'action':'get_portfolio_item'},

                success: function(data) {
                    $container.empty().append(data).slideDown(500, function() {
                        $('html, body').animate({
    						scrollTop: $container.offset().top - 100,
    					}, 500);
                    });
                    $this.find('.loader').hide();
                },
                error:function(data) {
                    var data1 = "<div class='featured_image span_6 col'>			                <img width='538' height='294' src='http://demo.mythemeshop.com/onepage/files/2014/06/wallpaper-1335059-538x294.jpg' class='attachment-featured-small wp-post-image' alt='wallpaper-1335059' title=''>            		</div>		<div class='content span_6 col'>			<h2 class='single-title'>TITLE OF THE PROJECT GOES HERE</h2>			<div class='portfolio-content'>	            <p>Duis cursus, augue tempus venenatis fermentum, massa tellus posuere augue, sit amet consectetur ante arcu vitae metus. Suspendisse aliquet congue cursus. Pellentesque vehicula elementum erat, in porttitor enim venenatis porta. Aenean eu nunc nec magna ullamcorper semper.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam dictum tortor tristique odio fermentum interdum interdum metus lacinia. Suspendisse imperdiet ligula in felis rutrum accumsan. Morbi eu ipsum eget odio egestas tristique eget nec erat.</p>			</div>			<div class='close-view'>				<a href='#'><i class='fa fa-times'></i></a>			</div>		</div>";
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
