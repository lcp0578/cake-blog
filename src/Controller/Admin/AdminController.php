<?php
/**
 * Created by lichunpeng.
 * User: lcp0578@gmail.com
 * Date: 2015/11/15
 * Time: 13:36
 */
namespace App\Controller\Admin;

use App\Controller\AppController;

class AdminController extends AppController
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
        //https://github.com/kimlabs/gentelella
        $this->viewBuilder()->theme('Gentelella');
    }
}