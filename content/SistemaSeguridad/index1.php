<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="main.js">
    <title>MounsterCar</title>
</head>
<style>
  html{
    font-family: Arial;
    display: inline-block;
    margin: 0px auto;
    height: 100%;
  }
  h2{
    font-size: 2.0rem;
    text-align: center;
  }
  p{
    font-size: 1.5rem;
  }
  i{
    font-size:3rem;
  }
  #app{ margin:20% 2%;}
</style>

<body>
  <div id="app">
<h2>C.O.M T.Scaletta</h2>

    <form @submit.prevent="enviarMensaje">

      <p>Drive-MounsterCar:
        <i class="fas fa-car-side" style="color: #094293">
        <select v-model="car" style="width:100px; height:30px">
          <option value = "w">Forward</option>
          <option value = "s">Backward</option>
          <option value = "d">Rigth</option>
          <option value = "a">Left</option>
          <option value = "q">Stop</option>       
        </select>
        <input type="submit" value="Enviar!">
        </i>
      </p>

    </form>
  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first 
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>-->

<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase.js"></script>


<script src="./main.js"></script>

</html>