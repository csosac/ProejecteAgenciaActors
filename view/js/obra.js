$(document).ready(inicialitzarEvents);

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
    $("select#director").html(dades);
}
