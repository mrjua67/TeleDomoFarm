import {saveTask, getTasks, onGetTasks, deleteTask, getTask, updateTask} from './firebase.js'

const taskContainer =document.getElementById('task-container')
const taskForm = document.getElementById('task-form')

let editStatus = false;

let id=''

window.addEventListener('DOMContentLoaded', async() =>{
   // console.log('works!')
  //const querySnapshop = await getTasks() para solicitar los registros una sola vez al servidor
  //onSnapshot(collection(db,'tasks'), (querySnapshop) => {
    onGetTasks((querySnapshop) => {
        let html = ''
        querySnapshop.forEach(element => { //obtener cada elemento por separacdo 'element()' y para obtener sus datos es element.data()
           // console.log(element.data())
          //console.log(taskContainer)
          const task = element.data()    
          html += `
              <div class="card card-body mt-2 border-primary">
                  <h3 class="h5">${task.title}</h3>
                  <p>${task.description}</p>
                  <div class="d-flex">
                    <button class='btn btn-primary btn-delete' data-id="${element.id}">Delete</button>
                    <button class='btn btn secondary btn-edit' data-id="${element.id}">Edit</button>
                  </div>
                  
              </div>
              `     
        })
      
         taskContainer.innerHTML =html //el innerHTML es para mostrar el codigo html creado pero desde documentos .js

         const btnDelete = taskContainer.querySelectorAll('.btn-delete')

         /*btnDelete.forEach(btn =>{
             btn.addEventListener('click', (event) =>{
                console.log(event.target.dataset.id)
             })
         })*/
         btnDelete.forEach(btn =>{
            btn.addEventListener('click', ({target: {dataset}}) =>{
                deleteTask(dataset.id)
        });
      });

      const btnsEdit = taskContainer.querySelectorAll('.btn-edit')
      btnsEdit.forEach(btn =>{
        btn.addEventListener('click',async (e) => {
            const doc = await getTask(e.target.dataset.id)
            const task = doc.data()

            taskForm['task-title'].value = task.title
            taskForm['task-description'].value = task.description

            editStatus = true;
            id = doc.id;

            taskForm['btn-task-save'].innerText = 'Update'

        })
      })
    });
});


taskForm.addEventListener('submit', (e) =>{
    e.preventDefault() //para que no se recargue la pagina

    //console.log('submitted')

    const title = taskForm['task-title']
    const description = taskForm['task-description']

    //console.log(title.value, description.value) leer datos de title y description

    if(!editStatus){
        saveTask(title.value, description.value)
    }else{
        updateTask(id, {
            title: title.value, 
            description: description.value,
        });

        editStatus = false;
    }

    taskForm.reset()
});