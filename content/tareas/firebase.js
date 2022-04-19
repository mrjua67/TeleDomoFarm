  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
  import { getFirestore, collection, addDoc, getDocs, deleteDoc, getDoc, onSnapshot, doc, updateDoc} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js"
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDRomwpUHq4mgbJZCsdE7MlIkvR5DoKqaA",
    authDomain: "fir-crud-9934b.firebaseapp.com",
    projectId: "fir-crud-9934b",
    storageBucket: "fir-crud-9934b.appspot.com",
    messagingSenderId: "834342945296",
    appId: "1:834342945296:web:c1888f5ddc8048c5890095",
    measurementId: "G-LM4PCTE3P5"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const db = getFirestore()

  export const saveTask =(title, description)=>
    //console.log(title, description)       
    addDoc(collection(db, 'tasks'),{title: title, description: description});

  export const getTasks = () => getDocs(collection(db, 'tasks'))

  //export const onGetTasks =() => console.log('oneGetTasks')
  export const onGetTasks = (callback) => onSnapshot(collection(db,'tasks'), callback)

  /*export{
      onSnapshot,
      collection,
      db
  }*/
  export const deleteTask = (id) => deleteDoc(doc(db, 'tasks', id));

  export const getTask = (id) => getDoc(doc(db, 'tasks', id));
  
  export const updateTask = (id, newFields) => 
    updateDoc(doc(db, 'tasks', id), newFields);