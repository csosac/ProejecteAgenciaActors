$(document).ready(inicialitzarEvents);
$(document).ready(function () {
    $('.js-datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });


    
    $("form[name='formulariObra']").validate({
        rules: {
            name: {required: true, minlength: 2},
            description: {required: true, minlength: 2},
            type: {required: true, minlength: 2},
            startDate: {required: true},
            endDate: {required: true},
            directorId: {required: true, minlength: 1}
        },
        messages: {
            name: {
                required: "Has d'introduir el nom de la obra."
            },
            description: {
                required: "Has d'introduir la descripció de la obra."
            },
            type: {
                required: "Has d'introduir un tipus d'obra."
            },
            startDate: {
                required: "Has de posar una data d'inici."
            },
            endDate: {
                required: "Has de posar una data de fi."
            },
            directorId: {
                required: "Has de triar el director."
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
    
});


function inicialitzarEvents()
{
    demanaDirector();
    
}


function demanaDirector()
{
    var id = $('#directorid').val();
    $.get('index.php?ctl=peticioAJAX&act=director',{id: id}, mostraDirector)
            .fail(function () {
                console.log("error");
            });
    return false;
}


function mostraDirector(dades)
{
     var txt = '<option value="">- Selecciona -<\/option><br/>' + dades;
    $("select#director").html(txt);
}


