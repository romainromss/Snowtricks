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

namespace App\Domain\Models\Interfaces;

use Ramsey\Uuid\UuidInterface;

/**
 * Interfaces PictureInterface.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
interface PictureInterface
{
    /**
     * @return UuidInterface
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getLegend();

    /**
     * @return bool
     */
    public function isFirst();

  /**
   * @param bool $first
   */
  public function addFirst(bool $first = false);
}
