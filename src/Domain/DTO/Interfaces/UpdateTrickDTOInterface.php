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

namespace App\Domain\DTO\Interfaces;

/**
 * Interfaces UpdateTrickDTOInterface
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
interface UpdateTrickDTOInterface
{
  /**
   * UpdateTrickDTOInterface constructor.
   *
   * @param string $name
   * @param string $description
   * @param string $group
   * @param array  $pictures
   * @param array  $movies
   */
	public function __construct(
		string $name,
		string $description,
		string $group,
		array $pictures,
		array $movies
	);
}
