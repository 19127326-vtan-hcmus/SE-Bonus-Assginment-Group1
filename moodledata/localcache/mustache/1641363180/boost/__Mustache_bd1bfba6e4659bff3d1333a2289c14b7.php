<?php

class __Mustache_bd1bfba6e4659bff3d1333a2289c14b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->section37e3543e188a693b32301b7b7c1f2566($context, $indent, $value);

        return $buffer;
    }

    private function section17f3d1ab55887b273f62f9f7fe44e71b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newevent, core_calendar';
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
                
                $buffer .= 'newevent, core_calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37e3543e188a693b32301b7b7c1f2566(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<{{!
    }} class=""{{!

    }}>
    {{#str}}newevent, core_calendar{{/str}}
</>
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
                
                $buffer .= $indent . '<';
                $buffer .= ' class=""';
                $buffer .= '>
';
                $buffer .= $indent . '    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section17f3d1ab55887b273f62f9f7fe44e71b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
