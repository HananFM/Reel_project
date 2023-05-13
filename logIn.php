<?php
    $kulanci=$_POST['ad'];
    $sifre=$_POST['şifre'];
    
    if(($kulanci=="b211210581@sakarya.edu.tr") && ($sifre=="b211210581"))
    {
  
        echo " <script>location.replace('HTMLPage1.html')  
        alert('hoş geldiniz b211210581')   </script>";
      
    }
    elseif ($kulanci=="b211210581@sakarya.edu.tr")
    { 
        echo " <script>location.replace('logIn.html')
        alert('mail adrersi bulunmaktadır yalnız şiferinizi yanlıştır')  </script>";
        
    }
    else 
    { 
        echo " <script>location.replace('logIn.html')
         alert('mail adresi bulunmamaktadırs')  </script>";
        
    }
?>