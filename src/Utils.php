<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Env> for the canonical source repository.
 *
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Env/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Env;

use Genial\Env\Config\Config;
use Genial\Env\Exception\UnderflowException;

/**
 * Utils.
 */
class Utils
{
    /**
     * validConfigArray().
     *
     * @param array|null $config The config array.
     *
     * @throws UnderflowException If the array is empty.
     *
     * @return bool True if the array is valid and false if otherwise.
     */
    public static function validConfigArray(array $config = [])
    {
        if (empty($config)) {
            throw new UnderflowException(sprintf(
                '`%s` expects `$config` to not be empty.',
                __METHOD__
            ));
        }

        return Config::validate($config);
    }
}
