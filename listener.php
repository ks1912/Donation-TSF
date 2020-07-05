<?php
	use PHPMailer\PHPMailer\PHPMailer;
	require "PHPMailer/PHPMailer.php";
	require "PHPMailer/Exception.php";

	if (filter_input(INPUT_SERVER,'REQUEST_METHOD') != 'POST') {
		header('Location: index.php');
		exit();
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "cmd=_notify-validate&" . http_build_query($_POST));
	$response = curl_exec($ch);
	curl_close($ch);

	if ($response == "VERIFIED" && filter_input(INPUT_POST,'receiver_email') == "your-email@hotmail.com") {
		$cEmail = filter_input(INPUT_POST,'payer_email');
		$name = filter_input(INPUT_POST,'first_name') . " " . filter_input(INPUT_POST,'last_name');

		$price = filter_input(INPUT_POST,'mc_gross');
		$currency = filter_input(INPUT_POST,'mc_currency');
		$item = filter_input(INPUT_POST,'item_number');
		$paymentStatus = filter_input(INPUT_POST,'payment_status');

		if ($item == "wordpressPlugin" && $currency == "USD" && $paymentStatus == "Completed" && $price == 67) {
			$mail = new PHPMailer();

			$mail->setFrom("your-email@hotmail.com", "Sales");
			$mail->addAttachment("attachment/wordpress-plugin.zip", "WordPress Plugin");
			$mail->addAddress($cEmail, $name);
			$mail->isHTML(true);
			$mail->Subject = "Your Purchase Details";
			$mail->Body = "
				Hi, <br><br>
				Thank you for DONATION. In the attachment you will find my
				Amazing WordPress Plugin.<br><br>
				
				Kind regards,
				My Name
			";

			$mail->send();
		}
	}














?>
