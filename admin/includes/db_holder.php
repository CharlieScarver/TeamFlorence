<?php

ini_set('display_errors', 'On');
define('DB_NAME', 'd50shade_photography_forum');
define('DB_USER', 'root');
define('DB_PASS', '');

function dbHolder() {
    $connection = new PDO('mysql:dbname=' . DB_NAME . ';host=localhost', DB_USER, DB_PASS, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ));

    return $connection;
}

function selectAllCategories($conn) {
    $sql = <<< STR
        
         SELECT * 
         FROM categories;
         
STR;

    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function getCatById($conn, $id) {
    $sql = <<< STR
        
        SELECT cat_name
        FROM categories 
        WHERE cat_id = {$id} ;
STR;

    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function selectCatByPage($conn, $start, $per_page) {
    $sql = <<< STR
        
        SELECT *
        FROM categories 
        LIMIT {$start}, {$per_page} ;
STR;

    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function countCats($conn) {
    $sql = <<< STR
        
         SELECT 
         COUNT(cat_id) 
         FROM categories;
STR;

    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function addCat($conn, $post) {
    $sql = <<< STR
        
         INSERT 
         INTO categories (cat_name)
         VALUES ("{$post['cat_name']}");
STR;


    $sth = $conn->prepare($sql);
    $sth->execute();
    $last_id = $conn->lastInsertId();

    $array = array('last_id' => $last_id, 'fetchall' => $sth->fetchAll());

    return $array;
}

function deleteCat($conn, $id) {
    $sql = <<< STR
        
         DELETE 
         FROM categories 
         WHERE cat_id="{$id}";
STR;

//    echo $sql;
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function getCatId($conn, $id) {
    $sql = <<< STR
        
         SELECT *
         FROM categories 
         WHERE cat_id="{$id}";
STR;

    //echo $sql;      
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function editCat($conn, $post) {
    $sql = <<< STR
        
    UPDATE categories        
    SET 
        cat_name="{$post['cat_name']}"      
    WHERE cat_id= "{$_GET['id']}" ; 
STR;

//    echo $sql;      
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function selectAllNews($conn) {
    $sql = <<< STR
        
         SELECT * 
         FROM news;
         
STR;


    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function selectNewsByPage($conn, $start, $per_page) {
    $sql = <<< STR
        
        SELECT *
        FROM news 
        LIMIT {$start}, {$per_page} ;
STR;

    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function addNews($conn, $post) {
    $date = date("Y-m-d");
    $sql = <<< STR
        
 INSERT INTO news (title, text, date)
        VALUES ("{$post['title']}", "{$post['text']}", "{$date}");     
         
STR;

    //echo $sql;
    $sth = $conn->prepare($sql);
    $sth->execute();
    $last_id = $conn->lastInsertId();

    $array = array('last_id' => $last_id, 'fetchall' => $sth->fetchAll());

    return $array;
}

function addMap($conn, $news_id, $cat_id) {
    $sql = <<< STR
        
 INSERT INTO category_map (news_id, category_id)
        VALUES ("{$news_id}", "{$cat_id}");     
         
STR;

//    echo $sql;

    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function selectTagsByNewsId($conn,$newsId) {
    $sql = <<< STR
        
        SELECT cat_name
        FROM categories
        JOIN category_map 
        WHERE news_id = "{$newsId}"
        AND cat_id = category_id;
         
STR;
    
//    echo $sql;
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function deleteNews($conn, $id) {
    $sql = <<< STR
        
         DELETE 
         FROM news 
         WHERE id="{$id}";
STR;

//    echo $sql;
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function deleteMap($conn, $id) {
    $sql = <<< STR
        
         DELETE 
         FROM category_map 
         WHERE news_id="{$id}";
STR;

//    echo $sql;
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function getNewsId($conn, $id) {
    $sql = <<< STR
        
         SELECT *
         FROM news 
         WHERE id="{$id}";
STR;

    //echo $sql;      
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}

function editNews($conn, $post) {
    $date = date("Y-m-d");
    $sql = <<< STR
        
    UPDATE news        
    SET 
        title="{$post['title']}",   
        text="{$post['text']}",
        date="$date"    
        WHERE id="{$_GET['id']}" ; 
        
STR;

//    echo $sql;
    $sth = $conn->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
}
