<?php get_header(); ?>
       <!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
       <main>
            <div class="worry">
                <p>介護職の皆さん、こんなお悩みありませんか？</p>
                <ul>
                    <li>腰が痛くて思うように動けない</li>
                    <li>腰痛が原因でイライラしてしまう</li>
                    <li>仕事が忙しく体をケアする時間がとれない</li>
                    <li>手軽に出来るストレッチを知りたい</li>
                </ul>
                <p>このような悩みを解決する為“まいらく”は生まれました</p>
            </div>

            <div class="about">
                <h3>自己紹介</h3>
                <!-- ここに写真が入る -->
                <p>福祉専門高校卒業。介護福祉士資格取得後介護福祉士として5年間介護施設（特養）に勤務。業務の中で腰痛を引き起こして以来、介護職でも取り組める筋トレやストレッチを発信している。</p>
            </div>

            <div class="news">
                <!-- ニュース、イベントを入れる -->
            </div>
        </main>
<?php endif; ?>
        <?php get_footer(); ?>
