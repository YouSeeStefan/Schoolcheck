<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/funcs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Personal Trainer');

// Display template: output html
$templateParser->display('head.tpl');

// Get newsarticles from database


$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action) {
    case 'home':
            $page_nr = isset($_GET['page_number'])?$_GET['page_number']:1;

            include('model/select_newsarticles.php');
            include('model/get_nr_newsarticles.php');
            $templateParser->assign('total_number_articles', $total_number_articles);
            $templateParser->assign('result', $result);
            $templateParser->display('newsarticles.tpl');
            break;
        
    case 'about':
        
        include('model/select_about.php');
        $templateParser->assign('aboutContent', $aboutContent);
        $templateParser->display('about.tpl');
        break;
        
    case 'schedule':
        
        include('model/select_schedule.php');
        $templateParser->assign('scheduleContent', $scheduleContent);
        $templateParser->display('schedule.tpl');
        break;
        
    case 'contact':
        
        $templateParser->display('contact.tpl');
        break;

    case 'admin':
        $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:'show';
        // echo $cms_action;

        $submit_update = isset($_POST['submit_update'])? 1:0;
        $cms_action = $submit_update?'save':$cms_action;

        switch ($cms_action) {
            case 'show':
                # show all items
                include 'model/select_allitems.php';
                $templateParser->assign('result', $result);
                $templateParser->display('cms_show.tpl');
                break;
            
            case 'delete':
                # delete items
                $id = $_GET['id'];
                // echo $id;
                include 'model/delete_item.php';
                break;

            case 'insert':
                # code...
                $templateParser->display('new.tpl');
                break;

            case 'edit':
                // read out id
                $id = isset($_GET['id'])?$_GET['id']:0;
                // select id
                include 'model/select_oneitem.php';
                //prefix
                $templateParser->assign('result', $result);
                // go edit form
                $templateParser->display('edit.tpl');
                # code...
                break;

            case 'save':
                //call model to save item: Update
                $id = isset($_GET['id'])?$_GET['id']:0;
                
                include 'model/submit_update.php';
                //go to admin show

                break;
        }

}

$templateParser->display('footer.tpl');
