<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 7/12/15
 * Time: 3:44 PM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WelcomeController extends BaseController
{
    public function index() {
        return view('welcome');
    }
}