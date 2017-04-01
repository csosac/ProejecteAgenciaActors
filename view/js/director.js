$(document).ready(function () {
    $("form[name='formulari']").validate({
        rules: {
            name: {required: true, minlength: 2},
            lastname: {required: true, minlength: 2},
            nif: {required: true, pattern: /^\d{2}/},
        },
        messages: {
            name: {
                required: "Has d'introduir el nom"
            },
            lastname: {
                required: "Has d'introduir el cognom"
            },
            nif: {
                pattern: "Has d'introduir el dni en el format correcte",
                required: "Has d'introduir un dni"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});

