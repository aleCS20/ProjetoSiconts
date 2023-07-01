//script JQuery para a função executar os movimentos dos cartões automaticamente
//appendTo: método que trabalha com elementos a serem avançados conforme a necessidade

function move(elem) {//captura o parametro do clique do cartão
    if ($(elem).parent().attr("id") == "fazer") {//verifica se o clique foi na coluna fazer
        $(elem).detach().appendTo("#fazendo");//avança o cartão para a coluna fazendo
    } else if ($(elem).parent().attr("id") == "fazendo") {//verifica se o clique foi na coluna fazendo
        $(elem).detach().appendTo("#pronto");//avança o cartão para a coluna pronto
    }else {
        $(elem).detach().appendTo("#fazer");
    }
}

