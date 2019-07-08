<?php require('wordpress/wp-blog-header.php'); ?>
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
<title>INTERNET TRADING</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen and (min-width:481px)">
<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen and (max-width:480px)">
</head>
<body id="index">
<div id="header">
	<div id="mainPhoto">
		<div class="viewer">
			<ul>
				<li><img src="images/main1.jpg" alt="メインビジュアル"></li>
				<li><img src="images/main2.jpg" alt="メインビジュアル"></li>
				<li><img src="images/main3.jpg" alt="メインビジュアル"></li>
			</ul>
		</div>
		<ul id="nav">
			<li id="nav1"><a href="service.html"><img src="images/nav1_roll.png" alt="ナビ1"></a></li>
			<li id="nav2"><a href="company.html"><img src="images/nav2_roll.png" alt="ナビ2"></a></li>
			<li id="nav3"><a href="contribution.html"><img src="images/nav3_roll.png" alt="ナビ3"></a></li>
			<li id="nav4"><a href="recruitment.html"><img src="images/nav4_roll.png" alt="ナビ4"></a></li>
			<li id="nav5"><a href="contact.html"><img src="images/nav5_roll.png" width="272" height="201" alt=""/></a></li>
		</ul>
	<div id="logo"><h1><a href="index.php"><img src="images/logo.png" alt="ロゴ">INTERNET TRADING</a></h1></div>
	</div>
</div>
<div id="mainInner">
	  <div id="news">
		  <div class="newsTop">
			<h2>News</h2>
			<ul id="topics">
			  <li><a href="index.php"><img src="images/topi1_roll.png" alt="all"></a></li>
			  <li><a href="index_Info.php"><img src="images/topi2_roll.png" alt="info"></a></li>
			  <li id="topi"><a href="index_Notice.php"><img src="images/topi3_roll.png" alt="notice"></a></li>
			</ul>
		  </div>
		  <div id="content">
			  <div id="wordpress">
			  <?php 
				 $po=array('posts_per_page' =>5,'category_name'=>Notice);
				 $posts=get_posts($po);
				 foreach($posts as $p):?>
		  		<div class="cate">
					<div class="date">
						<?php echo get_the_date('Y年m月d日',$p);?>
					</div>
					<div class="phpCategory">
						<?php $cat=get_the_category($p);
							  foreach($cat as $c){
						      echo $c->name."&nbsp";
							  }
						?>
					</div>
					<div class="text">
						<a href=<?php the_permalink($p);?>><?php echo get_the_title($p);?></a>
					</div>
			  	</div>
			  <?php endforeach;?>
			  </div>
		 </div>
	</div>
	<div id="aside">
		<div class="newsTop2">
			<h2>Link</h2>
		</div>
		<ul id="banner">
			<li><a href="http://www.facebook.com/"><img src="images/banner_facebook.png" alt="bnrFacebook"></a></li>
			<li><a href="http://twitter.com"><img src="images/banner_twitter.png" alt="bnrTwitter"></a></li>
		</ul>
	</div>
	<div id="contents">
	<h2 class="newsTop3">Service</h2>
		<ul id="servic">
			<li>
				<div class="black"><img src="images/custom.jpg" alt="輸出入業務の代行"></div>
				<dl>
					<dt>輸出入業務の代行</dt>
					<dd>お客様のご依頼により輸出入業務全般の代行を承ります。</dd>
				</dl>
			</li>
			<li>
				<div class="black"><img src="images/packing.jpg" alt="輸出製品用の梱包作業"></div>
				<dl>
					<dt>輸出製品用の梱包作業</dt>
					<dd>あらゆる形状、材質の物も弊社独自の梱包技術を用いて安全な輸送を提供いたします。</dd>
				</dl>
			</li>
			<li>
				<div class="black"><img src="images/custom2.jpg" alt="通関業務の代行"></div>
				<dl>
					<dt>通関業務の代行</dt>
					<dd>経験豊富な通関士により間違えのない通関業務を代行いたします。</dd>
				</dl>
			</li>
		</ul>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="index.js"></script>
</body>
</html>
