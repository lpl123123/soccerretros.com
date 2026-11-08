<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* default/template/extension/payment/webshop.twig */
class __TwigTemplate_cc22d92d84951de48c635c76d24ee51c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "﻿<form id=\"payment\" class=\"form-horizontal\">
  <fieldset>
    <legend>";
        // line 3
        yield ($context["text_credit_card"] ?? null);
        yield "</legend>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 5
        yield ($context["entry_cc_type"] ?? null);
        yield "</label>
      <div class=\"col-sm-4\">
\t\t<img src=\"catalog/view/theme/default/image/webshop/logo.jpg\" alt=\"Credit Card\" />
      </div>
    </div>
\t<div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-cc-number\">";
        // line 11
        yield ($context["entry_cc_number"] ?? null);
        yield "</label>
      <div class=\"col-sm-4\">
        <input type=\"text\" name=\"webshop_cc_number\" value=\"\" placeholder=\"";
        // line 13
        yield ($context["entry_cc_number"] ?? null);
        yield "\" id=\"webshop_cardNo\" class=\"form-control\" />
      </div>
    </div>
\t<div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-cc-expire-date\">";
        // line 17
        yield ($context["entry_cc_expire_date"] ?? null);
        yield "</label>
      <div class=\"col-sm-2\">
        <select name=\"webshop_cc_expire_date_month\" id=\"webshop_expirationMonth\" class=\"form-control\">
\t\t  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 21
            yield "          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["month"], "value", [], "any", false, false, false, 21);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["month"], "text", [], "any", false, false, false, 21);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "        </select>
       </div>
       <div class=\"col-sm-2\">
        <select name=\"webshop_cc_expire_date_year\" class=\"form-control\" id=\"webshop_expirationYear\">
