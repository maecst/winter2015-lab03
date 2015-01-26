<?php 

/* 
 * Contains overrides to any content being displayed 
 */
class display_override
{
    
    /*
     * Function that gets the content of a page, searches the content for any 
     * capitalized letter that is within a <p class = "lead">...</p> tag, and
     * makes the capitalized letter bold.
     */
    function make_capitals_bold()
    {
        $CI = &get_instance();
        $output = $CI->output->get_output();

        // target regex to search for
        $search = '/(<p\s+class\s*=\s*"lead">)(.*)(<\/p>)/i';

        // check the output for anything that matches the search regex above
        if (preg_match($search, $output, $content)) 
        {
            $pattern = '/([A-Z])/';                 // any capital letter
            $replace = '<strong>$1</strong>';       // enclose pattern in bold tags

            // search content for any letters that are capitalized (pattern) 
            // and use the replace variable to make it bold
            $content[0] = preg_replace($pattern, $replace, $content[0]);

            // update what is to be output
            $output = preg_replace($search, $content[0], $output);
        }

        // set and display output
        $CI->output->set_output($output);
        $CI->output->_display();
    }
}
 


/* End of file my_hook.php */
/* Location: ./system/application/hooks/my_hook.php */