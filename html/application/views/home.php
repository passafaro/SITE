<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>



<header id="inicio" class="container-fluid">
    <div class="container">
        <div class="row">
            <nav class="d-none d-lg-block col-lg-8 col-xl-8" >
                <a href="#caixaInicio">Início</a>
                <a href="#caixaHabilidades">Habilidades</a>
                <a href="#caixaPortfolio">Portfólio</a>
                <a href="#caixaLinkRepositorio">Projetos</a>
            </nav>

            <div class="d-none d-lg-block col-lg-4 col-xl-4 redesSociaisTopo" >
                <?php if(!empty($redesSociais['whatsapp'])){ ?><a target="_blank" href="<?php echo $redesSociais['whatsapp'] ?>"><img alt="Whatsapp" src="<?php echo base_url() ?>application/views/imagens/icone-whats.png" ></a><?php } ?>
                <?php if(!empty($redesSociais['github'])){ ?><a target="_blank" href="<?php echo $redesSociais['github'] ?>"><img alt="Github" src="<?php echo base_url() ?>application/views/imagens/icone-git.png" ></a><?php } ?>
                <?php if(!empty($redesSociais['instagram'])){ ?><a target="_blank" href="<?php echo $redesSociais['instagram'] ?>"><img alt="instagram" src="<?php echo base_url() ?>application/views/imagens/icone-instagram.png" ></a><?php } ?>
                <?php if(!empty($redesSociais['linkedin'])){ ?><?php  ?><a target="_blank" href="<?php echo $redesSociais['linkedin'] ?>"><img alt="linkedin" src="<?php echo base_url() ?>application/views/imagens/icone-linkedin.png" ></a><?php ?><?php } ?>
                <?php if(!empty($redesSociais['facebook'])){ ?><a target="_blank" href="<?php echo $redesSociais['facebook'] ?>"><img alt="facebook" src="<?php echo base_url() ?>application/views/imagens/icone-facebook.png" ></a><?php } ?>
            </div>

            <div class="col-12 d-lg-none   " >
                <div class="redesSociaisTopoMobile">
                    <?php if(!empty($redesSociais['facebook'])){ ?><a target="_blank" href="<?php echo $redesSociais['facebook'] ?>"><img alt="facebook" src="<?php echo base_url() ?>application/views/imagens/icone-facebook.png" ></a><?php } ?>
                    <?php if(!empty($redesSociais['linkedin'])){ ?><?php  ?><a target="_blank" href="<?php echo $redesSociais['linkedin'] ?>"><img alt="linkedin" src="<?php echo base_url() ?>application/views/imagens/icone-linkedin.png" ></a><?php ?><?php } ?>
                    <?php if(!empty($redesSociais['instagram'])){ ?><a target="_blank" href="<?php echo $redesSociais['instagram'] ?>"><img alt="instagram" src="<?php echo base_url() ?>application/views/imagens/icone-instagram.png" ></a><?php } ?>
                    <?php if(!empty($redesSociais['github'])){ ?><a target="_blank" href="<?php echo $redesSociais['github'] ?>"><img alt="Github" src="<?php echo base_url() ?>application/views/imagens/icone-git.png" ></a><?php } ?>
                    <?php if(!empty($redesSociais['whatsapp'])){ ?><a target="_blank" href="<?php echo $redesSociais['whatsapp'] ?>"><img alt="Whatsapp" src="<?php echo base_url() ?>application/views/imagens/icone-whats.png" ></a><?php } ?>
                </div>
            </div>

            <div class="col-12 d-lg-none  " >
                <a id="botaoNavMobile" class="d-lg-none" data-bs-toggle="collapse"  href="#botoesNavegador"><img alt="botoes de navegação" src="<?php echo base_url() ?>application/views/imagens/botaoMobile.png" ></a>
                <nav class="navMobile collapse" id="botoesNavegador">
					<a href="#caixaInicio">Início</a>
                    <a href="#caixaHabilidades">Habilidades</a>
                    <a href="#caixaPortfolio">Portfólio</a>
                    <a href="#caixaLinkRepositorio">Projetos</a>
                </nav>
            </div>

        </div>
    </div>
</header>


<div class="container" id="caixaInicio">
    <div class="row justify-content-center">
        <div class="col-10 col-sm-9 col-md-8 col-lg-6 ">
            <h1>Olá, sou<br>Alessandro Passafaro.</h1>
            <p>Sou desenvolvedor Web especializado na criação e 
            desenvolvimento de web sites, hot sites, landing pages
            totalmente gerenciáveis.</p>
            <div class="fotoPerfil"></div>
        </div>
    </div>
</div>



