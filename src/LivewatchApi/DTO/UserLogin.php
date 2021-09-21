<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class UserLogin
{
    /**
     * @DTA\Data(field="username")
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $username;

    /**
     * @DTA\Data(field="password")
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $password;

}
