(function() {

    var app = {

        initialize: function() {
            this.modules();
            this.setUpListeners();
        },

        modules: function() {

        },

        setUpListeners: function() {
            $('form').on('submit', app.submitForm);
            $('form').on('keydown click', '.text-input', app.removeError);
        },

        submitForm: function(e) {
            e.preventDefault();

            var form = $(this),
                submitBtn = form.find('button[type="submit"]' || 'input[type="submit"]');

            if (app.validateForm(form) === false) return false;



            var str = form.serialize();

            

            if (form.hasClass('ajaxmail')) {
                submitBtn.attr('disabled', 'disabled');
                
                $.ajax({
                        url: '../send_email',
                        type: 'POST',
                        data: str,
                    })
                    .done(function(msg) {
                        if (msg === "OK") {
                            var result = "<div = 'bg-success'>Спасибо за заявку! Мы вам перезвоним!</div>"
                            form.html(result);
                        } else {
                            form.html(msg);
                        }
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        submitBtn.removeAttr('disabled');
                    });
            } 



        },

        validateForm: function(form) {
            var inputs = form.find('.text-input'),
                valid = true;

            inputs.tooltip('destroy');

            $.each(inputs, function(index, val) {
                var input = $(val),
                    val = input.val(),
                    formGroup = input.parents('.input-label'),
                    label = formGroup.find('label').text().toLowerCase(),
                    textError = 'Вы не ввели ' + label,
                    position = null,
                    sw = screen.width;

                if (sw <= 414) {
                    position = 'top'
                } else if (formGroup.hasClass('left')) {
                    position = 'left';
                } else if (formGroup.hasClass('right')) {
                    position = 'right';
                } else {};

                if (val.length === 0) {
                    formGroup.addClass('has-error');
                    input.tooltip({
                        trigger: 'manual',
                        placement: position,
                        title: textError
                    }).tooltip('show');
                    valid = false;
                } else {
                    formGroup.removeClass('has-error');
                    input.tooltip('hide');
                }


            });
            return valid;
        },

        removeError: function() {
            $(this).tooltip('destroy').parents('.input-label').removeClass('has-error');
            $(this).removeClass('has-error').find('input').tooltip('destroy');
        }

    }

    app.initialize();

}());
