<?php

namespace Tests\Actions;

use App\Actions\HomeAction;
use App\Repository\TricksRepository;
use App\Responder\Interfaces\ResponderHomeInterface;
use App\Responder\ResponderHome;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;


class IndexActionTest extends TestCase
{
    /**
     *@test
     */
    public function testIndexActionInstanceOf()
    {
        $indexAction = $this->createMock(HomeAction::class);
        static::assertInstanceOf(HomeAction::class, $indexAction);
    }

    /**
     *@test
     */
    public function testConstructor()
    {
        $responder = $this->createMock(ResponderHomeInterface::class);
        $constructResponder = new HomeAction($responder);
        static::assertInstanceOf(HomeAction::class, $constructResponder);
    }

    /**
     *@test
     */
    public function testInvoke()
    {
        $tricksRepository = $this->createMock(TricksRepository::class);
        $twig = $this->createMock(Environment::class);
        $request = $this->createMock(Request::class);

        $indexAction = new HomeAction();
        $responder = new ResponderHome($tricksRepository, $twig);
        static::assertInstanceOf(Response::class, $indexAction($responder, $request));
    }
}
