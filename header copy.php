<!-- header.php ここから -->
<!DOCTYPE html>
<html>
    <head>
        <title>まいらく</title>
        <meta charset="utf-8">
        <meta name="description" content="腰痛によるストレスを日々のストレッチで緩和させ毎日を楽しくするサイトです">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <?php wp_head(); ?>
    </head>

    <body>
        <!-- ヘッダー -->
        <header>
        <div>
            <h1 class="title">まいらく</h1>

            <span class="sub">~腰痛を治して、毎日を、楽に、楽しく~</span>
        </div>
        <!-- pc用ナビゲーション -->
        <div>
            <nav>
                <ul>
                    <li><a href="front-page.php">topページ</a></li>
                    <li><a href="index.php">まいらくって？</a></li>
                    <li><a href="page-course.php">コースプラン</a></li>
                    <li><a href="about/contact.html">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
        <!-- スマホ用メニューボタン -->
     <img id="menu-sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bars_24.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'">

      <!-- スマホ用ナビゲーション -->
      <nav id="nav-sp">
       <img id="close" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
       <a id="logo-sp" href="index.html" onclick="document.getElementById('nav-sp').style.display = 'none'"></a>
       <a class="menu" href="mission.html" onclick="document.getElementById('nav-sp').style.display = 'none'">topページ</a>
       <a class="menu" href="product.html" onclick="document.getElementById('nav-sp').style.display = 'none'">まいらくって？</a>
       <a class="menu" href="index.html#aboutus" onclick="document.getElementById('nav-sp').style.display = 'none'">コースプラン</a>
       <a class="menu" href="index.html#vision"
         onclick="document.getElementById('nav-sp').style.display = 'none'">topページ</a>
       <a class="menu" href="index.html#company"
         onclick="document.getElementById('nav-sp').style.display = 'none'">まいらくって？</a>
       <a class="menu" href="index.html#contact"
         onclick="document.getElementById('nav-sp').style.display = 'none'">コースプラン</a>
         <!-- 近日追加予定
         <div id="sns">
             -->
       
       </div>
     </nav>
  </header>

<!--======== 後略 ========-->

        <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる
                    'theme_location' => 'header_nav',// functions.phpで設定したメニューの名前を設定
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する
                );
                wp_nav_menu($args);//メニューを表示
                ?> 
        </header>