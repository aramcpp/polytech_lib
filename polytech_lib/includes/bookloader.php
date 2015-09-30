<?php
    require_once 'dbconnector.php';

    function getBookInfoArray() {
        $conn = getDBConnection();

        $stmt = $conn->prepare("select * from books");

        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $data = $stmt->fetchAll();

        $conn = NULL;

        return $data;
    }

    function getBookByID($bookID) {
        $bookinfo = getBookInfoArray();

        return $bookinfo[$bookID];
    }
?>
