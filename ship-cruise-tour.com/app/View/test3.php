<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/View/assets/css/sass.css">
    <title>Document</title>
</head>
<body>
  <div>
  <?php
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$row=file('../app/View/uploads/ticket14.txt');
$logoFile = '../app/View/assets/images/shipCruiseTour.png';
$pdf->Image( $logoFile, 80, 10, '40px' );
$pdf->SetTextColor(20,50,90);
$pdf->SetFont('Arial','B',20);	
$pdf->Write( 70, "                            SHIP CRUISE TOUR\n" );
$pdf->SetTextColor(0,0,0);
$pdf->Write( 0, "                                 YOUR TICKET\n" );
$pdf->Write( 0, "                                 ____________\n" );


foreach($row as $rowValue) {
	$data=explode(';',$rowValue);
	foreach($data as $columnValue)
		$pdf->Cell(90,12,$columnValue);
		$pdf->SetFont('Arial','',12);		
		$pdf->Ln();
}
$pdf->SetFont('Arial','B',15);	
$pdf->SetTextColor(20,120,90);
$pdf->Ln(10);
$pdf->Write( 0, "                                               ENJOY YOUR TRIP\n" );
$pdf->Write( 0, "                                               ________________\n" );

ob_end_clean();
$pdf->Output('example_006.pdf', 'I');
?>
  </div>
<div>
  <canvas id="myChart"></canvas>
</div>
<div>
  <canvas id="myChart2"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const data = {
  labels: [
    'Eating',
    'Drinking',
    'Sleeping',
    'Designing',
    'Coding',
    'Cycling',
    'Running'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [90, 100, 50, 90, 20, 80, 40],
    fill: true,
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgb(255, 99, 132)',
    pointBackgroundColor: 'rgb(255, 99, 132)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(255, 99, 132)'
  }, {
    label: 'My Second Dataset',
    data: [28, 48, 40, 19, 96, 27, 100],
    fill: true,
    backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'
  }]
};
  
const config = {
  type: 'radar',
  data: data,
  options: {
    elements: {
      line: {
        borderWidth: 3
      }
    }
  },
};
  
  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

  const data2 = {
  labels: [
    'January',
    'February',
    'March',
    'April'
  ],
  datasets: [{
    type: 'bar',
    label: 'Bar Dataset',
    data: [10, 20, 30, 40],
    borderColor: 'rgb(255, 99, 132)',
    backgroundColor: 'rgba(255, 99, 132, 0.2)'
  }, {
    type: 'line',
    label: 'Line Dataset',
    data: [50, 50, 40, 50],
    fill: false,
    borderColor: 'rgb(54, 162, 235)'
  }]
};

const config2 = {
  type: 'scatter',
  data: data2,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};
  
  var myChart = new Chart(
    document.getElementById('myChart2'),
    config2
  );
</script>
</body>
</html>