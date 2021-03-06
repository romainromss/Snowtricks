<?php

declare(strict_types=1);

/*
 * This file is part of the Snowtricks project.
 *
 * (c) Romain Bayette <romain.romss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests\Domain\DTO;

use App\Domain\DTO\AddCommentDTO;
use PHPUnit\Framework\TestCase;

/**
 * Class AddCommentDtoUnitTest.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
class AddCommentDtoUnitTest extends TestCase
{
    public function testConstruct()
    {
        $content = 'content';

        $commentDtoConstruct = new AddCommentDTO($content);
        static::assertInstanceOf(AddCommentDTO::class, $commentDtoConstruct);
    }
}
