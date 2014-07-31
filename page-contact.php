<?php
	/*
		Template Name: Contact Page
	*/

	$response = "";

	function michak_form_generate_response($type, $message)
	{
		global $response;

		if($type == "success") $response = "<div class=\"alert alert-success\">{$message}</div>";
		else $response = "<div class=\"alert alert-danger\">{$message}</div>";
	}

	$missing_content = "Proszę uzupełnić brakujące informacje.";
	$email_invalid = "Nieprawidłowy adres e-mail.";
	$message_unsent = "Wiadomość nie została wysłana. Spróbuj ponownie.";
	$message_sent = "Wiadomość została wysłana.";

	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$message = $_POST['message_text'];

	$to = get_option( 'admin_email' );
	$subject = "Ktoś wysłał do ciebie wiadomość z " . get_bloginfo( 'name' );
	$headers = 'From: ' . $email . "rn" . 'Reply-To: ' . $email . "rn";

	if (isset($_POST['submitted'])) {

		if(!is_email($email)) michak_form_generate_response("error", $email_invalid);
		else
		{
			if (empty($name) || empty($message))
			{
				michak_form_generate_response("error", $missing_content);
			}
			else
			{
				$sent = wp_mail($to, $subject, strip_tags($message), $headers);
				if ($sent) michak_form_generate_response("success", $message_sent);
				else michak_form_generate_response("error", $message_unsent);
			}
		}

	}
?>
<?php get_header(); ?>
	<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8">
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class('entry'); ?> id="post-<?php the_ID(); ?>">
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
				<div class="content"><?php the_content(''); ?></div>

				<div id="respond">
					<?php echo $response; ?>
					<form class="form-horizontal" role="form" action="<?php the_permalink(); ?>" method="post">
						<div style="overflow: hidden;">
							<div class="col-lg-6 col-sm-12 input-group">
								<span class="input-group-addon glyphicon glyphicon-user"></span>
								<input type="text" name="message_name" class="form-control" placeholder="Imię i nazwisko" value="<?php echo esc_attr($_POST['message_name']); ?>">
							</div>
							<div class="col-lg-6 col-sm-12 input-group">
								<span class="input-group-addon">@</span>
								<input type="text" name="message_email" class="form-control" placeholder="E-mail" value="<?php echo esc_attr($_POST['message_email']); ?>">
							</div>
						</div><br>
						<div class="col-lg-12 col-xs-12">
							<textarea type="text" name="message_text" class="form-control" rows="5"><?php echo esc_attr($_POST['message_text']); ?></textarea>
						</div><br>
						<input type="hidden" id="submitted" name="submitted" value="1">
						<button type="submit" class="btn btn-default">Wyślij</button>
					</form>
				</div>
			</article>
		<?php endwhile; ?>
		<?php else : ?>
			<h2 class="text-center">Brak stron do wyświetlenia</h2>
		<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</div>
<?php get_footer(); ?>