<?php

namespace App\Modules\Privacy\Controllers;

use Core\Controller as BaseCont;
use Language;
use Router;
use Session;
use Core\View;
use Redirect;

class Privacy extends BaseCont
{

    static public function getFooter()
    {
        if(!Session::get('cookiesAccept'))
        {
            return '
        <div class="police">
            <div class="alert alert-warning alert-dismissable">
                <div class="container">
                    <p>' . __d('privacy', 'textString') . ' <a href="/privacy">' . __d('privacy', 'moreInfo') . '</a>
                        <a href="/accept_cookies" class="btn btn-danger btn-xs pull-right" data-dismiss="alert">' . __d('privacy', 'Okay') . '</a>
                    </p>
                </div>
            </div>
        </div>';
        }
    }

    public function infoPage()
    {
        return View::make('Default')
                        ->shares('title', __d('privacy', 'title'))
                        ->withContent(__d('privacy', 'content'));
    }

    public function cookiesAccept()
    {
        Session::set('cookiesAccept', true);
        return Redirect::back();
    }

}
