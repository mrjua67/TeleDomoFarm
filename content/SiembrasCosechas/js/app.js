
import { saveRegisterForm, getRegisterForm,onGetRegisterForm, deleteRegisterForm, getSiembrasCosechas} from '../js/firebase.js';

const registerForm = document.getElementById('register-form');
const registerFormColums = document.getElementById('columns');

window.addEventListener('DOMContentLoaded', async () => {

    onGetRegisterForm((querySnapshot) => {
        let html = '';

        querySnapshot.forEach((doc) => {
            const SyC = doc.data();
            html += `
        <tr>
            <th>1</th>
            <td>${SyC.Semilla}</td>   
            <td>${SyC.Cultivo}</td>
            <td>${SyC.Estado}</td>
            <td>${SyC.tDesign}</td>
            <td>${SyC.dCompr}</td>
            <td>
                <button class="button is-warning btn-edit" data-id="${doc.id}">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button class="button is-danger btn-delete" data-id="${doc.id}">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>
        `;
        });

        registerFormColums.innerHTML = html;

        const btnsDelete = registerFormColums.querySelectorAll('.btn-delete');

        btnsDelete.forEach(btn =>{
            btn.addEventListener('click', ({target: { dataset }}) => {
                deleteRegisterForm(dataset.id);
            });
        });

        const btnsEdit = registerFormColums.querySelectorAll('.btn-edit');
        btnsEdit.forEach((btn) =>{
            btn.addEventListener('click', async (e) =>{
                const doc = await getSiembrasCosechas(e.target.dataset.id);
                const SiembrasCosechas = doc.data();
                registerForm['semilla'].value = SiembrasCosechas.Semilla;
            });
        });
    });
});

const openModalRegister = document.getElementById('openModal')
const modal = document.getElementById('modal')
const closeModal = document.getElementById('closeRegisterModal')

const showRegisterModal = () => {
    modal.classList.toggle('is-active')
}

openModalRegister.addEventListener('click', showRegisterModal);
closeModal.addEventListener('click', showRegisterModal);

//registro de datos en la bd 
registerForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const semilla = registerForm['semilla'].value;
    const cultivo = registerForm['cultivo'].value;
    const estado = registerForm['estado'].value;
    const tDesign = registerForm['tDesign'].value;
    const dCompr = registerForm['dCompr'].value;

    saveRegisterForm(semilla, cultivo, estado, tDesign, dCompr);
    registerForm.reset();
});