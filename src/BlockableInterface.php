<?php

declare(strict_types = 1);

/*
 * This file is part of the brainbits blocking package.
 *
 * (c) brainbits GmbH (http://www.brainbits.net)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Brainbits\Blocking;

use Brainbits\Blocking\Identity\IdentityInterface;

/**
 * Blockable interface.
 */
interface BlockableInterface
{
    /**
     * Return block identifier
     *
     * @return IdentityInterface
     */
    public function getBlockIdentifier();
}
