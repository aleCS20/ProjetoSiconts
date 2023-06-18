//script para adicionar apenas cartões na coluna de backlog
//<div class="card" draggable="true"> <div class="status todo"></div> <div class="content">Dinamicamente.</div></div>

//função para acrescentar uma tarefa na coluna A fazer do Dashboard
function enviar_task() {
    //variáveis para obter o nome do formulário de tarefa e o conteúdo do campo input comentário
    const formTask = document.getElementById('addTarefa');
    const task = document.getElementById('comentario');
    //evento Listener para o 'submeter' a ação de card ao ser clicado em adicionar
    formTask.addEventListener('submit', (event) => {
        if (task.value != '') {
            addCard(task.value);
            task.value = '';//irá receber o valor do campo comentário
        }
        event.preventDefault();
    })
    //função para adicionar o valor do comentário para criar um card 'cartão' de tarefa.
    function addCard(value) {
        const todo = document.querySelector('#todo');//coluna todo receberá o cartão de comentário
        const newCard = document.createElement("div");//div correspondente ao dashboard para adicionar o cartão
        newCard.classList.add('card');
        newCard.draggable = true;
        //aqui o cartão é inserido na coluna a fazer
        newCard.innerHTML = `
    <div class="status todo"></div>
    <div class="content"><p>`+ value + `</p></div>
  `;
        newCard.addEventListener('dragstart', dragStart);//evento acionado para início de arraste
        newCard.addEventListener('drag', drag);//evento drag para elemento ser arrastado
        newCard.addEventListener('dragend', dragEnd);//evento que permite um elemento finalizar um arraste
        todo.appendChild(newCard);
    }

    const cards = document.querySelectorAll('.card');
    const dropZones = document.querySelectorAll('.dropZone');

    cards.forEach((card) => {
        card.addEventListener('dragstart', dragStart);//evento acionado para início de arraste
        card.addEventListener('drag', drag);//evento drag para elemento ser arrastado
        card.addEventListener('dragend', dragEnd);//evento que permite um elemento finalizar um arraste
    })
    //função para iniciar o cartão de tarefa a ser arrastável
    function dragStart() {
        dropZones.forEach(dropZone => dropZone.classList.add('highlight'));
        this.classList.add('dragging');

        switch (this.parentElement.id) {
            case 'todo':
                this.firstElementChild.classList.remove('todo');
                break;
            case 'doing':
                this.firstElementChild.classList.remove('doing');
                break;
            case 'done':
                this.firstElementChild.classList.remove('done');
                break;
            case 'garbage':
                this.firstElementChild.classList.remove('todo');
                break;
            default:
                break;
        }
    }

    function drag() {

    }
    //função para os cartões possam ter seu arraste finalizado nas colunas
    function dragEnd() {
        dropZones.forEach(dropZone => dropZone.classList.remove('highlight'));
        this.classList.remove('dragging');

        switch (this.parentElement.id) {
            case 'todo':
                this.firstElementChild.classList.add('todo');
                break;
            case 'doing':
                this.firstElementChild.classList.add('doing');
                break;
            case 'done':
                this.firstElementChild.classList.add('done');
                break;
            case 'garbage':
                this.parentElement.removeChild(this);
                break;
            default:
                break;
        }
    }
    //criando for para os eventos de movimentos dos cartões a serem permitidos nas colunas
    dropZones.forEach(dropZone => {
        dropZone.addEventListener('dragenter', dragEnter);
        dropZone.addEventListener('dragover', dragOver);
        dropZone.addEventListener('dragleave', dragLeave);
        dropZone.addEventListener('drop', drop);
    })

    function dragEnter() {

    }
    //evento - para possibilitar o cartão ser arrastável em um ponto de soltura
    function dragOver() {
        this.classList.add('over');

        const cardBeingDragged = document.querySelector('.dragging');

        this.appendChild(cardBeingDragged);
    }
    //evento - para possibilitar o cartão abandona um ponto de soltura nas colunas
    function dragLeave() {
        this.classList.remove('over');
    }
    //evento - para possibilitar o cartão ser solto nas colunas
    function drop() {
        this.classList.remove('over');
    }
}
