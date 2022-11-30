<?php

namespace App\Controllers\Admin;

class PostControllerAdmin 
{
    public function addPost()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (count($_POST) > 0) {
                print "<PRE>";
                print_r($_POST);
                print "</PRE>";
            }
        }
        require('templates/admin/post/add.php');
    }
}