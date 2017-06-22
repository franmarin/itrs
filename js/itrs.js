(function(window, document, undefined) {

    'use strict';

    var init = function () {

        $(document).ready(function() {

            $('#menu-1').click(function() {
                showCourses();
            });
            
            $('#menu-2').click(function() {
                showContactForm();
                scrollToBottom();
            });

            $('form').on('submit', function(event) {
                event.preventDefault();
                postContactFormData($(this).serialize());
            });

        });
    },

    showCourses = function() {
        var $contact = $('#contact');
        if ($contact.is(':visible')) {
            $contact.hide();
            $('#home').fadeIn();
        }
    },

    showContactForm = function() {
        var $home = $('#home');
        if ($home.is(':visible')) {
            $home.hide();
            $('#contact').fadeIn();
        }
    },

    scrollToBottom = function() {
        $('html, body').animate({ scrollTop: $(document).height() }, 2000);
    },

    postContactFormData = function(data) {
        $.post(getContactServiceUrl(), data)
            .done(function(data) {
                displayContactFormMessage(data.result === 'Ok');
            });
    },

    displayContactFormMessage = function(success) {
        var message = 'Thank you for contacting us. We will get back to you shortly',
            divClass = 'alert-success';
        if (!success) {
            message = 'Something went wrong! Check your contact details';
            divClass = 'alert-danger';
        }
        $('.alert').remove();
        $('#contact').append('<div class="alert ' + divClass + '" role="alert">' + message + '.</div>');
    },

    getContactServiceUrl = function() {
        return encodeURI('./contact_service.php');
    };

    init();

})(window, document);
