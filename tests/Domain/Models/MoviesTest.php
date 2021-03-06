<?php

declare(strict_types=1);
/*
 * This file is part of the SnowTricks project.
 *
 * (c) Romain Bayette <romain.romss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests\Domain\Models;


use App\Domain\Models\Movie;
use App\Domain\Models\Trick;
use PHPUnit\Framework\TestCase;

/**
 * Class MoviesTest.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
class MoviesTest extends TestCase
{
    /**
     * @var Movie
     */
    private $movies;

    protected function setUp()
    {
        $this->movies = new Movie(
            'embed',
            'legend'
        );
    }

    public function testTricksIsInstanceOf()
    {
        static::assertInstanceOf(Movie::class, $this->movies);
    }

    public function testGoodAttributes()
    {
        static::assertObjectHasAttribute('id', $this->movies);
        static::assertObjectHasAttribute('embed', $this->movies);
        static::assertObjectHasAttribute('legend', $this->movies);
    }

    public function testReturnOfGetters()
    {
        static::assertNotNull($this->movies->getId());
        static::assertEquals('embed', $this->movies->getEmbed());
        static::assertEquals('legend', $this->movies->getLegend());
    }
}
