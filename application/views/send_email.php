<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container pt">
	<div class="col-md-12 text-center pt">
		<h2>Emails</h2>
		<h1 class="animated fadeIn">Send emails Practice</h1>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-4 emailForm form-group text-center">
		<!-- column to send emails -->
		<h4>Send Email</h4>
		<form class="form pt pb" action="http://localhost/email/send_email" method="post">
			<div class="col-md-12 divInputs form-group">
				<input type="text" name="sender_name" placeholder="Full Name" class="text-center form-control">
			</div>
			<div class="col-md-12 divInputs form-group">
				<input type="email" name="email_address" placeholder="Email Address" class="text-center form-control">
			</div>
			<div class="col-md-12 divInputs form-group">
				<input type="subject" name="subject" placeholder="Subject" value="PHP Email" class="text-center form-control">
			</div>
			<div class="col-md-12 divInputs form-group">
				<textarea name="message" rows="5" cols="80" class="text-center form-control"></textarea>
			</div>
			<?php // TODO: CREATE AN ATTACHMENT FIELD ?>

			<div class="col-md-12 diveINputs form-group">
				<input type="submit" name="submit" value="Send Email" class="btn btn-primary form-control">
			</div>
		</form>
		<div class="col-md-12 text-center">
			<?php if (isset($_SESSION['success'])): ?>
				<p class="alert alert-success"><?php echo $_SESSION['success'] ?></p>
			<?php endif; ?>
			<?php if (isset($_SESSION['error'])): ?>
				<p class="alert alert-danger"><?php echo $_SESSION['success'] ?></p>
			<?php endif; ?>
		</div>

	</div>
	<div class="col-md-8">
		<!-- column to display emails
		restrict by siigninig in to view the list of the emails -->
	</div>
</div>
