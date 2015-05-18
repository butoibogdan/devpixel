<?php

class LoginController extends BaseController {

    public function get_index() {
        return View::make('login.index');
    }

}
