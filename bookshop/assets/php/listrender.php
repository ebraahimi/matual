<?php

    include("connection.php");

    $per_page_record = $_POST['per_page_record'];
    if (isset($_GET["page"])) {
        $page  = $_GET["page"];
    }
    else {
        $page=1;
    }
    $start_from = ($page-1) * $per_page_record;


    if($per_page_record == 12){
        $query = "SELECT * FROM booklist JOIN author ON booklist.book_writerID = author.authorID 
        JOIN book_category ON booklist.book_categoryID = book_category.bookcategoryID 
        ORDER BY `bookID` ASC LIMIT $per_page_record ";
        $books = mysqli_query($connection, $query);
       
        // Marvi coded 
        $tmp_arr = [];
        while($book = mysqli_fetch_assoc($books)){
            array_push($tmp_arr, $book);
        };
        $js_arr = json_encode($tmp_arr);
        print_r($js_arr);
        // Marvi coded 
        
    }else if ($per_page_record == 24){
        $query = "SELECT * FROM booklist JOIN author ON booklist.book_writerID = author.authorID 
        JOIN book_category ON booklist.book_categoryID = book_category.bookcategoryID 
        ORDER BY `bookID` ASC LIMIT $per_page_record ";
        $books = mysqli_query($connection, $query);

        while($book = mysqli_fetch_assoc($books)){
            array_push($boooks , $book);
        };
        
        print_r($boooks);

    }else{

        $query = "SELECT * FROM booklist JOIN author ON booklist.book_writerID = author.authorID 
        JOIN book_category ON booklist.book_categoryID = book_category.bookcategoryID 
        ORDER BY `bookID` ASC ";

        $books = mysqli_query($connection, $query);

        while($book = mysqli_fetch_assoc($books)){
            array_push($boooks , $book);
        };
        
        print_r($boooks);
    }
    
