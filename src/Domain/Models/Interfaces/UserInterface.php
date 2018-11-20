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

use Prophecy\Argument;
use Ramsey\Uuid\UuidInterface;

/**
 * Interfaces UserInterface.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
interface UserInterface
{
    /**
     * @return \ArrayAccess
     */
    public function getTricks(): \ArrayAccess;

    /**
     * @return CommentInterface
     */
    public function getComments();

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface;

    /**
     * @return string
     */
    public function getUsername(): string ;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getName(): string ;

    /**
     * @return string
     */
    public function getLastname(): string;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @return string
     */
    public function getRole(): string ;

    /**
     * @return PictureInterface
     */
    public function getPictures(): PictureInterface;

	/**
	 * @return bool|\DateTime
	 */
	public function getCreatedAt(): \DateTime;
}
