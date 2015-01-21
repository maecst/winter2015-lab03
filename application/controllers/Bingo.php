<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() 
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // get the first quote to pass on to our view
        // $source is the data array
        $source = $this->quotes->get('5');
        
        $who = $source['who'];
        $mug = $source['mug'];
        $where = $source['where'];
        $what = $source['what'];

        $this->data['who'] = $who;
        $this->data['mug'] = $mug;
        $this->data['href'] = $where;
        $this->data['what'] = $what;
        
        $this->render();
    }
    
    function wisdom() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // get the first quote to pass on to our view
        // $source is the data array
        $source = $this->quotes->get('6');
        
        $who = $source['who'];
        $mug = $source['mug'];
        $where = $source['where'];
        $what = $source['what'];

        $this->data['who'] = $who;
        $this->data['mug'] = $mug;
        $this->data['href'] = $where;
        $this->data['what'] = $what;
        
        $this->render();
    }
    
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */