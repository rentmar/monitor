<?php
$ancho=800;
$alto=700;
//---------------------- actor
$plot = new PHPlot($ancho,$alto);

$plot->SetFailureImage(False); // No error 
$plot->SetPrintImage(False); // No carga

$plot->SetDataType('text-data-single');
$plot->SetPlotType('pie');

$plot->SetDataValues($dtsactor);

$plot->SetImageBorderType('plain');
$plot->SetShading(0);

$plot->SetTitle('Por Actores');
$plot->SetDataColors(array('red', 'green', 'blue', 'yellow', 'cyan',
 'magenta', 'brown', 'lavender', 'pink','orange'));
$plot->SetLegendPixels(470,10);
foreach ($dtsactor as $row)
{
 $plot->SetLegend(implode(': ', $row));
}

$plot->DrawGraph();

//-------------------- medio
$plot1 = new PHPlot($ancho,$alto);

$plot1->SetFailureImage(False); // No error 
$plot1->SetPrintImage(False); // No carga

$plot1->SetDataType('text-data-single');
$plot1->SetPlotType('pie');

$plot1->SetDataValues($dtsmedio);

$plot1->SetImageBorderType('plain');
$plot1->SetShading(0);
$plot1->SetTitle('Por Medios');
$plot1->SetDataColors(array('red', 'green', 'blue', 'yellow', 'cyan',
 'magenta', 'brown', 'lavender', 'pink','orange'));
$plot1->SetLegendPixels(670,10);
foreach ($dtsmedio as $row)
{
 $plot1->SetLegend(implode(': ', $row));
}

$plot1->DrawGraph();

//--------------------tipo medio
$plot2 = new PHPlot($ancho,$alto);

$plot2->SetFailureImage(False); // No error 
$plot2->SetPrintImage(False); // No carga

$plot2->SetDataType('text-data-single');
$plot2->SetPlotType('pie');

$plot2->SetDataValues($dtstipomedio);

$plot2->SetImageBorderType('plain');
$plot2->SetShading(0);
$plot2->SetTitle('Por Tipo de Medios');
$plot2->SetDataColors(array('red', 'green', 'blue', 'yellow'));
$plot2->SetLegendPixels(600,10);
foreach ($dtstipomedio as $row)
{
 $plot2->SetLegend(implode(': ', $row));
}

$plot2->DrawGraph();
//--------------------tema
$plot3 = new PHPlot($ancho,$alto);

$plot3->SetFailureImage(False); // No error 
$plot3->SetPrintImage(False); // No carga

$plot3->SetDataType('text-data-single');
$plot3->SetPlotType('pie');

$plot3->SetDataValues($dtstema);

$plot3->SetImageBorderType('plain');
$plot3->SetShading(0);
$plot3->SetTitle('Por Tema');
$plot3->SetDataColors(array('red', 'green', 'blue', 'yellow', 'cyan',
 'magenta', 'brown', 'lavender', 'pink','orange'));
$plot3->SetLegendPixels(400,10);
foreach ($dtstema as $row)
{
 $plot3->SetLegend(implode(': ', $row));
}

$plot3->DrawGraph();
?>

<html>
	<div id="content-wrapper">

		<div class="container">

			<div class="card">
				<div class="card-header bg-primary text-white">
					<h3>RESUMEN CUESTIONARIO REFORMAS ELECTORALES</h3>
				</div>
			</div>
			<br>

			<div class="card">
				<div class="card-header">
					Tipo de Medio
				</div>
				<div class="card-body">
					<img src="<?php echo $plot2->EncodeImage();?>" alt="Plot Image">
				</div>
			</div>
			<br>

			<div class="card">
				<div class="card-header">
					Medio al cual se hizo el seguimiento
				</div>
				<div class="card-body">
					<img src="<?php echo $plot1->EncodeImage();?>" alt="Plot Image">
				</div>
			</div>
			<br>

			<div class="card">
				<div class="card-header">
					El tipo de actor que es la fuente de la noticia
				</div>
				<div class="card-body">
					<img src="<?php echo $plot->EncodeImage();?>" alt="Plot Image">
				</div>
			</div>
			<br>

			<div class="card">
				<div class="card-header">
					Tema al que está referido la nota
				</div>
				<div class="card-body">
					<img src="<?php echo $plot3->EncodeImage();?>" alt="Plot Image">
				</div>
			</div>
			<br>
		</div>
	</div
