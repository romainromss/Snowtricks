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

namespace App\UI\Form\Handler\Interfaces;

use Symfony\Component\Form\FormInterface;

/**
 * Interface ForgotPasswordTypeHandlerInterface
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
interface ForgotPasswordTypeHandlerInterface
{
  /**
   * @param FormInterface $form
   *
   * @return bool
   * @throws \Doctrine\ORM\NonUniqueResultException
   * @throws \Doctrine\ORM\ORMException
   * @throws \Doctrine\ORM\OptimisticLockException
   */
  public function handle(FormInterface $form);
}