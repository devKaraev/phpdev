<?php
    
class run
{
    public static function showBooks($idAuthor, $page, $limit)
    {
        $page = intval($page);
        $offset = ($page - 1) * $limit;
        $id = isset($idAuthor) ? $idAuthor : $_POST['author'];
        $db = Config::getConnectDb();
        $params = ['id' => $id,'limit' => $limit, 'offset' => $offset];
        $info = array();

        $result = $db->prepare('SELECT * FROM `books` WHERE `id_post` = '.$id.' ORDER BY `id` LIMIT '.$limit.' OFFSET '.$offset);

//        $result->bindParam(":id", $id, PDO::PARAM_INT);
        $result->bindParam(":offset", $offset, PDO::PARAM_INT);
        $result->bindParam(":limit", $limit, PDO::PARAM_INT);
        
        $result->execute();
        
        $i=0;
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $info[$i]['id'] = $row['id']; 
            $info[$i]['id_post'] = $row['id_post']; 
            $info[$i]['name'] = $row['name']; 
            $info[$i]['authors'] = $row['authors']; 
            $info[$i]['img'] = $row['img']; 
            $i++;
        }
        return $info;
    }

    public static function showBookForEmail($idBook)
    {
        $db = Config::getConnectDb();

        $booksEmail = array();

        $result = $db->prepare('SELECT * FROM `books` WHERE id = :idBook');

        $result->bindParam(':idBook', $idBook, PDO::PARAM_INT);

        $result->execute();

        $i=0;

        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $booksEmail[$i]['id'] = $row['id'];
            $booksEmail[$i]['id_post'] = $row['id_post'];
            $booksEmail[$i]['name'] = $row['name'];
            $booksEmail[$i]['authors'] = $row['authors'];
            $booksEmail[$i]['img'] = $row['img'];
            $i++;
        }
        return $booksEmail;
    }
    
    public static function showAuthorsLimit($id=1)
    {
        $id = intval($id);
        $limit = 3;
        $offset = ($id - 1) * $limit;
        
        $db = Config::getConnectDb();
        
        $author = array();
        
        $result = $db->prepare('SELECT * FROM authors ORDER BY id LIMIT :limit OFFSET :offset');
        
        $result->bindParam(":limit", $limit, PDO::PARAM_INT);
        $result->bindParam(":offset", $offset, PDO::PARAM_INT);
        
        $result->execute();
        
        $i=0;
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $author[$i]['id'] = $row['id']; 
            $author[$i]['name'] = $row['name']; 
            $author[$i]['img'] = $row['img']; 
            $i++;
        }
        return $author;
    }
    
    public static function showAuthors()
    {
        $db = Config::getConnectDb();
        
        $author = array();
        
        $result = $db->prepare('SELECT * FROM authors ORDER BY id');
        
        $result->execute();
        
        $i=0;
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $author[$i]['id'] = $row['id']; 
            $author[$i]['name'] = $row['name']; 
            $author[$i]['img'] = $row['img']; 
            $i++;
        }
        return $author;
    }
    
     public static function getTotalAuthors()
    {
        $db = Config::getConnectDb();
        
        $result = $db->prepare('SELECT count(id) AS count FROM authors');
        
        $result->execute();
        
        $row = $result->fetch();
        
        return $row['count'];
    }
    
     public static function getTotalBooks($id)
    {
        $db = Config::getConnectDb();
        
        $result = $db->prepare('SELECT count(id) AS count FROM books WHERE id_post = :id');
        
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        $result->execute();

        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $row = $result->fetch();
        
        return $row['count'];
    }
}
