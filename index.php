<?php
foreach(glob('upload/*.*') as $v){
    unlink($v);
}
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="fonts/stylesheet.css">
<link rel="stylesheet" href="js/jquery-ui.css">
<link rel="stylesheet" href="css/page-theme.css">
<title>GST INVOICE CREATOR</title>
</head>

<body>

<header class="header">


<div class="navbar navbar-default" role="navigation">
 <div class="container">
   <div class="navbar-header">
        <h1><a href="index.html" class="navbar-brand">GST Invoice Creator</a></h1>
	 </div>
	 </div>
  </div>	
	
</header>
 
<div class="container-fluid">
    <div class="row container-background">
        <section class="container">
        	<div class="row">
            <div class="container-fluid"> 
                <div class="row">
                    <br><br>
                </div>

<form action="create_pdf.php" method="post" enctype="multipart/form-data">


 <div class="row">
	<div class="container-fluid">
		<div class="row">
                        
        <!--<div class="col-md-12"><h3 class="sett4 sett4_2"><strong>Invoice Creator</strong></h3></div>-->

		</div>
	</div>
</div>
    
<div class="row">
    
    
 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 fright"> 
 
  <div class="row">
	<div class="container-fluid">
		<div class="row">

         <div class="col-md-12">
	<div id="for_search">
		<div class="searchbg">
<h4>General Setting</h4>

