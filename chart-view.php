<?php
require_once("db_connection.php");
$id=$_GET["id"];


$sql="SELECT * FROM air ORDER BY id ASC";
$result = $conn->query($sql);
// $row=$result->fetch_assoc();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Create User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        

        <?php
         
            while($row = $result->fetch_assoc()):
              ?>
            <table>
            <tr>
              <td><?=$row["id"]?></td>
              <td><?=$row["SiteName"]?></td>
              <td><?=$row["County"]?></td>
              <td><?=$row["AQI"]?></td>
              <td><?=$row["Status"]?></td>
              <td><?=$row["PM2.5"]?></td>
             
          </tr>
            </table>
          
          <?php endwhile; ?>

       
        
      </div>
      <canvas id="myChart" width="800" height="400"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart');

        const labels = $row;
        const data = {
            labels: labels,
            datasets: [{
                label: '雨量',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor:
                    [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',

                    ],
                borderColor:
                    [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                    ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                // maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const myChart = new Chart(ctx, config)
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>