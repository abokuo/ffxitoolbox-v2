<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SiteController extends Controller
{
    public function createSitemap()
    {
        SitemapGenerator::create('https://ffxitoolbox.abokuo.com')->writeToFile(public_path('sitemap.xml'));
    }
}
