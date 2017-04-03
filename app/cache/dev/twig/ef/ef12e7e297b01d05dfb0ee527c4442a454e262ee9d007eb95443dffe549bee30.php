<?php

/* @App/TypeDepense/create.html.twig */
class __TwigTemplate_e5ed811e683a045976a8b28a8bdcacd4001a165901d59016104c3dcb17794cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/TypeDepense/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d2b5989177c7e9a87cb12505d261da05248cbea03bed985701a23f411e197ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2b5989177c7e9a87cb12505d261da05248cbea03bed985701a23f411e197ff->enter($__internal_8d2b5989177c7e9a87cb12505d261da05248cbea03bed985701a23f411e197ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/TypeDepense/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2b5989177c7e9a87cb12505d261da05248cbea03bed985701a23f411e197ff->leave($__internal_8d2b5989177c7e9a87cb12505d261da05248cbea03bed985701a23f411e197ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63163d1def57947eaaaf1e4f6ad43e258ebf3c4c3e718bc2af215fe29bc469a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63163d1def57947eaaaf1e4f6ad43e258ebf3c4c3e718bc2af215fe29bc469a6->enter($__internal_63163d1def57947eaaaf1e4f6ad43e258ebf3c4c3e718bc2af215fe29bc469a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:TypeDepense:create";
        
        $__internal_63163d1def57947eaaaf1e4f6ad43e258ebf3c4c3e718bc2af215fe29bc469a6->leave($__internal_63163d1def57947eaaaf1e4f6ad43e258ebf3c4c3e718bc2af215fe29bc469a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41e86608d9790dedfc12756a5a61b03428b9b9f982e5b7282ca9c60621c8998f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e86608d9790dedfc12756a5a61b03428b9b9f982e5b7282ca9c60621c8998f->enter($__internal_41e86608d9790dedfc12756a5a61b03428b9b9f982e5b7282ca9c60621c8998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the TypeDepense:create page</h1>
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_41e86608d9790dedfc12756a5a61b03428b9b9f982e5b7282ca9c60621c8998f->leave($__internal_41e86608d9790dedfc12756a5a61b03428b9b9f982e5b7282ca9c60621c8998f_prof);

    }

    public function getTemplateName()
    {
        return "@App/TypeDepense/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:TypeDepense:create{% endblock %}

{% block body %}
<h1>Welcome to the TypeDepense:create page</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "@App/TypeDepense/create.html.twig", "Z:\\laragon\\www\\depenses\\src\\AppBundle\\Resources\\views\\TypeDepense\\create.html.twig");
    }
}
