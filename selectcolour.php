<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_POST["selsize"] ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>
        <input type ="hidden" name="selsize" value="<?php echo $_POST["selsize"]?>?"/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
