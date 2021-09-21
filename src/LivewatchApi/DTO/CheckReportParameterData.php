<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 * Parameters for checkReport
 */
class CheckReportParameterData
{
    /**
     * @DTA\Data(subset="path", field="uuid")
     * @DTA\Strategy(subset="path", name="QueryStringScalar", options={"type":"string"})
     * @DTA\Validator(subset="path", name="QueryStringScalar", options={"type":"string"})
     * @var string|null
     */
    public $uuid;

}
