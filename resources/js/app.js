import './bootstrap';

let task = document.querySelectorAll('.task')

task.forEach(e => {
    let editbtn = e.firstElementChild.lastElementChild.firstElementChild.lastElementChild

    let textaria = e.firstElementChild.firstElementChild.lastElementChild
    textaria.setAttribute('readonly', 1)

    // const Edit = () => {
    editbtn.addEventListener('click', () => {
        console.log(editbtn.textContent);


        if (editbtn.textContent == "Edit") {
            editbtn.textContent = "Update"
            textaria.removeAttribute('readonly', 1)
        } else {
            editbtn.textContent = "Edit"
            textaria.setAttribute('readonly', 1)
        }
    })
    // }
})