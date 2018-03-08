<!DOCTYPE html>
<html>
 <head>
     <style>
         header, main, section, footer{
             padding: 50px;
         }
         header, footer{
             
             background: blue;
         }
         footer{
             clear: both;
         }
         main{
             background: yellow;
         }
         section{
             background: green;
             margin: 1px;
             width: 40%;
             float: left;
         }
     </style>
     
 </head>
 <body>
     
     <table>
      <?php
          for($i=0; $i<20; $i++){
               echo "<tr>";
               echo "<td>";
               $num = rand(0, 100);
               echo $num;
               echo "</td>";
               echo "<td>";
               if(num%2==0)
               {
                echo = "even";
               }
               else {
                echo = "odd";
               }
               echo "</td>";
               echo "</tr>";
      ?>
      
     </table>
         
     <?php
          echo "sum: ";
          echo $sum;
          echo "</br>";
          $sum = $sum/9;
          
     </header>
     
     <main>
         
         
     </main>
     
     <section>
         
         
     </section>
     
     <footer>
         
         
         
     </footer>
     
 </body>
  
 </html>