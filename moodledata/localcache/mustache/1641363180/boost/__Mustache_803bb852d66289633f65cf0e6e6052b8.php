<?php

class __Mustache_803bb852d66289633f65cf0e6e6052b8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid pl-0 pb-1" id="action_bar">
';
        $buffer .= $indent . '    <div class="row pl-0 ml-0">
';
        $buffer .= $indent . '        <div class="d-flex">
';
        // 'left' section
        $value = $context->find('left');
        $buffer .= $this->section385f39b99c2dabb0479819f4222ea7ea($context, $indent, $value);
        // 'usetemplate' section
        $value = $context->find('usetemplate');
        $buffer .= $this->sectionFfea1e4e2dc87a0e0da02e1bfa858421($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        // 'export' section
        $value = $context->find('export');
        $buffer .= $this->section6d2b34682dd091a12f5434f67568edd3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section38700f571d69e37feb9941af58307d90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-xs-4 pr-1">
                {{> core/action_link}}
            </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-xs-4 pr-1">
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section919ea0f7b1978c893922b329027b7b86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-xs-4 pr-1">
                {{> core/url_select}}
            </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-xs-4 pr-1">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58b3c00f05aec8aeb227744a2b9d56a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-xs-4 pr-1">
                {{> core/single_select}}
            </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-xs-4 pr-1">
';
                if ($partial = $this->mustache->loadPartial('core/single_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section385f39b99c2dabb0479819f4222ea7ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#actionlink}}
            <div class="col-xs-4 pr-1">
                {{> core/action_link}}
            </div>
            {{/actionlink}}
            {{#urlselect}}
            <div class="col-xs-4 pr-1">
                {{> core/url_select}}
            </div>
            {{/urlselect}}
            {{#singleselect}}
            <div class="col-xs-4 pr-1">
                {{> core/single_select}}
            </div>
            {{/singleselect}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'actionlink' section
                $value = $context->find('actionlink');
                $buffer .= $this->section38700f571d69e37feb9941af58307d90($context, $indent, $value);
                // 'urlselect' section
                $value = $context->find('urlselect');
                $buffer .= $this->section919ea0f7b1978c893922b329027b7b86($context, $indent, $value);
                // 'singleselect' section
                $value = $context->find('singleselect');
                $buffer .= $this->section58b3c00f05aec8aeb227744a2b9d56a0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfea1e4e2dc87a0e0da02e1bfa858421(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-xs-4 pr-1">
                {{> mod_feedback/use_template }}
            </div>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-xs-4 pr-1">
';
                if ($partial = $this->mustache->loadPartial('mod_feedback/use_template')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d2b34682dd091a12f5434f67568edd3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-auto">
            {{> core/action_link }}
        </div>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-auto">
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
