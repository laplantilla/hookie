<?php
    require_once('include/flight/flight/Flight.php');
    require_once('include/parsedown/Parsedown.php');

    class Hookie {
        private $_last_called = null;
        private $_themes = array(
            array(
                'bgcolor' => '#AA3939',
                'text' => '#FFAAAA'
            ),
            array(
                'bgcolor' => '#5C6FA2',
                'text'      => '#000'
            ),
            array(
                'bgcolor'   => '#FFB474',
                'text'      => '#000'
            ),
            array(
                'bgcolor'   => '#58D79A',
                'text'      => '#000'
            ),
            array(
                'bgcolor'   => '#6056C7',
                'text'      => '#000'
            ),
            array(
                'bgcolor'   => '#48BDBD',
                'text'      => '#000'
            )

        );

        private $header = 'KSM - Bringing a website down';
        private $body;
        private $footer = '';

        public function __construct() {
            $this->markdown = new Parsedown();
        }
        public function index() {
            $this->body     = $this->markdown->text(file_get_contents('include/hookie/markdown/index.md'));
            $this->doRender();
        }

        public function install() {
            $this->body = $this->markdown->text(file_get_contents('include/hookie/markdown/install.md'));
            $this->doRender();
        }

        public function doRender() {
            Flight::render('header',    array('heading' => $this->header),  'header_content');
            Flight::render('body',      array('body'    => $this->body),    'body_content');
            Flight::render('footer',    array('footer'  => $this->footer),  'footer_content');

            Flight::render('layout', array(
                'theme' => $this->_themes[array_rand($this->_themes)],
                'title' => 'Home Page'
            ));
        }
    }


    $server = new Hookie();
    Flight::set('flight.views.path', 'include/hookie/template');

    Flight::route('/', function($route) use ($server){
        $server->index();
    }, true);

    Flight::route('/install', function($route) use ($server){
        $server->install();
    }, true);





    Flight::start();

?>
