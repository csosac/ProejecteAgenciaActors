$(document).ready(inicialitzarEvents);

function inicialitzarEvents()
{
    demanaActor();
    demanaObres();
}

function demanaActor()
{
    $.get('index.php?ctl=peticioAJAX&act=actor', mostraActor)
            .fail(function () {
                console.log("error");
            });
    return false;
}

function demanaObres()
{
    $.get('index.php?ctl=peticioAJAX&act=obra', mostraObra)
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