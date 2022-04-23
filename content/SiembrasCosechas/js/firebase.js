 // Import the functions you need from the SDKs you need
 import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
 import {getFirestore, collection, addDoc, getDocs, deleteDoc, onSnapshot,doc,getDoc} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js";
 // TODO: Add SDKs for Firebase products that you want to use
 // https://firebase.google.com/docs/web/setup#available-libraries

 // Your web app's Firebase configuration
 const firebaseConfig = {
   apiKey: "AIzaSyBjBLVuoaUQsRz0kEx1UumPExpXNhs_weo",
   authDomain: "minicrudysemillascosechas.firebaseapp.com",
   projectId: "minicrudysemillascosechas",
   storageBucket: "minicrudysemillascosechas.appspot.com",
   messagingSenderId: "570561573676",
   appId: "1:570561573676:web:c942f414e3f2170a91f289"
 };

 // Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getFirestore();

//registro y cargue de datos en la bd
export const saveRegisterForm = (Semilla,Cultivo,Estado,tDesign,dCompr) =>{
    addDoc(collection(db,'SiembrasCosechas'),{Semilla,Cultivo,Estado,tDesign,dCompr})
};

export const getRegisterForm =() => getDocs(collection(db,'SiembrasCosechas'));

export const onGetRegisterForm =(callback) => onSnapshot(collection(db, 'SiembrasCosechas'), callback);

export const deleteRegisterForm = (id) => deleteDoc(doc(db, 'SiembrasCosechas', id));

export const getSiembrasCosechas = (id) => getDoc(doc(db,'SiembrasCosechas', id));