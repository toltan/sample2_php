<?php
session_start();
	$_SESSION["text"]=htmlentities($_POST["text"]);
	$_SESSION["email"]=htmlentities($_POST["email"]);
	$_SESSION["select"]=htmlentities($_POST["select"]);
	$_SESSION["radio"]=htmlentities($_POST["radio"]);
	$_SESSION["textarea"]=htmlentities($_POST["textarea"]);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="discription" content="輸出入代行業は INTERNET TRADING にお任せください。">
<meta name="keywords" content="輸出,輸入,通関">
<meta name="author" content="INTERNET TRADING">
<meta name="copyright" content="&copy; 2017 INTERNET TRADING">
<meta name="date" content="2017-05-05T00:13:20+00:00">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>お問い合わせ　INTERNET TRADING</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen and (min-width:481px)">
<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen and (max-width:480px)">
</head>
<body id="contact">
<div id="header">
	<div id="logo"><h1><a href="index.php"><img src="images/logo.png" alt="ロゴ">INTERNET TRADING</a></h1></div>
	<ul id="nav">
		<li id="nav1"><a href="service.html"><img src="images/nav1_roll.png" alt="ナビ1"></a></li>
		<li id="nav2"><a href="company.html"><img src="images/nav2_roll.png" alt="ナビ2"></a></li>
		<li id="nav3"><a href="contribution.html"><img src="images/nav3_roll.png" alt="ナビ3"></a></li>
		<li id="nav4"><a href="recruitment.html"><img src="images/nav4_roll.png" alt="ナビ4"></a></li>
		<li id="nav5"><a href="contact.html"><img src="images/nav5_roll.png" alt="ナビ5"></a></li>
	</ul>
</div>
<div id="mainInner">
	<div id="colum">
	<div id="breadcrumb">
		<h2><a href="index.php">ホーム</a>　&gt; &nbsp; お問い合わせ</h2>	
	</div>
<?php
	$text=htmlentities($_POST["text"]);
	$email=htmlentities($_POST["email"]);
	$select=htmlentities($_POST["select"]);
	$radio=htmlentities($_POST["radio"]);
	$textarea=htmlentities($_POST["textarea"]);
$arr=["お名前"=>$text,"メールアドレス"=>$email,"お問い合わせ内容"=>$textarea];
$i=0;
foreach($arr as $key=>$va){
	if($va==""){
		$err[$i]=$key."が入力されていません。";
		$i++;
	}
}
if($i > 0 ){
echo <<<_ECHO_
	  <div class="newsTop">
		<h2>下記の項目に入力がありません。</h2>
	  </div>
	  <div id="contentsPhp">
	  	<ul id="errList">
_ECHO_;
foreach($err as $val){
	print "<li>".$val."</li>";
}
echo <<<_EC_
		</ul>
		<p id="backButton"><button onclick="history.back()">戻る</button></p>
	</div>
_EC_;
}else{
	echo <<<_FORM_
		  <div class="newsTop">
			<h2>以下の内容でよろしければ送信ボタンを押してください</h2>
		  </div>
		  <div id="contents"><br>
		  	<table>
		  		<tr>
		  			<th>お名前</th>
		  			<td>$text</td>
	  			<tr>
		  			<th>メールアドレス</th>
		  			<td>$email</td>
		  		</tr>
		  		<tr>
		  			<th>お問い合わせ種別</th>
		  			<td>$select</td>
		  		</tr>
		  		<tr>
		  			<th>弊社を知ったきっかけ</th>
		  			<td>$radio</td>
		  		</tr>
		  		<tr>
					<th>お問い合わせ内容</th>
					<td>$textarea</td>
		  		</tr>
		  	</table>
		  	<form action="send.php" id="form2" method="post">
		  		<p id="submit2"><input type="submit" value="送信"></p>
		  	</form>
		  	</div>
_FORM_;
}
?>
  </div>
</div>
<div id="footer">
	<div id="footerInner">
		<ul>
			<li>TOPへ戻る</li>
			<li><a href="service.html">サービス</a></li>
			<li><a href="company.html">会社概要</a></li>
			<li><a href="contribution.html">社会貢献活動</a></li>
			<li><a href="recruitment.html">採用情報</a></li>
			<li><a href="contact.html">お問い合わせ</a></li>
		</ul>
		<p><a href="#header">&copy; INTERNET TRADING co.,ltd.</a></p>
	</div>
</div>
<script src="index.js"></script>
</body>
</html>
