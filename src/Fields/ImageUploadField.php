<?php

namespace Bjerke\Bread\Fields;

use Bjerke\Bread\Fields\Base\BaseField;

/**
 * Add an image upload field
 */
class ImageUploadField extends BaseField
{
    protected $allowedMimeTypes = [
        'image/jpeg',
        'image/png'
    ];

    public function __construct(?string $name = null)
    {
        parent::__construct($name);

        $this->addExtraData([
            'collection' => $name
        ]);
    }

    protected function setDefaultDefinition(): self
    {
        parent::setDefaultDefinition();
        $this->type('MEDIA');
        $this->inputType('image-upload');
        $this->fillable(false);
        $this->addValidation('array');
        $this->defaultValue([]);
        $this->addExtraData([
            'media_type' => 'images',
            'tus' => false,
            'tus_endpoint' => '',
            'mime_types' => $this->allowedMimeTypes
        ]);

        return $this;
    }

    public function multiple(bool $multiple = true): self
    {
        $this->addExtraData([
            'multiple' => $multiple
        ]);

        return $this;
    }

    public function collection(string $collectionName): self
    {
        $this->addExtraData([
            'collection' => $collectionName
        ]);

        return $this;
    }

    public function allowedMimeTypes(array $mimeTypes): self
    {
        $this->addExtraData([
            'mime_types' => $mimeTypes
        ]);

        return $this;
    }

    public function enableTUS(string $tusEndpoint): self
    {
        $this->addExtraData([
            'tus' => true,
            'tus_endpoint' => $tusEndpoint
        ]);

        return $this;
    }
}
