<?php get_header(); ?>
<main>
        <div class="read">
        </header>
        <!-- サイトの概要 -->
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
            <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 5,
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>
                    <!-- 表示させるコンテンツ -->
                    <dl class="news_list">
                        <dt><time><?php echo get_the_date(); ?></time></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                    <!-- ここまでコンテンツ -->
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p>お知らせはありません</p>
                    <?php endif; ?>
                <!-- ニュース、イベントを入れる -->
            </div>
        </main>
        </div>
    </main>
        <?php get_footer(); ?>
