$(document).ready(function () {
    $("form[name='formulariDirector']").validate({
        rules: {
            name: {required: true, minlength: 2},
            lastname: {required: true, minlength: 2},
            nif: {required: true, minlength: 9, pattern: /^\d{8}[a-zA-Z]$/},
            photoUrlDirector: {required: true},
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
            },
            photoUrlDirector: {
                required: "Has d'introduir una foto."
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});

