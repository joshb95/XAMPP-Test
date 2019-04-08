<html>
  <head><title>Select size page</title></head>
    <body>
      <form action="selectcolour.php"  method="post">
	Select the size for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selsize">
   	  <option>small</option>
	  <option>medium</option>
	  <option>large</option>
	  <option>extralarge</option>
        </select>
        <br/><br/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
