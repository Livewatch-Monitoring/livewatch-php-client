<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class ApiToken
{
    /**
     * @DTA\Data(field="token", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $token;

}
