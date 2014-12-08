/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Submit form
$(document).on('click', '#userSubmit', function (e) {
	$('.home-form').submit();
	e.preventDefault();
	return false;
});

$(document).on('click', '#demoModal', function (e) {
    $('#demotos').modal('show');
    console.log('modal');
    e.preventDefault();
    return false;
});

$(document).on('click', '.demo-button', function (e) {
    var demo = $(this).data('demo') + ".txt";
    document.location = "results.php?text=" + demo;
    
    e.preventDefault();
    return false;
});

$('.home-form').bind('submit', function (e) {
    // wrap all line breaks in p tags
    var text = $(".home-form-text").val();
    var parts = text.split("\n");
    text = parts.join("</p><p>");
    text = "<p>" + text + "</p>";
    
    // replace value
    $(".home-form-text").val(text);
    
	var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(result) 
        {
            document.location = "results.php?text=" + result;
        },
        error: function() 
        {
            //if fails  
            alert('translation failed! try again later')    
        }
    });

    e.preventDefault();
	return false;
});