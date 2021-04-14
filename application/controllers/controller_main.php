<?php
class Controller_Main extends Controller
{
    function action_default()
    {
        $this->view->generate('view_main.php');
    }
}
