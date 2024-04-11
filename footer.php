        <!-- フッター -->
        <footer>
        <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる
                    'theme_location' => 'footer_nav',// functions.phpで設定したメニューの名前を設定
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する
                );
                wp_nav_menu($args);//メニューを表示
                ?>

            <p>&copy;mairaku</p>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>