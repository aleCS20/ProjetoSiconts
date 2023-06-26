//função para limpar os elementos de uma div conforme o parâmetro repassado
function clearconteudo(elementID) {
    var node = document.getElementById(elementID);

    if (node.parentNode) {
        node.parentNode.removeChild(node);
    }
}


/*function clearconteudo(elementID) {
    var div = document.getElementById(elementID);
              
    while(div.firstChild) {
        div.removeChild(div.firstChild);
    }
}*/

