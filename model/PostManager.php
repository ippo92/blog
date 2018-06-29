<?php

namespace App\model;



class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content,DATE_FORMAT(creation_date,"%d/%m/%Y") AS creation_date FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

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

    public function updatePost($title,$content,$id )
    {
        $db = $this->dbConnect();
        
        var_dump($id);
        $req = $db->prepare('UPDATE posts SET (title, content) VALUES (?, ?) WHERE id = ?');
        $req->execute(array($title, $content, $id));
        var_dump($req);
    }
}