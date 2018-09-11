<?php

namespace App\src\routing;


use App\src\controller\BackController;
use App\src\controller\FrontController;
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
                if ($_GET['action'] == 'listPostss') {
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
                    $this->backController->getUpdatePost($_GET['id']);
                }
                elseif ($_GET['action'] == 'updatePost') {
                    $this->backController->updatePost($_GET['id']);
                }
                elseif ($_GET['action'] == 'Dashboard') {
                    $this->backController->dashboard();
                }
                elseif ($_GET['action'] == 'deletePost') {
                    $this->backController->deletePost($_GET['id']);
                }
                elseif ($_GET['action'] == 'getPostComments') {
                    $this->backController->getPostComments($_GET['id']);
                }
                elseif ($_GET['action'] == 'deleteComment') {
                    $this->backController->deleteComment($_GET['id']);
                }
                elseif ($_GET['action'] == 'reportComment') {
                    $this->frontController->reportComment($_GET['id']);
                }
                elseif ($_GET['action'] == 'approveComment') {
                    $this->backController->approveComment($_GET['id']);
                }
                elseif ($_GET['action'] == 'listPosts') {
                    $this->frontController->listPosts();
                }
                elseif ($_GET['action'] == 'check'){
                    $this->backController->check($_POST);
                }
                elseif ($_GET['action'] == 'connection'){
                    $this->backController->connection();
                }
            } else {
                $this->frontController->home();
            }

        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
