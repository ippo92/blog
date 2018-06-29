<?php


namespace App\controller;


use App\model\PostManager;

class BackController
{
    public function addPost()
    {

        if (!empty($_POST["title"]) && !empty($_POST["content"])){
            extract($_POST);
            $postManager = new PostManager();
            $affectedLines = $postManager->setPost($title, $content);

        }
        require ('view/insertPostView.php');

    }

    public function updatePost()
    {   
        //$postManager = new PostManager();
        //$post = $postManager->getPost($_GET['id']);
        if (!empty($_POST["title"]) && !empty($_POST["content"])){
            extract($_POST);
            $postManager = new PostManager();
            if (ctype_digit($_GET['id'])) {
                $id = intval($_GET['id']);
                $postManager->updatePost($title, $content, $id);
            }
            
        }

        //require ('view/updatePostView.php');
    }

    public function getUpdatePost()
    {
        $postManager = new PostManager();
        $post = $postManager->getPost($_GET['id']);
        require ('view/updatePostView.php');
    }

}


