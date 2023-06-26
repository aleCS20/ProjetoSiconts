//script JQuery para a função executar os movimentos dos cartões automaticamente
//appendTo: método que trabalha com elementos a serem avançados conforme a necessidade

function move(elem) {
    if ($(elem).parent().attr("id") == "fazer") {
        $(elem).detach().appendTo("#fazendo");
    } else if($(elem).parent().attr("id") == "fazendo"){
        $(elem).detach().appendTo("#pronto");
    }else {
        $(elem).detach().appendTo("#fazer");
    }
}

