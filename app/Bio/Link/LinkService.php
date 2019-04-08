<?php

namespace Bio\Link;

use Bio\Link\LinkRepository;

class LinkService {

    private $linkService;

    public function __construct(LinkRepository $linkService)
    {
        $this->linkService = $linkService;
    }
   
}