<?php

namespace pxgamer\WwrgTorrents\Modules\Base;

use pxgamer\WwrgTorrents\Modules\Torrents;
use pxgamer\WwrgTorrents\Routing;

class Controller extends Routing\Base
{
    public function index()
    {
        $data = new \stdClass();

        $data->total_torrents = Torrents\Model::total();

        $this->smarty->display(
            'index.tpl',
            [
                'data' => $data
            ]
        );
    }

    public function errorNotFound()
    {
        $error = new \Error('Page not found.', 404);

        $this->smarty->display(
            'error.tpl',
            [
                'error' => $error
            ]
        );
    }
}
