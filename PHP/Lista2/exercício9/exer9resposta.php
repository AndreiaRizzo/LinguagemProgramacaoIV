<?php

$anoNasc = $_POST['anoNasc'];
$anoAtual = date('Y');
$idadeAtual = $anoAtual - $anoNasc;
$idade2025 = 2025 - $anoNasc;
$diasVividos = $idadeAtual * 365;

echo("Atualmente você tem $idadeAtual anos.<br> 
Ja viveu $diasVividos dias.<br> 
Terá $idade2025 anos em 2025.");
