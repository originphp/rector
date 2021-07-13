<?php
/**
 * OriginPHP Framework
 * Copyright 2021 Jamiel Sharief.
 *
 * Licensed under The MIT License
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * @copyright   Copyright (c) Jamiel Sharief
 * @link        https://www.originphp.com
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */

declare(strict_types=1);

namespace Origin\Rector\Set;

use Rector\Set\Contract\SetListInterface;

final class OriginSetList implements SetListInterface
{
    public const ORIGIN_326 = __DIR__ . '/../../config/sets/origin/origin326.php';
}
