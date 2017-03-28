$(document).ready(inicialitzarEvents);

function inicialitzarEvents()
{
    
    demanaActor();
    demanaObres();
}

function demanaActor($id)
{
    var id = $('#actorid').val();
    $.get('index.php?ctl=peticioAJAX&act=actor',{id: id}, mostraActor)
            .fail(function () {
                console.log("error");
            });
    return false;
}

function demanaObres($id)
{
    var id = $('#obraid').val();
    $.get('index.php?ctl=peticioAJAX&act=obra',{id:id}, mostraObra)
            .fail(function () {
                console.log("error");
            });
    return false;
}

function mostraActor(dades)
{
    $("select#actor").html(dades);
}

function mostraObra(dades)
{
    $("select#obra").html(dades);
}