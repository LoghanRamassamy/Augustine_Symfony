<?php

/* AugustinePlatformBundle:Advert:index.html.twig */
class __TwigTemplate_b4621e43e3d6c8d7ac30de27dbd89dc5269a392389f6c80503d85750db0f8d2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
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
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"home\" >
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-lg-15 col-md-15 head-text\">
                        <h1 id=\"divDisp\" >Augustine II</h1>
                        <span >
                            <i class=\"fa fa-lightbulb-o \" ></i>Augustine
                                <p>
                                Ce projet est née par l'association de deux lyc&eacutees. Le <a href=\"http://www.vinci-melun.org\">lyc&eacutee L&eacuteonard de Vinci</a><!--space-->
                                de Melun (BTS CPI et BAC Pro technicien d'usinage), qui se concentre sur la conception de la coque.
                                <!--space-->
                                Et le <a href=\"http://www.diderot.org\">lycée Diderot</a> de Paris (BTS IRIS) qui se
                                concentre sur la partie &eacutel&eacutectronique de la voiture.
                                </p>
                        </span>
                        <span >
                            <i class=\"fa fa-lightbulb-o \" ></i>D'où vient le nom de ce projet ?
                                <p>
                                Augustin... Augustine. Ce nom vient tout simplement de <a
                                href=\"http://fr.wikipedia.org/wiki/Augustin_Mouchot\" target=\"_blank\">Augustin Mouchot</a>, l'homme
                                qui a invent&eacute le capteur solaire.
                                </p>
                        </span>

                        <span>
                            <i class=\"fa fa-lightbulb-o\" ></i>Challenge EducEco
                                <p>
                                Le but de ce challenge est de consommer le moins d'&eacutenergie possible pour parcourir 17,14Km avec
                                une vitesse moyenne <!--space-->
                                minimum de 25Km/h. Une demie-journ&eacutee est r&eacuteserv&eacutee &agrave la d&eacutecouverte de la piste et aux essais
                                libres. Les <!--space-->
                                contraintes du circuit urbain ne sont pas celles d'une piste de circuits automobile ainsi, les
                                v&eacutehicules seront appel&eacutes <!--space-->
                                par groupes homog&egravene class&eacutes selon:
                                </p>
                                <p>
                                Le groupe des v&eacutehicules &eacuteco-citadins (tous vecteurs d'&eacutenergie);
                                <br/>
                                Le groupe des v&eacutehicules prototypes thermiques (tous carburants);
                                <br/>
                                Le groupe des v&eacutehicules prototype &eacutelectriques.
                                </p>
                                <p>
                                Pour un acc&egraves au site <a href=\"http://www.educeco.net/\" target=\"_blank\">Cliquez ici</a>
                                </p>
                        </span>
                        
                        <span >
                            <i class=\"fa fa-lightbulb-o\" ></i>Association Tournesol
                            <p>
                            Une association d’intérêt général. <!--space-->
                            Tournesol, Artistes à l’Hôpital développe depuis 1990 une présence artistique dans une quarantaine d’hôpitaux de court, moyen et long séjour.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ HOME SECTION END -->
    <!-- ACTUALITE SECTION -->
    <div id=\"about\" >
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 sub-head\">
                    <h2  data-wow-delay=\"0.3s\" class=\"wow rollIn animated\" ><strong>Actualités </strong></h2>
                    <p class=\"sub-head\">Un peu de news... </p>
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
    <!--./ AFFICHAGE COMMENTAIRE SECTION -->
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
        // line 169
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
        // line 180
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
        // line 191
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
    </div>
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
        // line 220
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
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug1.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.5s\">


                        <img src=\"";
        // line 238
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
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug2.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.6s\">


                        <img src=\"";
        // line 257
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
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug3.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.7s\">


                        <img src=\"";
        // line 276
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
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug4.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">

                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.8s\">


                        <img src=\"";
        // line 295
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
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug5.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.9s\">
                        <img src=\"";
        // line 311
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
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug6.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.9s\">
                        <img src=\"";
        // line 326
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
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/portfolio/aug7.jpg"), "html", null, true);
        echo "\"><i class=\"fa fa-search-plus fa-5x\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.9s\">
                        <img src=\"";
        // line 341
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
        // line 350
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
    <div id=\"sponsor\" class=\"pad-top-botm\" >
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
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/sponsor/Advixys.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.5s\">
                        <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/sponsor/Decathlon.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.6s\">
                        <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/sponsor/Eauridis.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 \">
                    <div class=\"portfolio-item wow rotateIn animated\" data-wow-delay=\"0.7s\">
                        <img src=\"";
        // line 385
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
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/Social/facebook.png"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                     <a href=\"#\"> <img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/Social/google-plus.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                     <a href=\"http://twitter.com/ProjetAugustine\"> <img src=\"";
        // line 407
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
        return array (  516 => 407,  512 => 406,  508 => 405,  485 => 385,  477 => 380,  438 => 350,  426 => 341,  417 => 335,  405 => 326,  396 => 320,  349 => 285,  324 => 266,  299 => 247,  287 => 238,  275 => 229,  263 => 220,  231 => 191,  259 => 166,  249 => 162,  244 => 160,  239 => 158,  236 => 157,  233 => 156,  226 => 32,  215 => 170,  213 => 156,  100 => 55,  74 => 34,  34 => 12,  65 => 28,  480 => 162,  474 => 161,  469 => 375,  461 => 370,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 311,  381 => 120,  379 => 119,  374 => 304,  368 => 112,  365 => 111,  362 => 295,  360 => 109,  355 => 106,  341 => 105,  337 => 276,  322 => 101,  314 => 99,  312 => 257,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 168,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 33,  220 => 12,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 63,  107 => 36,  61 => 24,  273 => 96,  269 => 94,  254 => 164,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 180,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 31,  67 => 15,  63 => 15,  59 => 25,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 11,  29 => 5,  87 => 25,  72 => 32,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 51,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 9,  44 => 16,  35 => 5,  31 => 5,  43 => 10,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 70,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 18,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 169,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 20,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 5,);
    }
}
