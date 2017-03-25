<?php 
/* Anti Spam Maßnamen:
		1. Es wird das Datum beim Aufruf von Kontakt.php mit dem Datum beim Aufruf von Bestaetigung.php verglichen
		   Die Eingabezeit muss mindestens 10 sekunden betragen!
		2. Es wird ein mit CSS Ausgeblendetes Feld versendet, welches leer sein/bleiben muss!
*/ 
?>

<script type='text/javascript'>
	function chkFormular () {
		if (document.Formular.vorname.value == '') {
			alert('Bitte geben Sie Ihren Vornamen ein!');
			document.Formular.vorname.focus();
			return false;
		}
		if (document.Formular.zuname.value == '') {
			alert('Bitte geben Sie Ihren Zunamen ein!');
			document.Formular.zuname.focus();
			return false;
		}
		if (document.Formular.email.value == '' && document.Formular.telefon.value == '') {
			alert('Bitte geben Sie Ihre E-Mail-Adresse oder Ihre Telefonnummer ein!');
			document.Formular.email.focus();
			return false;
		}
	}
</script>
 <style>
	.antispamfield{	visibility: hidden;}
</style>




<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header">Kontakt</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Content Row -->
	<div class="row">
		<!-- Picture -->
		<div class="col-md-8">
			<img class="img-responsive img-portfolio" src="content/images/company.png" alt="">
		</div>
		<!-- Contact Details Column -->
		<div class="col-md-4">
			<h3>So erreichen Sie uns</h3>
			<p>
				Trommler & Pfeifercorps Kückhoven<br>
				<br>
				41812 Erkelenz<br>
			</p>
			<p>
                            <abbr title="Telefon"><i class="fa fa-phone"></i></abbr>
                            0000-0000000 / 0000-0000000</p>
                        <p>
                            <abbr title="Email"><i class="fa fa-envelope-o"></i></abbr>
                            <a href="mailto:tpc-kueckhoven@web.de?subject=Kontakt">tpc-kueckhoven@web.de</a>
			</p>
			<ul class="list-unstyled list-inline list-social-icons">
				<li>
					<a href="https://www.facebook.com/tpc.kueckhoven" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-md-8">
			<h3>Senden Sie uns eine Nachticht</h3>
			<form name="sentMessage" id="contactForm" novalidate>
				<div class="control-group form-group">
					<div class="controls">
						<label>Name:</label>
						<input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Telefonnummer:</label>
						<input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Email Adresse:</label>
						<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Ihre Nachricht an uns:</label>
						<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
					</div>
				</div>
				<div id="success"></div>
				<!-- For success/fail messages -->
				<button type="submit" class="btn btn-primary">Nachricht abschicken</button>
			</form>
		</div>

	</div>
	<!-- /.row -->

</div>

<script type="text/javascript">
document.Formular.javascript.value = document.Formular.timestamp.value;
</script>
