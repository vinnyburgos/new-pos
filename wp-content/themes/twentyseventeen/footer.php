<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<br><br><br>
<footer class="footer" id="footer">
	<div class="wrap">
		
	<div class="footer-column">
            <h3>CURSOS</h3>
            <ul>
                <li><a href="#">Graduação</a></li>
                <li><a href="#">Graduação 100% Digital (EaD)</a></li>
                <li><a href="#">Pós-Graduação</a></li>
                <li><a href="#">Pós-Graduação 100% Digital (EaD)</a></li>
                <li><a href="#">Extensão Universitária</a></li>
                <li><a href="#">Cursos Livres</a></li>

                <br><br>
                <li><a href="#">Programas Stricto Sensu</a></li>
                <li><a href="#">Formação Pedagógica</a></li>

                <br>
                <li><a href="#">Blog UNISUAM</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>ESTUDE NA UNISUAM</h3>
            <ul>
                <li><a href="#">Sobre a UNISUAM</a></li>
                <li><a href="#">História</a></li>
                <li><a href="#">Nosso propósito</a></li>
                <li><a href="#">Unidades e Polos</a></li>
                <li><a href="#">Infraestrutura</a></li>
                <li><a href="#">Internacional</a></li>
                <li><a href="#">Núcleos</a></li>
                <li><a href="#">Governança Corporativa</a></li>
                <li><a href="#">Comissão Própria de Avaliação</a></li>
                <li><a href="#">Ações Sociais</a></li>
                <li><a href="#">Trabalhe Conosco</a></li>
                <li><a href="#">Carreiras</a></li>
                <li><a href="#">Alumni</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>FORMAS DE INGRESSO</h3>
            <ul>
                <li><a href="#">Vestibular</a></li>
                <li><a href="#">ENEM</a></li>
                <li><a href="#">Segunda Graduação</a></li>
                <li><a href="#">Transferência</a></li>
                <li><a href="#">Reabertura</a></li>
                <li><a href="#">Vest Solidário</a></li>

                <br>
                <li><a href="#">Bolsas e Financiamentos</a></li>
            </ul>

           <h3>POR QUE A UNISUAM</h3>
          
            <ul>
                <li><a href="#">Depoimentos</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Parcerias Internacionais</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>PESQUISA E EXTENSÃO</h3>
            <ul>
                <li><a href="#">Pesquisa e Inovação</a></li>
                <li><a href="#">Extensão</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>SOLUÇÕES CORPORATIVAS</h3>
            <ul>
                <li><a href="#">Forme seus Colaboradores</a></li>
                <li><a href="#">Seja um Parceiro</a></li>
                <li><a href="#">Quero ser um Polo UNISUAM</a></li>
                <li><a href="#">Programa de capacitação Aprendiz Coruja</a></li>
                <li><a href="#">Sua Marca na UNISUAM</a></li>
                <li><a href="#">Pólen UNISUAM</a></li>
                <li><a href="#">Locação de Espaços</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Dúvidas frequentes</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>CONTATOS</h3>
            <ul>
                <li><a href="#">Relacionamento com Escolas</a></li>
                <li><a href="#">Atendimento</a></li>
                <li><a href="#">Ouvidoria</a></li>
                <li><a href="#">Central de Relacionamento</a></li>
                <li><a href="#">Perguntas Frequentes</a></li>
                <li><a href="#">Trabalhe Conosco</a></li>
            </ul>

            <h3>UNISUAM NA REDE</h3>
            <div class="social-media">
                <ul class="wrapSocial">
                <li>
                <a href="https://www.instagram.com/unisuam/" target="_blank">
                    <i class="fab fa-instagram-square" aria-hidden="true"></i>
                </a>
                </li>
                <li>
                <a href="https://www.facebook.com/UNISUAM" target="_blank">
                    <i class="fab fa-facebook-square" aria-hidden="true"></i>
                </a>
                </li>
                <li>
                <a href="https://www.linkedin.com/school/unisuam/" target="_blank">
                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
                </li>
                <li>
                <a href="https://twitter.com/unisuam_mais" target="_blank">
                    <i class="fab fa-twitter-square" aria-hidden="true"></i>
                </a>
                </li>
                <li>
                <a href="https://www.youtube.com/c/UNISUAMoficial" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                </li>
                <li>
                <a href="https://www.tiktok.com/@unisuamoficial" target="_blank">
                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                </a>
                </li>
                </ul>
            </div>
            <div class="footer-column footer-qr">
                <?php $upload_dir = wp_upload_dir();?>
                <img class="emec" src="<?php echo $upload_dir['baseurl']; ?>/2025/01/emec.png" alt="EMEC" />
            </div>
        </div>

        


		</div><!-- .wrap -->
    </footer>
	
