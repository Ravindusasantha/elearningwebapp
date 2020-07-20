(function ($) {
    'use strict';

    var form = $('.contact__form'),
        message = $('.contact__msg'),
        form_data;

    // Success function
    function done_func(response) {
        //$(".loadingsp").hide();
        message.fadeIn().removeClass('alert-dang').addClass('alert-succ');
        message.html(response);
        $("select").val('');
        //message.fadeIn().addClass('alert-success');
        setTimeout(function () {
            message.fadeOut(10000);
        }, 2000);
        form.find('input:not([type="submit"]), textarea').val('');
    }

    // fail function
    function fail_func(data) {
        $(".loadingsp").hide();
        message.fadeIn().removeClass('alert-succ').addClass('alert-dang');
        message.text(data.responseText);
        setTimeout(function () {
            message.fadeOut(5000);
        }, 2000);
    }
    
    form.submit(function (e) {
        e.preventDefault();
       // alert("ss");
       
        form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        })
        .done(done_func)
        .fail(fail_func);
       

  
    });
    
})(jQuery);

function parseDate(str) {
              var mdy = str.split('/');
              return mdy[1]+'/'+mdy[0]+'/'+mdy[2];
          }