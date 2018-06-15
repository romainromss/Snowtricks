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

namespace App\Domain\Builder;

use App\Domain\Builder\Interfaces\TrickBuilderInterface;
use App\Domain\Models\Interfaces\UsersInterface;
use App\Domain\Models\Tricks;

/**
 * Class TrickBuilder.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
class TrickBuilder implements TrickBuilderInterface
{
	/**
	 * @var Tricks
	 */
	private $tricks;

	/**
	 * @param string         $name
	 * @param string         $description
	 * @param string         $group
	 * @param UsersInterface $users
	 * @param array          $pictures
	 * @param array          $movies
	 *
	 * @return TrickBuilder
	 */
	public function create(
		string $name,
		string $description,
		string $group,
		UsersInterface $users,
		array $pictures,
		array $movies
	):  self {

		$this->tricks = new Tricks($name, $description, $group, $users, $pictures, $movies);
		return $this;
	}

	/**
	 * @return tricks
	 */
	public function getTrick(): Tricks
	{
		return $this->tricks;
	}
}
