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

namespace App\Tests\Domain\Models;

use App\Domain\DTO\UpdateTrickDTO;
use App\Domain\Models\Comment;
use App\Domain\Models\Movie;
use App\Domain\Models\Picture;
use App\Domain\Models\Trick;
use App\Domain\Models\User;
use PHPUnit\Framework\TestCase;

/**
 * Class TricksTest.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
class TricksTest extends TestCase
{
  /**
   * @var Trick
   */
  private $trick;
  
  /**
   * @var User
   */
  private $user;
  
  /**
   * @var Comment
   */
  private $comment;
  
  /**
   * @var Movie
   */
  private $movie;
  
  /**
   * @var Picture
   */
  private $picture;
  
  private $updateTrickDTO;
  
  protected function setUp()
  {
    $this->user = $this->createMock(User::class);
    $this->updateTrickDTO = $this->createMock(UpdateTrickDTO::class);
    
    
    $this->trick = new Trick(
      'name',
      'description',
      'group',
      $this->user
    );
    
    $this->comment = new Comment('comment',  $this->trick, $this->user);
    $this->picture = $this->createMock(Picture::class);
    $this->movie = $this->createMock(Movie::class);
    
  }
  
  public function testTricksIsInstanceOf()
  {
    static::assertInstanceOf(Trick::class, $this->trick);
  }
  
  /**
   *@test
   */
  public function testGoodAttributes()
  {
    static::assertObjectHasAttribute('id', $this->trick);
    static::assertObjectHasAttribute('name', $this->trick);
    static::assertObjectHasAttribute('description', $this->trick);
    static::assertObjectHasAttribute('category', $this->trick);
    static::assertObjectHasAttribute('slug', $this->trick);
    static::assertObjectHasAttribute('createdAt', $this->trick);
    static::assertObjectHasAttribute('updatedAt', $this->trick);
    static::assertObjectHasAttribute('picture', $this->trick);
    static::assertObjectHasAttribute('movie', $this->trick);
    static::assertObjectHasAttribute('user', $this->trick);
  }
  
  
  /**
   *@test
   */
  public function testReturnOfGetters()
  {
    static::assertNotNull($this->trick->getId());
    static::assertEquals('name', $this->trick->getName());
    static::assertEquals('description', $this->trick->getDescription());
    static::assertEquals('group', $this->trick->getGroup());
    static::assertSame('name', $this->trick->getSlug());
    static::assertNotNull(new \DateTime('now'), $this->trick->getCreatedAt());
    static::assertNotNull(0, $this->trick->getUpdatedAt());
    static::assertInstanceOf(User::class, $this->trick->getUsers());
    static::assertCount(0, $this->trick->getMovies());
    static::assertCount(0, $this->trick->getPictures());
    static::assertCount(0, $this->trick->getComments());
  }
  
  /**
   * @throws \Exception
   */
  public function testAddPictures()
  {
    static::assertCount(0, $this->trick->getPictures());
    
    $this->trick->addPictures(new Picture('picture', 'picture', true));
    static::assertCount(1, $this->trick->getPictures());
  }
  
  public function testremovePictures()
  {
    static::assertCount(0, $this->trick->getPictures());
    
    $this->trick->removePicture($this->picture);
    static::assertCount(0, $this->trick->getPictures());
  }
  
  public function testAddMovies()
  {
    static::assertCount(0, $this->trick->getMovies());
    
    $this->trick->addMovies($this->movie);
    static::assertCount(1, $this->trick->getMovies());
  }
  
  public function testremoveMovies()
  {
    static::assertCount(0, $this->trick->getMovies());
    
    $this->trick->removeMovie($this->movie);
    static::assertCount(0, $this->trick->getMovies());
  }
  
  
  public function testAddComments()
  {
    static::assertCount(0, $this->trick->getComments());
    
    $this->trick->addComments($this->comment);
    static::assertCount(1, $this->trick->getComments());
  }
}
