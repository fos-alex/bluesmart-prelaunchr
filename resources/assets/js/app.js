$(function() {
	$('input, textarea').placeholder();

	$('form').on('submit', function() {
		$(this).find('input[type=submit]').addClass('disabled');
	});

	if ($("#copy-button").length) {
        var clip = new Clipboard('#copy-button');
        clip.on('success', function(readyEvent) {
			$("#copy-confirmation").fadeIn();
			$("#copy-confirmation").fadeOut();
        });
    }

    if (!Clipboard.isSupported()) {
		$('#copy-button').hide();
	}

	if ($('.alert').length > 0 && jQuery(window).width() < 768) {
		$('header').css({'margin-top': $('.alert').height()});
	}



	$('.scroll-icon').on('click', function () {
        $("html, body").animate({ scrollTop: $(document).height() }, 'slow');
		return false;
    });
});	
