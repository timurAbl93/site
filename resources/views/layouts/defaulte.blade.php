<!DOCTYPE html5>
<html xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
	<meta http-equiv="content-language" content="ru" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/footer-bottom.css">
	<!-- Настройки через less
	<link rel="stylesheet/less" type="text/css" href="css/setting.less" />
	<script src="js/less.js" type="text/javascript"></script>-->
	<link rel="stylesheet" type="text/css" href="css/bxslider/jquery.bxslider.css">
	<script src="js/bxslider/jquery.bxslider.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/fancybox/jquery.fancybox.css">
	<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.selectBox.js"></script>
        
    <link type="text/css" rel="stylesheet" href="css/jquery.selectBox.css"/>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
	<script src="js/media.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Шаблон html</title>
</head>
<body>
	<!-- fancybox -->
	<div id="fancybox" class="fancybox">
		<h3 class="blue">Оставьте заявку прямо сейчас</h3>
		<p>И я свяжусь с Вами в ближайшее время!</p>
                <form action="/" class='mainForm' id='form' >
			<div class="input-name">	
				<span>ваше имя :</span>
				<input type="text" name='userName' required placeholder="ДЖОДЖ КЛУНИ">
			</div>
			<div class="input-mail">	
				<span>E-MAIL* :</span>
				<input type="text" name='email'required placeholder="EXAMPLE@GMAIL.COM">
			</div>
			<div class="input-work">	
				<span>вид работы:</span>
				<select class="border-none" name='jobs'>
				     <option>Landing page</option>
				     <option>Static</option>
				     <option>Adaptiv</option>
				</select>
			</div>
			<div class="input-massage">	
				<span>сообщение:</span>
				<textarea class="textarea" name="description" required id="" cols="1" rows="1"></textarea>
			</div>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                        
		</form>
                
		<div class="request">
                    <button form="form" class="button"><span>Оставить заявку</span></button>
		</div>
                
                <p class='errors'></p>
                
	</div>
	<div id="fancybox" class="thank">
		<h3>Спасибо!</h3>
		<p>Ваша заявка отправлена</p>
		<div class="request">
			<a href="" class="ok button"><span>Ок</span></a>
		</div>
	</div>
	<!-- fancybox -->

	<div class="wrapper">
		<header id="header" class="header toTop">
			<div class="container">
				<a href="" class="logo"><img src="images/logo.png" alt="логотип"></a>
				<nav class="menu">
					<ul>
						<li class="link-portfolio active"><a href="#portfolio">Портфолио</a></li>
						<li class="link-advantages"><a href="#advantages">Преимущества</a></li>
						<li class="link-work-process"><a href="#work-process">Процесс работы</a></li>
						<li class="link-contact"><a href="#contact">Контакты</a></li>
					</ul>
				</nav>
				<a href="#fancybox" class="mail"><i class="ml"></i></a>
			</div>
		</header>
		<section class="bottom-header">
			<div class="container">
				<div class="text">
					<h1 class="green">современный дизайн <span>для вашего сайта</span></h1>
					<span class="variety">От лендинга до Интернет-магазина</span>
					<span class="slogan"><i class="is"></i>Качественно и во время!</span>
				</div>
				<div class="request">
					<a href="#fancybox" class="pop-up-show button"><span>Оставить заявку</span></a>
				</div>
				<div class="down-arrow">
					<a href="#portfolio"><i class="da"></i></a>
				</div>
			</div>
		</section>	
		 <section id="portfolio" class="portfolio">
			<div class="container">
				<h2 class="green">Портфолио</h2>
				<p>Первое, что Вы видите, заходя на сайт - <b>это дизайн</b>.<br>
				Позже Вы столкнетесь с юзабилити, удобством пользования и другими важными моментами,<br> 
				но самое <b>первое, что Вы увидите, зайдя на сайт - это Дизайн.</b></p>
				<p>Дизайн - это одна из важнейших составляющих сайта, которая формирует первое впечатление у человека<br> 
				и очень важно, чтобы это впечатление не было испорчено,<br>
				так как <b>второго шанса произвести первое впечатление у Вас не будет.</b></p>
			</div>
			@include('admin/slider')
				<div class="container">
					<div class="down-arrow">
						<a href="#advantages"><i class="da"></i></a>
					</div>
				</div>
		</section>
		<section id="advantages" class="advantages">
			<div class="container">
				<h2 class="blue">Преимущества работы со мной</h2>
				<p>Привет, меня зовут Рамис <span class="gray">(blackramzess)</span>!</p>
				<p class="blue">более 7 лет занимаюсь профессионально веб-дизайном и свыше 2-х лет UX/UI дизайном.<br>
				ниже вы можете ознакомиться с преимуществами работы со мной: </p>
				<ul class="sp-advan">
					<li>
						<div class="images"><i class="gd"></i></div>
						<div class="text">
							<h4>Графический дизайнер<br>с навыками проектировщика</h4>
							<p>Постараюсь вытянуть из Вас всю необходимую информацию и превратить ее в продукт, который будет не только красивым, но и удобным в использовании. Знаю как сделать легкий и информационный сайт, понимаю что значит удобно, а что нет, предложу элегантное решение для интерфейсной проблемы.</p>
						</div>
					</li>
					<li>
						<div class="images"><i class="dd"></i></div>
						<div class="text">
							<h4>Разработка дизайна<br>не для “галочки”, а на совесть</h4>
							<p>Для меня важно сделать качественный продукт, так как в дальнейшем он будет дополнять мое портфолио. По-этому я буду стараться рисовать не “шаблонный” сайт, а продукт высшего качества, предлагая лучшие идеи и следуя современным тенденциям.</p>
						</div>
					</li>
					<li>
						<div class="images"><i class="uk"></i></div>
						<div class="text">
							<h4>нужен сайт под ключ?<br>без проблем!</h4>
							<p>Вам нужен сайт под ключ? Без проблем, я с радостью помогу Вам, так как сотрудничаю с опытными и проверенными специалистами, которые не просто любят свою работу, а живут этим!</p>
						</div>
					</li>
				</ul>
				<div class="down-arrow">
					<a href="#work-process"><i class="da"></i></a>
				</div>
			</div>
		</section>
		<section id="work-process" class="process-of-work">
			<div class="container">
				<h2 class="blue">Процесс работы</h2>
				<ul>
					<li class="zayavka-block">
						<span><i class="zayavka"></i></span>
						<span>вы оставляете заявку</span>
						<div class="request">
							<a href="#fancybox" class="pop-up-show button"><span>Оставить заявку</span></a>
						</div>
					</li>
					<li class="sbor-block">
						<span><i class="sbor"></i></span>
						<span>сбор всей необходимой<br>информации<br>(ТЗ,Прототипы и т.д.)</span>
					</li>
					<li class="oplata-block">
						<span><i class="oplata"></i></span>
						<span>оплачиваете Предоплату 40%<br>от всей стоимости проекта</span>
					</li>
					<li class="oplata2-block">
						<span><i class="oplata2"></i></span>
						<span>вы оплачиваете остальную<br>часть суммы</span>
					</li>
					<li class="maket-block">
						<span><i class="maket"></i></span>
						<span>утверждение макета</span>
					</li>
					<li class="dev-block">
						<span><i class="dev-desing"></i></span>
						<span>разработка дизайна</span>
					</li>
					<li class="link-maket-block">
						<span><i class="link-maket"></i></span>
						<span>получаете ссылку<br>на скачивание макетов</span>
					</li>
				</ul>
				<div class="down-arrow">
					<a href="#contact"><i class="da"></i></a>
				</div>
				<a id="toTop" class="link-icon">
				Вверх</a>
			</div>
		</section>
		<div class="footer-block"></div>
	</div> 
	<footer id="contact" class="footer">
		<div class="container">
			<div class="left">
				<h3 class="green">Оставьте заявку прямо сейчас</h3>
				<form action="/" class='mainForm' id='form2'>
					<div class="input-name">	
						<span>ваше имя:</span>
						<input type="text" name='userName' required placeholder="ДЖОДЖ КЛУНИ">
					</div>
					<div class="input-mail">	
						<span>E-MAIL*:</span>
						<input type="text" name='email' required placeholder="EXAMPLE@GMAIL.COM">
					</div>
					<div class="input-work">	
						<span>вид работы:</span>
						<select name='jobs'>
						     <option>Landing page</option>
						     <option>Static</option>
						     <option>Adaptiv</option>
						</select>
					</div>
					<div class="input-massage">	
						<span>сообщение:</span>
						<textarea class="textarea" name="description" required id="" cols="1" rows="1"></textarea>
					</div>
                                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
				</form>
				<div class="request">
					<button form="form2" class="button"><span>Оставить заявку</span></button>
				</div>
                                <p class='errors'></p>
			</div>
			<div class="right">
				<h3 class="blue">способы оплаты:</h3>
				<p>Стоимость, условия и сроки работы оговариваются индивидуально</p>
				<ul>
					<li><a href="" class="nal"></a><span>наличными <br/>(Р. Крым, <br/>г. Симферополь)</span></li>
					<li><a href="" class="card"></a><span>на карту банка <br/>(РНКБ)</span></li>
					<li><a href="" class="qiwi"></a></li>
					<li><a href="" class="yandex"></a></li>
				</ul>
				<h3 class="blue">Контакты:</h3>
				<a href="mailto:blackramzess@gmail.com" class="email">blackramzess@gmail.com</a>
				<a href="" class="skype">ramis.ahmedbekov88</a>
			</div>
			<div class="copy">Copyright © 2015  Blackramzess</div>
		</div>
	</footer>
        
</body>
</html>