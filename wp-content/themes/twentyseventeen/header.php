<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- jQuery CDN via Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		_e( 'Skip to content', 'twentyseventeen' );
		?>
	</a>

	<header id="masthead" class="site-header">

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div class="wrap">
						<div class="left">
							<img src="http://127.0.0.1/novo-pos/wp-content/uploads/2024/12/logoWhite.png" alt="" class="logo">
						</div>
						<div class="right">
							<div class="oMenu">
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							<div class="extras">
								<a href="https://login.unisuam.edu.br/login" target="_blank"><div class="btAmbiente btnMenu">AMBIENTE ACADÊMICO</div></a>
								<div class="btnMenu menuAcess" id="newAssist" style="cursor:pointer;">
									<img src="http://127.0.0.1/novo-pos/wp-content/uploads/2024/12/acessibilidade.png" alt="">

								</div>
								<div class="wrapLinguas">
									<?php echo do_shortcode('[gtranslate]'); ?>
								</div>
							</div>
							</div>
						</div>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>


	</header><!-- #masthead -->

	<?php
	if ( twentyseventeen_should_show_featured_image() ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<style>
/	.gt_float_switcher {
  	box-shadow: rgba(0,0,0,0) 0 5px 15px !important;
  	background: transparent !important;
  }
  .gt_float_switcher .gt-selected {
  	background: transparent !important;
  }
  .gt_options a {
  	color: #fff !important;
  	font-size: 12px;
  }
  .gt_options a img {
  	width: 22px;
  }
  .gt-current-lang {
  	font-size: 12px;
  }
  .gt-lang-code {
  	position: absolute !important;
  	display: none !important;
  }
  .gt_float_switcher-arrow {
  	display: none !important;
  	position: absolute !important;
  }
  .gt_float_switcher .gt_options {
  	position: absolute !important;
	top: 45px !important;
	left: 0px !important;
	transition: all .4s;
	width: 140px;
  }
	.wrapLinguas {
	  position: relative;
	  top: 9px;
	  left: 11px;
	}	
	.wrapLinguas.lMobile {
		top: 0;
		margin-left: -20px;
	}			
  .gt_float_switcher .gt_options a {
  	padding-bottom: 10px !important;
  }
  .gt_float_switcher-arrow .gt_arrow_rotate {
  	display: none !important;
  	position: absolute !important;
  }
  .gt-current-lang img {
  	width: 22px;
  	float: right;
  }
  @media(max-width:600px) {
  	.gt_float_switcher .gt_options {
		position: fixed !important;
		top: 74px !important;
		right: 0px !important;
		transition: all.4s;
		width: 140px;
		left: auto !important;
  	}
  	.gtranslate_wrapper {
		margin-left: -22px;
		margin-right: -10px;
  	}
	.gt-current-lang img {
		width: 25px;
		float: right;
	}
	.OpenMenuMoblile {
		position: relative;
	}
	.wrapBtnMobile {
	  width: 50px;
	  text-align: center;
	  height: 50px;
	  background-color: #747b8c;
	  line-height: 60px;
	  transition: all .4s;
	  border-radius: 2px;
	  margin-right: -20px;
	}
	.HeaderMobile ul li a i {
		color: #747b8c !important;
	}
	.OpenMenuMoblile i.fal.fa-bars {
		color: #fff !important;
	}
	.LogoMobile img {
        top: 12px;
        width: 65px;
        position: relative;
	}
	.HeaderMobile ul {
	    margin-right: -24px;
    	position: relative;
	}

  }
  .gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow {
  	background-size: 8px;
  	margin-left: -4px;
  }
  .gt_options.gt-open {
  	background: rgba(0,0,0, .3);
  	border-radius: 2px;
  }


	
		a:hover {
			transition: all .3s;
			opacity: 0.8;
		}
		.btAmbiente {
			border: 1px solid #fff;
			padding: 5px 5px;
			margin-right: 5px;
			position: relative;
			top: -2px;
			transition: all 0.3s;
			cursor: pointer;
		}
		.btAmbiente:hover {
			background: #fff;
			color: #000;
			transition: all 0.3s;
		}
		.navigation-top {
			background: var(--Expand-Palete-US-Grayscale-US-Dark-Gray-3-US, #20242D);
			box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.16);
			/* position: fixed; */
		}
		.navigation-top .wrap .left {
			position: relative;
			display: inline-block;
			width: 19%;
			vertical-align: middle;
		}
		.navigation-top .wrap .right {
			position: relative;
			display: inline-block;
			width: 75%;
			vertical-align: middle;
			color: #fff;
		}
		.navigation-top .wrap .right a {
			color: #fff;
		}
		.main-navigation {
			width: 60%;
			display: inline-block;
			text-align: right;
		}
		#top-menu {
			text-align: right;
		}
		.extras {
			width: 30%;
			display: flex;
			justify-content: space-between;
			align-items: center;
			float: right;
			top: 10px;
  			position: relative;
		}
	</style>

	<div class="site-content-contain">
		<div id="content" class="site-content">