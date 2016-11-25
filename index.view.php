<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8">
<title>Document</title>
</head>
<body>
	<header>
		
	</header>
	<ul>
			<?php foreach ($users as $user) :?>
 				<li>
 					<?= $user->user_FirstName; ?>
 					<?= $user->user_LastName; ?>
 					<?= $user->user_FirstName; ?>
 					<?= $user->user_Age; ?>
 					<?= $user->user_Email; ?>	
 				</li>
			<?php endforeach; ?>
	</ul>
</body>

</html>
