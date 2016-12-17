 <?php

$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
    
$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
$usd_selling = $connect_web->Currency[0]->BanknoteSelling;
 
$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
$euro_selling = $connect_web->Currency[3]->BanknoteSelling;

$gbp_buying = $connect_web->Currency[4]->BanknoteBuying;
$gbp_selling = $connect_web->Currency[4]->BanknoteSelling; //British pound

$chf_buying = $connect_web->Currency[5]->BanknoteBuying;
$chf_selling = $connect_web->Currency[5]->BanknoteSelling; //Swiss frangi


$jpy_buying = $connect_web->Currency[11]->BanknoteBuying;
$jpy_selling = $connect_web->Currency[11]->BanknoteSelling; //Japon yeni






 
echo 'USD Buying: '.$usd_buying.'<br>USD Selling: '.$usd_selling.'<br>';
echo 'EUR Buying: '.$euro_buying.'<br>EUR Selling: '.$euro_selling.'<br>';		
echo 'GBP Buying: '.$gbp_buying.'<br>GBP Selling: '.$gbp_selling.'<br>';
echo 'CHF Buying: '.$chf_buying.'<br>CHF Selling: '.$chf_selling.'<br>';
echo 'JPY Buying: '.$jpy_buying.'<br>JPY Selling: '.$jpy_selling.'';


?>