<?php

declare(strict_types=1);

/*
 * This file is part of the ${project} project.
 *
 * (c) Romain Bayette <romain.romss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Domain\Builder\Interfaces;


use App\Domain\Builder\TrickFactory;
use App\Domain\Models\Interfaces\CommentsInterface;
use App\Domain\Models\Interfaces\MoviesInterface;
use App\Domain\Models\Interfaces\PicturesInterface;
use App\Domain\Models\Interfaces\TricksInterface;
use App\Domain\Models\Interfaces\UsersInterface;
use App\Domain\Models\Tricks;

interface TrickFactoryInterface
{

	/**
	 * @param string  $name
	 * @param string  $description
	 * @param string  $group
	 * @param string | UsersInterface  $users
	 * @param array   $pictures
	 * @param array   $movies
	 *
	 * @return TricksInterface
	 */
	public function create(
		string $name,
		string $description,
		string $group,
		UsersInterface $users,
		array $pictures,
		array $movies
	):  TricksInterface;
}