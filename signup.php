<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>

<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("entrer un id valide");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("entrer un mot de passe valide");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("confirmer le mot de passe");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("attention! ils ne sont pas semblable");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("entrer un nom ");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("entrer une adresse");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("entrer une ville");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("entrer un numéro");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>

<!--
<link href="quiz.css" rel="stylesheet" type="text/css"> 
-->

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Course Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- //web-fonts --> 



</head>


<body>


  <!-- banner --> 
<div class="video"> 
  <div class="center-container">
      <div class="w3ls-agileinfo">
      <h1> formulaire d'inscription pour passer l'examen </h1> 
    </div>
     <div class="bg-agile">
      <h2>nouveau etudiant </h2>
      <div class="login-form">  
        <form name="form1" action="signupuser.php" method="post" onSubmit="return check();">
          <input type="text"  name="lid" placeholder="LOGIN ID" required="" />
          <input type="text"  name="pass" placeholder="mot de passe" required="" />
          <input type="text"  name="password" placeholder="Confirm Password" required="" id="cpass" />
          <input type="text"  name="name" placeholder="nom" required="" id="name"/>
          <input type="email"  name="adress" placeholder="Addresse" required="" id="adress"/>
          <input type="text"  name="city" placeholder="ville" required="" id="city"/>
          <input type="text"  name="phone" placeholder="téléphone " required="" id="phone"/>
          <input type="text"  name="email" placeholder="E-mail" required="" id="email"/>

          
          <input type="submit" value="Submit" name="Submit" >
        </form> 
      </div>  
    </div>
  <!-- //banner --> 
  
  </div>  
</div>  


<!--
<body class="bg-success">
<?php
//include("header.php");
?>
 <table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>
     <h1 class="text-center bg-primary">REGISTRACTION PAGE</h1>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <center>
		<img class="img-circle" src="2.jpg"  width="240px" height="190px" border="1" />
		</center>	<br>
			<table class=" table table-striped">
		
         <tr>
           <td class="style7">LOGIN ID</div></td>
           <td><input class="form-control"type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input class="form-control"type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7" >Confirm Password </td>
           <td><input class="form-control" name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input class="form-control" name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea class="form-control" name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input class="form-control" name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input class="form-control" name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input class="form-control" name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input class="btn btn-danger" type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>

 -->
</form>
</body>
</html>
