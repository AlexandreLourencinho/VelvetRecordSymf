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

/* disc/index.html.twig */
class __TwigTemplate_68318d4998d65396da1f18348704f90234ad85e235e36fe717a59ae2cd5a29b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "disc/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Disc index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"d-flex justify-content-around align-items-center\">
    <h1 class=\"col-6\">Disques (";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 7, $this->source); })()), "nbre", [], "any", false, false, false, 7), "html", null, true);
        echo ")</h1>
    <a class=\"btn btn-secondary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_new");
        echo "\">Ajouter un disque</a>
    </div>
    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["discs"]) || array_key_exists("discs", $context) ? $context["discs"] : (function () { throw new RuntimeError('Variable "discs" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["disc"]) {
            // line 12
            echo "            <div class=\"col\">
                <div class=\"card me-3\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title text-center\"><span
                                    class=\"text-light\"><u><b>Titre de l'album : </b></u></span> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discTitle", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                    <img class=\"card-img-top\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/") . twig_get_attribute($this->env, $this->source, $context["disc"], "discPicture", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" alt=\"Card image cap\">
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text  text-center\"><span class=\"text-light\">Année de sortie : </span> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discYear", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\"><span class=\"text-light\">Libellé : </span>  ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discLabel", [], "any", false, false, false, 26), "html", null, true);
            echo "</li>
                        <li class=\"list-group-item\"><span class=\"text-light\">Genre : </span> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discGenre", [], "any", false, false, false, 27), "html", null, true);
            echo "</li>
                        <li class=\"list-group-item\"><span class=\"text-light\">Prix : </span> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discPrice", [], "any", false, false, false, 28), "html", null, true);
            echo "</li>
                        <li class=\"list-group-item\"><span
                                    class=\"text-light\">Groupe/artiste(s) : </span> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "artist", [], "any", false, false, false, 30), "html", null, true);
            echo "</li>
                    </ul>
                    </div>
                    <div class=\"card-body d-flex justify-content-center\">
                        <a class=\"btn btn-outline-info me-1 mb-1 mb-xl-0\"
                           href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_show", ["discId" => twig_get_attribute($this->env, $this->source, $context["disc"], "discId", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Détails</a>
                        <a class=\"btn btn-outline-warning ms-1 mt-1 mt-xl-0\"
                           href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_edit", ["discId" => twig_get_attribute($this->env, $this->source, $context["disc"], "discId", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Modifier</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
    </div>
";
        // line 45
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 45,  167 => 42,  156 => 37,  151 => 35,  143 => 30,  138 => 28,  134 => 27,  130 => 26,  123 => 22,  117 => 19,  111 => 16,  105 => 12,  101 => 11,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Disc index{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-around align-items-center\">
    <h1 class=\"col-6\">Disques ({{ nombre.nbre }})</h1>
    <a class=\"btn btn-secondary\" href=\"{{ path('disc_new') }}\">Ajouter un disque</a>
    </div>
    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        {% for disc in discs %}
            <div class=\"col\">
                <div class=\"card me-3\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title text-center\"><span
                                    class=\"text-light\"><u><b>Titre de l'album : </b></u></span> {{ disc.discTitle }}</h5>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                    <img class=\"card-img-top\" src=\"{{ asset('image/')~disc.discPicture }}\" alt=\"Card image cap\">
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text  text-center\"><span class=\"text-light\">Année de sortie : </span> {{ disc.discYear }}</p>
                    </div>
                    <div class=\"d-flex justify-content-center\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\"><span class=\"text-light\">Libellé : </span>  {{ disc.discLabel }}</li>
                        <li class=\"list-group-item\"><span class=\"text-light\">Genre : </span> {{ disc.discGenre }}</li>
                        <li class=\"list-group-item\"><span class=\"text-light\">Prix : </span> {{ disc.discPrice }}</li>
                        <li class=\"list-group-item\"><span
                                    class=\"text-light\">Groupe/artiste(s) : </span> {{ disc.artist }}</li>
                    </ul>
                    </div>
                    <div class=\"card-body d-flex justify-content-center\">
                        <a class=\"btn btn-outline-info me-1 mb-1 mb-xl-0\"
                           href=\"{{ path('disc_show', {'discId': disc.discId}) }}\">Détails</a>
                        <a class=\"btn btn-outline-warning ms-1 mt-1 mt-xl-0\"
                           href=\"{{ path('disc_edit', {'discId': disc.discId}) }}\">Modifier</a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
    </div>
{#    {{ dump(nombre) }}#}

{% endblock %}
", "disc/index.html.twig", "C:\\Users\\Alexandre\\Desktop\\dossier_de_depots\\VelvetRecordSymf\\templates\\disc\\index.html.twig");
    }
}
