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
            $('form').on('keydown','.text-input', app.removeError);
        },

        submitForm: function(e) {
            e.preventDefault();

            var form = $(this),
                submitBtn = form.find('button[type="submit"]');

            if (app.validateForm(form) === false) return false;

            submitBtn.attr('disabled', 'disabled');

            console.log('go in ajax');

            var str = form.serialize();

            $.ajax({
                url: 'contact_form/contact_process.php',
                type: 'POST',
                data: str,
            })
            .done(function() {
                console.log("success");
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
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
                }
                else {};

                if (val.length === 0) {
                    formGroup.addClass('has-error');
                    input.tooltip({
                        trigger: 'manual',
                        placement: position,
                        title: textError
                    }).tooltip('show');
                    valid === false;
                } else {
                    formGroup.removeClass('has-error');
                }

               
            });
            return valid;
        },

        removeError: function (){
            $(this).tooltip('destroy').parents('.input-label').removeClass('has-error');
        }

    }

    app.initialize();

}());
