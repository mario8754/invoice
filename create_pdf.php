<?php
if(!isset($_POST['createpdf'])){
    header("location:index.php");
    return false;
}
// ***********************Invoice Color ******************//
$hex = str_replace("#", "", $_POST['invoice_color']);
if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
} else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
}
$rgb = array($r, $g, $b);
//*********************** Bill To ************************//
if($_POST['bt_name']!=''){$billto=$_POST['bt_type']."\n".$_POST['bt_name'];}
if($_POST['bt_address1']){$billto.=" \n".$_POST['bt_address1'];}
if($_POST['bt_address2']){$billto.=" \n".$_POST['bt_address2'];}
if($_POST['bt_phone']){$billto.=" \n".$_POST['bt_phone'];}
if($_POST['bt_email']){$billto.=" \n".$_POST['bt_email'];}
//*********************** Date Option ******************//
$datesection='';
if($_POST['billing_date']!=''){$datesection.="Date : ".$_POST['billing_date'];}
if($_POST['due_date']!=''){$datesection.=" \nDue Date : ".$_POST['due_date']." ";}
//************************ Currency Symbol *****************//
$currency = stripslashes($_POST['currency']);
$currency = iconv('UTF-8', 'windows-1252', $currency);

	define('FPDF_FONTPATH','fpdf/font/');
	require('fpdf/fpdf.php');
	
	$textColour = array( 0, 0, 0 );
	$headerColour = array( 100, 100, 100 );
	$tableHeaderTopTextColour = array( 0, 0, 0 );
	$tableHeaderTopFillColour = $rgb;
	$tableHeaderTopProductTextColour = array( 0, 0, 0 );
	$tableHeaderTopProductFillColour = array( 143, 173, 204 );
	$tableHeaderLeftTextColour = array( 99, 42, 57 );
	$tableHeaderLeftFillColour = array( 184, 207, 229 );
	$tableBorderColour = array( 50, 50, 50 );
	$tableRowFillColourPink = array( 213, 170, 170 );
	$tableRowFillColour = array( 255, 255, 255 );
	$reportName = $_POST['invoice_no'];
	$reportNameYPos = 160;
	if(isset($_FILES["logo"]["name"]) && $_FILES["logo"]["name"] != ''){
		$logoFile =  'upload/'.$_FILES["logo"]["name"];
		copy( $_FILES['logo']['tmp_name'], $logoFile ); 
	}else{
		$logoFile =  'images/blank_logo.png';	
		}
	
	$logoXPos = 10;
	$logoYPos = 8;
	$logoWidth = 30;
	$logoHight = 15;
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
	$pdf->SetDrawColor( $tableBorderColour[0],$tableBorderColour[1],$tableBorderColour[2]);
	// Logo
	$pdf->Image( $logoFile, $logoXPos, $logoYPos, $logoWidth, $logoHight );
	
	$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell(190, 0, $_POST['bf_name'], 0, false, 'R', 0, '', 1, false, 'M', 'M');
	$pdf->Ln( 5 );
	$pdf->SetFont( 'Arial', 'B', 8 );
	if($_POST['bf_address1']!=''){
	$pdf->Cell(190, 0, $_POST['bf_address1'], 0, false, 'R', 0, '', 1, false, 'M', 'M');
	$pdf->Ln( 4 );
	}
	if($_POST['bf_address2']!=''){
	$pdf->Cell(190, 0, $_POST['bf_address2'], 0, false, 'R', 0, '', 1, false, 'M', 'M');
	$pdf->Ln( 4 );
	}
	if($_POST['bf_phone']!=''){
	$pdf->Cell(190, 0, $_POST['bf_phone'], 0, false, 'R', 0, '', 1, false, 'M', 'M');
	$pdf->Ln( 4 );
	}
	if($_POST['bf_email']!=''){
	$pdf->Cell(190, 0, $_POST['bf_email'], 0, false, 'R', 0, '', 1, false, 'M', 'M');
	$pdf->Ln( 4 );
	}

	$pdf->Ln( 10 );
	$pdf->SetFont( 'Arial', 'B', 12 );
	$pdf->Cell(150, 0, "", 0, false, 'L', 0, '', 1, false, 'M', 'M');
	$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
	$pdf->Cell(40, 0, $_POST['invoice_no']." ", 0, false, 'R', 0, '', 1, false, 'M', 'M');
	$pdf->Ln( 5 );
	
	$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
	$pdf->SetFont( 'Arial', 'B', 8 );
	$current_y = $pdf->GetY();
	$current_x = $pdf->GetX();
	$cell_width = 63;
	$pdf->MultiCell($cell_width, 4, $billto, 0,'L', false);
	$pdf->SetXY($current_x + $cell_width, $current_y);
	$current_x = $pdf->GetX();
	$pdf->MultiCell($cell_width, 4, "", 0, 'L', false);
	$pdf->SetXY($current_x + $cell_width, $current_y);
	$current_x = $pdf->GetX();
	$pdf->MultiCell($cell_width, 4, $datesection, 0, 'R', false);
	//$pdf->Ln( 20 );

$pdf->Ln( 25 );		
$pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
$pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );

