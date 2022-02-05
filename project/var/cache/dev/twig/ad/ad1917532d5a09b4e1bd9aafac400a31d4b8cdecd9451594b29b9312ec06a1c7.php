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

/* category/index.html.twig */
class __TwigTemplate_29240f9d6397a1a20fd3985310e7e038a7b43f350ad935c35ba23085a356b622 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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

        echo "Adverts";
        
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1>Adverts</h1>
                <div class=\"list-group\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new RuntimeError('Variable "adverts" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 12
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_advert", ["id" => twig_get_attribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\"
                           class=\"list-group-item list-group-item-action flex-column align-items-start\">
                            <div class=\"d-flex w-100 justify-content-between\">
                                <h4 class=\"mb-1\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h4>
                                <h5>Type: ";
            // line 16
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "type", [], "any", false, false, false, 16)), "html", null, true);
            echo "</h5>
                            </div>
                            <p class=\"mb-1\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                            <div class=\"d-flex w-100 justify-content-between\">
                                <small class=\"date\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "createdAt", [], "any", false, false, false, 20), "medium"), "html", null, true);
            echo "</small>
                                ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["advert"], "price", [], "any", false, false, false, 21)) {
                // line 22
                echo "                                    <small class=\"price\">";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getCurrencySymbol(twig_get_attribute($this->env, $this->source, $context["advert"], "price", [], "any", false, false, false, 22), "EUR"), "html", null, true);
                echo "</small>
                                ";
            }
            // line 24
            echo "                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 27,  132 => 24,  126 => 22,  124 => 21,  120 => 20,  115 => 18,  110 => 16,  106 => 15,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Adverts{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1>Adverts</h1>
                <div class=\"list-group\">
                    {% for advert in adverts %}
                        <a href=\"{{ path('view_advert', {'id': advert.id}) }}\"
                           class=\"list-group-item list-group-item-action flex-column align-items-start\">
                            <div class=\"d-flex w-100 justify-content-between\">
                                <h4 class=\"mb-1\">{{ advert.title }}</h4>
                                <h5>Type: {{ advert.type|title }}</h5>
                            </div>
                            <p class=\"mb-1\">{{ advert.category.name }}</p>
                            <div class=\"d-flex w-100 justify-content-between\">
                                <small class=\"date\">{{ advert.createdAt|format_datetime('medium') }}</small>
                                {% if advert.price %}
                                    <small class=\"price\">{{ advert.price|currency_symbol('EUR') }}</small>
                                {% endif %}
                            </div>
                        </a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "category/index.html.twig", "C:\\Users\\Pcanony\\Documents\\project_symfony\\leboncoin-clone-master\\templates\\category\\index.html.twig");
    }
}
