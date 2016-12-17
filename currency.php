
<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">

<head>
	<title>Currency Rates</title>

	<?php include("rate.php"); ?>
	

	<script type="text/javascript">

		function hesapla(deger) {
			
			//var para= parsefloat("deger.miktar.value");
			//var sonuc1;
			var usd_selling= "<?php echo $usd_selling; ?>";			//USD
			var euro_selling= "<?php echo $euro_selling; ?>";		//EUR
			var gbp_selling= "<?php echo $gbp_selling; ?>"; 		//GBP
			if(deger.ilk.value=="TRY" & deger.ikinci.value=="USD")
			{
				
				 deger.sonuc.value=deger.miktar.value / usd_selling;
				
			}
			else if(deger.ilk.value=="USD" & deger.ikinci.value=="TRY")
			{
 				
           	    deger.sonuc.value= deger.miktar.value * usd_selling;			//USD
			}
			else if(deger.ilk.value=="TRY" & deger.ikinci.value=="EUR")			//EUR
			{
 				
           	    deger.sonuc.value= deger.miktar.value / euro_selling;
			}
			else if(deger.ilk.value=="EUR" & deger.ikinci.value=="TRY")
			{
 				
           	    deger.sonuc.value= deger.miktar.value * euro_selling;
			}
			else if(deger.ilk.value=="EUR" & deger.ikinci.value=="USD")
			{
 				
           	    deger.sonuc.value= deger.miktar.value * (euro_selling/usd_selling); 
			}
			else if(deger.ilk.value=="USD" & deger.ikinci.value=="EUR")
			{
 				
           	    deger.sonuc.value= deger.miktar.value * (usd_selling/euro_selling);  //EUR
			}
			else if(deger.ilk.value=="TRY" & deger.ikinci.value=="GBP")				//GBP
			{
 				
           	     deger.sonuc.value=deger.miktar.value / gbp_selling;
			}
			else if(deger.ilk.value=="GBP" & deger.ikinci.value=="TRY")				
			{
 				
           	     deger.sonuc.value=deger.miktar.value * gbp_selling;
			}
			else if(deger.ilk.value=="GBP" & deger.ikinci.value=="USD")				
			{
 				
           	     deger.sonuc.value=deger.miktar.value * (gbp_selling/usd_selling);
			}
			else if(deger.ilk.value=="USD" & deger.ikinci.value=="GBP")				
			{
 				
           	     deger.sonuc.value=deger.miktar.value * (usd_selling/gbp_selling);
			}
			else if(deger.ilk.value=="GBP" & deger.ikinci.value=="EUR")				
			{
 				
           	     deger.sonuc.value=deger.miktar.value * (gbp_selling/euro_selling);
			}
			else if(deger.ilk.value=="EUR" & deger.ikinci.value=="GBP")				
			{
 				
           	     deger.sonuc.value=deger.miktar.value * (euro_selling/gbp_selling);			//GBP
			}
			else
			{
				deger.sonuc.value=1 * deger.miktar.value;
			}	
	//	deger.sonuc.value=deger.miktar.value;	// body...
		}
	</script>

</head>
<body>
<br>
<br>
<br>
<header style="text-align:center; font-size: 20px;">Currency Rate</header>
<fieldset style="
margin:0 auto; width:100px;">
<form >
	<label>Select currency:<br></label>
	<select id="ilk">
    <option>TRY</option>
    <option>USD</option>
    <option>EUR</option>
    <option>GBP</option>
      
</select>
<br>
<br>
	<label >Quantity:</label>
	<input type="text" name="miktar">
	<br><br>
	<label>Currency to be converted:</label>
	<br>
	<select id="ikinci">
    <option>TRY</option>
    <option>USD</option>
    <option>EUR</option>  
    <option>GBP</option>	
</select>
<br>
<br>
	<input type="button" onclick="hesapla(this.form)" value="Convert">
	<br>
	<br>Amount:<input type="text" name="sonuc">
	

	
</form>
</fieldset>

</body>
</html>
		