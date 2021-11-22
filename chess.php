<!DOCTYPE html>
     <html> 
     <head> 
  <title>chess board</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
 
      <?php
      $sum=0;
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $sum=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=50px width=50px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>