<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_046e62fdcd6f0caf6f1d0e50d86295148d0e5c4ead60ee53c56fba3b975c4f55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
    <header class=\"sticky-top\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Velvet Record</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_index");
        echo "\">Disques</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artist_index");
        echo "\">Artistes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"container-fluid\">
        <div class=\"col-12\">

        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    </div>
    </div>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <!--colonne 1-->
    <footer class=\"d-flex col-12 justify-content-between bg-dark bleh ml-1\">
        <div class=\"d-flex flex-column col-6 col-md-4 border border-dark\">
            <p class=\"h4\"><u class=\" footitre text-light\">Copyright Lourencinho Alexandre ©</u></p>
            <p class=\"text-light\">Ce travail a été réalisé dans le cadre de l'évaluation consacré au php de la formation
                de </p>
            <p class=\"text-light\">concepteur
                développeur d'application à l'AFPA d'Amiens. Toute reproduction non </p>
            <p class=\"text-light\">consentie est strictement interdite.</p>
        </div>
        <!--    colonne 2 - liens de contact-->
        <div class=\"d-flex flex-column col-6 col-md-4 border border-dark\">
            <p class=\"h4 text-light text-center\"><u>Liens de contact</u></p>
            <p class=\"text-light text-center\">Vous pouvez me contacter par les moyens suivants :</p>
            <ul>
                <li><a target=\"_blank\" href=\"https://github.com/AlexandreLourencinho\"
                       title=\"Lien vers le github de Lourencinho Alexandre\" class=\"text-info\">Mon github</a></li>
                <li><a target=\"_blank\" href=\"https://discord.gg/kFWCtWQDMf\"
                       title=\"lien vers le discord de Lourencinho Alexandre\" class=\"text-info\">Mon discord</a></li>
                <li>
                    <a href=\"mailto:lourencinho.alexandre@protonmail.com?subject=Contact%20depuis%20votre%20évaluation%20php%20de%20CDA\"
                       title=\"lien pour envoyer un mail a Lourencinho Alexandre\" class=\"text-info\">M'envoyer un mail</a>
                </li>
                <li><a target=\"_blank\" href=\"#\" class=\"text-info\" title=\"lien vers le linkedin de Lourencinho Alexandre\">Mon
                        linkedin</a></li>
            </ul>
        </div>
        <!--    colonne trois, sites partenaires ^^'-->
        <div class=\"d-flex flex-column col-4 border border-dark d-none d-md-block\">
            <p class=\"h4\"><u class=\"footitre text-light\">Sites partenaires</u></p>
            <p class=\"text-light\">Les liens vers nos sites affiliés.</p>
            <ul>
                <li class=\" d-md-block d-none\"><a target=\"_blank\" href=\"https://ncode.amorce.org/\" class=\"text-info\"
                                                  title=\"lien de la plate-forme support utilisée\">ncode amorce</a></li>
                <li class=\"d-md-block d-none\"><a target=\"_blank\" href=\"https://www.php.net/manual/fr/\" class=\"text-info\"
                                                 title=\"Lien vers la doc php\">php.net aka lisez la doc!</a></li>
                <li class=\"d-md-block d-none\"><a target=\"_blank\" href=\"https://www.afpa.fr\"
                                                 title=\"Lien vers le site de l'afpa\" class=\"text-info\">afpa.fr, l'organisme
                        dispensant cette formation</a></li>
            </ul>
        </div>
    </footer>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        // line 17
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 46,  225 => 17,  223 => 16,  213 => 15,  203 => 13,  201 => 12,  191 => 11,  172 => 5,  115 => 47,  113 => 46,  100 => 36,  94 => 33,  88 => 30,  74 => 18,  72 => 15,  69 => 14,  66 => 11,  62 => 8,  57 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
{#        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">#}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style1.css') }}\">
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
    <header class=\"sticky-top\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Velvet Record</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('accueil') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('disc_index') }}\">Disques</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('artist_index') }}\">Artistes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"container-fluid\">
        <div class=\"col-12\">

        {% block body %}{% endblock %}
    </div>
    </div>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    <!--colonne 1-->
    <footer class=\"d-flex col-12 justify-content-between bg-dark bleh ml-1\">
        <div class=\"d-flex flex-column col-6 col-md-4 border border-dark\">
            <p class=\"h4\"><u class=\" footitre text-light\">Copyright Lourencinho Alexandre ©</u></p>
            <p class=\"text-light\">Ce travail a été réalisé dans le cadre de l'évaluation consacré au php de la formation
                de </p>
            <p class=\"text-light\">concepteur
                développeur d'application à l'AFPA d'Amiens. Toute reproduction non </p>
            <p class=\"text-light\">consentie est strictement interdite.</p>
        </div>
        <!--    colonne 2 - liens de contact-->
        <div class=\"d-flex flex-column col-6 col-md-4 border border-dark\">
            <p class=\"h4 text-light text-center\"><u>Liens de contact</u></p>
            <p class=\"text-light text-center\">Vous pouvez me contacter par les moyens suivants :</p>
            <ul>
                <li><a target=\"_blank\" href=\"https://github.com/AlexandreLourencinho\"
                       title=\"Lien vers le github de Lourencinho Alexandre\" class=\"text-info\">Mon github</a></li>
                <li><a target=\"_blank\" href=\"https://discord.gg/kFWCtWQDMf\"
                       title=\"lien vers le discord de Lourencinho Alexandre\" class=\"text-info\">Mon discord</a></li>
                <li>
                    <a href=\"mailto:lourencinho.alexandre@protonmail.com?subject=Contact%20depuis%20votre%20évaluation%20php%20de%20CDA\"
                       title=\"lien pour envoyer un mail a Lourencinho Alexandre\" class=\"text-info\">M'envoyer un mail</a>
                </li>
                <li><a target=\"_blank\" href=\"#\" class=\"text-info\" title=\"lien vers le linkedin de Lourencinho Alexandre\">Mon
                        linkedin</a></li>
            </ul>
        </div>
        <!--    colonne trois, sites partenaires ^^'-->
        <div class=\"d-flex flex-column col-4 border border-dark d-none d-md-block\">
            <p class=\"h4\"><u class=\"footitre text-light\">Sites partenaires</u></p>
            <p class=\"text-light\">Les liens vers nos sites affiliés.</p>
            <ul>
                <li class=\" d-md-block d-none\"><a target=\"_blank\" href=\"https://ncode.amorce.org/\" class=\"text-info\"
                                                  title=\"lien de la plate-forme support utilisée\">ncode amorce</a></li>
                <li class=\"d-md-block d-none\"><a target=\"_blank\" href=\"https://www.php.net/manual/fr/\" class=\"text-info\"
                                                 title=\"Lien vers la doc php\">php.net aka lisez la doc!</a></li>
                <li class=\"d-md-block d-none\"><a target=\"_blank\" href=\"https://www.afpa.fr\"
                                                 title=\"Lien vers le site de l'afpa\" class=\"text-info\">afpa.fr, l'organisme
                        dispensant cette formation</a></li>
            </ul>
        </div>
    </footer>
    </body>
</html>
", "base.html.twig", "C:\\Users\\80010-02-06\\Desktop\\dossiers_de_depots\\VelvetRecordSymf\\templates\\base.html.twig");
    }
}
