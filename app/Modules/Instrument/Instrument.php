<?php
/**
 * Created by PhpStorm.
 * User: audemard
 * Date: 23/10/2015
 * Time: 15:43
 */

namespace App\Modules\Instrument;

use Core\Controller;
use Core\View,
    Helpers\Session,
    Helpers\Password,
    Helpers\Url,
    Helpers\Gump,
    App\Models\Queries\InstrumentSQL;
use Helpers\DB\EntityManager;


class Instrument extends Controller {

    private $instrumentSQL;

    public function __construct() {
        parent::__construct();
        $this->instrumentSQL = new InstrumentSQL();
    }

    public function liste() {

                $user = $this->instrumentSQL->findAll()->execute();

        View::rendertemplate('header', $data);
        View::renderModule('Instrument/Views/read', $data, $error);
        View::rendertemplate('footer', $data);
    }
}
