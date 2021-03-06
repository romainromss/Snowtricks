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
use App\UI\Form\Handler\Interfaces\AddTrickTypeHandlerInterface;
use App\UI\Responder\ResponderAddTrick;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;


/**
 * Class ResponderAddTricksTest.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
class ResponderAddTrickTest extends TestCase
{
	/**
	 * @var Environment
	 */
	private $twig;
	/**
	 * @var TrickRepository
	 */
	private $tricksRepository;
	/**
	 * @var AddTrickTypeHandlerInterface
	 */
	private $addTricksType;
	/**
	 * @var UrlGeneratorInterface
	 */
	private $urlGenerator;

	protected function setUp()
	{
		$this->twig = $this->createMock(Environment::class);
		$this->tricksRepository = $this->createMock(TrickRepository::class);
		$this->addTricksType = $this->createMock(FormInterface::class);
		$this->urlGenerator = $this->createMock(UrlGeneratorInterface::class);
	}


	public function testResponderHomeInstanceOf()
	{
		$responder = $this->createMock(ResponderAddTrick::class);
		static::assertInstanceOf(ResponderAddTrick::class, $responder);
	}

	/**
	 * @throws \Twig_Error_Loader
	 * @throws \Twig_Error_Runtime
	 * @throws \Twig_Error_Syntax
	 */
	public function testConstructResponderAddTricks()
	{
		$responder = new ResponderAddTrick($this->twig, $this->urlGenerator);
		static::assertInstanceOf(Response::class, $responder(false,['trick' => $this->tricksRepository], $this->addTricksType));
	}
}