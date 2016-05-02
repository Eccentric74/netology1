<?php
// Initialization
$first_name = 'Alexander';
$last_name = 'Chinenov';
$email = 'Eccentric74@yandex.ru';
$city = 'Chelyabinsk';
$birthdate = '18.04.1991';
$about = 'Меня зовут Александр и я программист. =)\n 
		В свое время поработал с многими CMS, немного пробовал себя во фрейморках (CI)\n
		В данный момент работаю в компании, тружусь на проектами под управлением Bitrix.\n
		Хочу улучшить навыки (упорядочить в том числе) \n
		Есть так же достаточно обильный опыт в верстке =)';

$age = DateTime::createFromFormat('d.m.Y', $birthdate)
     ->diff(new DateTime('now'))
     ->y;

?>

<h1>Страница пользователя <?=$first_name.' '.$last_name?></h1> 

<table>
<tbody>
	<tr>
		<td>Имя</td>
		<td><?=$first_name.' '.$last_name?></td>
	</tr>
	<tr>
		<td>Возраст</td>
		<td><?=$age?> Лет</td>
	</tr>
	<tr>
		<td>Город</td>
		<td><?=$city?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><a href="mailto:<?=$email?>"><?=$email?></a></td>
	</tr>
	<tr>
		<td>Кратко обо мне</td>
		<td><?=$about?></td>
	</tr>
</tbody>
</table>