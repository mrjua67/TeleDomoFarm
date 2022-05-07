<html>

<head>
    <title>Control de Seguridad...</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1 class="title">Camaras de Vigilancia</h1>
    <p id="notification" hidden></p>
    <div class="entry-modal" id="entry-modal">
        <p>Ingrese un ID</p>
        <input id="room-input" class="room-input" placeholder="ID de monitoreo">
        <div >
            <button class="text" onclick="createRoom()">Crear Sala de monitoreo</button>
            <button class="text" onclick="joinRoom()">Unirse a sala de monitoreo</button>
        </div>
    </div>
    <div class="meet-area">
        <!-- Remote Video Element-->
        <video id="remote-video"></video>

        <!-- Local Video Element-->
        <video id="local-video"></video>
        <div class="meet-controls-bar">
            <button hidden onclick="startScreenShare()">Compartir pantalla</button>
        </div>
    </div>
    <iframe class="control" src="index1.php" frameborder="0"></iframe>
</body>

<script src="https://unpkg.com/peerjs@1.3.1/dist/peerjs.min.js"></script>
<script src="script.js"></script>

</html>