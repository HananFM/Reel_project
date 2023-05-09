<?php
    $kulancı=$_POST['ad'];
    $şifre=$_POST['şifre'];
    if(($kulancı=="b211210581@sakarya.edu.tr") && ($şifre=="b211210581"))
    {
  
        echo " <script>location.replace('HTMLPage1.html')  
        alert('hoş geldiniz b211210581')   </script>";
      
    }
    elseif ($kulancı=="b211210581@sakarya.edu.tr")
    { 
        echo " <script>location.replace('logIn.html')
        alert('mail adrersi bulunmaktadır yalnız şiferinizi yanlıştır')  </script>";
        
    }
    else 
    { 
        echo " <script>location.replace('logIn.html')
        alert('mail adresi bulunmamaktadır')  </script>";
        
    }
?>