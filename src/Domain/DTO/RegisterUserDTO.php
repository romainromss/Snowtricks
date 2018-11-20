<?php

declare(strict_types = 1);

/*
 * This file is part of the Snowtricks project.
 *
 * (c) Romain Bayette <romain.romss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Domain\DTO;

use App\Domain\DTO\Interfaces\RegisterUserInterface;

class RegisterUserDTO implements RegisterUserInterface
{
  /** @var string */
  public $mail;
  
  /** @var string */
  public $username;
  
  /** @var string */
  public $name;
  
  /** @var string */
  public $lastname;
  
  /** @var string */
  public $password;
  
  /**
   * {@inheritdoc}
   */
  public function __construct(
    string $mail = null,
    string $username = null,
    string $name = null,
    string $lastname = null,
    string $password = null
  ) {
    $this->mail = $mail;
    $this->username = $username;
    $this->name = $name;
    $this->lastname = $lastname;
    $this->password = $password;
  }
}