<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_970f1dbc91b3ac5781e62e34e716b988810ecdd579f448cc38b1b4a9df48ec17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e05ba3b5d90b5dbe8928628893792c00a6ee5ba1d52e36c3b9c56e9dab645e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05ba3b5d90b5dbe8928628893792c00a6ee5ba1d52e36c3b9c56e9dab645e3b->enter($__internal_e05ba3b5d90b5dbe8928628893792c00a6ee5ba1d52e36c3b9c56e9dab645e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e05ba3b5d90b5dbe8928628893792c00a6ee5ba1d52e36c3b9c56e9dab645e3b->leave($__internal_e05ba3b5d90b5dbe8928628893792c00a6ee5ba1d52e36c3b9c56e9dab645e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
