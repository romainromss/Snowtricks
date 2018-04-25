<?php

declare(strict_types=1);

/*
 * This file is part of the SnowTricks project.
 *
 * (c) Romain Bayette <romain.romss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests\UI\Form\Handler;

use App\Domain\Builder\Interfaces\CommentBuilderInterface;
use App\Domain\Repository\Interfaces\CommentsRepositoryInterface;
use App\UI\Form\Handler\AddCommentTypeHandler;
use PHPUnit\Framework\TestCase;

class AddCommentTypeHandlerTest extends TestCase
{
    /**
     * @var CommentBuilderInterface
     */
    private $commentBuilder;

    /**
     * @var CommentsRepositoryInterface
     */
    private $commentRepository;

    public function setUp()
    {
        $this->commentBuilder = $this->createMock(CommentBuilderInterface::class);
        $this->commentRepository = $this->createMock(CommentsRepositoryInterface::class);
    }

    public function testConstruct()
    {
        $addCommentTypeHandler = new AddCommentTypeHandler($this->commentBuilder, $this->commentRepository);
        static::assertInstanceOf(AddCommentTypeHandler::class, $addCommentTypeHandler);
    }

    public function testHandle()
    {

    }
}