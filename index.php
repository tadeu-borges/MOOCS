<?php

    require_once('config.php');
    //require_once($CFG->dirroot .'/course/lib.php');
    //require_once($CFG->libdir .'/filelib.php');

   // $PAGE->set_course($SITE);
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"  dir="ltr" lang="en" xml:lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"  dir="ltr" lang="en" xml:lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"  dir="ltr" lang="en" xml:lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html style="" class="yui3-js-enabled js no-touch js cssanimations csstransitions" dir="ltr" xml:lang="en" lang="en">
    <div class="" id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important"></div><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>UFG - Recursos Educacionais Abertos</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link href="UFG_REA/css.css" rel="stylesheet" type="text/css"><link href="UFG_REA/css_002.css" rel="stylesheet" type="text/css">    
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="UFG_REA/favicon.ico">
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<meta http-equiv="pragma" content="no-cache">
    	<meta http-equiv="expires" content="0">

        <link rel="stylesheet" type="text/css" href="UFG_REA/yui_combo_002.css">
        <script type="text/javascript" src="UFG_REA/yui_combo_003.js"></script>
        <link href="UFG_REA/yui_combo.css" id="yui_3_9_1_2_1408118235570_8" rel="stylesheet" charset="utf-8" />
        <script async="" src="UFG_REA/yui_combo_004.js" id="yui_3_9_1_2_1408118235570_9" charset="utf-8"></script>
        <script async="" src="UFG_REA/yui_combo_002.js" id="yui_3_9_1_2_1408118235570_10" charset="utf-8"></script>
        <script async="" src="UFG_REA/yui_combo.js" id="yui_3_9_1_2_1408118235570_11" charset="utf-8"></script>
        <script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script>
        <link rel="stylesheet" type="text/css" href="UFG_REA/all.css">
        <script type="text/javascript" src="UFG_REA/head.js"></script>

        <style>
        .fixed {
        	position: fixed;
        	top: 0;
        	right: 0;
        	left: 0;
        	z-index: 10000;
        }

        .colaboradores .title {
        	font-size: 18px !important;
        }

        .colaboradores .linkbox {
        	height: 450px;
        	background: #FFF;
        }

        .colaboradores .linkbox:hover {
        	background: #3261B9;
        }

        .colaboradores .linkbox:hover p {
        	color: #FFF !important;
        }

        .colaboradores .linkbox p.description {
        	font-size: 17px;
        	line-height: 22px;
        }
        </style>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.js"></script>
        <link rel="stylesheet" type="text/css" href="UFG_REA/bootstrap/css/bootstrap.css" />
        <script type="text/javascript" src="UFG_REA/bootstrap/js/bootstrap.js"></script>

    </head>
