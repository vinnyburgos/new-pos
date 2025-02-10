<?php
/**
 * The template for displaying cursos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/curso.css">
<script src="<?php echo get_template_directory_uri(); ?>/curso.js"></script>

<?php $mneumonico = get_post_meta(get_the_ID(), 'mneumonico', true); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
		?>
	<header class="entry-header headerCurso">

		<div class="breadcrumb">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            } ?>
        </div>
		<div class="wrapModalidade">
			<h4>PÓS-GRADUAÇÃO</h4> 
			<div class="innerMod" id="innerMod">
				
			</div>
		</div>
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				}
				echo '</div><!-- .entry-meta -->';
			}
			if ( is_single() ) {
				the_title( '<h2 class="entry-title">', '</h2>' );
			} elseif ( is_front_page() && is_home() ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			?>

		<div class="ineerDescr">
			<p><?php echo get_post_meta(get_the_ID(), 'sub_titulo', true); ?></p>
		</div>

	</header>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				/* translators: %s: Post title. Only visible to screen readers. */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->

	<!-- dados da API  -->
	<?php include 'getAPI_interna.php' ?>

	<!-- Dados já puxados da API -->
		<?php foreach ($data['investimentos'] as $investimento) { 
		$modalidade = get_post_meta(get_the_ID(), 'modalidade_type', true);
		if ($modalidade == 'Presencial' && $investimento['parcelas'] == 18) {
			$valorSemDesconto = ceil($investimento['valor'] * 2.5);
		?>
	   
		<section class="box" id="box">
			<div class="innerBox">
				<div class="btnNovo btnAluno active" id="btnNovo"><span>NOVO ALUNO</span></div>
				<div class="btnEx btnAluno" id="btnEx"><span>EX ALUNO</span></div>
				<span id="valorSaga" style="position:absolute;none;opacity:0;z-index:-999999;"><?php echo number_format($investimento['valor'], 2, ',', '.'); ?></span>
	
				<p class="nameCurso">
					<?php
						if ( is_single() ) {
							the_title( '<span class="entry-title">', '</span>' );
						}
					?>
				</p>

				<p class="dePor">A partir de:<span><br>
				18x de R$</span> <span id="valorSDesconto"><?php echo number_format($valorSemDesconto, 2, ',', '.'); ?></span></p>

				<p class="valorParcela"><span><?php echo $investimento['parcelas']; ?>x de R$</span><span id="valorCDesconto"><?php echo number_format($investimento['valor'], 2, ',', '.'); ?></span></p>


				<select name="unidade" id="unidade" class="unidade">
					<option value="">Selecione a Unidade em que deseja estudar</option>
					<option value="<?php echo $investimento['unidade']; ?>"><?php echo $investimento['unidade']; ?></option>
				</select>

				<div class="wrapSides">
					<div class="left">
						<h3>Modalidade:</h3>
						<p class="conteudoBox"><span id="modalidadeBox">Presencial</span></p>
						<h3>Dias e horários:</h3>
						<p class="conteudoBox"><span id="">Sábados quinzenais<br>das 8h às 17h</span></p>
					</div>
					<div class="right">
						<h3>Carga horária:</h3>
						<p class="conteudoBox"><span id="cargaHoraria"><?php echo get_post_meta(get_the_ID(), 'carga_horaria', true); ?></span></p>
						<h3>Próxima Turma:</h3>
						<p class="conteudoBox"><span id="dataTurma"><?php echo $investimento['datainicio']; ?></span></p>
					</div>
				</div>

				<a href="#"><div class="btnComprar">
					<span>INSCREVA-SE JÁ!</span>
				</div></a>
			</div>
		</section>

		<?php 
			} elseif ($investimento['parcelas'] == 12) {
				$valorSemDesconto = ceil($investimento['valor'] * 2.5);
		?>
		
		<section class="box" id="box">
			<div class="innerBox">
				<div class="btnNovo btnAluno active" id="btnNovo"><span>NOVO ALUNO</span></div>
				<div class="btnEx btnAluno" id="btnEx"><span>EX ALUNO</span></div>
				<span id="valorSaga" style="position:absolute;none;opacity:0;z-index:-999999;"><?php echo number_format($investimento['valor'], 2, ',', '.'); ?></span>
	
				<p class="nameCurso">
					<?php
						if ( is_single() ) {
							the_title( '<span class="entry-title">', '</span>' );
						}
					?>
				</p>

				<p class="dePor">A partir de:<span><br>
				12x de R$</span> <span id="valorSDesconto"><?php echo number_format($valorSemDesconto, 2, ',', '.'); ?></span></p>

				<p class="valorParcela"><span><?php echo $investimento['parcelas']; ?>x de R$</span><span id="valorCDesconto"><?php echo number_format($investimento['valor'], 2, ',', '.'); ?></span></p>


				<select name="unidade" id="unidade" class="unidade">
					<option value="">Selecione a Unidade em que deseja estudar</option>
					<option value="<?php echo $investimento['unidade']; ?>"><?php echo $investimento['unidade']; ?></option>
				</select>

				<div class="wrapSides">
					<div class="left">
						<h3>Modalidade:</h3>
						<p class="conteudoBox"><span id="modalidadeBox">Online</span></p>
						<h3>Dias e horários:</h3>
						<p class="conteudoBox"><span id="dias">Flexível</span></p>
					</div>
					<div class="right">
						<h3>Carga horária:</h3>
						<p class="conteudoBox"><span id="cargaHoraria"><?php echo get_post_meta(get_the_ID(), 'carga_horaria', true); ?></span></p>
						<h3>Próxima Turma:</h3>
						<p class="conteudoBox"><span id="dataTurma"><?php echo $investimento['datainicio']; ?></span></p>
					</div>
				</div>

				<a href="#"><div class="btnComprar">
					<span>INSCREVA-SE JÁ!</span>
				</div></a>
			</div>
		</section>

		<?php 
			}
		} ?>
	<!-- Dados já puxados da API -->
	
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- .wrap -->

