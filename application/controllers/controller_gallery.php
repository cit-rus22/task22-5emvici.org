<?php
class Controller_Gallery extends Controller
{
    function action_default()
    {
        $this->view->generate('view_gallery.php');
    }
}
