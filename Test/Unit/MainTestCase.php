<?php
/**
 * Valitor Module for Magento 2.x.
 *
 * Copyright © 2018 Valitor. All rights reserved.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SDM\Valitor\Test\Unit;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\TestCase;

class MainTestCase extends TestCase
{
    /**
     * Return ObjectManager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return new ObjectManager($this);
    }
}