<body class=" jsenabled">
    <div class="skiplinks"><a class="skip" href="#maincontent">Skip to main content</a></div>
    <script type="text/javascript">
    //<![CDATA[
    document.body.className += ' jsenabled';
    //]]>
    </script>

    <header id="header2" class="row header">
        <div id="topbar" class="row">
            <div class="sklt-container">
                <div class="sixteen columns">
    			<?php

    				if (!empty($USER->id)) {
    					echo "<div id='login' class='topbutton'><a href='/user/profile.php'>";
    					echo "Bem vindo ";
    					echo $USER->firstname, " ", $USER->lastname;
    					echo "!</a>", $OUTPUT->user_picture($USER);
    					echo "<a href='/login/logout.php?sesskey=", $USER->sesskey,"'>Sair</a></div>";
    				} else {
    					echo "<div id='login' class='topbutton'><a href='/login/index.php'>Login</a></div>";
    				}
    			?>
                </div>
            </div>
        </div>
        <div id="menubar" class="row">
                <div class="sklt-container">
                    <div class="four columns" style="width: 400px">
                        <div id="logomarca">
                        <a href="http://www.ufg.br" target="_blank">
                            <img src="UFG_REA/ufg_logo.png" width="170px" style="display: inline-block; vertical-align: top; margin-right: 30px"></a>
                            <a href="http://www.inf.ufg.br" target="_blank">
                                <img src="UFG_REA/inf_logo.png" width="200px" style="display: inline-block; vertical-align: top; padding-top: 5px">
                            </a>
                        </div>
    					<div id="responsive_menu_button"></div><div id="responsive_menu">   
    						<ul class="rp-menu">
    							<li><a href="">Início</a></li>
    							<li><a href="/mod/simplecertificate/verify.php">Validar Certificado</a></li>
                				<?php
                					if (empty($USER->id) or isguestuser($USER->id)) {
                						echo "<li><a href='/login/signup.php?'>Inscrição</a>";
                					}
                				?>
                                <li><a href="/course/view.php?id=3">Contato</a></li>
                                </ul>
                        </div>
                    </div>
                    <div class="twelve columns" style="width: 760px">
                        <div id="menu">
                            <ul>
                                <li><a href="" class="active"><span data-hover="Início">Início</span></a></li>
    						    <li><a href="/mod/simplecertificate/verify.php"><span data-hover="Validar Certificado">Validar Certificado</span></a></li>
        						<?php

        							if (empty($USER->id) or isguestuser($USER->id)) {
        								echo "<li><a href='/login/signup.php?'><span data-hover='Inscrição'>Inscrição</span></a></li>";
        							}
        						?>
                                <li><a href="/course/view.php?id=3"><span data-hover="Contato">Contato</span></a></li>
                            </ul>   
                        </div>
                    </div>
                </div>
        </div>
    </header>
    
    <div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="UFG_REA/img/first.png" alt="...">
                <div class="carousel-caption">
                ...
                </div>
            </div>
            <div class="item">
                <img src="UFG_REA/img/second.png" alt="...">
                <div class="carousel-caption">
                ...
                </div>
            </div>
            <div class="item">
              <img src="UFG_REA/img/third.png" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <div id="contentarea" class="row">
        <div class="sklt-container">
            
                        
            <div class="sixteen columns">
                <!-- Courses List -->
                
                        <div class="sixteen columns alpha" id="featuredCourses">
                            <div class="p">TODOS OS CURSOS</div>
                        
                            <!--
                            <div id="allCourses">
                                <a href="/course/index.php"><div>Todos os Cursos</div></a>
                            </div>
                            -->
                        </div>
                
                <div class="four columns course  alpha">
                            <ul class="grid cs-style-3">
                                <li>
                                    <figure>
                                        <a href="/course/view.php?id=4">
                                            <img src="UFG_REA/Banner2_mini.png" alt="GNU-Linux">
                                        </a>
                                        <figcaption>
                                            <h3>GNU/Linux Essencial</h3>
                                            <div>
                                                <a href="/course/view.php?id=4">Visitar</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
						<div class="four columns course  four-box-per-line">
                            <ul class="grid cs-style-3">
                                <li>
                                    <figure>
                                        <a href="/course/view.php?id=2">
                                            <img src="UFG_REA/Ubuntu_REA_Logo_mini.png" alt="Ubuntu">
                                        </a>
                                        <figcaption>
                                            <h3>Ubuntu Básico</h3>
                                            <div>
                                                <a href="/course/view.php?id=2">Finalizado - Visitar</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="four columns course four-box-per-line ">
                            <ul class="grid cs-style-3">
                                <li>
                                    <figure>
                                        <a href="">
                                            <img src="UFG_REA/libreoffice_course_disabled.png" alt="LibreOffice">
                                        </a>
                                        <figcaption style="background: #838383;">
                                            <h3>LibreOffice</h3>
                                            <div>
                                                <a href="" style="background: #838383;">A Partir de Agosto de 2015</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
			            
                <!-- Link Box -->
				<div class="sixteen columns alpha" id="featuredCourses">
                    <div class="p">COLABORE</div>
				</div>
                <div class="sixteen columns alpha">
                    <div class="four columns linkbox  alpha">
						<div style="text-align: center;">
						<a href="/course/view.php?id=3">
						<img src="UFG_REA/contato.png" style="width: 110px"; ></a></div>
                       	<p class="title">Fale Conosco</p>
                        <p class="description">Área reservada para o contato com usuários. Tire suas dúvidas, envie sugestões, reporte problemas, saiba como você pode contribuir.</p>
                    </div>
                    <div class="four columns linkbox four-box-per-line ">
						<div style="text-align: center;">
							<a href="">
							<img src="UFG_REA/wikilivros_logo.png" ></a>
						</div>
                        <p class="description">Ajude-nos a escrever o material didático dos cursos. Participe de Projetos no site Wikilivros:
							<a href="http://pt.wikibooks.org/wiki/Manual_do_Ubuntu" target="_blank">Projeto Ubuntu</a>
							<br/>
							<a href="https://pt.wikibooks.org/wiki/Linux_Essencial" target="_blank">Projeto Linux Essencial</a>
							<br />
							<a class="disabled" href="" target="_blank">Projeto LibreOffice</a>
						</p>
                    </div>
				<!--<div class="four columns linkbox four-box-per-line ">
							<div style="text-align: center;">
							<a href="">
							<img src="UFG_REA/wikimedia_logo.png" ></a></div>
                            <p class="description"></p>
                        </div>-->
					<div class="four columns linkbox four-box-per-line omega">
                        <div style="text-align: center;">
							<a href="">
							<img src="UFG_REA/github_logo.png" style="width: 140px; padding-top: 60px"></a>
						</div>
                        <p class="description">
        	                Colabore com o desenvolvimento deste site. Este site se baseia no <a href="https://download.moodle.org/releases/security/" target="_blank">Moodle 2.5</a> e Template <a href="https://github.com/barbararamiro/moodle-theme_learnmoodle" target="_blank">Learnmoodle</a>. Você pode baixar todo o código-fonte alterado e acrescentado no Projeto do <a href="https://github.com/tadeu-borges/MOOCS" target="_blank">GitHub</a>.
                        </p>
                    </div>
                </div>


                <div class="sixteen columns alpha" id="featuredCourses">
                    <div class="p">COLABORADORES</div>
				</div>
				<div class="colaboradores">
	                <div class="sixteen columns alpha">
	                    <div class="four columns linkbox  alpha">
							<div style="text-align: center;">
								<a href="/course/view.php?id=3">
									<img src="UFG_REA/myTeam/Hugo_portrait.png" style="width: 97%";>
								</a>
							</div>
	                       	<p class="title">Hugo do Nascimento</p>
	                        <p class="description">Dicant vocent nominavi ex namo, labor probatus neci, duo sonetaw vocent repre hendunt ei. Pondem reprimiue per gamen aderol duil.</p>
	                    </div>
	                    <div class="four columns linkbox four-box-per-line ">
							<div style="text-align: center;">
								<a href="">
									<img src="UFG_REA/myTeam/Marcelo_portrait.jpg" style="width: 97%";>
								</a>
							</div>
							<p class="title">Marcelo Akira</p>
	                        <p class="description">Dicant vocent nominavi ex namo, labor probatus neci, duo sonetaw vocent repre hendunt ei. Pondem reprimiue per gamen aderol duil.
							</p>
	                    </div>
						<div class="four columns linkbox four-box-per-line omega">
	                        <div style="text-align: center;">
								<a href="">
									<img src="UFG_REA/myTeam/Tadeu_portrait.png" style="width: 97%";>
								</a>
							</div>
							<p class="title">Tadeu Augusto Borges</p>
	                        <p class="description">
	        	               Graduando do Curso de Sistemas de Informação na Universidade Federal de Goiás.
	                        </p>
	                    </div>
	                    <div class="four columns linkbox four-box-per-line omega">
	                        <div style="text-align: center;">
								<a href="">
									<img src="UFG_REA/myTeam/Ricardo_portrait.jpg" style="width: 97%";>
								</a>
							</div>
							<p class="title">Ricardo Borges</p>
	                        <p class="description">
	        	               Graduando do Curso de Sistemas de Informação na Universidade Federal de Goiás.
	                        </p>
	                    </div>
	                </div>
                </div>





            </div>
            
                    </div>

    </div>

    
    <div id="footer" class="row">
    <div class="sklt-container">
        <div class="one-third column">
            <div class="footermod footermod_aboutus"><div id="defaultlogowhite"></div><p>Nós apoiamos que outros projetos copiem, remixem e retornem com melhorias. Envie-nos um e-mail informando da (re)utilização do conteúdo ou da plataforma.</p></div>        </div> 
        <div class="one-third column">
            <div class="footermod footermod_links"><p class="title">Links</p><ul class="links"><li><a target="blank" href="http://www.ufg.br">Universidade Federal de Goiás</a></li><li><a target="blank" href="http://www.inf.ufg.br">Instituto de Informática - UFG</a></li><li><a target="blank" href="http://www.cercomp.ufg.br">Centro de Recursos Computacionais - UFG</a></li></ul></div>        </div>
        <div class="one-third column omega">
            <div class="footermod footermod_contactinfo"><p class="title">Informações para Contato</p><ul class="contactinfos"><li class="address_icon">Instituto de Informática (INF) - UFG</li><li class="address_icon">Alameda Palmeiras, Quadra D, Campus Samambaia</li><li class="address_icon">Caixa Postal 131 - CEP 74001-970</li><li class="city_icon">Goiânia - Goiás - Brasil</li><li class="phone_icon">+55 (62) 3521-1181 / Fax: +55 (62) 3521-1182</li><li class="mail_icon"><a href="mailto:contato@moocs.rea.ufg.br">contato@moocs.rea.ufg.br</a></li></ul></div>        </div>
    </div>
</div>
<div id="footerend" class="row">
    <div class="sklt-container">
        <div class="seven columns">
            <div id="footerendleft">
                <a target="blank" href="http://www.ufg.br" style="color: #FFF; text-decoration: none;">Universidade Federal de Goiás</a>  | <a style="color: #FFF; text-decoration: none;" href="http://curso.rea.ufg.br/" target="blank">REA</a>           </div>
        </div>
        <div class="nine columns float-right">
               </div>
</div>

<script type="text/javascript" src="UFG_REA/footer.js"></script>
<script type="text/javascript">
var num = 50;
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('#topbar').addClass('fixed');
    } else {
        $('#topbar').removeClass('fixed');
    }
});
</script>


</body></html>
