//script para adicionar itens e tarefas conforme a necessidade

/* ---------- função para adicionar itens na coluna backlog ---------- */
function adicionar_item() {
    //variáveis para recuperar a id do formulário e o conteúdo da descrição
    const formName = document.getElementById('addItem');
    const descricao = document.getElementById("descricao");

    //formName chama o método/evento para capturar a submissão do formulário
    formName.addEventListener('submit', (event) => {
        //verificar se o inpu está vazio ou não
        if (descricao.value != '') {
            addCard(descricao.value);
            descricao.value = '';
        }
        event.preventDefault();
    })

    //função que adiciona o cartão a primeira coluna 'backlog'
    function addCard(value) {
        const backlog = document.querySelector('#backlog');
        const novo = document.createElement('div');

        //novo.classList.add('cartao');
        novo.innerHTML = `
			<div id="cartao" class="cartao"><p>`+ value + `</p></div>
		`;

        backlog.appendChild(novo);
    }

}

/* ---------- função para adicionar cartões de tarefas ---------- */

function adicionar_tarefa() {
    const formName = document.getElementById('addTarefa');
    const comentario = document.getElementById("comentario");

    //formName chama o método/evento para capturar a submissão do formulário
    formName.addEventListener('submit', (event) => {
        if (comentario.value != '') {
            addCard(comentario.value);
            comentario.value = '';
        }
        event.preventDefault();
    })

    //função para adicionar cartão a coluna fazer do dashboard
    function addCard(value) {
        const fazer = document.querySelector('#fazer');
        const novo = document.createElement('div');

        //novo.classList.add('cartao');
        novo.innerHTML = `<div id="cartao" class="cartao" onclick="move(this)">
			<div><p>`+ value + `</p></div>
		</div>`;
        fazer.appendChild(novo);
    }


}