<div class="" style="margin-top:15px;"> 
	<div class="row">
    
    <div class="col-md-12">
    
    	<div class="col-md-12">
        	<div class="form-group padmarzero">
            <label class="fl">Tax Type</label>
            	<select class="form-control roundcorner" name="tax_type" id="tax_type" style="width: 100%;">
                <option value="1">Fixed OR Flat</option>
                <option value="2">Percentage</option>
                </select>
			</div>
		</div>
        
        <div class="col-md-12">
        	<div class="form-group padmarzero">
            <label class="fl">Tax Amount</label>
            	<input type="text" name="tax_amount" class="form-control roundcorner" style="width: 100%;" id="tax_amount" required>
			</div>
		</div>
        
      </div>
        
      <div class="col-md-12">  
        <div class="col-md-12">
        	<div class="form-group padmarzero">
            <label class="fl">Discount Type</label>
            	<select class="form-control roundcorner" name="discount_type" id="discount_type" style="width: 100%;">
                <option value="1">Fixed OR Flat</option>
                <option value="2">Percentage</option>
                </select>
			</div>
		</div>
        
        <div class="col-md-12">
        	<div class="form-group padmarzero">
            <label class="fl">Discount Amount</label>
            	<input type="text" name="discount_amount" id="discount_amount" class="form-control roundcorner" required>
			</div>
		</div>
       </div> 
        
        <div class="col-md-12">
        
        <div class="col-md-12">
        	<div class="form-group padmarzero" >
            <label class="fl">Currency</label>
            	<select class="form-control roundcorner" name="currency" id="currency" style="width: 100%;">
                <option value="Lek">Albania Lek(Lek)</option>
                <option value="AFN">Afghanistan Afghani(AFN)</option>
                <option value="$">Argentina Peso($)</option>
                <option value="ƒ">Aruba Guilder(ƒ)</option>
                <option value="$">Australia Dollar ($)</option>
                <option value="AZN">Azerbaijan Manat(AZN)</option>
                <option value="$">Bahamas Dollar($)</option>
                <option value="$">Barbados Dollar($)</option>
                <option value="Br">Belarus Ruble(Br)</option>
                <option value="BZ$">Belize Dollar(BZ$)</option>
                <option value="$">Bermuda Dollar($)</option>
                <option value="$b">Bolivia Boliviano($b)</option>
                <option value="KM">Bosnia and Herzegovina Convertible Marka(KM)</option>
                <option value="P">Botswana Pula(P)</option>
                <option value="BGN">Bulgaria Lev(BGN)</option>
                <option value="R$">Brazil Real(R$)</option>
                <option value="$">Brunei Darussalam Dollar($)</option>
                <option value="KHR">Cambodia Riel(KHR)</option>
                <option value="$">Canada Dollar($)</option>
                <option value="$">Cayman Islands Dollar($)</option>
                <option value="$">Chile Peso($)</option>
                <option value="¥">China Yuan Renminbi(¥)</option>             
                <option value="$">Colombia Peso($)</option>
                <option value="CRC">Costa Rica Colon(CRC)</option>
                <option value="kn">Croatia Kuna(kn)</option>
                <option value="CUP">Cuba Peso(CUP)</option>
                <option value="CZK">Czech Republic Koruna(CZK)</option>                
                <option value="kr">Denmark Krone(kr)</option> 
                <option value="RD$">Dominican Republic Peso(RD$)</option>               
                <option value="$">East Caribbean Dollar($)</option>
                <option value="£">Egypt Pound(£)</option>
                <option value="$">El Salvador Colon($)</option>
                <option value="€">Euro Member Countries(€)</option>           
                <option value="£">Falkland Islands (Malvinas) Pound(£)</option>
                <option value="$">Fiji Dollar($)</option>
                <option value="¢">Ghana Cedi(¢)</option>
                <option value="£">Gibraltar Pound(£)</option>
                <option value="Q">Guatemala Quetzal(Q)</option>              
                <option value="£">Guernsey Pound(£)</option> 
                <option value="$">Guyana Dollar($)</option>               
                <option value="L">Honduras Lempira(L)</option>
                <option value="$">Hong Kong Dollar($)</option>
                <option value="Ft">Hungary Forint(Ft)</option>
                <option value="kr">Iceland Krona(kr)</option>          
                <option value="Rs">India Rupee(Rs)</option>
                <option value="Rp">Indonesia Rupiah(Rp)</option>
                <option value="IRR">Iran Rial(IRR)</option>
                <option value="£">Isle of Man Pound(£)</option>
                <option value="ILS">Israel Shekel(ILS)</option>             
                <option value="J$">Jamaica Dollar(J$)</option> 
                <option value="¥">Japan Yen(¥)</option>             
                <option value="£">Jersey Pound(£)</option>
                <option value="KZT">Kazakhstan Tenge(KZT)</option>
                <option value="KPW">Korea (North) Won(KPW)</option>          
                <option value="KRW">Korea (South) Won(KRW)</option>
                <option value="KGS">Kyrgyzstan Som(KGS)</option>
                <option value="LAK">Laos Kip(LAK)</option>
                <option value="£">Lebanon Pound(£)</option>
                <option value="$">Liberia Dollar($)</option>             
                <option value="MKD">Macedonia Denar(MKD)</option> 
                <option value="RM">Malaysia Ringgit(RM)</option>            
                <option value="MUR">Mauritius Rupee(MUR)</option>
                <option value="$">Mexico Peso($)</option>          
                <option value="MNT">Mongolia Tughrik(MNT)</option>
                <option value="MT">Mozambique Metical(MT)</option>
                <option value="$">Namibia Dollar($)</option>
                <option value="NPR">Nepal Rupee(NPR)</option>
                <option value="ƒ">Netherlands Antilles Guilder(ƒ)</option>            
                <option value="$">New Zealand Dollar($)</option> 
                <option value="C$">Nicaragua Cordoba(C$)</option>      
                <option value="NGN">Nigeria Naira(NGN)</option>
                <option value="kr">Norway Krone(kr)</option> 
                <option value="OMR">Oman Rial(OMR)</option>            
                <option value="PKR">Pakistan Rupee(PKR)</option>
                <option value="PAB">Panama Balboa(PAB)</option>         
                <option value="Gs">Paraguay Guarani(Gs)</option>
                <option value="S/.">Peru Sol(S/.)</option>
                <option value="PHP">Philippines Peso(PHP)</option>
                <option value="PLN">Poland Zloty(PLN)</option>
                <option value="QAR">Qatar Riyal(QAR)</option>            
                <option value="lei">Romania New Leu(lei)</option> 
                <option value="RUB">Russia Ruble(RUB)</option>      
                <option value="£">Saint Helena Pound(£)</option>
                <option value="SAR">Saudi Arabia Riyal(SAR)</option> 
                <option value="RSD">Serbia Dinar(RSD)</option>            
                <option value="SCR">Seychelles Rupee(SCR)</option>
                <option value="SGD">Singapore Dollar(SGD)</option>         
                <option value="$">Solomon Islands Dollar($)</option>
                <option value="S">Somalia Shilling(S)</option>
                <option value="R">South Africa Rand(R)</option>
                <option value="PLN">Sri Lanka Rupee(LKR)</option>
                <option value="kr">Sweden Krona(kr)</option>            
                <option value="lei">Switzerland Franc(lei)</option> 
                <option value="$">Suriname Dollar($)</option>      
                <option value="£">Syria Pound(£)</option>
                <option value="NT$">Taiwan New Dollar(NT$)</option> 
                <option value="THB">Thailand Baht(THB)</option>            
                <option value="TT$">Trinidad and Tobago Dollar(TT$)</option>
                <option value="TRY">Turkey Lira(TRY)</option>         
                <option value="$">Tuvalu Dollar($)</option>
                <option value="UAH">Ukraine Hryvnia(UAH)</option>
                <option value="£">United Kingdom Pound(£)</option>
                <option value="$" selected>United States Dollar($)</option>
                <option value="$U">Uruguay Peso($U)</option>           
                <option value="UZS">Uzbekistan Som(UZS)</option> 
                <option value="Bs">Venezuela Bolivar(Bs)</option>      
                <option value="VND">Viet Nam Dong(VND)</option>
                <option value="YER">Yemen Rial(YER)</option> 
                <option value="Bs">Zimbabwe Dollar(Bs)</option>      
                <option value="Z$">Viet Nam Dong(Z$)</option>
                </select>
			</div>
		</div>
        
        
        <div class="col-md-12">
        	<div class="form-group padmarzero">
            <label class="fl">Color</label>
            <input class="form-control roundcorner" style="width: 100%;" type="color" name="invoice_color" value="#D7DBDD">
			</div>
            
            <p style="margin-top:15px; color:#FF0000" align="left" >Please enter 0 (zero) in Tax and Discount Amount If you doesn't wants to apply Tax and Discount</p>
            
		</div>
    
         
       </div>    
        
	</div>
