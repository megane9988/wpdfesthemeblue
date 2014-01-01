<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<!--[if IE 10]><html class="ie10" lang="en" > <![endif]-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="contain-to-grid fixed">
		<nav class="top-bar" data-topbar="">
			<ul class="title-area">
				<li class="name">
					<h1>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
				</li>
				<li class="toggle-topbar menu-icon">
					<a href=""><span>Menu</span></a>
				</li>
			</ul>
			<section class="top-bar-section">
			<!-- カスタムナビゲーションの読み込み -->
				<?php wp_nav_menu (array(
					'theme_location'=>'mainmenu', // 利用するナビゲーション
					'container'       => false,
					'menu_class'      => 'right',  // 付与するclass
					'menu_id'         => 'top', // 付与するid
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'after'           => '<li class="divider"></li>',
					'items_wrap'      => '<ul id="%1$s" class="%2$s"><li class="divider"></li>%3$s</ul>',
				)); ?>
			</section>
		</nav>
	</div>
	<!-- トップページのみメインイメージを表示したい場合は下記のコメントアウトを外しましょう。最後のendif前のコメントアウトも忘れずに -->
	<?php // if ( is_home() || is_front_page() ) : ?>
		<div class="main-img clearfix">
			<div class="row">
				<div class="large-12 columns">
					<div class="main-img-title right" id="top">
						<h3>WP-D Fes #01 <span>2014 / 02 / 01 / sat</span></h3>
						<h1>Megane Fes in GMO</h1>
						<p>これからのWeb制作について考える!<br>
						・コミュニティー・CSSフレームワーク・自動化・ファイル管理・ディレクション・事例紹介</p>
					</div>
				</div>
			</div>
		</div>
	<?php // endif; ?>