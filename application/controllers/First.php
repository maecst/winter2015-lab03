<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

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
        
        // get the first quote to pass on to our view
        $source = $this->quotes->first();
        
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
    function zzz() 
    {
            $this->index();        
    }
    
    /**
     *  WRITE SOMETHING HERE
     */    
    function gimme($id) 
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        // get the quote based on the argument $id to pass on to our view
        $source = $this->quotes->get($id);
        
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

/* End of file First.php */
/* Location: application/controllers/First.php */