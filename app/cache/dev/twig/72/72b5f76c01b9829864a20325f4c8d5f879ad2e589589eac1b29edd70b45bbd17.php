<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_e198cd70fd3ed63825ecc7781bd62dd9c137b81b8e826b90e68c775bd076bd9b extends Twig_Template
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
        $__internal_3f3103fce1ce3d045282b60acaff5f7a26481171ba722ec6f9803e6322a14beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3103fce1ce3d045282b60acaff5f7a26481171ba722ec6f9803e6322a14beb->enter($__internal_3f3103fce1ce3d045282b60acaff5f7a26481171ba722ec6f9803e6322a14beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3f3103fce1ce3d045282b60acaff5f7a26481171ba722ec6f9803e6322a14beb->leave($__internal_3f3103fce1ce3d045282b60acaff5f7a26481171ba722ec6f9803e6322a14beb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
