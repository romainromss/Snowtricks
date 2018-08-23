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
  
  namespace App\Domain\DTO\Interfaces;
  
  interface PictureDTOInterface
  {
    /**
     * PictureDTO constructor.
     *
     * @param \SplFileInfo $file
     * @param string       $legend
     * @param bool         $first
     */
    public function __construct (
      \SplFileInfo $file,
      string $legend,
      bool $first = false
    );
  }
  