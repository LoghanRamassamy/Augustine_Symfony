<?php

/* AugustinePlatformBundle:Advert:index.html.twig */
class __TwigTemplate_b4621e43e3d6c8d7ac30de27dbd89dc5269a392389f6c80503d85750db0f8d2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AugustinePlatformBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'augustineplatform_body' => array($this, 'block_augustineplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AugustinePlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Accueil -";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_augustineplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "    <!--<div id=\"home\" >
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-lg-15 col-md-12 head-text\">
                        <h1 id=\"divDisp\" data-wow-delay=\"0.9s\" class=\"wow rollIn animated\">Augustine II</h1>
                        <div class=\"col-lg-15 col-md-15 head-text\">
                            <span>
                                <i class=\"fa fa-lightbulb-o\" > Challenge EducEco</i>
                                    <p>
                                    Le but de ce challenge est de consommer le moins d'&eacutenergie possible pour parcourir 17,14Km avec
                                    une vitesse moyenne <!--space
                                    minimum de 25Km/h. Une demie-journ&eacutee est r&eacuteserv&eacutee &agrave la d&eacutecouverte de la piste et aux essais
                                    libres. Les <!--space
                                    contraintes du circuit urbain ne sont pas celles d'une piste de circuits automobile ainsi, les
                                    v&eacutehicules seront appel&eacutes <!--space
                                    par groupes homog&egravene class&eacutes selon:
                                    <br/>
                                    Le groupe des v&eacutehicules &eacuteco-citadins (tous vecteurs d'&eacutenergie)
                                    <br/>
                                    Le groupe des v&eacutehicules prototypes thermiques (tous carburants)
                                    <br/>
                                    Le groupe des v&eacutehicules prototype &eacutelectriques
                                    <br/>
                                    Pour un acc&egraves au site de <a href=\"http://www.educeco.net/\" target=\"_blank\">challenge EducEco</a>
                                    </p>
                            </span>
                        </div>
                        <div class=\"col-lg-15 col-md-4 head-text\">
                            <span >
                                <i class=\"fa fa-lightbulb-o \" > Augustine</i>
                                    <p>
                                    Ce projet est née par l'association de deux lyc&eacutees. Le <a href=\"http://www.vinci-melun.org\">lyc&eacutee L&eacuteonard de Vinci</a><!--space
                                    de Melun (BTS CPI et BAC Pro technicien d'usinage), qui se concentre sur la conception de la coque.
                                    <!--space
                                    Et le <a href=\"http://www.diderot.org\">lycée Diderot</a> de Paris (BTS IRIS) qui se
                                    concentre sur la partie &eacutel&eacutectronique de la voiture.
                                    </p>
                            </span>
                        </div>
                        <div class=\"col-lg-15 col-md-4 head-text\">
                            <span >
                                <i class=\"fa fa-lightbulb-o \" > Origine de ce nom</i>
                                    <p>
                                    Augustin... Augustine. Ce nom vient tout simplement de <a
                                    href=\"http://fr.wikipedia.org/wiki/Augustin_Mouchot\" target=\"_blank\">Augustin Mouchot</a>, l'homme
                                    qui a invent&eacute le capteur solaire.
                                    </p>
                            </span>
                        </div>
                        <div class=\"col-lg-15 col-md-4 head-text\">
                            <span>
                                <i class=\"fa fa-lightbulb-o\" > Association Tournesol</i>
                                <p>
                                Une association d’intérêt général. <!--space
                                Tournesol, Artistes à l’Hôpital développe depuis 1990 une présence artistique dans une quarantaine d’hôpitaux de court, moyen et long séjour.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--./ HOME SECTION END -->
    <!-- ;/ SECTION BANNIERE -->
    <div id=\"home\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-lg-12 col-md-12 head-text\">
                        <div id=\"testimonials\" class=\"carousel slide\" data-ride=\"carousel\">

                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#testimonials\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#testimonials\" data-slide-to=\"1\" class=\"\"></li>
                                <li data-target=\"#testimonials\" data-slide-to=\"2\" class=\"\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item  active\">
                                    <div class=\"container center\">
                                        <div class=\"col-lg-12 col-md-12 slide-custom\">
                                            <span>
                                                <h3><i class=\"fa fa-lightbulb-o \" > Challenge EducEco</i></h3>
                                                <p>
                                                Le but de ce challenge est de consommer le moins d'&eacutenergie possible pour parcourir 17,14Km avec
                                                une vitesse moyenne <!--space-->
                                                minimum de 25Km/h. Une demie-journ&eacutee est r&eacuteserv&eacutee &agrave la d&eacutecouverte de la piste et aux essais
                                                libres. Les <!--space-->
                                                contraintes du circuit urbain ne sont pas celles d'une piste de circuits automobile ainsi, les
                                                v&eacutehicules seront appel&eacutes <!--space-->
                                                par groupes homog&egravene class&eacutes selon:
                                                Le groupe des v&eacutehicules &eacuteco-citadins (tous vecteurs d'&eacutenergie)
                                                Le groupe des v&eacutehicules prototypes thermiques (tous carburants)
                                                Le groupe des v&eacutehicules prototype &eacutelectriques
                                                Pour un acc&egraves au site de <a href=\"http://www.educeco.net/\" target=\"_blank\">challenge EducEco</a>.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"container center\">
                                        <div class=\"col-lg-12 col-md-12 slide-custom\">
                                            <span>
                                                <h3><i class=\"fa fa-lightbulb-o \" > Augustine</i></h3>
                                                <p>
                                                    Ce projet est née par l'association de deux lyc&eacutees. Le <a href=\"http://www.vinci-melun.org\">lyc&eacutee L&eacuteonard de Vinci</a><!--space-->
                                                    de Melun (BTS CPI et BAC Pro technicien d'usinage), qui se concentre sur la conception de la coque.
                                                    <!--space-->
                                                    Et le <a href=\"http://www.diderot.org\">lycée Diderot</a> de Paris (BTS IRIS) qui se
                                                    concentre sur la partie &eacutel&eacutectronique de la voiture.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"container center\">
                                        <div class=\"col-lg-12 col-md-12 slide-custom\">
                                            <span>
                                                <h3><i class=\"fa fa-lightbulb-o \" > Origine de ce nom</i></h3>
                                                <p>
                                                    Augustin... Augustine. Ce nom vient tout simplement de <a
                                                    href=\"http://fr.wikipedia.org/wiki/Augustin_Mouchot\" target=\"_blank\">Augustin Mouchot</a>, l'homme
                                                    qui a invent&eacute le capteur solaire.
                                                </p>
                                                <h3><i class=\"fa fa-lightbulb-o\" > Association Tournesol</i></h3>
                                                <p>
                                                    Une association d’intérêt général. <!--space-->
                                                    Tournesol, Artistes à l’Hôpital développe depuis 1990 une présence artistique dans une quarantaine d’hôpitaux de court, moyen et long séjour.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class=\"left carousel-control\" href=\"#testimonials\" role=\"button\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#testimonials\" role=\"button\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ BANNIERE SECTION END-->
    <!-- ACTUALITE SECTION -->
    <div id=\"about\" >
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 sub-head\">
                    <h2  data-wow-delay=\"0.9s\" class=\"wow rollIn animated\" ><strong>Actualités </strong></h2>
                    <!--<p class=\"sub-head\">Un peu de news... </p>-->
                </div>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"media wow rotateIn animated\" data-wow-delay=\"0.2s\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-recycle fa-4x  \"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">We Promote Recycling</h3>
                            <p >
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. 
                                Aenean faucibus luctus enim. 
                            </p>
                        </div>
                    </div>
                    <div class=\"media wow rotateIn animated\" data-wow-delay=\"0.3s\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-history fa-4x  \"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Eco-Friendly Techniques</h3>
                            <p>
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. 
                                Aenean faucibus luctus enim. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row pad-top-botm wow flipInX animated\" data-wow-delay=\"0.7s\">
                <div class=\"col-lg-8 col-md-8 col-sm-8 \" >
                    <h3><strong>Commentaire ?</strong></h3>
                    <form>
                        <!-- Si l'utilisateur est connecté, alors son pseudo sera entré directement, sinon 'Pseudonyme' sera la valeur par défaut. -->
                        <!--<input type=\"text\" name=\"com_user\" value=\"<?php echo \$user ?>\">-->
                        <!-- Permet de noter l'actualité de 1 à 5-->
                        <p>
                        Qu'elle actualité ? <select name=\"num_actu\">
                        <option value=\"1\" selected=\"selected\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                        <option value=\"4\">4</option>
                        </select> / 4  -- 
                        Notez cette actualité : <select name=\"com_note\">
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\" selected=\"selected\">3</option>
                        <option value=\"4\">4</option>
                        <option value=\"5\">5</option>
                        </select> / 5
                        </p>
                        <div class=\"form-group\">
                            <textarea name=\"com\"  required=\"required\" data-wow-delay=\"0.7s\" class=\"wow rotateIn animated form-control\" style=\"min-height: 150px;\" placeholder=\"Commentaire\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success btn-block btn-lg wow rotateIn animated \" data-wow-delay=\"0.8s\">Valider</button>
                        </div>
                        <!-- Bouton pour soumettre son commentaire -->
                    </form>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 text-center\" >
                    <i class=\"fa fa-lightbulb-o big-icon \"></i>
                </div>
            </div>
        </div>
    </div>
    <!--./ ACTUALITE SECTION END -->
    <!--./ AFFICHAGE COMMENTAIRE SECTION --><!--
    <div class=\"donars-section\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-lg-12 col-md-12 \">
                        <div id=\"testimonials\" class=\"carousel slide\" data-ride=\"carousel\">

                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#testimonials\" data-slide-to=\"0\" class=\"\"></li>
                                <li data-target=\"#testimonials\" data-slide-to=\"1\" class=\"\"></li>
                                <li data-target=\"#testimonials\" data-slide-to=\"2\" class=\"active\"></li>
                            </ol>

                            <div class=\"carousel-inner\">
                                <div class=\"item\">
                                    <div class=\"container center\">
                                        <div class=\"col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom\">

                                            <h4><i class=\"fa fa-quote-left\"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. <i class=\"fa fa-quote-right\"></i></h4>
                                            <div class=\"user-img pull-right\">
                                                <img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/user2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle image-responsive\">
                                            </div>
                                            <h5 class=\"pull-right\"><strong class=\"c-black\">Lorem Dolor</strong></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"container center\">
                                        <div class=\"col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom\">
                                            <h4><i class=\"fa fa-quote-left\"></i>Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. <i class=\"fa fa-quote-right\"></i></h4>
                                            <div class=\"user-img pull-right\">
                                                <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/user.gif"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle image-responsive\">
                                            </div>
                                            <h5 class=\"pull-right\"><strong class=\"c-black\">Faucibus luctus</strong></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item active\">
                                    <div class=\"container center\">
                                        <div class=\"col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom\">
                                            <h4><i class=\"fa fa-quote-left\"></i>Sed ultricies, libero ut adipiscing fringilla, ante elit luctus lorem, a egestas dui metus a arcu condimentum. <i class=\"fa fa-quote-right\"></i></h4>
                                            <div class=\"user-img pull-right\">
                                                <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/user2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle image-responsive\">
                                            </div>
                                            <h5 class=\"pull-right\"><strong class=\"c-black\">Sed ultricies</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--./ AFFICHAGE COMMENTAIRE SECTION END-->
    <!--./ GALERIE SECTION -->
    <!--<div id=\"port-folio\" class=\"pad-top-botm\" >
        <div class=\"container\">
            <div class=\"row text-center \">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2\">
                    <h2 data-wow-delay=\"0.3s\" class=\"wow rollIn animated\"><strong>GALERIE </strong></h2>
                    <p class=\"sub-head\">Voici quelques images de moment important du projet.</p>
                </div>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.4s\">


                        <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                            <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview\" title=\"Image Title Here\" href=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug1.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.5s\">


                        <img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                            <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview \" title=\"Image Title Here\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug2.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.6s\">


                        <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview \" title=\"Image Title Here\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug3.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.7s\">


                        <img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                           <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview\" title=\"Image Title Here\" href=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug4.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.8s\">


                        <img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                            <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview\" title=\"Image Title Here\" href=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug5.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.9s\">
                        <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview\" title=\"Image Title Here\" href=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug6.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.9s\">
                        <img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview \" title=\"Image Title Here\" href=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug7.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.9s\">
                        <img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                        <div class=\"overlay\">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class=\"preview\" title=\"Image Title Here\" href=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug8.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--./ GALERIE SECTION END -->
    
    <!--./ SPONSOR SECTION -->
    <!--<div id=\"sponsor\" class=\"pad-top-botm\" >
        <div class=\"container\">
            <div class=\"row text-center \">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2\">
                    <h2 data-wow-delay=\"0.3s\" class=\"wow rollIn animated\"><strong>SPONSOR </strong></h2>
                    <br/>
                </div>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.4s\">
                        <img src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/sponsor/Advixys.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.5s\">
                        <img src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/sponsor/Decathlon.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.6s\">
                        <img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/sponsor/Eauridis.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.7s\">
                        <img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/sponsor/Kartland.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ SPONSOR SECTION END -->
    <!--./ CONTACT SECTION -->
    <div id=\"contact\" >
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2\">
                    <h2 data-wow-delay=\"0.3s\" class=\"wow rollIn animated\"><strong>Contact </strong></h2>
                    <p class=\"sub-head\">Si vous souhaitez d'autres renseignements ou bien nous faire parvenir vos avis</p>

                    <p class=\"sub-head  wow rotateIn animated\" data-wow-delay=\"0.4s\"><strong>Adresse :</strong> Rue Edouard Branly, Melun 77000</p>
                </div>
            </div>
            <div class=\"row  text-center wow rotateIn animated\" data-wow-delay=\"0.4s\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2\">
                    <a href=\"http://facebook.com/projetaugustinemelun\">  <img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/Social/facebook.png"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                     <a href=\"#\"> <img src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/Social/google-plus.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                     <a href=\"http://twitter.com/ProjetAugustine\"> <img src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/Social/twitter.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    </div>
                </div>
            <div class=\"row pad-top-botm\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2\">
                    <form action=\"index.php\" method=\"POST\">
                        <div class=\"form-group\">
                            <select class=\"form-control\" name=\"civilite\" value=\"\">
                                <option>Mr</option>
                                <option>Mme</option>
                                <option>Mlle</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"nom\" class=\"form-control wow rotateIn animated\" data-wow-delay=\"0.5s\" required=\"required\" placeholder=\"Nom\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"prenom\" class=\"form-control wow rotateIn animated\" required=\"required\" data-wow-delay=\"0.6s\" placeholder=\"Prenom\">
                        </div> 
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"objet\" class=\"form-control wow rotateIn animated\" required=\"required\" data-wow-delay=\"0.6s\" placeholder=\"Objet\">
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"message\"  required=\"required\" data-wow-delay=\"0.7s\" class=\"wow rotateIn animated form-control\" style=\"min-height: 150px;\" placeholder=\"Message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"Envoyer\" class=\"btn btn-success btn-block btn-lg wow rotateIn animated \" data-wow-delay=\"0.8s\" >Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--./ CONTACT SECTION END -->
    
";
    }

    public function getTemplateName()
    {
        return "AugustinePlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 495,  600 => 494,  596 => 493,  573 => 473,  565 => 468,  557 => 463,  549 => 458,  525 => 437,  513 => 428,  504 => 422,  492 => 413,  483 => 407,  471 => 398,  461 => 391,  449 => 382,  436 => 372,  424 => 363,  411 => 353,  399 => 344,  386 => 334,  374 => 325,  362 => 316,  350 => 307,  318 => 278,  304 => 267,  290 => 256,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
