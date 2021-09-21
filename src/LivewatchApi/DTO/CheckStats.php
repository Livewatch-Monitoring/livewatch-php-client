<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 */
class CheckStats
{
    /**
     * @DTA\Data(field="date", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"string"})
     * @var string|null
     */
    public $date;

    /**
     * @DTA\Data(field="unknown", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"int"})
     * @var int|null
     */
    public $unknown;

    /**
     * @DTA\Data(field="ok", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"int"})
     * @var int|null
     */
    public $ok;

    /**
     * @DTA\Data(field="warning", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"int"})
     * @var int|null
     */
    public $warning;

    /**
     * @DTA\Data(field="critical", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"int"})
     * @var int|null
     */
    public $critical;

    /**
     * @DTA\Data(field="total", nullable=true)
     * @DTA\Validator(name="Scalar", options={"type":"int"})
     * @var int|null
     */
    public $total;

}
