<?php include_once 'helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<link rel="stylesheet" href="assets/css/login.css">
<style>
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
   font-family :'product sans' !important;
	font-size:48px !important;
	margin-top:20px;
	text-align:center;
}
body {
  background: #bdc3c7;  
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  
  background: linear-gradient(to right, #2c3e50, #bdc3c7);

}
.login-form {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    border-radius: 0px;
}
</style>
<div class="flex-container">
    <div class="login-form mt-5" style="height: 350px;">
        <h1 class="text-center text-secondary mb-4">Restablecer contraseña</h1>
        <div class="alert text-center alert-info mb-0" 
            style="margin-left: 60px; margin-right:60px;" role="alert">   
            Ingrese un correo electrónico para enviar las intrucciones para restablecer su contraseña.
        </div>
        <form method="POST" action="includes/reset-request.inc.php">            
            <div class="flex-container">             
                <div>
                    <i class="fa fa-envelope text-primary"></i>
                </div>
                <div>
                    <input type="text" name="user_email" 
                        placeholder="Enter your registered email-id" class="form-input" required>
                </div>
            </div>
            <div class="submit">
            <button name="reset-req-submit" type="submit" class="button">
                Submit</button>                    
            </div>
        </form>                          
    </div>
</div>
<?php
if(isset($_GET['err']) || isset($_GET['mail'])) {
    if($_GET['err'] === 'invalidemail') {
        echo '<script>alert("Correo electrónico inválido");</script>';
    } else if($_GET['err'] === 'sqlerr') {
        echo '<script>alert("Se produjo un error");</script>';        
    } else if($_GET['mail'] === 'success') {
        echo '<script>alert("El correo electrónico ha sido enviado satisfactoriamente");</script>';        
    } else if($_GET['err'] === 'mailerr') {
        echo '<script>alert("Ocurrió un error");</script>';        
    }                    
} 
?>
<?php subview('footer.php'); ?> 