</div>


<div class="clearfix"></div>
		</div> 
	</div>
</div>

		</div>
	</div>
</div>
    
 </div>  
   
    
 <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fleft">   

  <div class="row">
	<div class="container-fluid">
		<div class="row">
                        
<!--<div class="col-md-12"><h3 class="sett4 sett4_2"></h3></div>-->

<div class="col-md-12">
	<div id="for_search">
		<div class="searchbg">


<div class="container-fluid">
   
	<div class="row">
      
       <div class="col-md-12 mb15">
         <h4>Header</h4>
        
        </div> 
        
    	<div class="col-md-4">
        	<div class="form-group padmarzero rlt">
            <!--<label class="fl">Logo</label>-->
                <img id="uploadlogo" src="images/logo-img.png" width="183" alt="your image" />
            	<input type="file" name="logo" class="form-control roundcorner" id="logo" onchange="readURL(this);">
			</div>
		</div>
        
        
         <div class="col-md-8 hd_box">
            <div class="form-group padmarzero">
            <label class="fl">Your Name/Business Name <font color="#FF0000">*</font></label>
            	<input type="text" name="bf_name" id="bf_name" class="form-control roundcorner" style="width: 100%;" required>
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Address Line 1</label>
            	<input type="text" name="bf_address1" class="form-control roundcorner" style="width: 100%;" id="bf_address1">
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Address Line 2</label>
            	<input type="text" name="bf_address2" class="form-control roundcorner" style="width: 100%;" id="bf_address2">
			</div>
            <div class="form-group padmarzero part2">
            <label class="fl">Phone No</label>
            	<input type="text" name="bf_phone" class="form-control roundcorner" style="width: 100%;" id="bf_phone">
			</div> 
            <div class="form-group padmarzero part2">
            <label class="fl">Email</label>
            	<input type="text" name="bf_email" class="form-control roundcorner" style="width: 100%;" id="bf_email">
			</div>
		</div>
        
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="border1"></div>
        </div>        

	</div>
</div>

<div class="clearfix"></div>

</div> 
</div>
</div>

