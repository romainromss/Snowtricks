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

namespace App\UI\Subscriber\Interfaces;

use Symfony\Component\Form\FormEvent;

/**
 * Class UpdateTrickSubscriberInterface.
 *
 * @author Romain Bayette <romain.romss@gmail.com>
 */
interface UpdateTrickSubscriberInterface
{
	/**
	 * @return array
	 */
	public static function getSubscribedEvents();

	/**
	 * @param FormEvent $event
	 */
	public function onPreSetData(FormEvent $event);
}