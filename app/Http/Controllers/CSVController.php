<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Puppeteer\LaunchOptions;



class CSVController extends Controller
{
    public function openAndCloseBrowser()
    {
        $options = (new LaunchOptions())->setHeadless(true);
        $browser = Puppeteer::launch($options);
        $page = $browser->newPage();
        $page->goto('https://example.com');
        $browser->close();
    }


}