<div class="col-md-12">
	<div class="searchbg">
		<div class="container-fluid" style="margin-top:15px;">
			<div class="row">
    	<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
        <h4 class="pl0">
            <input type="text" name="bt_type" value="Bill To" class="no-border">
        </h4>
        	<div class="form-group padmarzero"> 
            <label class="fl">Name/Bussiness Name <font color="#FF0000">*</font></label>
            	<input type="text" name="bt_name" id="bt_name" class="form-control roundcorner" style="width: 100%;" required >
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Address Line 1</label>
            	<input type="text" name="bt_address1" class="form-control roundcorner" style="width: 100%;" id="bt_address1">
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Address Line 2</label>
            	<input type="text" name="bt_address2" class="form-control roundcorner" style="width: 100%;" id="bt_address2">
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Phone</label>
            	<input type="text" name="bt_phone" class="form-control roundcorner" style="width: 100%;" id="bt_phone">
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Email</label>
            	<input type="text" name="bt_email" class="form-control roundcorner" style="width: 100%;" id="bt_email">
			</div>
		</div>
        
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        
         <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
         <h4 class="pl0">Invoice/Quote/Order/Receipt</h4>
         <div class="form-group padmarzero">
            <label class="fl">No <font color="#FF0000">*</font></label>
            	<input type="text" name="invoice_no" class="form-control roundcorner" style="width: 100%;" id="invoice_no" value="Invoice" required>
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Billing Date</label>
            	<input type="text" name="billing_date" id="datepicker" class="form-control roundcorner" style="width: 100%;" >
			</div>
            <div class="form-group padmarzero">
            <label class="fl">Due Date</label>
            	<input type="text" name="due_date" id="datepicker2" class="form-control roundcorner" style="width: 100%;" >
			</div>
        
		</div>
         
                
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="border1"></div>
        </div>          
        
			</div>
		</div>
	<div class="clearfix"></div>
	</div> 
</div>



<div class="col-md-12">
<div id="for_search">
<div class="searchbg">


<div class="container-fluid">
	<div class="row">
 
       <div class="col-md-12 mb15">
           <h4><input type="text" name="detailstype" value="Product Details" class="no-border"></h4>
        </div>
<div class="col-md-1">
	<div class="form-group padmarzero">
    	<label class="fl">1</label>
    </div>
</div>

<div class="col-md-6">
	<div class="form-group padmarzero">
    	<input type="text" name="product_name[]" class="form-control roundcorner" style="width: 100%;" placeholder="Name" required>
	</div>
    
      <label class="fl"></label>
    
    <div class="form-group padmarzero">
        <textarea class="form-control roundcorner" placeholder="Description" rows="1" name="product_desc[]"></textarea>
    </div>
    
</div>

<div class="col-md-3">
	<div class="form-group padmarzero">
        <select class="form-control roundcorner" name="product_quqntity[]" style="width: 100%;">
        <?php for($i=1;$i<=20;$i++) 
		echo '<option value="'.$i.'">Quantity '.$i.'</option>';
        ?>
        </select>
    </div>
</div>

<div class="col-md-2">
	<div class="form-group padmarzero">
    	<input type="text" name="product_rate[]" class="form-control roundcorner" style="width: 100%;" placeholder="Rate" required>
    </div>
</div>       

	</div>
</div>

<div class="container-fluid">
	<div class="row">
 <div class="col-md-12">
 <div class="bdb"></div>       
</div>       
        
 <div class="input_fields_wrap"></div>       
        
<div class="col-md-1">
<a class="add_field_button"><strong><img src="images/add.png" style="height:23px; width:23px"></strong></a></div>
<div class="col-md-11"></div>
 

        
	</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="border1"></div>
</div>     
    
<div class="clearfix"></div>

</div> 
</div>
</div>

<!--Extra Note Section-->

<div class="col-md-12">
<div id="for_search">
<div class="searchbg">


<div class="container-fluid">
	<div class="row">
 
<div class="col-md-12 mb15">
    <h4>Extra Note</h4>
</div>
<div class="col-md-12">
<div class="form-group padmarzero">
<label class="fl">Tittle</label>
<input type="text" name="extra_note_tittle" class="form-control roundcorner" style="width: 100%;">
</div>
</div>

