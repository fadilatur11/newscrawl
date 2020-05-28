<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\BeritaJatimService;
use App\Services\JatimTimesService;
use App\Services\JawaPosService;
use App\Services\PanturaService;
use App\Services\TribunService;
use App\Services\WarmoService;
use Illuminate\Http\Request;

class CrawlerController extends Controller
{
    /**
     * This method use as api gateway of berita jatim crawler.
     *
     * @return bool
     */
    public function beritaJatim()
    {
        return BeritaJatimService::crawler();
    }

    /**
     * This method use as api gateway of jatim times crawler.
     *
     * @return bool
     */
    public function jatimTimes()
    {
        return JatimTimesService::crawler();
    }

    /**
     * This method use as api gateway of jawapos crawler.
     *
     * @return bool
     */
    public function jawaPos()
    {
        return JawaPosService::crawler();
    }

    /**
     * This method use as api gateway of pantura crawler.
     *
     * @return bool
     */
    public function pantura()
    {
        return PanturaService::crawler();
    }

    /**
     * This method use as api gateway of tribun jatim crawler.
     *
     * @return bool
     */
    public function tribun()
    {
        return TribunService::crawler();
    }

    /**
     * This method use as api gateway of warta bromo crawler.
     *
     * @return bool
     */
    public function warmo()
    {
        return WarmoService::crawler();
    }
}
