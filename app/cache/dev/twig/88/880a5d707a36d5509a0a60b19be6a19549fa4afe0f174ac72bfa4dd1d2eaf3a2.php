<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ca3831a26c316988db26b4f145b895954eb25bb1a1948922f68e6bbd92464cae extends Twig_Template
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
        $__internal_0d4daa7b3c5509e5e9def06421ae2918daf19c9a8742778a2f540e847ed8ec20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4daa7b3c5509e5e9def06421ae2918daf19c9a8742778a2f540e847ed8ec20->enter($__internal_0d4daa7b3c5509e5e9def06421ae2918daf19c9a8742778a2f540e847ed8ec20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0d4daa7b3c5509e5e9def06421ae2918daf19c9a8742778a2f540e847ed8ec20->leave($__internal_0d4daa7b3c5509e5e9def06421ae2918daf19c9a8742778a2f540e847ed8ec20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
