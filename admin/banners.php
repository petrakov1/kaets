<!--Created by Petrakov-->
<!--Designed by VladShe -->
<!-- http://vladshe.ru/ -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UpgradeKids</title>
    <meta name = "format-detection" content = "telephone=no">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet">
	<link href="../css/fonts/stylesheet.css" rel="stylesheet">

    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/main.js"></script><script src="js/jquery.validate.js"></script>
       
        <script src="js/sly.min.js"></script>

<script type="text/javascript" src="css/slick/slick.min.js"></script>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39943105 = new Ya.Metrika({ id:39943105, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39943105" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- <script src="jquery.validate.js"></script>-->

</head>
<body> 
    
    <?php include "menu.php" ?>
    
   <div id="content">
       <div id="nav">
           
           <a href="addbanner.php">Добавить баннер</a>
           
           
       </div>
             <h1>Баннеры</h1>

<table>
       <thead>
           <td>Изображение</td>
           <td>Дата</td>
           <td>Ссылка</td>
           <td>Удалить</td>           
       </thead>
        <?php 
       include "../connect.php";
    
                
    
               
                      $sql = "SELECT * FROM `banners` ORDER BY `date` DESC";

                  
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
            // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                      
                     
                    echo '
                   <td> <img class="thumb" src="../images/banner/'.$row["name"].'" ></td><td>
                                            '.$row["date"].'</td><td>'.$row["link"].'</td>


                <td>
             

       <img onclick="drop('.$row["id"].')" class="icon" src="../css/images/empty.svg">
                      
                 </td>
                       
                  
              </tr>';
           }
        }
              
               
               
               
               
                $conn->close();
              ?>
      </table>

      <script>
            function drop(id) {
                var x;
                if (confirm("Баннер будет удален!") == true) {
                    window.location.href = "dropbanner.php?id=" + id;

                } else {

                }
            }

            function edit(id) {

                window.location.href = "editproduct.php?id=" + id;

            }
        </script>
    </body>
    
</html>