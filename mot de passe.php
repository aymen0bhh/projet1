<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans nom</title>
<link href="f.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
			<script>
      function ValidateEmail(inputText)
   {
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
alert("email validé!");
document.form1.text1.focus();
return true;
}
else
{
alert("vous avez entrez une valeur erroné de mail!");
document.form1.text1.focus();
return false;
}
}
    </script>
<body onLoad='document.form1.text1.focus()' >
<form  style="background-color: #fff9f0;" action="forgetpassword.php" method="post">
  <div class="container py-5 h-100">
    <div style="padding-left: 100px;padding-right: 100px;" >
      <div >
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5">
              <img src="carousell/C.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;height:650px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form  id="inscription" method="post">

                  <div >
                    <p style="color: #ff6219;"></p>
                    <span class="h3 fw-bold mb-0" style="font-size:25px" >Demande d'un nouveau mot de passe </span>
                  </div>

                  <h5 class="mb-3 pb-3" style="letter-spacing: 1px;font-size:15px" >Recupérez votre mot de passe</h5>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Email requis</label>
                    <input name="email" type="text"   class="form-control form-control-lg" required/>
                  </div>
                  <div class="pt-1 mb-4">
                   <button onClick="ValidateEmail(document.form1.text1)" style="margin-left:140px;background-color: black;border-radius: 10px;width:200px;height: 50px;font-family: 'Aleo';font-size: 25px;color: whitesmoke"> envoyer</button>
					</div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>
