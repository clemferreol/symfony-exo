<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_98beabaa34b819d793a57a03614d2c4d4ae2003c15c670c4da0bcaf0d4f1358d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c406f1b419d2d37cc74ceb5a0c5a4ac44094e8c120af6a3bdfe3e7b7d35ad7 = $this->env->getExtension("native_profiler");
        $__internal_49c406f1b419d2d37cc74ceb5a0c5a4ac44094e8c120af6a3bdfe3e7b7d35ad7->enter($__internal_49c406f1b419d2d37cc74ceb5a0c5a4ac44094e8c120af6a3bdfe3e7b7d35ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c406f1b419d2d37cc74ceb5a0c5a4ac44094e8c120af6a3bdfe3e7b7d35ad7->leave($__internal_49c406f1b419d2d37cc74ceb5a0c5a4ac44094e8c120af6a3bdfe3e7b7d35ad7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02baeae6cde1a020dffb31f202438d83384685989c65b546cbecdb74732ed5e4 = $this->env->getExtension("native_profiler");
        $__internal_02baeae6cde1a020dffb31f202438d83384685989c65b546cbecdb74732ed5e4->enter($__internal_02baeae6cde1a020dffb31f202438d83384685989c65b546cbecdb74732ed5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_02baeae6cde1a020dffb31f202438d83384685989c65b546cbecdb74732ed5e4->leave($__internal_02baeae6cde1a020dffb31f202438d83384685989c65b546cbecdb74732ed5e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26642513ea68d23faf867fd0047b9c5221467dfb4f9be3b95aee3264334ce73a = $this->env->getExtension("native_profiler");
        $__internal_26642513ea68d23faf867fd0047b9c5221467dfb4f9be3b95aee3264334ce73a->enter($__internal_26642513ea68d23faf867fd0047b9c5221467dfb4f9be3b95aee3264334ce73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26642513ea68d23faf867fd0047b9c5221467dfb4f9be3b95aee3264334ce73a->leave($__internal_26642513ea68d23faf867fd0047b9c5221467dfb4f9be3b95aee3264334ce73a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4adc595bdd1b9412a41caca390286b19f89689dcf9d61efec8336d30aebe88f5 = $this->env->getExtension("native_profiler");
        $__internal_4adc595bdd1b9412a41caca390286b19f89689dcf9d61efec8336d30aebe88f5->enter($__internal_4adc595bdd1b9412a41caca390286b19f89689dcf9d61efec8336d30aebe88f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4adc595bdd1b9412a41caca390286b19f89689dcf9d61efec8336d30aebe88f5->leave($__internal_4adc595bdd1b9412a41caca390286b19f89689dcf9d61efec8336d30aebe88f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
