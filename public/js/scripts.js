'use strict'

var holstein, h

holstein = {
    maps: {
        "root": "https://www.google.com/maps/embed/v1/place?key=",
        "apiKey": "AIzaSyDj8fNVGdtienzgVtQh6RV5HOJHA477pjM",
        "query": "q=Market+Basket"
    },

    init: function () {
        h = holstein;
        this.bindActions();
    },

    bindActions: function () {
        $("#btn-locate-store").on("click", function () {
            h.updateMap();
        });

        $('#btn-newsletter-signup').click(function(){
            $(this).text('Submitting...');
            h.subscribeToNewsletter();
        });

        $("#input-zip-code").keydown(function (event) {
            if (event.keyCode == 13) {
                h.updateMap();
            }
        });
    },

    updateMap: function () {
        let zip = $("#input-zip-code").val();
        if (zip.length != 5) return;

        let addToQuery = "+in+" + zip;
        $("#map-homepage").attr("src", h.maps.root + h.maps.apiKey + "&" + h.maps.query + addToQuery);
    },

    subscribeToNewsletter: function() {
        let request = {
            firstName: $('#newsletter-sign-up-form input[name="firstname"]').val(),
            lastName: $('#newsletter-sign-up-form input[name="lastname"]').val(),
            emailAddress: $('#newsletter-sign-up-form input[name="email"]').val()
        }

        $.post('/resources/api/mailchimp.php', {
            firstName: request.firstName, 
            lastName: request.lastName, 
            emailAddress: request.emailAddress
        }, function(result){
            $('#newsletter-sign-up-form').addClass('d-none');
            $('#form-ajax-response-container').text(result);
        })
    }
}

$(function () {
    holstein.init();
})