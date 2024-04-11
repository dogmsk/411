<?php get_header(); ?>
       <!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<div>
       <h2 class="section-title">まいらくって？</h2>
              <p>介護の仕事をしていると、だれもが思う<br>”辛い” ”しんどい”<br>という気持ち。<br>実際私も思った事があります。<br>そしてこう考えました。
                    <span class="point-1">
                        "毎日、仕事が楽しくできたらいいのに" <br>"毎日、楽に過ごせたらいいのに"
                    </span><br>
                    私はこの気持ちを実現するため<br>2つの思いに共通する<br>"毎日" "楽"<br>この2つをとって<br>
                    <span class="point-2">
                        "まいらく"
                    </span><br>
                    をつくりました。<br>毎日、仕事を楽しく出来て、その上体が楽にできるならどんなに楽しい事か。

              </p>
</div>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
        <?php get_footer(); ?>

