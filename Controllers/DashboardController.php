<?php
/**
 * Created by PhpStorm.
 * User: yuan
 * Date: 2019-02-20
 * Time: 18:04
 */

class DashboardController extends Controller
{
    public function indexAction() {
        echo 'hello world';
        $student = new Students();



        $this->view(['name' =>'yuan']);
    }
}
