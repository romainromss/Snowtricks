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

namespace App\Infra\Services;

use App\Infra\Services\Interfaces\MailerServiceInterface;
use Twig\Environment;

class MailerService implements MailerServiceInterface
{
  /** @var Environment  */
  private $twig;
  
  /** @var \Swift_Mailer */
  private $swift_Mailer;
  
  /**
   * MailerService constructor.
   *
   * @param Environment   $twig
   * @param \Swift_Mailer $swift_Mailer
   */
  public function __construct(
    Environment $twig,
    \Swift_Mailer $swift_Mailer
  ) {
    $this->twig = $twig;
    $this->swift_Mailer = $swift_Mailer;
  }
  
  /**
   * @param string $subject
   * @param string $mail
   * @param string $name
   * @param string $token
   * @param string $template
   *
   */
  public function sendMail(
    string $subject,
    string $mail,
    string $name,
    string $token,
    string $template
   ) {
    $message = (new \Swift_Message($subject));
    $message->setFrom('romain.b@posteo.net')
      ->setTo($mail)
      ->setBody($template)
      ->setContentType('text/html');
    $this->swift_Mailer->send($message);
  }
}
