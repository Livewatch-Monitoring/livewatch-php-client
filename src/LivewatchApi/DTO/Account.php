<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class Account
{
    /**
     * @DTA\Data(field="uuid", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $uuid;

    /**
     * @DTA\Data(field="credit", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"float"})
     * @var float|null
     */
    public $credit;

    /**
     * @DTA\Data(field="credit_warn_limit", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"float"})
     * @var float|null
     */
    public $credit_warn_limit;

    /**
     * @DTA\Data(field="notification_enabled", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"bool"})
     * @var bool|null
     */
    public $notification_enabled;

}
