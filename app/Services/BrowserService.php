?<?php
namespace App\Services;

use Puppeteer\{Puppeteer, LaunchOptions};

class BrowserService
{
    public static function openAndCloseBrowser()
    {
        $options = (new LaunchOptions())->setHeadless(true);
        $browser = Puppeteer::launch($options);
        $page = $browser->newPage();
        $page->goto('https://example.com');
        $browser->close();
    }
}
?>
