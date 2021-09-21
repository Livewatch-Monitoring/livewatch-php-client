<?php
declare(strict_types=1);

namespace LivewatchApi\DTO;

use Articus\DataTransfer\Annotation as DTA;

/**
 * @DTA\Strategy(name="ObjectList", options={"type":\LivewatchApi\DTO\MonitoringIp::class})
 * @DTA\Validator(name="Collection", options={"validators":{
 *     {"name":"TypeCompliant", "options":{"type":\LivewatchApi\DTO\MonitoringIp::class}}
 * }})
 */
class Collection7 extends \ArrayObject
{
}
