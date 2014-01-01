<?php get_header(); ?>
<!-- フロントページ用のテンプレートです自由に書き換えてください 
基本的にFoundationのCSSが利用できます。詳しくは
Foundationのドキュメント http://foundation.zurb.com/docs/をご確認下さいませ。
下記には参考例を書きます。
-->
<!-- rowの中で12個に区切られており、それを利用してレイアウトを行います -->
<div class="row front">
	<div class="large-4 columns">
		<img src="" alt="">
		<h2>Concept</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, eligendi, mollitia, sapiente, nesciunt omnis laborum corporis rem autem nam iure dolores possimus ratione deleniti est quisquam sequi quam minima eum?</p>  
	</div>
	<div class="large-4 columns">
		<img src="" alt="">
		<h2>Service</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, eligendi, mollitia, sapiente, nesciunt omnis laborum corporis rem autem nam iure dolores possimus ratione deleniti est quisquam sequi quam minima eum?</p>  
	</div>
	<div class="large-4 columns">
		<img src="" alt="">
		<h2>Contact</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, eligendi, mollitia, sapiente, nesciunt omnis laborum corporis rem autem nam iure dolores possimus ratione deleniti est quisquam sequi quam minima eum?</p>  
	</div>
</div>
<!-- outerを利用することで背景に装飾が可能です -->
<div class="outer">
	<div class="row">
		<div id="news" class="large-12 columns l-title text-center">
			<h2>Special Contents</h2>
			<h4>スべシャルコンテンツ</h4>
		</div>
	</div>
	<div class="row">
		<div class="large-6 columns">
			<img src="" alt="">
			<h3>Concept</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, eligendi, mollitia, sapiente, nesciunt omnis laborum corporis rem autem nam iure dolores possimus ratione deleniti est quisquam sequi quam minima eum?</p>  
		</div>
		<div class="large-6 columns">
			<img src="" alt="">
			<h3>Service</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, eligendi, mollitia, sapiente, nesciunt omnis laborum corporis rem autem nam iure dolores possimus ratione deleniti est quisquam sequi quam minima eum?</p>  
		</div>
	</div>
</div>
<div class="row">
	<div id="news" class="large-12 columns l-title text-center">
		<h2>News</h2>
		<h4>更新情報</h4>
	</div>
</div>
<!-- WordPressから何か情報を引き出す場合のサンプル -->
<div class="row">
	<?php query_posts( 'posts_per_page=4' ); ?> <!-- 表示件数 -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="large-6 small-12 columns">
				<a href="<?php the_permalink(); ?>" class="post">
					<div class="newspost"> 
						<div class="row">
							<div class="small-3 columns">
								<div class="thumbnail">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'top-thumb', array( 'class' => 'thumbnail' ) ); ?>
								<?php else : ?>
									<img src="http://placehold.it/300x300/ccc/ccc&text=wpd" alt="" title="" />
								<?php endif; ?>
								</div>
							</div>
							<div class="small-9 columns">
								<div class="news-meta">
									<p><?php the_time( 'Y.m.d' ); ?></p>
									<p>
										<?php echo mb_substr( get_the_title(), 0, 40 ); ?>
									</p> 
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
</div>
<div class="row">
	<div id="nextevent" class="large-12 columns l-title text-center">
		<h2>Next Event</h2>
		<h4>次回予告</h4>
	</div>
</div>
<div class="main-img next clearfix">
	<div class="row">
		<div class="large-12 columns">
			<div class="main-img-title left">
				<h3>WP-D Fes #02 <span>2014 SUMMER</span></h3>
				<h1>Go Outdoor!! with IT</h1>
				<p>IT夏フェス! みんなで外に出て何か作ったりしよう !<br>
				・アウトドア・モバイル・バッテリー・wifi・日光・気温・愛</p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>