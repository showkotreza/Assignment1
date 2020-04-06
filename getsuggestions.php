<?php

	$a[] = "Narayonganj";
	$a[] = "Gazipur";
	$a[] = "Faridpur";
	$a[] = "Tangail";
	$a[] = "Manikganj";

	$b[] = "Narail";
	$b[] = "Jessore";
	$b[] = "Magura";
	$b[] = "Chuadanga";
	$b[] = "Kushtia";
	$b[] = "Jhenaidha";
	$b[] = "Satkhira";

	$c[] = "Barguna";
	$c[] = "Vhola";
	$c[] = "Jhalokathi";
	$c[] = "Patuakhali";
	$c[] = "Pirojpur";
	$c[] = "Barisal";

	$d[] = "Cumilla";
	$d[] = "Chadpur";
	$d[] = "Noakhali";
	$d[] = "Feni";
	$d[] = "Rangamati";
	$d[] = "Cox's Bazar";

	$e[] = "Maymensingh";
	$e[] = "Jamalpur";
	$e[] = "Netrokona";
	$e[] = "Sherpur";

	$f[] = "Natore";
	$f[] = "Pabna";
	$f[] = "Sirajgong";
	$f[] = "Naogong";
	$f[] = "Capainobabganj";
	$f[] = "Rajshahi";

	$g[] = "Panchagarh";
	$g[] = "Dinajpur";
	$g[] = "Kurigram";
	$g[] = "Rangpur";
	$g[] = "Gaibandha";
	$g[] = "Nilphamari";

	$h[] = "Habiganj";
	$h[] = "Moulvibazar";
	$h[] = "Sunamganj";
	$h[] = "Sylhet";


    $q = $_REQUEST["q"];

	$sugg = "";

	if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="khulna"){
	  foreach($a as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  if($q=="dhaka"){
	  foreach($b as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }	    
	  }
	  if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="barisal"){
	  foreach($c as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="chittagong"){
	  foreach($d as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="mymensingh"){
	  foreach($e as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="rahsahi"){
	  foreach($f as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="rangpur"){
	  foreach($g as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="sylhet"){
	  foreach($h as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  $sugg=$sugg."</select>";
	}
	echo $sugg === "" ? "<select><option>Districts</option></select>" : $sugg;
?> 