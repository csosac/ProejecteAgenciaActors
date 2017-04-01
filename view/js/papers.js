$(document).ready(inicialitzarEvents);

function inicialitzarEvents()
{
    $('input[name=paper]').blur(comprovaNom);
    demanaActor();
    var n = $("#obra");
    n.change(demanaActor);
    demanaObres();
}

function comprovaNom() {
    var paper = $('input[name=paper]').val();
    if (paper == "") {
        $('input[name=paper]').append("<label>Aquest camp no pot estar buit:</label>");
    } else {

    }
}
function demanaActor()
{
    var id = $('#actorid').val();
    var idobra = $('#obra').val();
    $.get('index.php?ctl=peticioAJAX&act=actor', {idActor: id, idObra : idobra}, mostraActor)
            .fail(function () {
                console.log("error");
            });
    return false;
}

function demanaObres()
{
    var id = $('#obraid').val();
    $.get('index.php?ctl=peticioAJAX&act=obra', {id: id}, mostraObra)
            .fail(function () {
                console.log("error");
            });
    return false;
}

function mostraActor(dades)
{
    var txt = "<option>- Selecciona -<\/option><br/>" + dades;
    $("select#actor").html(txt);
}

function mostraObra(dades)
{
    var txt = "<option>- Selecciona -<\/option><br/>" + dades;
    $("select#obra").html(txt);
}