</div>

<style>
	/* FOOTER */
	.footer {
		background: var(--Expand-Palete-US-Grayscale-US-Dark-Gray-3-US, #20242D);
		padding: 40px;
		display: block;
	}
	.footer .wrap {
		width: 100%;
		max-width: 1100px;
		display: block;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.footer-column {
		position: relative;
		display: inline-block;
		float: left;
		width: 15%;
		min-width: 150px;
		margin: 8px;
	}

	.footer-column h3 {
		font-size: 12px;
		margin-bottom: 15px;
		color: #fff;
		font-weight: 700;
	}

	.footer-column ul {
		list-style: none;
		padding: 0;
	}

	.footer-column ul li {
		margin-bottom: 5px;
	}

	.footer-column ul li a {
		text-decoration: none;
		color: #fff;
		font-size: 12px;
	}

	.footer-column ul li a:hover {
		text-decoration: underline;
	}
    .wrapSocial {
        display: block;
        gap: 10px;
    }
    .wrapSocial li {
        list-style: none;
        width: 30%;
        float: left;
    }
    .wrapSocial li i {
        font-size: 30px;
    }
	.social-media {
		display: flex;
		gap: 15px;
		margin-top: 20px;
	}

	.social-media a {
		text-decoration: none;
		color: #fff;
		font-size: 14px;
	}

	.footer-qr {
		text-align: center;
		margin-top: 20px;
	}
	.footer-qr img {
        position: relative;
        display: block;
		max-width: 180px;
        left: -10px;
	}
</style>



<script>
(function(doc, head, body){
	window.interdeal = {
		sitekey  : "a685d4d6f17cfa69a39a6382d2b0d30f",
		Position : "right",
		Menulang : "PT",
		btnStyle : {
			vPosition : ["5%", "1%"],
			scale : [.8, .8],
			icon : {
					type : 1,
					shape : "circle",
					outline : false
				},
			color : {
				main : "#ff8c00",
				// second : "#2e2654"
				second : "#fff"
			}
		}
	}; 
	var coreCall             = doc.createElement('script');
	coreCall.src             = 'https://cdn.equalweb.com/core/2.0.7/accessibility.js';
	coreCall.defer           = true;
	coreCall.integrity       = 'sha512-I5mpAzD33VLeDeg+yaCpP8hPXDSn/9JoRrA/mrWZyqyQXtgpW9W4RvZOx5E0FxQydYR3lpdwIbQm+o4lGYoQ8A==';
	coreCall.crossOrigin     = 'anonymous';
	coreCall.setAttribute('data-cfasync', true );


	body? body.appendChild(coreCall) : head.appendChild(coreCall);
})(document, document.head, document.body);

$("#newAssist").click(function(){
	$("#INDmenu-btn").trigger("click");
});
$("#newAssistMobile").click(function(){
	$("#INDmenu-btn").trigger("click");
});
</script>
<style>
    #INDbtnWrap {
		display: none;
		opacity: 0;
		z-index: -9999999999 !important;
		position: reltive !important;
	}
</style>

</body>
</html>
