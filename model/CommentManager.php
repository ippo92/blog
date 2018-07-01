<?php

namespace App\model;


class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT *, DATE_FORMAT(comment_date,"%d/%m/%Y") AS comment_date FROM comments WHERE post_id = ? ORDER BY comment_date ASC');
        $comments->execute(array($_GET['id']));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id = :id');
        $req->execute(array('id' =>$id));
    }
    

}