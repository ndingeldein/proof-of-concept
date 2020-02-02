<?php
return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
    	'pages' => [
            'extends' => '_layouts.page',
            'items' => function() {
                
                $client = new \Contentful\Delivery\Client('kNEIs0Z2Ow1R77Wt-Ow8UcOpstCipMVrT_NqVp4GqbQ', 'q2uia4vyksfh', 'master');

				$query = new \Contentful\Delivery\Query();

				$query->setContentType('page');

				$pages = $client->getEntries($query);
				$contentType = $pages[0]->getContentType();
				// $parser = new \Contentful\RichText\Parser();
				$renderer = new \Contentful\RichText\Renderer();
				
				return array_map(function ($entry) use ($contentType, $renderer) {
		            // Convention:
		            // The content types may contain a field called body,
		            // which will be used as the markdown content of the generated file,
		            // so we give it a default value
		            $plainEntry = [
		                'id' => $entry->getId(),
		                'body' => '',
		                'filename' => $entry->slug
		            ];
		            foreach ($contentType->getFields() as $field) {
		                $plainEntry[$field->getId()] = $entry->get($field->getId());
		            }
		            
		            $plainEntry['body'] = $renderer->render($entry->body);
		            
		    
		            return $plainEntry;
		        }, $pages->getItems());
            },
    	],
	],
];
