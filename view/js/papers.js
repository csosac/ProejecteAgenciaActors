$(document).ready(inicialitzarEvents);

function inicialitzarEvents()
{
    demanaObres();
    $('input[name=paper]').blur(comprovaNom);
    var d = $('#obra').val();
    if ($('#obra').val() == null) {
        $('#lblActor').append("<br/><label id='noActor'>Selecciona primer la obra</label>");
        $('#actor').hide();
    }
    demanaActor();
    var n = $("#obra");
    n.change(function () {
        $('#noActor').hide();
        $('#actor').show();
        demanaActor();
    });
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
    $.get('index.php?ctl=peticioAJAX&act=actor', {idActor: id, idObra: idobra}, mostraActor)
            .fail(function () {
                console.log("error");
            });
    return false;
}

function demanaObres()
{
    var id = $('#obraid').val();

    $.ajax({
        async: false,
        cache: false,
        dataType: "text",
        type: 'GET',
        url: 'index.php?ctl=peticioAJAX&act=obra',
        data: "id=" + id,
        success: function (respuesta) {
            mostraObra(respuesta);
        },
        error: function () {
            console.log("error");
        }
    });
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