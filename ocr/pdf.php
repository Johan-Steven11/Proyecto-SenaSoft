<?php
require_once('../PDF/MPDF57//mpdf.php');
$mpdf = new mPDF();
$mpdf->writeHTML('<div>hola...</div>');
$mpdf->Output();
?>