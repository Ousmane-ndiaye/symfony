<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_f93bb3a470cadcf6f40bf1e80d4e1ce8d9238f7286c865d9c4748cc1f23e639e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93bb3a470cadcf6f40bf1e80d4e1ce8d9238f7286c865d9c4748cc1f23e639e->enter($__internal_f93bb3a470cadcf6f40bf1e80d4e1ce8d9238f7286c865d9c4748cc1f23e639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_aa752da350b6313c22be3f1a1069497469cc9af34cd8983dd5dfabd563b8861d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa752da350b6313c22be3f1a1069497469cc9af34cd8983dd5dfabd563b8861d->enter($__internal_aa752da350b6313c22be3f1a1069497469cc9af34cd8983dd5dfabd563b8861d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f93bb3a470cadcf6f40bf1e80d4e1ce8d9238f7286c865d9c4748cc1f23e639e->leave($__internal_f93bb3a470cadcf6f40bf1e80d4e1ce8d9238f7286c865d9c4748cc1f23e639e_prof);

        
        $__internal_aa752da350b6313c22be3f1a1069497469cc9af34cd8983dd5dfabd563b8861d->leave($__internal_aa752da350b6313c22be3f1a1069497469cc9af34cd8983dd5dfabd563b8861d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
