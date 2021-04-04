<?php

namespace Bjerke\Bread\Fields;

use Bjerke\Bread\Fields\Base\BaseField;
use Illuminate\Validation\Rule;

/**
 * Add an option select to the model (select dropdown)
 */
class SelectField extends BaseField
{
    protected function setDefaultDefinition(): self
    {
        parent::setDefaultDefinition();
        $this->type('ENUM');
        $this->inputType('select');

        return $this;
    }

    /**
     * Add options to the select
     *
     * @param array $options Associative array where key is the value of the option,
     *                       and the value is the label of the option
     *
     * @return $this
     */
    public function options(array $options = []): self
    {
        $this->addValidation((string) Rule::in(array_keys($options)));
        $this->addExtraData([
            'options' => $options
        ]);

        return $this;
    }

    /**
     * @param string $format select|tags|table
     */
    public function stylingFormat(string $format = 'select'): self
    {
        $this->addExtraData([
            'styling_format' => $format
        ]);

        return $this;
    }
}
