//script para adicionar apenas cartões na coluna de backlog
//<div class="card" draggable="true"> <div class="status todo"></div> <div class="content">Dinamicamente.</div></div>

//função para acrescentar um item a coluna de Backlog
function enviar_item() {
    //variáveis para obter o nome do formulário e o conteúdo do campo descrição
    const formTask = document.getElementById('addItem');
    const task = document.getElementById('descricao');
    //evento Listener para o 'submeter' a ação de card a ser adicionado
    formTask.addEventListener('submit', (event) => {
        if (task.value != '') {
            addCard(task.value);
            task.value = '';//irá receber o valor de descrição
        }
        event.preventDefault();
    })
    //função para adicionar o valor da descrição para criar um card 'item'.
    function addCard(value) {
        const todo = document.querySelector('#backlog');//define o local de inserção do card no dashboard
        const newCard = document.createElement("div");//define o local de inserção do card em uma div
        newCard.classList.add('card');//
        newCard.draggable = false;
        //aqui o item é inserido na coluna backlog
        newCard.innerHTML = `
            <div class="status backlog"></div>
            <div class="content"><p>`+ value + `</p></div>
        `;
        newCard.addEventListener('dragstart', dragStart);
        newCard.addEventListener('drag', drag);
        newCard.addEventListener('dragend', dragEnd);
        todo.appendChild(newCard);
    }

    const cards = document.querySelectorAll('.card');
    const dropZones = document.querySelectorAll('.dropZone');

    cards.forEach((card) => {
        card.addEventListener('dragstart', dragStart);
        card.addEventListener('drag', drag);
        card.addEventListener('dragend', dragEnd);
    })
    //função para iniciar o item
    function dragStart() {
        dropZones.forEach(dropZone => dropZone.classList.add('highlight'));
        this.classList.add('dragging');

        switch (this.parentElement.id) {
            case 'backlog':
                this.firstElementChild.classList.remove('backlog');
                break;
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
    //função para os cartões serem devidamente adicionados as colunas
    function dragEnd() {
        dropZones.forEach(dropZone => dropZone.classList.remove('highlight'));
        this.classList.remove('dragging');

        switch (this.parentElement.id) {
            case 'backlog':
                this.firstElementChild.classList.add('backlog');
                break;
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
    //criando for para os eventos de movimentos dos cartões - chamadas dos eventos
    dropZones.forEach(dropZone => {
        dropZone.addEventListener('dragenter', dragEnter);
        dropZone.addEventListener('dragover', dragOver);
        dropZone.addEventListener('dragleave', dragLeave);
        dropZone.addEventListener('drop', drop);
    })

    function dragEnter() {

    }
    //evento - para possibilitar o cartão ser arrastável
    function dragOver() {
        this.classList.add('over');

        const cardBeingDragged = document.querySelector('.dragging');

        this.appendChild(cardBeingDragged);
    }
    //evento - para possibilitar o cartão ser movido
    function dragLeave() {
        this.classList.remove('over');
    }
    //evento - para possibilitar o cartão ser solto na coluna
    function drop() {
        this.classList.remove('over');
    }
}

