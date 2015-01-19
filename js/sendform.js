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
                submitBtn = form.find('button[type="submit"]');

            if (app.validateForm(form) === false) return false;
            
            

            var str = form.serialize();
            
            submitBtn.attr('disabled', 'disabled');

            if (form.hasClass('ajaxmail')){
            $.ajax({
                    url: 'send_email.php',
                    type: 'POST',
                    data: str
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    submitBtn.removeAttr('disabled');
                });
            };

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
                    position = null;
                    
                    

                if (formGroup.hasClass('left')) {
                    position = 'left';
                }
                if (formGroup.hasClass('right')) {
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
