<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
    $url = "https://teledomofarm-dht11esp32-default-rtdb.firebaseio.com/dht.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    //print_r($response);
    $data = json_decode($response, true);
    //var_dump($data);

    //echo $data["Humedad"] . "<br>";
    //echo $data["Temperatura"] . "<br>";
    $valueHumedad = $data["Humedad"];
    $valueTemperatura = $data["Temperatura"];
    /*foreach ($data as $ch => $value) {
                echo $data["Humedad"]."<br>";
                echo $data["Temperatura"]."<br>";
            }*/
    ?>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['Temperatura', <?php echo $valueTemperatura ?>],
                ['Humedad', <?php echo $valueHumedad ?>],
            ]);

            var options = {
                width: 400,
                height: 120,
                redFrom: 90,
                redTo: 100,
                yellowFrom: 75,
                yellowTo: 90,
                minorTicks: 5
            };

            var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

            chart.draw(data, options);

            setInterval(function() {
                data.setValue(0, 1, <?php echo $valueTemperatura; ?>);
                chart.draw(data, options);
            }, 200);
            setInterval(function() {
                data.setValue(1, 1, <?php echo $valueHumedad ?>);
                chart.draw(data, options);
            }, 200);
        }
    </script>
   <meta http-equiv="refresh" content="8" ;>
</head>

<body>
    <div class="content">
        <div id="chart_div" class="container" style="width: 400px; height: 120px;"></div>
    </div>   
</body>

</html>