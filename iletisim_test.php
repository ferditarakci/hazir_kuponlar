<?php

if (isset($_POST)) {

	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	$tel = $_POST["tel"];
	$eposta = $_POST["eposta"];
	$mesaj = $_POST["mesaj"];

	$status = true;

	if ($ad == '') {
		$status  = false;
		$errors['ad']  = 'Lütfen kullanıcı adınızı girin.';
	}

	if ($soyad == '') {
		$status  = false;
		$errors['soyad']  = 'Lütfen şifrenizi girin.';
	}

	if ($eposta == '') {
		$status  = false;
		$errors['eposta']  = 'Lütfen şifrenizi girin.';
	}

	if ($mesaj == '') {
		$status  = false;
		$errors['mesaj']  = 'Lütfen şifrenizi girin.';
	}

	if (!$status) {
		// DOLDURULMASI GEREKEN ALANLAR VAR...
		$json['status']  = $status;
		$json['errors'] = $errors;
		$json['message'] = 'Lütfen gerekli alanları doldurun.';
	}
	else {
		// BAŞARIYLA GİRİŞ YAPILDI...
		$json['status']  = $status;
		$json['message'] = 'Başarıyla giriş yaptınız.';
	}

	echo json_encode($json);

}

?>