$pdf->SetFont( 'Arial', 'B', 8 );
  //************ tittle header **************//
  $pdf->Cell( 10, 8, '#', 0, 0, 'C', true );
  $pdf->Cell( 85, 8, $_POST['detailstype'], 0, 0, 'C', true );
  $pdf->Cell( 25, 8, 'Quantity', 0, 0, 'C', true );
  $pdf->Cell( 40, 8, 'Rate', 0, 0, 'L', true );
  $pdf->Cell( 30, 8, 'Price', 0, 0, 'L', true );
  $pdf->Ln( 8 );
  
  //************* item List ****************
  $subtotal=0;
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] ); 
  for($i=0;$i<count($_POST['product_name']);$i++)
 {
  $pdf->SetFont( 'Arial', 'B', 8 );
  $pdf->Cell( 10,8,$i+1,0,0,'C',true);
  $pdf->Cell( 85,8,$_POST['product_name'][$i],0,0,'C',true );
  $pdf->Cell( 25,8,$_POST['product_quqntity'][$i],0,0,'C',true );
  $pdf->Cell( 40,8,$currency.number_format($_POST['product_rate'][$i],2),0,0,'L',true );
  $pdf->Cell( 30,8,$currency.number_format(($_POST['product_rate'][$i]*$_POST['product_quqntity'][$i]),2),0,0,'L', true);
  if($_POST['product_desc'][$i]!=''){
  $pdf->Ln( 6 );
  $pdf->SetFont( 'Arial', '', 5 );
  $pdf->Cell( 10,4,'',0,0,'C',true);
  $pdf->Cell( 85,4,'('.$_POST['product_desc'][$i].')',0,0,'C',true );
  $pdf->Cell( 25,4,'',0,0,'C',true );
  $pdf->Cell( 40,4,'',0,0,'L',true );
  $pdf->Cell( 30,4,'',0,0,'L', true);
  $pdf->Ln( 4 );
  }else{
  $pdf->Ln( 8 );
  }
  $subtotal=$subtotal+($_POST['product_rate'][$i]*$_POST['product_quqntity'][$i]);
  }
  $pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
  $pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );
  
  $pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
  $pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );
  $pdf->SetFont( 'Arial', 'B', 8 );
 
 
  if($_POST['discount_amount']>0 || $_POST['tax_amount']>0 ){$totaltext='Sub Total';}else{$totaltext='Total Payable Amount';}
  $pdf->Cell( 160,8, $totaltext, 0, 0, 'R', true );
  $pdf->Cell( 30,8, $currency.number_format($subtotal,2), 0, 0, 'L', true );
  $pdf->Ln( 8 );	 
  
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  // ********************** Calculation For Tax
  if($_POST['tax_amount']>0)
  {
	if($_POST['tax_type']==1){$tax=$_POST['tax_amount'];}else{$tax=$subtotal*$_POST['tax_amount']/100;}  
		//$pdf->Cell( 116,8, '', 0, 0, 'C', true );
		$pdf->Cell( 160,8,'(+) Tax', 0, 0, 'R', true );
		$pdf->Cell( 30,8, $currency.number_format($tax,2), 0, 0, 'L', true );
		$pdf->Ln( 8 );	 
  }else{
	 $tax=0;}
  $totalaftertax=$subtotal+$tax;
  // *********************** Calculaton For Discount
  if($_POST['discount_amount']>0)
  {
	if($_POST['discount_type']==1){$discount=$_POST['discount_amount'];}else{$discount=$totalaftertax*$_POST['discount_amount']/100;}  
		//$pdf->Cell( 116,8, '', 0, 0, 'C', true );
		$pdf->Cell( 160,8,' (-) Discount', 0, 0, 'R', true );
		$pdf->Cell( 30,8, $currency.number_format($discount,2), 0, 0, 'L', true );
		$pdf->Ln( 8 );	 
  }else{
	 $discount=0;}
  $totalafterdiscount=$totalaftertax-$discount;
  
 if($discount!=0 || $tax!=0 )
  {  
 $pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
 $pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );
 $pdf->SetFont( 'Arial', 'B', 8 );
 
		//$pdf->Cell( 116,8, '', 0, 0, 'C', true );
		$pdf->Cell( 160,8,'Total Payable Amount ', 0, 0, 'R', true );
		$pdf->Cell( 30,8, $currency.number_format($totalafterdiscount,2) , 0, 0, 'L', true );
		$pdf->Ln( 8 );	
		$pdf->Ln( 5 );
  }
  
  $pdf->Ln( 10 );
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] ); 
  
	$pdf->SetFont( 'Arial', 'B', 8 );
	$pdf->Write( 5, $_POST['extra_note_tittle'] );
	$pdf->Ln( 8 );
	$pdf->SetFont( 'Arial', '', 7 );
	$pdf->Write( 5, $_POST['extra_note'] );
	$pdf->Ln( 20 );
	
	if($_POST['sig_name']!='' || $_POST['sig_designation']!='' ){
	$pdf->Cell( 150,5, '', 0, 0, 'C', true );
	$pdf->Cell( 30,5,'----------------------------------------', 0, 0, 'L', true );
	$pdf->Ln( 5 );
	}
	$pdf->SetFont( 'Arial', 'B', 8 );
	$pdf->Cell( 160,5, '', 0, 0, 'C', true );
	$pdf->Cell( 30,5,$_POST['sig_name'], 0, 0, 'L', true );
	$pdf->Ln( 5 );
	$pdf->Cell( 160,5, '', 0, 0, 'C', true );
	$pdf->Cell( 30,5,$_POST['sig_designation'], 0, 0, 'L', true );
	
	$pdf->Output('invoice.pdf', 'I');	 
	   
		
	




?>