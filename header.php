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
            <div class=menu-btn>
                <i class="bi bi-list"></i>
            </div>
        <div>
            <h1 class="title">まいらく</h1>

            <span class="sub">~腰痛を治して、毎日を、楽に、楽しく~</span>
        </div>
        

<!--======== 後略 ========-->

        <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる
                    'theme_location' => 'header_nav',// functions.phpで設定したメニューの名前を設定
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する
                );
                wp_nav_menu($args);//メニューを表示
                ?> 
        </header>