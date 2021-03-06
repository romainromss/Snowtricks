<?php

declare(strict_types = 1);

/*
 * This file is part of the snowtricks project.
 *
 * (c) Romain Bayette <romain.romss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Infra\Subscribers;

use App\Infra\Events\SessionMessageEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionSubscriber implements EventSubscriberInterface
{
  /** @var SessionInterface */
  private $session;
  
  /**
   * SessionSubscriber constructor.
   *
   * @param SessionInterface $session
   */
  public function __construct(SessionInterface $session)
  {
    $this->session = $session;
  }
  
  public static function getSubscribedEvents()
  {
    return [
      SessionMessageEvent::SESSION_MESSAGE => 'sessionMessage'
    ];
  }
  
  public function sessionMessage(SessionMessageEvent $event)
  {
    $this->session->getFlashBag()->add($event->getType(),$event->getMessage());
  }
}