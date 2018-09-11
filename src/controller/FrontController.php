<?php

namespace App\src\controller;

use App\src\DAO\CommentManager;
use App\src\DAO\PostManager;
use Exception;

class FrontController
{
    public function listPosts()
    {
        $postManager = new  PostManager();
        $posts = $postManager->getPosts();
        require('../templates/listPostView.php');
    }
    
    public function home()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {
           
            $nombreErreur = 0; 
            if (!isset($_POST['email'])) { 
              $nombreErreur++; 
              $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
            } else { 
              if (empty($_POST['email'])) { 
                $nombreErreur++; 
                $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
              } else {
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                  $nombreErreur++; // On incrémente la variable qui compte les erreurs
                  $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
                }
              }
            }
           
            if (!isset($_POST['message'])) {
              $nombreErreur++;
              $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
            } else {
              if (empty($_POST['message'])) {
                $nombreErreur++;
                $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
              }
            }             
            if ($nombreErreur==0) {
                $nom     = htmlentities($_POST['nom']); 
                $email   = htmlentities($_POST['email']);
                $message = htmlentities($_POST['message']);
               
                // Variables concernant l'email
               
                $destinataire = 'test@gmail.com'; 
                $sujet = 'Blog en php'; 
                $contenu = '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
                $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
                $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
                $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
                $contenu .= '</body></html>';
               
                
               
                
                

                // Create the Transport
                $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 587))
                ->setUsername(MAIL_USER)
                ->setPassword(MAIL_PASS)
                ->setEncryption('tls')
                ;

                // Create the Mailer using your created Transport
                $mailer = new \Swift_Mailer($transport);

                // Create a message
                $mail = (new \Swift_Message($sujet))
                ->setFrom([$destinataire => $destinataire])
                ->setTo(['mohasalim.gourari@gmail.com'  => 'Jean'])
                ->setBody($contenu, 'text/html');

                // Send the message
                $result = $mailer->send($mail);

                
            } else { // S'il y a un moins une erreur
              echo '<div style="border:1px solid #ff0000; padding:5px;">';
              echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
              if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
              if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
              if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
              if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
              if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
            }
        }
        require ('../templates/homeView.php');
    }

    public function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();
        $id = intval($_GET['id']);
        $post = $postManager->getPost($id);
        $comments = $commentManager->getComments($id);

        require('../templates/postView.php');
    }

    public function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->postComment($postId, $author, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }

    public function reportComment($id)
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->reportComment($id);
        header('Location: index.php');
    }


}

