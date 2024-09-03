<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Blog;

$category   = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $blog   = new Blog();
        $blogs  = $blog->getAllBlog();
        include 'pages/home.php';
    }
}
