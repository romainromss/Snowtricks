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

namespace App\Tests\UI\Responder;

use App\Domain\Repository\TrickRepository;
use App\UI\Responder\ResponderHome;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Class ResponderHomeTest.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
class ResponderHomeTest extends TestCase
{
    public function testResponderHomeInstanceOf()
    {
        $responder = $this->createMock(ResponderHome::class);
        static::assertInstanceOf(ResponderHome::class, $responder);
    }

    public function testConstructResponderHome()
    {
        $twig = $this->createMock(Environment::class);
        $tricksRepository = $this->createMock(TrickRepository::class);

        $responder = new ResponderHome($twig);
        static::assertInstanceOf(Response::class, $responder(['trick' => $tricksRepository]));
    }
}
