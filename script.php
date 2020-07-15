<?php
        require('./chart.php');

        echo'
        var ctx = document.getElementById("tempChart").getContext("2d");
        var myChart = new Chart(ctx, {
          type: "line",
            data: {
                labels: [';
        for($i=0; $i < count($dayLabel); $i++){
                echo $dayLabel[$i];
                echo ',';
        };
        echo '   
                        ],
            datasets: [{
                label: "Degrees",
                data: [';
        
        for($i=0; $i < count($tempLabel); $i++){
                echo $tempLabel[$i];
                echo ',';
        };
        
        echo '
                ],
                backgroundColor: "rgba(255, 99, 132, 0.2)"   
                ,
                borderColor: "rgba(255, 99, 132, 1)"
                ,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
        })
        ';
        
?>