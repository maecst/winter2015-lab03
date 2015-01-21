<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    /** 
     *  The default constructor
     */  
    function __construct() 
    {
        parent::__construct();
    }

    /** 
     *  The normal pages
     */
    function index() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // get the fifth quote to pass on to our view
        $source = $this->quotes->get('5');
        
        // retrieve individual elements of the quote and save into corresponding variables
        $who = $source['who'];
        $mug = $source['mug'];
        $where = $source['where'];
        $what = $source['what'];

        // add key/value pairs to the view parameters array
        $this->data['who'] = $who;
        $this->data['mug'] = $mug;
        $this->data['href'] = $where;
        $this->data['what'] = $what;
        
        // render page view
        $this->render();
    }

    /**
     *  WRITE SOMETHING HERE
     */    
    function wisdom() 
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // get the sixth and last quote to pass on to our view
        $source = $this->quotes->get('6');
        
        // retrieve individual elements of the quote and save into corresponding variables
        $who = $source['who'];
        $mug = $source['mug'];
        $where = $source['where'];
        $what = $source['what'];

        // add key/value pairs to the view parameters array
        $this->data['who'] = $who;
        $this->data['mug'] = $mug;
        $this->data['href'] = $where;
        $this->data['what'] = $what;
        
        // render page view
        $this->render();
    }
    
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */