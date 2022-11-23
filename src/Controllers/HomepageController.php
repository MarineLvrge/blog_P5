<?php

namespace App\Controllers;

use App\Lib\DatabaseConnection;
use App\Model\PostRepository;

class HomepageController
{
    public function execute()
    {
        $postRepository = new PostRepository();
        $postRepository->connection = new DatabaseConnection();
        $posts = $postRepository->getPosts();

        require('templates/homepage.php');
    }
}
