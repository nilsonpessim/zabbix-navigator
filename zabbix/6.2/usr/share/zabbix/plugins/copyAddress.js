$(document).ready(function(){
    $("#copyIP").modal('show');
});

$("#copyAddress").click(function (){

    $("#ipAddress").select();

    document.execCommand("copy");

    $("#textAlert").html(
        '<i class="fa-solid fa-check"></i> O IP ' + $("#ipAddress").val() + ' foi copiado.'
    );

    setTimeout(function() {
        window.location.replace("zabbix.php?action=map.view");
    },500);

});