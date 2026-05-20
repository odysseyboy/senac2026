function showCPF(){
    $("#divcpf").show();
    $("#divcnpj").hide();
}
function showCNPJ(){
    $("#divcnpj").show();
    $("#divcpf").hide();
}

$(document).ready(function(){
    $("#raiodcpf").click(function(){
        showCPF();
    });
    $("#radiocnpj").click(function(){
        showCNPJ();
    });
    showCPF();
});


