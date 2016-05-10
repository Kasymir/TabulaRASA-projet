<?php

namespace App\Modules\Tab;

use Core\Controller;
use Core\View,
    Helpers\Session,
    Helpers\Password,
    Helpers\Url,
    Helpers\Gump,
    App\Models\Queries\TabSQL;
use Helpers\DB\EntityManager;


class Tab extends Controller {

    private $TabSQL;

    public function __construct() {
        parent::__construct();
        $this->TabSQL = new TabSQL();
    }

    public function add() {

        //Sanitize Data using Gump helper
        $_POST = Gump::sanitize($_POST);
        if (isset($_POST['Titre'])) {
            //Validate data using Gump
            $is_valid = Gump::is_valid($_POST, array(
                'Titre' => 'required|alpha_numeric',
                'Album' => 'required|alpha_numeric',
                'Artiste' => 'required|alpha_numeric', 
                'Genre' => 'required|alpha_numeric',
                'Instrument' => 'required|alpha_numeric'
            ));

            if ($is_valid === true) {


            } else
                $error = $is_valid;
                Session::set('error', $error);
            if (!$error) {
                //Register and return the data as an array $data[]
                
                $tab = new \App\Models\Tables\Tab($_POST['Titre'], $_POST['Album'], "", date("d:m:Y"), $_POST['Artiste'], $_POST['Genre'], $_POST['Instrument']);
                EntityManager::getInstance()->save($tab);
                Session::set('message', "La tablature pour $tab->titre de $tab->Artiste a bien été ajoutée !");
                Session::set('message_type', 'alert-success');
                Url::redirect();
            }

        }

        $data['title'] = 'Ajouter une tablature';
        View::rendertemplate('header', $data);
        View::renderModule('Tab/Views/add', $data, $error);
        View::rendertemplate('footer', $data);

    }
}