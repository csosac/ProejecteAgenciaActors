$(document).ready(inicialitzarEvents);
$(document).ready(function () {
            $('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
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
     var txt = "<option>- Selecciona -<\/option><br/>" + dades;
    $("select#director").html(txt);
}


