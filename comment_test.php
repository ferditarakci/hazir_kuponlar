<?php

$op = $_POST['op'];

$json['message'] = '';
$json['comment'] = '';
$json['status']  = true;
$json['errors'] = false;

if ($op == 'load') {
	$json['comment_id'] = 1;
	$json['parent_id'] = 0;
	$json['comment'] = 'Load Edit Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
}

else if ($op == 'add') {
	$json['type'] = $_POST['op'];
	$json['comment_id'] = time();
	$json['parent_id'] = 0;
	$json['comment'] = $_POST['comment'];
	$json['message'] = 'Yorumunuz eklenmiştir.';
}

else if ($op == 'edit') {
	$json['type'] = $_POST['op'];
	$json['comment_id'] = $_POST['comment_id'];
	$json['parent_id'] = $_POST['parent_id'];
	$json['comment'] = $_POST['comment'];
	$json['message'] = 'Yorumunuz düzenlenmiştir.';
}

else if ($op == 'reply') {
	$json['type'] = $_POST['op'];
	$json['comment_id'] = 22;
	$json['parent_id'] = 2;
	$json['user_image'] = 'assets/images/comment_user.png';
	$json['user_name'] = 'Ferdi';
	$json['total_like'] = 0;
	$json['total_reply'] = 0;
	$json['comment'] = $_POST['comment'];
	$json['message'] = 'Yoruma cevap verdiniz.';
}

else if ($op == 'like') {
	$json['comment_id'] = 1234;
	$json['total_like'] = 26;
}

else if ($op == 'unlike') {
	$json['comment_id'] = 1234;
	$json['total_like'] = 25;
}

else if ($op == 'delete') {
	$json['comment_id'] = 1234;
	$json['parent_id'] = 1234;
}

echo json_encode($json);