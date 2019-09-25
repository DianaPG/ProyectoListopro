<?php
include("conexion_EJE.php");
date_default_timezone_set('Mexico/General'); 
$fecha=date('d/m/Y');
$hora=date('G');
$minseg=date('i:s');
#caso una de la mañana
$una[0]="01";
$una[1]="24";
$una[2]="23";
$una[3]="22";
$una[4]="21";
#caso dos de la mañana
$una[5]="02";
$una[6]="01";
$una[7]="24";
$una[8]="23";
$una[9]="22";
#caso tres de la mañana
$una[10]="03";
$una[11]="02";
$una[12]="01";
$una[13]="24";
$una[14]="23";
#caso cuatro de la mañana
$una[15]="04";
$una[16]="03";
$una[17]="02";
$una[18]="01";
$una[19]="24";
#caso cinco de la mañana
$una[20]="05";
$una[21]="04";
$una[22]="03";
$una[23]="02";
$una[24]="01";
#caso seis de la mañana
$una[25]="06";
$una[26]="05";
$una[27]="04";
$una[28]="03";
$una[29]="02";
#caso siete de la mañana
$una[30]="07";
$una[31]="06";
$una[32]="05";
$una[33]="04";
$una[34]="03";
#caso ocho de la mañana
$una[35]="08";
$una[36]="07";
$una[37]="06";
$una[38]="05";
$una[39]="04";
#caso nueve de la mañana
$una[40]="09";
$una[41]="08";
$una[42]="07";
$una[43]="06";
$una[44]="05";
#caso diez de la mañana
$una[45]="10";
$una[46]="09";
$una[47]="08";
$una[48]="07";
$una[49]="06";
#caso once de la mañana
$una[50]="11";
$una[51]="10";
$una[52]="09";
$una[53]="08";
$una[54]="07";
#caso doce de la mañana
$una[55]="12";
$una[56]="11";
$una[57]="10";
$una[58]="09";
$una[59]="08";
#caso trece (1 tarde)
$una[60]="13";
$una[61]="12";
$una[62]="11";
$una[63]="10";
$una[64]="09";
#caso catorce (2 tarde)
$una[65]="14";
$una[66]="13";
$una[67]="12";
$una[68]="10";
$una[69]="09";
#caso quice (3 tarde)
$una[70]="15";
$una[71]="14";
$una[72]="13";
$una[73]="12";
$una[74]="11";
#caso dieciseis (4 tarde)
$una[75]="16";
$una[76]="15";
$una[77]="14";
$una[78]="13";
$una[79]="12";
#caso diecisiete (5 tarde)
$una[80]="17";
$una[81]="16";
$una[82]="15";
$una[83]="14";
$una[84]="13";
#caso dieciocho (6 tarde)
$una[85]="18";
$una[86]="17";
$una[87]="16";
$una[88]="15";
$una[89]="14";
#caso diecinueve (7 noche)
$una[90]="19";
$una[91]="18";
$una[92]="17";
$una[93]="16";
$una[94]="15";
#caso veinte (8 noche)
$una[95]="20";
$una[96]="19";
$una[97]="18";
$una[98]="17";
$una[99]="16";
#caso veintiuno (9 noche)
$una[100]="21";
$una[101]="20";
$una[102]="19";
$una[103]="18";
$una[104]="17";
#caso veintidos (10 noche)
$una[105]="22";
$una[106]="21";
$una[107]="20";
$una[108]="19";
$una[109]="18";
#caso veintitres (11 noche)
$una[110]="23";
$una[111]="22";
$una[112]="21";
$una[113]="20";
$una[114]="19";
#caso veinticuatro (12 noche)
$una[115]="24";
$una[116]="23";
$una[117]="22";
$una[118]="21";
$una[119]="20";
$hora_total=$hora.":".$minseg; 
switch ($hora) {
	case '01':
		{
		$n=0;
		$m=4;
		break;
	    }
	case '02':
		{
		$n=5;
		$m=9;
		break;
	    }
	case '03':
		{
		$n=10;
		$m=14;
		break;
	    }
	case '04':
		{
		$n=15;
		$m=19;
		break;
	    }
	case '05':
		{
		$n=20;
		$m=24;
		break;
	    }
	case '06':
		{
		$n=25;
		$m=29;
		break;
	    }
	case '07':
		{
		$n=30;
		$m=34;
		break;
	    }
	case '08':
		{
		$n=35;
		$m=39;
		break;
	    }
	case '09':
		{
		$n=40;
		$m=44;
		break;
	    }
	case '10':
		{
		$n=45;
		$m=49;
		break;
	    }
	case '11':
		{
		$n=50;
		$m=54;
		break;
	    }
	case '12':
		{
		$n=55;
		$m=59;
		break;
	    }
	case '13':
		{
		$n=60;
		$m=64;
		break;
	    }
	case '14':
		{
		$n=65;
		$m=69;
		break;
	    }
	case '15':
		{
		$n=70;
		$m=74;
		break;
	    }
	case '16':
		{
		$n=75;
		$m=79;
		break;
	    }
	case '17':
	   {
		$n=80;
		$m=84;
		break;
	    }
	case '18':
		{
		$n=85;
		$m=89;
		break;
	    }
	case '19':
		{
		$n=90;
		$m=94;
		break;
	    }
	case '20':
		{
		$n=95;
		$m=99;
		break;
	    }
	case '21':
		{
		$n=100;
		$m=104;
		break;
	    }
	case '22':
		{
		$n=105;
		$m=109;
		break;
	    }
	case '23':
		{
		$n=110;
		$m=114;
		break;
	    }
	case '24':
			{
		$n=115;
		$m=119;
		break;
	    }
	default:
		break;
}
$cont=1;
 for ($n; $n <= $m ; $n++) 
{
$hora00=$una[$n].":00:00";
$hora11=$una[$n].":59:50";
$PAGOS = oci_parse($conn,"SELECT COUNT((EJE1-EJE2)*24*60*60) FROM EJE3  WHERE TCT_ID=803 AND EJE2 BETWEEN TO_DATE('$fecha $hora00','DD/MM/YYYY HH24:MI:SS')AND TO_DATE('$fecha $hora11','DD/MM/YYYY HH24:MI:SS') AND USR_ID='25635' AND(EJE1-EJE2)*24*60*60>=10 ORDER by  EJE2");
oci_execute($PAGOS);
if ($cont==1) 
  {
    $fila = oci_fetch_array($PAGOS, OCI_ASSOC+OCI_RETURN_NULLS);
    foreach ($fila as $elemento) 
    $elemento= $elemento;
    echo $elemento."<br>";
 }
elseif ($cont==2) 
  {
  	$fila2 = oci_fetch_array($PAGOS, OCI_ASSOC+OCI_RETURN_NULLS);
    foreach ($fila2 as $elemento2)
    $elemento2= $elemento2; 
    echo $elemento2."<br>";
  }
  elseif ($cont==3) 
  {
  	$fila3 = oci_fetch_array($PAGOS, OCI_ASSOC+OCI_RETURN_NULLS);
    foreach ($fila3 as $elemento3) 
    $elemento3= $elemento3;
  }
    elseif ($cont==4) 
  {
  	$fila4 = oci_fetch_array($PAGOS, OCI_ASSOC+OCI_RETURN_NULLS);
    foreach ($fila4 as $elemento4) 
    $elemento4= $elemento4;
  }
 elseif ($cont==5) 
  {
  	$fila5 = oci_fetch_array($PAGOS, OCI_ASSOC+OCI_RETURN_NULLS);
    foreach ($fila5 as $elemento5) 
    $elemento5= $elemento5;
  }
  $cont++;
?>