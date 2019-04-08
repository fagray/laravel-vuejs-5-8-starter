<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Jobs\Link\ListLinksJob;
use App\Http\Controllers\Controller;

class LinksController extends Controller
{
    public function index()
    {
        return ListLinksJob::dispatchNow();
    }
}
