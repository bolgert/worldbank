<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link rel="stylesheet" type="text/css"  href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css"  href="css/jquery-ui.min-slider.css"/>
	<link rel="stylesheet" type="text/css"  href="css/trackbar.css"/>
	<link href="http://allfont.ru/allfont.css?fonts=europe-normal" rel="stylesheet" type="text/css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/datepicker-ru.js"></script>
	<script type="text/javascript" src="js/trackbar.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<title>WORLD BANK - Вклады</title>
</head>
<body>
	<div class="block-body">

		<?php include("block-header.php");?>

		<div class="block-content">
			<p class="nav-breadcrumbs"><a href="#">Главная</a> - <a href="#">Вклады</a> - <span>Калькулятор</span></p>
			<div class="calculator">
				<form name="formacalc" class="formCalculator" method="POST">
					<div class="form-calculator">
						<h1>Калькулятор</h1>
						<div class="form-calculator-text">
							<ul class="form-calculator-text-list">
								<li>Дата оформления вклада</li>
								<li>Сумма вклада</li>
								<li>Срок вклада</li>
								<li>Пополнение вклада</li>
								<li>Сумма пополнения вклада</li>
							</ul>
						</div>
						<div class="form-calculator-computing">
							<input type="integer" name="dat" class="datepicker" placeholder="дд.мм.гггг" required/><br>
							<input type="integer" name="depositamount" min="1000" max="3000000" class="computing-pole1" required/><br>
							<select name="time" class="list">
								<option value="1">1 год</option>
								<option value="2">2 года</option>
								<option value="3">3 года</option>
								<option value="4">4 года</option>
								<option value="5">5 лет</option>
							</select><br>
							<input type="radio" name="refill" value="no" class="computing-radio1" checked>Нет
							<input type="radio" name="refill" value="yes" class="computing-radio2">Да<br>
							<input type="integer" name="replenishment" min="1000" max="3000000" class="computing-pole2"/>
						</div>
						<div class="form-calculator-slider">
							<div class="slider"></div>
							<div class="slider2"></div>
						</div>
						<input type="button" value="Рассчитать" class="calculation-button"><label class="result-text">Результат: </label><label class="result"></label> руб
					</div>
				</form>
			</div>
		</div>

		<?php include("block-footer.php");?>

	</div>
</body>
</html>
