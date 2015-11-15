<?php
/**
 * Created by lichunpeng.
 * User: lcp0578@gmail.com
 * Date: 2015/11/15
 * Time: 18:42
 */
namespace App\AppController\Home;

use App\Controller\AppController;

class HomeController extends AppController
{
    /**
     *  initialize
     */
    public function initialize(){
        parent::initialize();
    }
    //For CakePHP before 3.1
    //public $theme = 'theme_name';
    //For CakePHP 3.1
    public function beforeRender( \Cake\Event\Event $event){
        //http://www.gettemplate.com/
        $this->viewBuilder()->theme('Progressus');
    }
}