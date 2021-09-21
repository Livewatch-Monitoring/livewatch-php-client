<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class Check
{
    /**
     * @DTA\Data(field="name", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $name;

    /**
     * @DTA\Data(field="uuid", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $uuid;

    /**
     * @DTA\Data(field="check_type", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $check_type;

    /**
     * @DTA\Data(field="last_update", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $last_update;

    /**
     * @DTA\Data(field="active", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"bool"})
     * @var bool|null
     */
    public $active;

    /**
     * @DTA\Data(field="status", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"int"})
     * @var int|null
     */
    public $status;

    /**
     * @DTA\Data(field="stats", nullable=true)
     * @DTA\Strategy(name="Object", options={"type":\LivewatchApi\DTO\Collection6::class})
     * @DTA\Validator(name="TypeCompliant", options={"type":\LivewatchApi\DTO\Collection6::class})
     * @var \LivewatchApi\DTO\Collection6|null
     */
    public $stats;

    /**
     * @DTA\Data(field="checkType", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $check_type;

    /**
     * @DTA\Data(field="lastUpdate", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $last_update;

}
