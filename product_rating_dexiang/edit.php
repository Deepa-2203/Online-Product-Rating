<?php 
$mID=$_GET["mID"];
?>

<?php
$con = mysqli_connect("localhost","root","Deepa@1223");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db( $con,"productrate");
$result = mysqli_query("SELECT * FROM `products` WHERE `productID` = $mID");
echo '<form  method = "POST" action="update.php?id='.$mID.'" >';
while($row = mysqli_fetch_array($result))
 {
    
       echo 'product name:<input type ="text" name = "productname" value="'.$row['productName'].'"/><br>';
       echo 'year:<input type ="text" name = "price" value="'.$row['price'].'"/><br>';
       echo 'origin:<input type ="text" name = "origin" value="'.$row['origin'].'"/><br>';
       echo 'company:<select name="company">
		  <option value ="Dell">Dell</option>		  
		  <option value ="Apple">Apple</option>
		  <option value ="Sony">Sony</option>
		  <option value ="Nike">Nike</option>
		  <option value ="Adidas">Adidas</option>
		  <option value ="Microsoft">Microsoft</option>
		</select><br>
		category:<select name="category">
		  <option value ="electronics">electronics</option>
		  <option value ="computers">computers</option>
		  <option value ="videogames">videogames</option>
		  <option value ="software">software</option>
		  <option value ="clothes">clothes</option>
		</select><br>';
 }
 echo '<button type="submit" >update</button>
		</form>';

mysqli_close($con)
?>