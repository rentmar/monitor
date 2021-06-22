<?php
$data = array(
 array('', 10),
 array('', 20),
 array('', 30),
 array('', 35),
 array('', 5),
);
echo var_dump($data);
echo "ooooooooooooo";
echo var_dump($dtsactor);

$plot = new PHPlot(350,250);

$plot->SetFailureImage(False); // No error images
$plot->SetPrintImage(False); // No automatic output

$plot->SetDataType('text-data-single');
$plot->SetPlotType('pie');
$plot->SetDataValues($data);

$plot->SetImageBorderType('plain');
$plot->SetTitle('Torta en pagina');
$colors = array('red', 'green', 'blue', 'yellow', 'cyan');
$plot->SetDataColors($colors);
$plot->SetLegend($colors);
$plot->SetLabelScalePosition(0.2);
$plot->SetShading(0);

$data = array(
 array('', 20),
 array('', 20),
 array('', 10),
 array('', 35),
 array('', 15),
);

$plot2 = new PHPlot(350,250);

$plot2->SetFailureImage(False); // No error images
$plot2->SetPrintImage(False); // No automatic output

$plot2->SetDataType('text-data-single');
$plot2->SetPlotType('pie');
$plot2->SetDataValues($data);

$plot2->SetImageBorderType('plain');
$plot2->SetTitle('Torta en pagina');
$colors = array('red', 'green', 'blue', 'yellow', 'cyan');
$plot2->SetDataColors($colors);
$plot2->SetLegend($colors);
$plot2->SetLabelScalePosition(0.2);
$plot2->SetShading(0);

$plot->DrawGraph();
$plot2->DrawGraph();
?>
<html>
	<head>
		<title>Plot de tortas</title>
	</head>
	<body>
		<h1>Torta uno</h1>
		<p>Esta es sobre uno</p>
		<img src="<?php echo $plot->EncodeImage();?>" alt="Plot Image">
		<h1>Torta dos</h1>
		<p>Esta es sobre dos</p>
		<img src="<?php echo $plot2->EncodeImage();?>" alt="Plot Image">
	</body>
</html>