\t\t   ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["year_expire"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 28
            yield "          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["year"], "value", [], "any", false, false, false, 28);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["year"], "text", [], "any", false, false, false, 28);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['year'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        </select>
      </div>
    </div>
\t<div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-cc-cvv2\">";
        // line 34
        yield ($context["entry_cc_cvv2"] ?? null);
        yield "</label>
      <div class=\"col-sm-2\">
        <input type=\"text\" name=\"webshop_cvv\" value=\"\" placeholder=\"";
        // line 36
        yield ($context["entry_cc_cvv2"] ?? null);
        yield "\" maxlength=\"4\" id=\"webshop_cvv\" class=\"form-control\" />
      </div>
\t  <div class=\"col-sm-2\">
\t\t<div id=\"what\"><a></a><div class=\"what1\"></div></div>
      </div>
    </div>
\t<div class=\"form-group\">
      <div class=\"col-sm-4\">
\t\t<div class=\"buttons\">
\t\t  <div class=\"pull-right\">
\t\t\t<input type=\"button\" value=\"";
        // line 46
        yield ($context["button_confirm"] ?? null);
        yield "\" id=\"button-confirm\" class=\"btn btn-primary\" />
\t\t  </div>
\t\t</div>
      </div>
    </div>
</fieldset>
</form>

<style type=\"text/css\">
#what{line-height:15px; margin-left:8px; position:relative; float:left; margin-top: 2px;}
#what a{cursor:pointer; background:url(catalog/view/theme/default/image/webshop/picture.jpg) 0 -64px no-repeat; width:48px; height:28px; display:block;}
#what .what1{display:none;}
#what:hover .what1{display:block; position:absolute; top:29px; left:2px; padding:10px; border:1px solid #dcdcdc; width:265px; height:166px;
background:#fff url(catalog/view/theme/default/image/webshop/picture.jpg) 10px -98px no-repeat;z-index:10000;}
.creditCardRequire{color:red;margin-right:5px;}
.attention {
    background: #fff5cc none no-repeat scroll 10px center;
    border: 1px solid #f2dd8c;
    border-radius: 5px;
    color: #555555;
    cursor: pointer;
    height: 30px;
    padding: 5px 0 5px 10px;
  
</style>
<script type=\"text/javascript\"><!--
\$(\"#webshop_cardNo\").keydown(function(e){
\tcardvalid(e);
});
\$('#webshop_cardNo').keyup(function(e){
\tvar array = [];
\tvar card = \$('#webshop_cardNo').val().replace(/(^\\s+)|(\\s+\$)/g,\"\").replace(/\\s/g,\"\");
\tif(card.length>16){
\t\tcard = card.substring(0,16);
\t}
\tif(card.length>=4){
\t\tarray.push(card.substring(0,4));
\t} else {
\t\tarray.push(card.substring(0,card.length));
\t}
\tif(card.length>=8){
\t\tarray.push(card.substring(4,8));
\t} else {
\t\tarray.push(card.substring(4,card.length));
\t}
\tif(card.length>=12){
\t\tarray.push(card.substring(8,12));
\t} else {
\t\tarray.push(card.substring(8,card.length));
\t}
\tif(card.length>=16){
\t\tarray.push(card.substring(12,16));
\t} else {
\t\tarray.push(card.substring(12,card.length));
\t}
\t\$('#webshop_cardNo').val(array.join(\" \").replace(/(^\\s+)|(\\s+\$)/g,\"\"));
});
function cardvalid(event) {
\tif(!(event.keyCode==46)&&!(event.keyCode==8)&&!(event.keyCode==37)&&!(event.keyCode==39)) {
\t\tif(!((event.keyCode>=48&&event.keyCode<=57)||(event.keyCode>=96&&event.keyCode<=105))) {
\t\t\tevent.returnValue=false;
\t\t}
\t}
\t
}
\$('#button-confirm').bind('click', function() {
\tvar cardNo = \$(\"#webshop_cardNo\").val();
\tcardNo=cardNo.replace(/[\\D]/g,'');
\tvar CVV = \$(\"#webshop_cvv\").val()
    var regV=/^4\\d{15}\$/;
\tvar regM1 = /^5\\d{15}\$/;
\tvar regM2 = /^2[2-7]\\d{14}\$/;
\tvar regJ = /^35\\d{14}\$/;
\tvar regD = /^3[068]\\d{12}\$/;
\tvar regAE = /^3[47]\\d{13}\$/;
\tvar regDi = /^6011\\d{12}\$/;
\t var cvv_reg=/^[0-9]{3}\$/;
\t var cvv_regAE=/^[0-9]{4}\$/;
\t var mate = false;
\t var mtCvv = false;
\tif(cardNo.match(regV)!=null){
\t\t\tmate = true;
\t}else if(cardNo.match(regM1)!=null){
\t\t   mate = true;
\t}else if(cardNo.match(regM2)!=null){
\t\t   mate = true;
\t}else if(cardNo.match(regJ)!=null){
\t\t   mate = true;
\t}else if(cardNo.match(regD)!=null){
\t\t   mate = true;
\t}else if(cardNo.match(regAE)!=null ){
\t\t   mate = true;
\t}else if(cardNo.match(regDi)!=null){
\t\t   mate = true;
\t}
\t
\tif ((CVV.match(cvv_reg)!=null && cardNo.match(regAE)==null) || (CVV.match(cvv_regAE)!=null && cardNo.match(regAE)!=null)){
\t\tmtCvv = true;
\t}

\tif(!mate){
\t\talert(\"";
        // line 147
        yield ($context["cardNoError"] ?? null);
        yield "\");
\t\t\$(\"#webshop_cardNo\").focus();
\t\treturn false;
\t}

\tif(!mtCvv){
\t\talert(\"";
        // line 153
        yield ($context["cardCvvError"] ?? null);
        yield "\");
\t\t\$(\"#webshop_cvv\").focus();
\t\treturn false;
\t}

\tvar expirationMonth = \$(\"#webshop_expirationMonth\").val();
\tif(expirationMonth==\"00\"){
\t\talert(\"";
        // line 160
        yield ($context["expireMonthError"] ?? null);
        yield "\");
\t\treturn false;
\t}
\tvar expirationYear = \$(\"#webshop_expirationYear\").val();
\tif(expirationYear==\"00\"){
\t\talert(\"";
        // line 165
        yield ($context["expireYearError"] ?? null);
        yield "\");
\t\treturn false;
\t}
\t\$.ajax({
\t\turl: 'index.php?route=extension/payment/webshop/send',
\t\ttype: 'post',
\t\tdata: \$('#payment :input'),
\t\tdataType: 'json',\t\t
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t\t\$('#button-confirm').attr('disabled', true);
\t\t\t\$('#payment').before('<div class=\"attention\"><img src=\"catalog/view/theme/default/image/webshop/loading.jpg\" alt=\"\" />";
        // line 176
        yield ($context["text_wait"] ?? null);
        yield "</div>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t\t\$('.attention').remove();
\t\t},\t\t\t\t
\t\tsuccess: function(json) {
\t\t\tif (json['redirectURL']) {
\t\t\t\tlocation = json['redirectURL'];
\t\t\t}
\t\t\tif (json['error']) {
\t\t\t\t//alert(json['error']);
\t\t\t\tlocation = 'index.php?route=extension/payment/webshop/result';
\t\t\t}
\t\t\tif (json['success']) {
\t\t\t\t//alert(json['success']);
\t\t\t\tlocation = 'index.php?route=checkout/success';
\t\t\t}
\t\t},
\t\terror: function(json) {
\t\t\t//alert(json['error']);
\t\t\tlocation = 'index.php?route=extension/payment/webshop/result';
\t\t}
\t});
});
//--></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/extension/payment/webshop.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  283 => 176,  269 => 165,  261 => 160,  251 => 153,  242 => 147,  138 => 46,  125 => 36,  120 => 34,  114 => 30,  103 => 28,  99 => 27,  93 => 23,  82 => 21,  78 => 20,  72 => 17,  65 => 13,  60 => 11,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/extension/payment/webshop.twig", "");
    }
}
