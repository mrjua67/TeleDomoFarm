var firebaseConfig = {
  apiKey: "AIzaSyCmOtm8VuVYKNGa6mRTvtANKe0A7I-5BD4",
  authDomain: "teledomofarm-car.firebaseapp.com",
  databaseURL: "https://teledomofarm-car-default-rtdb.firebaseio.com",
  projectId: "teledomofarm-car",
  storageBucket: "teledomofarm-car.appspot.com",
  messagingSenderId: "1040505367520",
  appId: "1:1040505367520:web:f5e50c5358b050673c5985",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const app = new Vue({
  el: "#app",

  data: {
    car: null,
  },

  methods: {
    enviarMensaje() {
      firebase
        .database()
        .ref("/MounsterCar")
        .set({
          car: this.car,
        });
    },
  },
});