<div class="clear"></div><br><br><br><br>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<section class="aprender">
				<div class="center">
					<h2 class="vaiAprender comBarra"><?php echo get_post_meta(get_the_ID(), 'titulo_sobre', true); ?></h2>
					<p class="textoAprender">
						<?php echo get_post_meta(get_the_ID(), 'conteudo_sobre', true); ?>
					</p>
					<h3 class="paraVc"><?php echo get_post_meta(get_the_ID(), 'titulo_para', true); ?></h3>
					<div class="wrapBlocksPara">
						<div class="blockPara">
							<ul>
								<?php
								if (have_rows('conteudo_para')) {
									while (have_rows('conteudo_para')) {
										the_row();
										$point_para = get_sub_field('point_para');
										echo '<li>' . esc_html($point_para) . '</li>';
									}
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</section>
			</main><!-- #main -->
			</div><!-- #primary -->
			</div><!-- .wrap -->

	<div class="clear"></div>

<div class="bgGrey">
	<div class="wrap">
	<div id="" class="content-area">
		<main id="main" class="site-main">
			<section class="cursar">
				<div class="center">
				<h2 class="vaiCursar comBarra">Quais conteúdos você vai cursar</h2>

				<!-- loop de modulos -->
				<?php
                    foreach ($data['estrutura']['grupos'] as $modulo) {
				?>

					<div class="wrapModulo">
						<p class="titleModulo"><?php echo $modulo['descricao'] ?></p>

						<?php
                            foreach ($modulo['disciplinas'] as $disciplina) {
						?>

							<p class="contentModulo"><?php echo $disciplina['nome'] ?></p>

						<?php
							}
						?>
					</div>
				<?php
                    }
                ?>
				<!-- loop de modulos -->

				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- .wrap -->
</div>


<div class="wrap">
	<div id="" class="content-area">
		<main id="main" class="site-main">
			<section class="caixas">
				<div class="center">

					<div class="caixaLeft caixa">
						<h2 class="titleBox comBarra">Por que fazer um curso presencial na UNISUAM?</h2>

						<p class="contentBox">
							Optar por uma pós-graduação em Webconferência na UNISUAM proporciona flexibilidade e conveniência, permitindo que você estude de onde estiver. As aulas são transmitidas ao vivo, com interação em tempo real, e ficam gravadas para revisões futuras. Com a qualidade de ensino da UNISUAM, você estará preparado(a) para se destacar no mercado de Terapia Cognitivo-Comportamental, sem comprometer sua rotina.
						</p>

					</div>

					<div class="caixaRight caixa">
						<h2 class="titleBox comBarra">Nossa metodologia</h2>

						<p class="contentBox">
							O curso adota uma metodologia diversificada que inclui problematização, aprendizagem baseada em questões e casos práticos, pesquisa como princípio educativo, debates e aulas expositivas dialogadas. As aulas presenciais são enriquecidas por atividades práticas e laboratoriais, proporcionando uma experiência de aprendizagem dinâmica e interativa. A metodologia visa desenvolver um profissional capacitado para aplicar teoria e prática de forma eficaz, preparando-o para os desafios reais do mercado.
						</p>

					</div>
				 
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- .wrap -->


	<div class="clear"></div>


	<div class="wrap">
	<div id="" class="content-area">
		<main id="main" class="site-main">
			<section class="parcerias">
				<div class="center">

					<h2 class="vaiParcerias comBarra">Nossas parcerias</h2>

					<p class="contentBox">
						A UNISUAM foca o desenvolvimento de parcerias que agregam valor à jornada profissional dos nossos estudantes. Ao longo da sua graduação, com o uso do seu e-mail institucional de aluno, você terá licenças gratuitas ou super descontos para acesso exclusivo a cursos e softwares das seguintes empresas:
					</p>


					<?php $upload_dir = wp_upload_dir();?>

					<div class="wrapParcerias">

						<!-- Swiper -->
						<div class="swiper parceiros">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo $upload_dir['baseurl']; ?>/2025/01/oracle.png" alt="">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $upload_dir['baseurl']; ?>/2025/01/canva.png" alt="">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $upload_dir['baseurl']; ?>/2025/01/aws.png" alt="">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $upload_dir['baseurl']; ?>/2025/01/autodesk.png" alt="">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo $upload_dir['baseurl']; ?>/2025/01/oracle.png" alt="">
								</div>
							</div>
						</div>
						<span class="btnPrev"><</span>
						<div class="swiper-pagination"></div>
						<span class="btnNext">></span>

					</div>
				
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- .wrap -->



<!-- Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper(".parceiros", {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			460: {
				slidesPerView: 2,
				spaceBetween: 30
			},
			// when window width is >= 640px
			640: {
				slidesPerView: 4,
				spaceBetween: 40
			}
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".btnNext",
			prevEl: ".btnPrev",
		},
	});
</script>
<style>
	.swiper {
      width: 100%;
      height: 100%;
	  padding-bottom: 60px;
    }
	.btnNext, .btnPrev {
		position: absolute;
		display: inline-block;
		margin: 0 auto;
		text-align: center;
		width: 100%;
		cursor: pointer;
		bottom: 5px;
		z-index: 99999;
		color: #EF7D00;
	}
	.btnPrev {
		left: -20%
	}
	.btnNext {
		right: -20%
	}
	:root {
		--swiper-theme-color: #EF7D00;
	}
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>

<?php
get_footer();