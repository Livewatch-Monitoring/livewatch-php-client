<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 * @DTA\Strategy(name="ObjectList", options={"type":\LivewatchApi\DTO\CheckStats::class})
 * @DTA\Validator(name="Collection", options={"validators":{
 *     {"name":"TypeCompliant", "options":{"type":\LivewatchApi\DTO\CheckStats::class}}
 * }})
 */
class Collection3 extends \ArrayObject
{
}
