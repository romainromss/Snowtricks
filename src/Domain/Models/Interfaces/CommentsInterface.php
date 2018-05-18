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

use App\Domain\Models\Tricks;
use App\Domain\Models\Users;

/**
 * Interface CommentsInterface
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
interface CommentsInterface
{
    /**
     * Comments constructor.
     *
     * @param string $content
     * @param TricksInterface $trick
     * @param UsersInterface $user
     */
    public function __construct(
        string $content,
        TricksInterface $trick,
        UsersInterface $user
    );

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getContent();

    /**
     * @return mixed
     */
    public function getCreatedAt();

    /**
     * @return mixed
     */
    public function getTrick();

    /**
     * @return mixed
     */
    public function getUsers();
}