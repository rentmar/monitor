<?php
$data = array(array('', 10, 10, 20, 10),
 array('', 15, 10, 15, 10));
 
 $plot = new PHPlot();
 
 $plot->SetPlotType('lines');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);
$plot->SetXDataLabelPos('none');
$plot->SetLineWidths(3);
$plot->SetDrawXGrid(True);
$plot->DrawGraph();