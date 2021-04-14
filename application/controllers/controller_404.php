<?php
class Controller_404 extends Controller
{
    function action_default()
    {
        $this->view->generate('view_404.php');
    }
}
