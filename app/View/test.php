<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link
    rel="stylesheet"
    href="../app/View/assets/contrast-bootstrap-pro/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="../app/View/assets/contrast-bootstrap-pro/css/cdb.css" />
  <script
    src="../app/View/assets/contrast-bootstrap-pro/js/cdb.js"></script>
  <script
    src="../app/View/assets/contrast-bootstrap-pro/js/bootstrap.min.js"></script>
  <script
    src="https://kit.fontawesome.com/9d1d9a82d2.js"
    crossorigin="anonymous"></script>

  <title>How to create bootstrap charts using bootstrap 5</title>
</head>
<style>
  .chart-container {
    width: 50%;
    height: 50%;
    margin: auto;
  }
</style>

<body>
  <div class="card chart-container">
    <canvas id="chart"></canvas>
  </div>

</body>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
<script>
      const ctx = document.getElementById("chart").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ["rice", "yam", "tomato", "potato",
          "beans", "maize", "oil"],
          datasets: [{
            label: 'food Items',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [30, 40, 20, 50, 80, 90, 20],
          }]
        },
      });
</script>

</html>