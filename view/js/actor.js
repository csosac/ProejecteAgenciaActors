$(document).ready(function () {
    $("form[name='formulari']").validate({
        rules: {
            name: {required: true, minlength: 2},
            lastname: {required: true, minlength: 2},
            nif: {required: true, pattern: /^\d{8}[a-zA-Z]$/},
            photoURL: {required: true},
        },
        messages: {
            name: {
                required: "Has d'introduir el nom"
            },
            lastname: {
                required: "Has d'introduir el cognom"
            },
            nif: {
                required: "Has d'introduir un dni",
                pattern: "Has d'introduir el dni en el format correcte"
            },
            photoURL: {
                required: "Has d'introduir una foto"
            }
            
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});

