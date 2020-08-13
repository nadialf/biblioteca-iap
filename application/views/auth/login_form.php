<!-- Librerias -->
<?=$this->load->view('admin/headers/libraries');?>

</head>

<?php
	$login = array(
		'name'	=> 'login',
		'id'	=> 'login',
		'value' => set_value('login'),
		'maxlength'	=> 80,
		'size'	=> 30,
		'class' => 'form-control',
		'placeholder' => 'E-mail',
		'type' => 'email',
		'autofocus' => '',

	);
	if ($login_by_username AND $login_by_email) {
		$login_label = 'Email or login';
	} else if ($login_by_username) {
		$login_label = 'Login';
	} else {
		$login_label = 'Email';
	}
	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'size'	=> 30,
		'class' => 'form-control',
		'placeholder' => 'Contraseña',
		'type' => 'password',
	);
	$remember = array(
		'name'	=> 'remember',
		'id'	=> 'remember',
		'value'	=> 1,
		'checked'	=> set_value('remember'),
		'style' => 'margin:0;padding:0',
	);
	$captcha = array(
		'name'	=> 'captcha',
		'id'	=> 'captcha',
		'maxlength'	=> 8,
	);
	$attributes = array(
		'role' => 'form',
	);
?>
<body>

	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Acceso</h3>
                    </div>
                    <div class="panel-body">

						<?php echo form_open($this->uri->uri_string(), $attributes); ?>
						<fieldset>
								<div class="form-group">
									<?php echo form_input($login); ?>
									<p style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></p>
								</div>
								<div class="form-group">
									<?php echo form_password($password); ?>
									<p style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></p>
								</div>

								<?php if ($show_captcha) {
									if ($use_recaptcha) { ?>
							<table>
								<tr>
									<td colspan="2">
										<div id="recaptcha_image"></div>
									</td>
									<td>
										<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
										<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
										<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="recaptcha_only_if_image">Enter the words above</div>
										<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
									</td>
									<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
									<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
									<?php echo $recaptcha_html; ?>
								</tr>
								<?php } else { ?>
								<tr>
									<td colspan="3">
										<p>Enter the code exactly as it appears:</p>
										<?php echo $captcha_html; ?>
									</td>
								</tr>
								<tr>
									<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
									<td><?php echo form_input($captcha); ?></td>
									<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
								</tr>
								<?php }
								} ?>

								<tr>
									<td colspan="3">
										<?php echo form_checkbox($remember); ?>
										<?php echo form_label('Recordarme', $remember['id']); ?>
										<?php echo anchor('/auth/forgot_password/', 'Olvide mi contraseña'); ?>
										<br>
									</td>
								</tr>
							</table>
						<?php echo form_submit('submit', 'Ingresar', "class='btn btn-lg btn-success btn-block'"); ?>
						</fieldset>
						<?php echo form_close(); ?>

					</div> <!-- .panel-body -->
                </div> <!-- .login-panel -->
            </div> <!-- .col-md-4 -->
        </div> <!-- .row -->
    </div> <!-- .container -->

<?=$this->load->view('admin/footer');?>