<?php

class __Mustache_794defaf4b3d63aa8b2a73a0ace3e3f8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<aaa casdasds="containerasdasdd mb-2">
';
        $buffer .= $indent . '    <aaaaa clsadasdasass="asdasda">
';
        $buffer .= $indent . '        <div casdsads="col-xasdasdpr-1">
';
        // 'edit' section
        $value = $context->find('edit');
        $buffer .= $this->section83916ba10f7ccf958fba18a259914d94($context, $indent, $value);
        $buffer .= $indent . '      
';
        $buffer .= $indent . '        <aaasdasdasd class="casdasd6">
';
        // 'gradeessays' section
        $value = $context->find('gradeessays');
        $buffer .= $this->section83916ba10f7ccf958fba18a259914d94($context, $indent, $value);
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section852013df32481efe9ecb4378d45678d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>core/single_button}}
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
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83916ba10f7ccf958fba18a259914d94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#button}}
                    {{>core/single_button}}
                {{/button}}
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
                
                // 'button' section
                $value = $context->find('button');
                $buffer .= $this->section852013df32481efe9ecb4378d45678d0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
