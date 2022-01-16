<?php

class __Mustache_56c8e63f776c3e4e715ca8eae6b228f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown';
        // 'secondary.items' inverted section
        $value = $context->findDot('secondary.items');
        if (empty($value)) {
            
            $buffer .= ' hidden';
        }
        $buffer .= '">
';
        $buffer .= $indent . '    <a href="#" tabindex="0" class="';
        $value = $this->resolveValue($context->find('triggerextraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' dropdown-toggle icon-no-margin" id="action-menu-toggle-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" aria-label="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu" data-display="static">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('actiontext'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('menutrigger'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'icon' section
        $value = $context->find('icon');
        $buffer .= $this->sectionF899a782cf48f0a8a07137ff7dae691e($context, $indent, $value);
        $buffer .= $indent . '            ';
        // 'rawicon' section
        $value = $context->find('rawicon');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        // 'menutrigger' section
        $value = $context->find('menutrigger');
        $buffer .= $this->section0be2da63a857ecdcb0917fa337359007($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        // 'secondary' section
        $value = $context->find('secondary');
        $buffer .= $this->sectionE87541a8a31bd942c814d76bb4bbf0fd($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section480048e216dcd9c2c4ca9460a065ac3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{key}},{{component}},{{title}}
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF899a782cf48f0a8a07137ff7dae691e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#pix}}
                    {{key}},{{component}},{{title}}
                {{/pix}}
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
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section480048e216dcd9c2c4ca9460a065ac3c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0be2da63a857ecdcb0917fa337359007(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <b class="caret"></b>
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
                
                $buffer .= $indent . '        <b class="caret"></b>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE87541a8a31bd942c814d76bb4bbf0fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        
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
                
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
