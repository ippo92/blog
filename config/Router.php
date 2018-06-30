<?php

namespace App\config;


use App\controller\BackController;
use App\controller\FrontController;
use Exception;

class Router
{
    private $frontController;
    private $backController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->backController = new BackController();
    }

    public function run()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'listPosts') {
                    $this->frontController->listPosts();
                } elseif ($_GET['action'] == 'post') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $this->frontController->post();
                    } else {
                        throw new Exception('Aucun identifiant de billet envoyé');
                    }
                } elseif ($_GET['action'] == 'addComment') {
                    var_dump($_POST);
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                            $this->frontController->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                        } else {
                            throw new Exception('Tous les champs ne sont pas remplis !');
                        }
                    } else {
                        throw new Exception('Aucun identifiant de billet envoyé');
                    }
                } elseif ($_GET['action'] == 'addPost') {
                    $this->backController->addPost();
                } elseif ($_GET['action'] == 'getUpdatePost') {
                    $this->backController->getUpdatePost();
                }
                elseif ($_GET['action'] == 'updatePost') {
                    $this->backController->updatePost();
                }
                elseif ($_GET['action'] == 'Dashboard') {
                    $this->backController->Dashboard();
                }
                elseif ($_GET['action'] == 'deletePost') {
                    $this->backController->deletePost();
                }
            } else {
                $this->frontController->listPosts();

            }

        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
