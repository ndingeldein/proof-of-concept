<?php

use TightenCo\Jigsaw\Jigsaw;
use Contentful\Management\Client;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 */

$events->beforeBuild(function ($jigsaw) {
	// $url = 'http://flux.modiphy.com/api/515?item=65511';
	// $data = json_decode(file_get_contents($url));
	// $jigsaw->setConfig('blueprints', $data->items[0]);
	// $client = new \Contentful\Delivery\Client('kNEIs0Z2Ow1R77Wt-Ow8UcOpstCipMVrT_NqVp4GqbQ', 'q2uia4vyksfh', 'master');

	// $query = new \Contentful\Delivery\Query();

	// $query->setContentType('page')->orderBy('fields.slug');

	// $pages = $client->getEntries($query);
});
