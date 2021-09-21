<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 * Parameters for checksByTag
 */
class ChecksByTagParameterData
{
    /**
     * Comma seperated tags to search for
     * @DTA\Data(subset="query", field="tags")
     * @DTA\Strategy(subset="query", name="QueryStringScalar", options={"type":"string"})
     * @DTA\Validator(subset="query", name="QueryStringScalar", options={"type":"string"})
     * @var string|null
     */
    public $tags;

}