<div class="col-md-12">
<div class="form-group padmarzero">
<label class="fl">Note</label>
<textarea class="form-control roundcorner" placeholder="Write Here Some text like Term & Condition ...." rows="4" name="extra_note"></textarea>
</div>
</div>

                 
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="border1"></div>
        </div>         
        
</div>
</div>
<div class="clearfix"></div>

</div> 
</div>
</div>


<div class="col-md-12">
<div id="for_search">
<div class="searchbg">


<div class="container-fluid">
	<div class="row">
 
<div class="col-md-12 mb15">
 <h4>Footer</h4>       
</div>
<div class="col-md-4"></div>

<div class="col-md-4">
<div class="form-group padmarzero">
<label class="fl">Name</label>
<input type="text" name="sig_name" class="form-control roundcorner" style="width: 100%;" placeholder="">
</div>
</div>

<div class="col-md-4">
<div class="form-group padmarzero">
<label class="fl">Designation</label>
<input type="text" name="sig_designation" class="form-control roundcorner" style="width: 100%;" placeholder="">
</div>
</div>

	</div> 
</div>

<div class="clearfix"></div>

<div class="container-fluid" style="margin-top:15px;">
	<div class="row">
<input type="hidden" name="createpdf" value="1"> 
<div class="col-md-12"><input type="submit" class="form-control searchbtn" value="Generate Invoice" name="submit" id="submit"></div>
	</div>
</div>

</div> 
</div>
</div>
		</div>
	</div>
</div>
     
 </div> 
    
    
</div>

<div class="row">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
             <br>&copy; <?php echo date('Y');?> All rights are reserved.<br><br>      	
			</div>
            
            <div class="col-md-3">
             <br>Developed by HireWebXperts<br><br>      	
			</div>
            
		</div>
	</div>
</div>

                              
    </form>            
            </div>
            </div>
        </section>
       
        
	</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <script>
$(function() {
	$("#datepicker").datepicker({
		showOn: "button",
		dateFormat: 'dd/mm/yy',
		buttonImageOnly: true,
		buttonText: ""
	});
	$("#datepicker").on('click',function(){
		$(this).next().trigger('click');
	});
	
	$("#datepicker2").datepicker({
		showOn: "button",
		dateFormat: 'dd/mm/yy',
		buttonImageOnly: true,
		buttonText: ""
	});
	$("#datepicker2").on('click',function(){
		$(this).next().trigger('click');
	}); 
	
});

$(document).ready(function() {
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 2; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x <= max_fields){ //max input box allowed
        
            $(wrapper).append('<div class="container-fluid" style="margin-top:15px;"><div class="row"><div class="col-md-1"><div class="form-group padmarzero"><label class="fl">'+x+++'</label></div></div><div class="col-md-6"><div class="form-group padmarzero"><input type="text" name="product_name[]" class="form-control roundcorner" style="width: 100%;" placeholder="Product name" required ></div><label class="fl"></label><div class="form-group padmarzero"><textarea class="form-control roundcorner" placeholder="Description" rows="1" name="product_desc[]"></textarea></div></div><div class="col-md-3"><div class="form-group padmarzero"><select class="form-control roundcorner" name="product_quqntity[]" style="width: 100%;"><?php for($i=1;$i<=20;$i++)echo '<option value="'.$i.'">Quantity '.$i.'</option>';?></select></div></div><div class="col-md-2"><div class="form-group padmarzero"><input type="text" name="product_rate[]" class="form-control roundcorner" style="width: 100%;" placeholder="Rate" required></div></div><div class="col-md-1"></div></div><a href="#" class="remove_field"><strong><img src="images/delete.png" style="height:24px; width:24px"></strong></a><div class=""><div class="bdb"></div></div></div>'); //add input box

                 
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

</script>
<script src="js/bootstrap.js"></script>
<script language="javascript">
$(document).ready(function()
{ 
       $(document).bind("contextmenu",function(e){
              return false;
       }); 
})
</script>	

<script type="text/javascript">
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#uploadlogo')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }    
</script>
		
</body>
</html>
