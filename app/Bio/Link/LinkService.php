<?php

namespace Bio\Link;

use Bio\Link\LinkRepository;

class LinkService {

    private $linkRepository;

    public function __construct(LinkRepository $linkRepository)
    {
        $this->linkRepository = $linkRepository;
    }

    /**
     * List all the links
     *
     * @return array
     */
    public function listLinks()
    {
        return [
                '1' => 'Link 1',
                '2' => 'Link 2'
        ];
    }
   
}