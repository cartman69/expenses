<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6293ee3ed8558a3911edb2d8cb5edc28f4f59a2d1abbbc26893d357fc47f5c8b extends Twig_Template
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
        $__internal_95ad76f86ba96eb1e48e8434b67d0b6e1273ce67a957420e115385417b5ffe9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ad76f86ba96eb1e48e8434b67d0b6e1273ce67a957420e115385417b5ffe9c->enter($__internal_95ad76f86ba96eb1e48e8434b67d0b6e1273ce67a957420e115385417b5ffe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_95ad76f86ba96eb1e48e8434b67d0b6e1273ce67a957420e115385417b5ffe9c->leave($__internal_95ad76f86ba96eb1e48e8434b67d0b6e1273ce67a957420e115385417b5ffe9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
