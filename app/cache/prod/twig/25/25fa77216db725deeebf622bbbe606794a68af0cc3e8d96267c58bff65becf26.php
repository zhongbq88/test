<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig */
class __TwigTemplate_7e20f304b0432959c543750d2a1fd44b15c5f10d04da7b8f19c7b84a78f3453c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'typeahead_product_collection_widget' => array($this, 'block_typeahead_product_collection_widget'),
            'typeahead_product_pack_collection_widget' => array($this, 'block_typeahead_product_pack_collection_widget'),
            'typeahead_customer_collection_widget' => array($this, 'block_typeahead_customer_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        $this->displayBlock('typeahead_product_collection_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('typeahead_product_pack_collection_widget', $context, $blocks);
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('typeahead_customer_collection_widget', $context, $blocks);
    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = array())
    {
        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) ? $context["mapping_value"] : null), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) ? $context["mapping_name"] : null), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo (isset($context["remote_url"]) ? $context["remote_url"] : null);
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
        echo "\"
    >
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <input type=\"text\" id=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control search typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
        echo "\" autocomplete=\"off\">
        <ul id=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-xs-12 product-list\">
            ";
        // line 39
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, (isset($context["collection"]) ? $context["collection"] : null)) > 0))) {
            // line 40
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        ";
                // line 46
                echo sprintf((isset($context["template_collection"]) ? $context["template_collection"] : null), $this->getAttribute($context["item"], "name", array()));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" />
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
        <div class=\"invisible\" id=\"tplcollection-";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\">
          ";
        // line 54
        echo (isset($context["template_collection"]) ? $context["template_collection"] : null);
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
    }

    // line 64
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = array())
    {
        // line 65
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, (isset($context["collection"]) ? $context["collection"] : null)) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of products for this pack", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 67
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, (isset($context["collection"]) ? $context["collection"] : null)) > 0))) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 69
                echo "                <li data-product=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" class=\"col-xl-3 col-lg-6 m-b-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" /> ";
                echo sprintf((isset($context["template_collection"]) ? $context["template_collection"] : null), $this->getAttribute($context["item"], "name", array()), $this->getAttribute($context["item"], "ref", array()), $this->getAttribute($context["item"], "quantity", array()));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        ";
        }
        // line 78
        echo "    </ul>

    <h2>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>

    <div class=\"row m-b-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">×</span>
                <input type=\"number\" id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd\" class=\"btn btn-action btn-block\">
                    <i class=\"material-icons\">add</i>
                    ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", array(), "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.parent().remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 m-b-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 129
        ob_start();
        echo (isset($context["template_collection"]) ? $context["template_collection"] : null);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', data.";
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) ? $context["mapping_name"] : null), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) ? $context["mapping_value"] : null), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 152
        echo (isset($context["remote_url"]) ? $context["remote_url"] : null);
        echo "',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) ? $context["mapping_name"] : null), "html", null, true);
        echo "',
                    source: this['";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
    }

    // line 207
    public function block_typeahead_customer_collection_widget($context, array $blocks = array())
    {
        // line 208
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-xs-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) ? $context["mapping_value"] : null), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 233
        echo (isset($context["remote_url"]) ? $context["remote_url"] : null);
        echo "',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) ? $context["mapping_name"] : null), "html", null, true);
        echo "',
                source: this['";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) ? $context["mapping_name"] : null), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) ? $context["mapping_value"] : null), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li>';
                html += sprintf('";
        // line 274
        ob_start();
        echo (isset($context["template_collection"]) ? $context["template_collection"] : null);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', suggestion.";
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) ? $context["mapping_name"] : null), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  549 => 277,  544 => 275,  536 => 274,  527 => 268,  516 => 264,  507 => 258,  500 => 254,  496 => 253,  486 => 246,  470 => 233,  464 => 230,  457 => 226,  442 => 214,  435 => 210,  427 => 209,  422 => 208,  419 => 207,  409 => 200,  393 => 187,  389 => 186,  380 => 180,  361 => 164,  346 => 152,  340 => 149,  333 => 145,  326 => 141,  319 => 137,  314 => 135,  310 => 134,  303 => 130,  295 => 129,  285 => 122,  279 => 119,  270 => 113,  259 => 105,  247 => 96,  242 => 94,  234 => 89,  222 => 84,  215 => 80,  211 => 78,  208 => 77,  192 => 73,  182 => 72,  176 => 71,  168 => 69,  163 => 68,  161 => 67,  157 => 66,  150 => 65,  147 => 64,  139 => 59,  135 => 58,  128 => 54,  124 => 53,  121 => 52,  118 => 51,  107 => 48,  102 => 46,  96 => 43,  92 => 41,  87 => 40,  85 => 39,  81 => 38,  73 => 37,  68 => 35,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  47 => 29,  43 => 28,  39 => 26,  36 => 25,  32 => 207,  29 => 206,  27 => 64,  24 => 63,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "/opt/bitnami/apache2/htdocs/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
