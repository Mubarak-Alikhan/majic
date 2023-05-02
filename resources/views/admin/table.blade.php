@dump($categories)
   
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="" value="{{ $categories[1]}}"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname"  name="" value="{{ $categories[2]}}" ><br><br>
  <input type="submit" value="Submit">
</form> 
