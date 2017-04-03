<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_39ab269706ce16672b14432c0a90c7b7fea8590dabd55188e9fb23f095463be0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5beec0452dd5a0ffaafdf75c6c64ca5a201fa954b42e9c56af95784004f885bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5beec0452dd5a0ffaafdf75c6c64ca5a201fa954b42e9c56af95784004f885bd->enter($__internal_5beec0452dd5a0ffaafdf75c6c64ca5a201fa954b42e9c56af95784004f885bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5beec0452dd5a0ffaafdf75c6c64ca5a201fa954b42e9c56af95784004f885bd->leave($__internal_5beec0452dd5a0ffaafdf75c6c64ca5a201fa954b42e9c56af95784004f885bd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8402e0718ee4c5690e03aa9045ec7ce8903d984db1a671f93e8818875122a13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8402e0718ee4c5690e03aa9045ec7ce8903d984db1a671f93e8818875122a13d->enter($__internal_8402e0718ee4c5690e03aa9045ec7ce8903d984db1a671f93e8818875122a13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8402e0718ee4c5690e03aa9045ec7ce8903d984db1a671f93e8818875122a13d->leave($__internal_8402e0718ee4c5690e03aa9045ec7ce8903d984db1a671f93e8818875122a13d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
