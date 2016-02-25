<?php 
$is_submitted = false; 
 
 
 
 
 
 
if(!empty($_POST)){ 
$is_submitted = true; 
$email_to="karlis.12.1.kv@gmail.com"; 
$email_from="blah@blah.com"; 
$email_subject= "Submission Form".$_POST['first-name']; 
$email_message.="Message Details:".PHP_EOL; 
$email_message.="Name:".$_POST['name'].PHP_EOL; 
$email_message.="Url:".$_POST['url'].PHP_EOL; 
$email_message.="email:".$_POST['email'].PHP_EOL; 
$email_message.="Gender:".$_POST['Gender'].PHP_EOL; 
$email_message.="State:".$_POST['State'].PHP_EOL; 
$email_message.="Message or Comment:".$_POST['textarea'].PHP_EOL; 
mail($email_to,$email_subject,$email_message); 
} 
?> 
 
 
 
 
 
 
 
 
<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Web Form</title> 
 
 
<link href="styless.css" rel="stylesheet" type="text/css"> 
<link href="validate.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript" src="jquery.min.js"></script> 
<script src="jquery.validate.js"></script> 
<script type="text/javascript"> 
 
 
</script>
 
 
</head> 
 
 
 
 
 
 
<body> 
 
 
 
 
 
 
<form  id= "form" name="myform"class="form" method="post" action="index.php" novalidate="novalidate"> 
 <h2 class="header"> CONTACT US </h2> 
 <div class="controls"> 
  <label for="name">Name:</label> 
  <input name="name" type="text" required class="controls" id="name" size="50px" minlentgh="2"> 
  </div> 
  
 <div class="controls"> 
   <label for="url">Website:</label> 
  <input name="url"  type="url" id="url" size="50px" required> 
   
  </div> 
   
  <div class="controls"> 
  <label for="email">Email:</label> 
  <input name="mail" type="email"   id="mail" size="50px" required> 
   
  </div> 
   
  <div class="controls"> 
    <label for="textarea">Describe your Ability:</label> 
    <textarea name="textarea" cols="48" rows="8" required id="textarea"></textarea> 
     
  </div> 
 
 
 
 
<div class="sex"> 
    <label for="Gender" class="radio inline"> 
        <input id="gender" type="radio" name="Gender" value="female"> 
        <span>Female</span> 
    </label> 
     
   <label for="Gender" class="radio inline"> 
        <input id="Gender" type="radio" name="Gender"  value="male"> 
        <span>Male</span> 
   </label> 
  </div> 
   
   
  <div class="state"> 
    <label for="state">State:</label> 
     
    <select id="state"> 
      <option>Utah</option> 
      <option>California</option> 
      <option>Wyoming</option> 
      <option>Colorado</option> 
       
       
    </select> 
     
</div> 
   
   
    
<p> 
<input class="submit"type="submit" value="submit"> 
 </p> 
</form> 
 
 
 
 
 
 
 
 
  <?php 
{; 
 
 
if($is_submitted ==true){ 
echo"<div>"; 
echo"<h4>Your form has been successfully submitted.</h4>"; 
echo"</div>"; 
} 
} 
?> 
 
 
 
 
 
 
<script> 
$("#form").validate(); 
  </script> 
</body> 
</html> 
 