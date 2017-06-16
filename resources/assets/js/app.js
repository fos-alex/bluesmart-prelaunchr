$(function() {
	$('input, textarea').placeholder();

	$('form').on('submit', function() {
		$(this).find('input[type=submit]').addClass('disabled');
	});

	if ($("#copy-button").length) {

/*		ZeroClipboard.config({ swfPath: window.ZCPath });
		var client = new ZeroClipboard(document.getElementById('copy-button'));

		client.on('ready', function(readyEvent) { 
			client.on('aftercopy', function(event) {
				$("#copy-confirmation").fadeIn();
				$("#copy-confirmation").fadeOut();
			});
		});*/

        var clip = new Clipboard('#copy-button');
        clip.on('success', function(readyEvent) {
			$("#copy-confirmation").fadeIn();
			$("#copy-confirmation").fadeOut();
        });
    }

    if (!Clipboard.isSupported()) {
		$('#copy-button').hide();
	}



	$('.scroll-icon').on('click', function () {
        $("html, body").animate({ scrollTop: $(document).height() }, 'slow');
		return false;
    });
});	
