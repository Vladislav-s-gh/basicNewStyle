
<!DOCTYPE html>
<html>
<head>
<title>Академія ЕКГ</title>
<link rel="icon" type="image/png" href=".heart-red.png">
<link rel="stylesheet" type="text/css" href="./styles.css">
<link rel="stylesheet"
    href="./style-basic.css">

</head>
<body>
<div class="mainmenu"> 
	<div class="image"> <a href="..//index.html"><img  id="image-of-heart" src="./heart-red.png"></a></div>
	<div class="lable">Академія ЕКГ</div>
	<div class="navbar"> 
<ul class="navbar-box">
	<li><a href="..//index.html">Home</a></li>
	<li><a href="map.html">Map</a></li>
	<li><a href="contact.html">Contact</a></li>



</ul>
 </div>

</div>

<div class="section">
  <div class="section-word">Розділи:</div>
  <a href="basic.html">Основи</a>
  <a href="aritmia.html">Порушення ритму</a>
  <a href="ischemia.html">Ішемія</a>
  <a href="emergency.html">Невідкладна допомога</a>
</div>



<div class="app">
	<h1>Основи. Синусовий i несинусовий ритм.</h1>
	<div>
	<div class="quiz">
		<h2 id="question">Question goes here</h2>
		<div id="image"></div>
		<div id="answer-buttons">
			<button class="btn">Answer 1</button>
			<button class="btn">Answer 2</button>
			<button class="btn">Answer 3</button>
			<button class="btn">Answer 4</button>
		</div>
	<div id="commentContainer">
		<div id="commentText">Text Comment</div>
		<button id="comment">Коментар</button></div>
		<button id="next-btn">Далі</button>
	</div>
	</div>
</div>

<div class="add-result">
	<div class="add-result-text">Додати мій результат в рейтинг</div>
	
	<body>
  <form action="./includes/formhandler.inc.php" method="post">
  
  <input type="text" name="username" placeholder="Ваше ім'я">
  <input type="password" name="pwd" placeholder="Пароль">
	<div id="showsore"></div>
  <input type="text" name="score" placeholder="E-mail" id="email" style="display: none;">
  <button>+</button>
	</form>

</div>


<div class="rating">
	<div class="rating-text">Рейтинг.Основи</div>
	<div class="rating-list"></div>
	<?php include('./includes/getlist.php'); ?>
</div>

<script src="./script.js"></script>
<footer>Створено 2023</footer>

<!-- <script src="..//non-active-element/victorina/script.js"></script> -->
</body>
</html>