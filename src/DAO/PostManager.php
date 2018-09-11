<?php

namespace App\src\DAO;



class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content,DATE_FORMAT(creation_date,"%d/%m/%Y") AS creation_date FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content,DATE_FORMAT(creation_date,"%d/%m/%Y") AS creation_date FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        
        return $post;
    }

    public function setPost($title,$content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES (?, ?, NOW())');
        $affectedLines = $req->execute(array($title, $content));

    }

    public function updatePost($title,$content,$id)
    {
        $db = $this->dbConnect();
        
        
        $req = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
        $req->execute(array('title' =>$title, 'content' =>$content, 'id' =>$id));
        
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = :id');
        $req->execute(array('id' =>$id));
        $req = $db->prepare('DELETE FROM comments WHERE post_id = :id');
        $req->execute(array('id' =>$id));
    }

    public function getPassword($post)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT pass FROM users');
        $resultat = $req->fetch();
        $isPasswordCorrect = password_verify($_POST['mot_de_passe'], $resultat['pass']);
        $data[]= $isPasswordCorrect;
        $data[]= $resultat['pass'];
        return $data;
    }


}