<div class="container-fluid" id="caixaHabilidades">
    <div class="row justify-content-center faixa">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 ">
            <h1>Principais Habilidades</h1>
            <p>Experiência, criatividade e Inovação em<br>desenvolvimento para a Internet</p>
        </div>
    </div>
    <div class="container">    
        <ul class="row justify-content-center caixaItensHabilidades">
            <li class="col-12 col-sm-6 col-lg-4 col-xl-3"><img alt="Portfolio" class="img-fluid" src="<?php echo base_url() ?>application/views/imagens/h1.png"></li>
            <li class="col-12 col-sm-6 col-lg-4 col-xl-3"><img alt="Portfolio" class="img-fluid" src="<?php echo base_url() ?>application/views/imagens/h2.png"></li>
            <li class="col-12 col-sm-6 col-lg-4 col-xl-3"><img alt="Portfolio" class="img-fluid" src="<?php echo base_url() ?>application/views/imagens/h3.png"></li>
            <li class="col-12 col-sm-6 col-lg-4 col-xl-3"><img alt="Portfolio" class="img-fluid" src="<?php echo base_url() ?>application/views/imagens/h4.png"></li>
            <li class="col-12 col-sm-6 col-lg-4 col-xl-3"><img alt="Portfolio" class="img-fluid" src="<?php echo base_url() ?>application/views/imagens/h5.png"></li>
            <li class="col-12 col-sm-6 col-lg-4 col-xl-3"><img alt="Portfolio" class="img-fluid" src="<?php echo base_url() ?>application/views/imagens/h6.png"></li>
            <li class="col-12 col-sm-6 col-lg-4 col-xl-3"><img alt="Portfolio" class="img-fluid" src="<?php echo base_url() ?>application/views/imagens/h7.png"></li>
        </ul>
    </div>
</div>



<div class="container-fluid" id="caixaPortfolio">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 ">
                <h1>Portfólio</h1>
                <p>Desenvolvimento de sites responsivos e modernos</p>
            </div>
        </div>
        <div class="row justify-content-center caixaPortfolioItens">
            <a href="https://maringahospitalar.com.br/" 	target="_blank" class="col-12 col-sm-6 col-lg-4 col-xl-4" style="background-image:url('<?php echo base_url() ?>application/views/imagens/portfolio3.jpg')" ></a>
            <a href="https://www.pneusjandaia.com.br/" 		target="_blank" class="col-12 col-sm-6 col-lg-4 col-xl-4" style="background-image:url('<?php echo base_url() ?>application/views/imagens/portfolio4.jpg')" ></a>
            <a href="https://playgamemaringa.com.br/" 		target="_blank" class="col-12 col-sm-6 col-lg-4 col-xl-4" style="background-image:url('<?php echo base_url() ?>application/views/imagens/portfolio1.png')" ></a>
            <a href="https://artatualplanejados.com.br/" 	target="_blank" class="col-12 col-sm-6 col-lg-4 col-xl-4" style="background-image:url('<?php echo base_url() ?>application/views/imagens/portfolio2.jpg')" ></a>
            <a href="https://selantepneusjandaia.com.br/" 	target="_blank" class="col-12 col-sm-6 col-lg-4 col-xl-4" style="background-image:url('<?php echo base_url() ?>application/views/imagens/portfolio5.jpg')" ></a>
            <a href="https://samecmoveis.com.br/" 			target="_blank" class="col-12 col-sm-6 col-lg-4 col-xl-4" style="background-image:url('<?php echo base_url() ?>application/views/imagens/portfolio6.jpg')" ></a>
        </div>
    </div>
</div>




<div class="container-fluid" id="caixaLinkRepositorio">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8" >
                <h1>Projetos</h1>
                <p>Acesse e confira alguns projetos disponibilizados</p>
                <a target="_blank" href="https://github.com/passafaro?tab=repositories">Repositórios no GitHub</a>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid" id="caixaRodape">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8" >
                <div class="redesSociaisRodape" >
                <?php if(!empty($redesSociais['facebook'])){ ?><a target="_blank" href="<?php echo $redesSociais['facebook'] ?>"><img alt="Facebook" src="<?php echo base_url() ?>application/views/imagens/icone-facebook.png" ></a><?php } ?>
                    <?php if(!empty($redesSociais['linkedin'])){ ?><?php  ?><a target="_blank" href="<?php echo $redesSociais['linkedin'] ?>"><img alt="linkedin" src="<?php echo base_url() ?>application/views/imagens/icone-linkedin.png" ></a><?php ?><?php } ?>
                    <?php if(!empty($redesSociais['instagram'])){ ?><a target="_blank" href="<?php echo $redesSociais['instagram'] ?>"><img alt="instagram" src="<?php echo base_url() ?>application/views/imagens/icone-instagram.png" ></a><?php } ?>
                    <?php if(!empty($redesSociais['github'])){ ?><a target="_blank" href="<?php echo $redesSociais['github'] ?>"><img alt="github" src="<?php echo base_url() ?>application/views/imagens/icone-git.png" ></a><?php } ?>
                    <?php if(!empty($redesSociais['whatsapp'])){ ?><a target="_blank" href="<?php echo $redesSociais['whatsapp'] ?>"><img alt="whatsapp" src="<?php echo base_url() ?>application/views/imagens/icone-whats.png" ></a><?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="scrollToTop"></a>

