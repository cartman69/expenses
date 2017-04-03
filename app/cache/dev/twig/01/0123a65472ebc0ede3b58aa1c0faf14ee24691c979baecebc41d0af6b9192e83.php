<?php

/* ::base.html.twig */
class __TwigTemplate_0e7279dedf744393fd8269dd2793bd8eccba765dad9d924be83e77a936e61b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11e23ddd837485abd22dbb79dbce6d7787c572701ca7ae7500c3343a316d6394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e23ddd837485abd22dbb79dbce6d7787c572701ca7ae7500c3343a316d6394->enter($__internal_11e23ddd837485abd22dbb79dbce6d7787c572701ca7ae7500c3343a316d6394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_11e23ddd837485abd22dbb79dbce6d7787c572701ca7ae7500c3343a316d6394->leave($__internal_11e23ddd837485abd22dbb79dbce6d7787c572701ca7ae7500c3343a316d6394_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c999a1161a6689244457d6eb5cb254a0520a3f72606745c957da9e30d3e4fca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c999a1161a6689244457d6eb5cb254a0520a3f72606745c957da9e30d3e4fca7->enter($__internal_c999a1161a6689244457d6eb5cb254a0520a3f72606745c957da9e30d3e4fca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c999a1161a6689244457d6eb5cb254a0520a3f72606745c957da9e30d3e4fca7->leave($__internal_c999a1161a6689244457d6eb5cb254a0520a3f72606745c957da9e30d3e4fca7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdd3192fe42c95a7c5c3c363b417321ff570442913d542f734c052a74babd2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd3192fe42c95a7c5c3c363b417321ff570442913d542f734c052a74babd2a2->enter($__internal_bdd3192fe42c95a7c5c3c363b417321ff570442913d542f734c052a74babd2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bdd3192fe42c95a7c5c3c363b417321ff570442913d542f734c052a74babd2a2->leave($__internal_bdd3192fe42c95a7c5c3c363b417321ff570442913d542f734c052a74babd2a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a73d7f92d72b69825f64c15bf2343c529d3614bf1c33e25d7f223bf964a0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a73d7f92d72b69825f64c15bf2343c529d3614bf1c33e25d7f223bf964a0ab->enter($__internal_66a73d7f92d72b69825f64c15bf2343c529d3614bf1c33e25d7f223bf964a0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_66a73d7f92d72b69825f64c15bf2343c529d3614bf1c33e25d7f223bf964a0ab->leave($__internal_66a73d7f92d72b69825f64c15bf2343c529d3614bf1c33e25d7f223bf964a0ab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da46fafc460f5933f4ad3622f0d631bb97cf0f8f36c592861497309b31e3e4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da46fafc460f5933f4ad3622f0d631bb97cf0f8f36c592861497309b31e3e4c8->enter($__internal_da46fafc460f5933f4ad3622f0d631bb97cf0f8f36c592861497309b31e3e4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da46fafc460f5933f4ad3622f0d631bb97cf0f8f36c592861497309b31e3e4c8->leave($__internal_da46fafc460f5933f4ad3622f0d631bb97cf0f8f36c592861497309b31e3e4c8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "Z:\\laragon\\www\\depenses\\app\\Resources\\views\\base.html.twig");
    }
}
