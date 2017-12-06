<?php
/**
 * Genial Framework (https://nenglish.me/php/genial-framework/).
 *
 * @link      https://github.com/Genial-Framework/Genial-Framework for the canonical source repository
 *
 * @copyright Copyright (c) 2017-2017 Genial Framework. (https://nenglish.me/php/genial-framework)
 * @license   https://nenglish.me/php/genial-framework/license/new-bsd New BSD License
 */
use Genial\Env\Env;

function env($section, $variable = null)
{
    return Env::getConfig($section, $variable);
}
