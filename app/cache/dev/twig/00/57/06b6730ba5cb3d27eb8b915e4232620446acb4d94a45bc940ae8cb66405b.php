<?php

/* ::layout.html.twig */
class __TwigTemplate_005706b6730ba5cb3d27eb8b915e4232620446acb4d94a45bc940ae8cb66405b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <![endif]-->
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--  Bootstrap Style -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--  Font-Awesome Style -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--  Animation Style -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--  Pretty Photo Style -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    <div id=\"pre-div\">
        <div id=\"loader\">
        </div>
    </div>
    <!--/. PRELOADER END -->
    <div class=\"navbar navbar-default navbar-fixed-top move-me \">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <!-- LOGO PROJET -->

                <a class=\"navbar-brand\" href=\"http://www.vinci-melun.org/\">
                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/img/logo-ldv.jpg"), "html", null, true);
        echo "\" class=\"navbar-brand-logo\" alt=\"\" />
                </a>

                <a class=\"navbar-brand\" href=\"http://www.diderot.org/\">
                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/img/logo-diderot.jpg"), "html", null, true);
        echo "\" class=\"navbar-brand-logo\" alt=\"\" />
                </a>

            </div>
            <div class=\"navbar-collapse collapse move-me\">
                <ul class=\"nav navbar-nav navbar-right\">

                    <li >
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("augustine_platform_home");
        echo "\"> Accueil </a>
                    </li>
                    <li >
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("augustine_platform_home");
        echo "#about\"> Actualités </a>
                    </li>
                    
                    <li >
                        <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("augustine_platform_history");
        echo "\"> Historique </a>
                    </li>

                    <li >
                        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("augustine_platform_home");
        echo "#sponsor\"> Sponsor </a>
                    </li>

                    <li >
                        <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("augustine_platform_home");
        echo "#contact\"> Contact </a>
                    </li>
                  <li class=\"dropdown\" id=\"menuLogin\">
                  <!--<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\">Admin</a>
                       <div class=\"dropdown-menu\" style=\"padding:17px;\">
                           <p style=\"padding:1px;\"><a
                             href=\"user.php\"><i class=\"fa fa-group\"></i> Gestion utilisateurs</a>
                           </p><hr>
                             <p style=\"padding:1px;\"><a
                               href=\"actualite.php\"><span class=\"glyphicon glyphicon-bullhorn\"> Gestion actualités</span></a>
                              </p><hr>
                            <p style=\"padding:1px;\"><a
                               href=\"commentaire.php\"><span class=\"glyphicon glyphicon-comment\"> Gestion commentaires</span></a>
                            </p><hr>
                        <p style=\"padding:1px;\"><a href=\"options.php\"><span class=\"glyphicon glyphicon-cog\"> Options</span></a></p>
                        <hr>
                        <p style=\"padding:1px;\"><a href=\"logout.php?out=1\"><span
                             class=\"glyphicon glyphicon-off\"> D&eacute;connexion</span></a></p>
                      </div>-->
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\">S'identifier</a>
                        <div class=\"dropdown-menu\">
                            <div class=\" div-transPOP\">
                                <form class=\"form\" id=\"formLogin\" action=\"doLogin.php\" method=\"POST\">
                                    <h2 >Connexion</h2>
                                    
                                        <form action=\"user.php\" method=\"POST\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" name=\"username\" class=\"form-control\" required=\"required\" placeholder=\"Pseudo\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" name=\"password\" class=\"form-control\" required=\"required\" placeholder=\"Mot de passe\">
                                            </div>
                                            <div class=\"form-group\">
                                                <button type=\"submit\" name=\"connexion\" class=\"btn btn-success btn-block btn-lg\">Connexion</button>
                                            </div>
                                        </form>
                                    
                                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\">Pas de compte ?</a>
                        <div class=\"dropdown-menu\">
                            <div class=\" div-transPOP\">
                                <form class=\"form\" id=\"formLogin\" action=\"doLogin.php\" method=\"POST\">
                                    <h2 >Inscription</h2>
                                    
                                        <form action=\"user.php\" method=\"POST\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" name=\"username\" class=\"form-control\" required=\"required\" placeholder=\"Pseudo\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" name=\"password\" class=\"form-control\" required=\"required\" placeholder=\"Mot de passe\">
                                            </div>
                                            <div class=\"form-group\">
                                                <button type=\"submit\" name=\"connexion\" class=\"btn btn-success btn-block btn-lg\">Connexion</button>
                                            </div>
                                        </form>
                                </form><!--END FORM-->
                            </div>
                        </div>
                                </form><!--END FORM CONNEXION-->
                            </div>
                        </div>
                    </li>
                </ul>
            </ul>
            </div>
        </div>
    </div>
    <!--./ NAV BAR END -->
    <div id=\"footser-end\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    by LTCRcorporation © ";
        // line 149
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                </div>
            </div>

        </div>
    </div>
    <!--./ FOOTER SECTION END -->
    ";
        // line 156
        $this->displayBlock('javascripts', $context, $blocks);
        // line 170
        echo "</body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Augustine II";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "    ";
    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
        // line 157
        echo "    <!--  Jquery Core Script -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <!--  Core Bootstrap Script -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
     <!--  WOW Script -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <!--  Scrolling Script -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <!--  PrettyPhoto Script -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <!--  Custom Scripts -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 168,  268 => 166,  263 => 164,  258 => 162,  253 => 160,  248 => 158,  245 => 157,  242 => 156,  238 => 33,  235 => 32,  229 => 12,  224 => 170,  222 => 156,  212 => 149,  138 => 78,  131 => 74,  124 => 70,  117 => 66,  111 => 63,  100 => 55,  93 => 51,  74 => 34,  72 => 32,  61 => 24,  54 => 20,  49 => 18,  44 => 16,  39 => 14,  34 => 12,  22 => 2,);
    }
}
