<?php

function get_user_count()
{
    $user_count="";
     $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
     mysqli_select_db($conn,"id19345642_library");
     $res=mysqli_query($conn,"select count(*) as user_count from STU;");
     if(($rows=mysqli_fetch_array($res)))
    {
        $user_count=$rows['user_count'];
    }
    return($user_count);
}   
function get_book_count()
{
    $book_count="";
     $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
     mysqli_select_db($conn,"id19345642_library");
     $res=mysqli_query($conn,"select count(*) as book_count from books;");
     if(($rows=mysqli_fetch_array($res)))
    {
        $book_count=$rows['book_count'];
    }
    return($book_count);
}   
function get_category_count()
{
    $cat_count="";
     $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
     mysqli_select_db($conn,"id19345642_library");
     $res=mysqli_query($conn,"select count(*) as cat_count from category;");
     if(($rows=mysqli_fetch_array($res)))
    {
        $cat_count=$rows['cat_count'];
    }
    return($cat_count);
}   
function get_author_count()
{
    $author_count="";
     $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
     mysqli_select_db($conn,"id19345642_library");
     $res=mysqli_query($conn,"select count(*) as author_count from authors;");
     if(($rows=mysqli_fetch_array($res)))
    {
        $author_count=$rows['author_count'];
    }
    return($author_count);
}   
function get_issued_book_count()
{
    $issued_book_count="";
     $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
     mysqli_select_db($conn,"id19345642_library");
     $res=mysqli_query($conn,"select count(*) as issued_book_count from issued_books;");
     if(($rows=mysqli_fetch_array($res)))
    {
        $issued_book_count=$rows['issued_book_count'];
    }
    return($issued_book_count);
}   
?>