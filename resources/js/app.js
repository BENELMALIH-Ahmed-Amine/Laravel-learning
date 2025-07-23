import './bootstrap';

let task = document.querySelectorAll('.task')

task.forEach(e => {
    let editbtn = e.firstElementChild.lastElementChild.firstElementChild

    let textaria = e.firstElementChild.firstElementChild.lastElementChild
    console.log(textaria);
    textaria.setAttribute('readonly', 1)
    
    editbtn.addEventListener('click', () => {
        editbtn.textContent = "Update"
        textaria.removeAttribute('readonly', 1)
    })
})