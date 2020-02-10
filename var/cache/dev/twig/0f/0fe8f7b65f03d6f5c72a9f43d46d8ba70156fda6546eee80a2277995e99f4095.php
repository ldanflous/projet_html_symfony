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

/* accueil/index.html.twig */
class __TwigTemplate_bb39b7894a4da18608116423a872750f7adff61bfb715d81764f2260baeceebd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        echo "Hello AccueilController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php", 0), "html", null, true);
        echo "\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig", 0), "html", null, true);
        echo "\">templates/accueil/index.html.twig</a></code></li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 56,  220 => 55,  215 => 53,  211 => 52,  206 => 50,  202 => 49,  197 => 47,  193 => 46,  188 => 44,  184 => 43,  179 => 41,  175 => 40,  170 => 38,  166 => 37,  161 => 35,  157 => 34,  152 => 32,  148 => 31,  143 => 29,  139 => 28,  134 => 26,  130 => 25,  125 => 23,  121 => 22,  116 => 20,  112 => 19,  107 => 17,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccueilController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul><ul>
        <li>Your controller at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/src/Controller/AccueilController.php'|file_link(0) }}\">src/Controller/AccueilController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig'|file_link(0) }}\">templates/accueil/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
", "accueil/index.html.twig", "/home/ldanflous/projet_HTML/projet_html/templates/accueil/index.html.twig");
    }
}