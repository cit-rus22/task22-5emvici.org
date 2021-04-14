<?php
class Controller_About extends Controller
{
    function action_default()
    {
        $this->view->generate('view_about.php');
    }
}
