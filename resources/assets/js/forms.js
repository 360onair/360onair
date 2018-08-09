$('form.form-request').submit(function (e) {
            var errorMessages = [];
            var form = $(this);

            form.find(".has-error").removeClass('has-error');

            if (typeof tinyMCE != 'undefined') tinyMCE.triggerSave();

            $.ajax(
                {
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),

                    success: function (data) {
                        form.find('.alert-danger').hide();

                        e.preventDefault();

                        if (data.result) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                                e.preventDefault();
                            } else if (data.alert) {
                                alertify.success(data.alert, 5);
                                e.preventDefault();
                            } else if (data.response) {
                                form.trigger('reset').find(".alert-danger").hide(200).end().find(".alert-success").html(data.response).show(200);
                                e.preventDefault();
                            }

                            return true;
                        }

                        form.find('.alert-danger').html(data.error).show(200);

                        if (data.error_fields) {
                            $.each(data.error_fields, function (key, value) {
                                form.find("input[name='" + value + "'], textarea[name='" + value + "'], select[name='" + value + "'], select[name='" + value + "[]']").parent().addClass('has-error');
                            });
                        }

                        e.preventDefault();
                    },
                    error: function (data) {
                        form.find(".alert-danger:visible").hide();

                        if (data.responseJSON === undefined) {
                            console.log(data);
                            e.preventDefault();
                            return false;
                        }

                        var errors = data.responseJSON;

                        $.each(errors, function (key, value) {
                            keys = key.split('.');

                            errorMessages.push(value[0]);
                            if (keys.length > 1) {
                                form.find("input[name='" + keys[0] + "[" + keys[1] + "]'], select[name='" + keys[0] + "[" + keys[1] + "]']").parent().addClass('has-error');
                            } else {
                                form.find("input[name='" + key + "'], textarea[name='" + key + "'], select[name='" + key + "'], select[name='" + key + "[]']").parent().addClass('has-error');
                            }
                        });

                        if (errorMessages) {
                            if (errorMessages.length == 1) {
                                form.find('.alert-danger').html(errorMessages[0]).show(200);
                            } else {
                                form.find('.alert-danger').html('<ul></ul>');
                                var errorMessage = '';
                                $.each(errorMessages, function (i, message) {
                                    errorMessage += '<li>' + message + '</li>';
                                });

                                form.find('.alert-danger ul').append(errorMessage);
                                form.find('.alert-danger').show(200);
                            }
                        }

                        e.preventDefault();
                    },
                    async: false
                }
            );
        });