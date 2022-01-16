<?php

class __Mustache_d57d9afcff4c2e2e01895de48cec3075 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->section7fa25a39eec1f80c6e2c67c20e56d03b($context, $indent, $value);

        return $buffer;
    }

    private function section7fa25a39eec1f80c6e2c67c20e56d03b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<{{!
    }}{{!

    }}>
    
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
                $buffer .= '>
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '</>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
