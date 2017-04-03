<?php

/* ::base.html.twig */
class __TwigTemplate_12f491ed1c9f938d2a5d55ebc12101c34de7ead222a2caa5f572dbf6836f8b2c extends Twig_Template
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
        $__internal_8680427b92f8818dc260fc325260e8367b7a6c811f1e5c192bd4824d3b342715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8680427b92f8818dc260fc325260e8367b7a6c811f1e5c192bd4824d3b342715->enter($__internal_8680427b92f8818dc260fc325260e8367b7a6c811f1e5c192bd4824d3b342715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8680427b92f8818dc260fc325260e8367b7a6c811f1e5c192bd4824d3b342715->leave($__internal_8680427b92f8818dc260fc325260e8367b7a6c811f1e5c192bd4824d3b342715_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58861091d6622baeb43b8184de23477d5a3906f38ed7bed55e98d87c428ed276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58861091d6622baeb43b8184de23477d5a3906f38ed7bed55e98d87c428ed276->enter($__internal_58861091d6622baeb43b8184de23477d5a3906f38ed7bed55e98d87c428ed276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_58861091d6622baeb43b8184de23477d5a3906f38ed7bed55e98d87c428ed276->leave($__internal_58861091d6622baeb43b8184de23477d5a3906f38ed7bed55e98d87c428ed276_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ce2c9e0a21918fca8db97f06a17f2bfa9a6b0e7349363ef8eccb1772a90bfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce2c9e0a21918fca8db97f06a17f2bfa9a6b0e7349363ef8eccb1772a90bfdf->enter($__internal_3ce2c9e0a21918fca8db97f06a17f2bfa9a6b0e7349363ef8eccb1772a90bfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ce2c9e0a21918fca8db97f06a17f2bfa9a6b0e7349363ef8eccb1772a90bfdf->leave($__internal_3ce2c9e0a21918fca8db97f06a17f2bfa9a6b0e7349363ef8eccb1772a90bfdf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f28f60b06723bcc6f56c9e390b05a373b1c8619a3dd19f87a06e61a3b8d81bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28f60b06723bcc6f56c9e390b05a373b1c8619a3dd19f87a06e61a3b8d81bc1->enter($__internal_f28f60b06723bcc6f56c9e390b05a373b1c8619a3dd19f87a06e61a3b8d81bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f28f60b06723bcc6f56c9e390b05a373b1c8619a3dd19f87a06e61a3b8d81bc1->leave($__internal_f28f60b06723bcc6f56c9e390b05a373b1c8619a3dd19f87a06e61a3b8d81bc1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da5ecf8d2101c64816ec789305f6576a315cc2a03ac057a76d2bc652a767fbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5ecf8d2101c64816ec789305f6576a315cc2a03ac057a76d2bc652a767fbee->enter($__internal_da5ecf8d2101c64816ec789305f6576a315cc2a03ac057a76d2bc652a767fbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da5ecf8d2101c64816ec789305f6576a315cc2a03ac057a76d2bc652a767fbee->leave($__internal_da5ecf8d2101c64816ec789305f6576a315cc2a03ac057a76d2bc652a767fbee_prof);

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
", "::base.html.twig", "Z:\\laragon\\www\\depenses\\app/Resources\\views/base.html.twig");
    }
}
