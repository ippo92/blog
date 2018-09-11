<?php


namespace App\src\controller;


use App\src\DAO\PostManager;
use App\src\DAO\CommentManager;



class BackController
{
    public function addPost()
    {

        if (!empty($_POST["title"]) && !empty($_POST["content"])){
            extract($_POST);
            $postManager = new PostManager();
            $affectedLines = $postManager->setPost($title, $content);

        }
        require ('../templates/insertPostView.php');

    }

    public function updatePost($id)
    {   
        //$postManager = new PostManager();
        //$post = $postManager->getPost($_GET['id']);
        if (!empty($_POST["title"]) && !empty($_POST["content"])){
            extract($_POST);
            $postManager = new PostManager();
            if (ctype_digit($_GET['id'])) {
                $id = intval($_GET['id']);
                $postManager->updatePost($title, $content, $id);
                header('Location: index.php');
            }
            
        }

        //require ('view/updatePostView.php');
    }

    public function getUpdatePost($id)
    {
        $postManager = new PostManager();
        $post = $postManager->getPost($id);
        require ('../templates/updatePostView.php');
    }

    public function dashboard()
    {
        session_start();
        $postManager = new  PostManager();
        $commentManager = new CommentManager();
        if (isset($_SESSION['pass'])) {
            $posts = $postManager->getPosts();
            $comments = $commentManager->getReportedComments();
            require('../templates/dashboardView.php');
        }
        else {
            header('Location: index.php?action=connection');
        }
    }

    public function connection()
    {
        session_start();
        $postManager = new  PostManager();
        $commentManager = new CommentManager();
        if (isset($_SESSION['pass'])) {
            header('Location: index.php?action=Dashboard');
        }
        else {
            require('../templates/connectionView.php');
        }
        
    }
    
    public function check($post)
    {   
        $postManager = new PostManager();
        $resultat = $postManager->getPassword($post);
        var_dump($resultat);
        var_dump($resultat['pass']);
        if($resultat[0]){
            session_start();
            $_SESSION['pass'] = $resultat[1];
            header('Location: index.php?action=Dashboard');
        }
        else{
            header('Location: index.php?action=connection');
        }
    }



    public function deletePost($id)
    {
        $postManager = new PostManager();
        $post = $postManager->deletePost($id);
        header('Location: index.php?action=Dashboard');
    }
    
    public function getPostComments($id)
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();
        $id = intval($_GET['id']);
        $post = $postManager->getPost($id);
        $comments = $commentManager->getComments($id);

        require('../templates/getPostCommentsView.php');
    }

    public function deleteComment($id)
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->deleteComment($id);
        header('Location: index.php?action=Dashboard');
    }

    public function approveComment($id)
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->approveComment($id);
        header('Location: index.php?action=Dashboard');
    }



}


