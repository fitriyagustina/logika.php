<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar PHP</title>
</head>
<body>

<h1>Logika di PHP</h1>

<?php
 //------- tipe data boolean -------
 // $hasil = true ;
 // $hasil2 = false;
 
 //------- if dan else ------
 // operator logika == === > >= < <= !=
 
 //$uang_programmer =  4000;
 //$keyboard        =  2000;
 //$uang_designer   = 4000;
 // && atau ||
 //
// if ($uang_programmer > $keyboard
//	 && $uang_designer > $keyboard){
//		 
//		 echo 'boleh beli keyboard';
//	 }else{
//		 echo 'ngga bisa beli';
//	}
	
	// if($uang_programmer> $keyboard){
    // echo 'beli!';
	// }else if ($uang_designer > $keyboard){
    // echo ' beli oleh designer!;

 // --if bercabang
//if ($uang_designer >= $keyboard * 2){
//echo 'dubeli duakali oleh designer!';
//   }
//
//	
//	}
// else{
// echo 'ngga cukup';
//}


// switch case


$nama = "Hilman";

 Switch ($nama){
  case  'Endy':
	echo 'namanya endy';
	break;
	case 'tiqa':
	echo 'namanya tiqa';
	break;
	 case 'Hilman':
	 echo 'namanya Hilman';
	 break;
	 default:
	  echo'tidak ada yang benar';
}
  
  
  ?>
  
  </body>
  </html>