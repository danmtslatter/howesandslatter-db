<?php

    $HTML = $API->get('HTML');
    $Form = $API->get('Form');
    $NavGroups = new PerchPages_NavGroups($API);
    $Templates = new PerchPages_Templates($API);
    $Pages     = new PerchPages_Pages($API); 
    
    if (isset($_GET['id']) && $_GET['id']!='') {
        $pageID = (int) $_GET['id'];    
        $Page = $Pages->find($pageID);
        $details = $Page->to_array();
    }else{
        $Page = false;
        $details = array();
        $pageID = false;
    }
    
    $message = false;
    $created = false;
    
    
    $Form->require_field('pageTitle', 'Required');
    
    
    if ($Form->submitted()) {
        $postvars = array('pageTitle', 'pageSection', 'templateID', 'navgroupID');
    	$data = $Form->receive($postvars);
    	
    	$data = array_merge($Page->to_array(), $data);
    	unset($data['pageID']);
    	
    	$data['pageNew'] = 0;
    	$data['pagePlaceholder'] = 0;
    	
    	if (isset($data['templateID'])) {
    	    $parts = explode('/', $Page->pagePath());
    	    $data['file_name'] = array_pop($parts);
    	    $NewPage = $Pages->create_with_file($data);
    	    if (is_object($NewPage)) {
    	        $Page->delete(false);
    	        $Page = $NewPage;
    	        PerchUtil::redirect($API->app_path().'/edit/?id='.$Page->id().'&created=true');
    	    }else{
    	        $message = '';
    	        
    	        $errors = $Pages->get_errors();
    	        if (PerchUtil::count($errors)) {
    	            foreach($errors as $error) {
    	                $message .= $HTML->failure_message($error);
    	            }
    	        }
    	        
    	        $message .= $HTML->failure_message('Sorry, that page could not be created.');
    	        
    	        
    	    }
    	}else{
    	    unset($data['pageSection']);
    	    unset($data['templateID']);
    	    unset($data['navgroupID']);
    	    $Page->update($data);
    	    $message = $HTML->success_message('Your page has been successfully updated. Return to %spage listing%s', '<a href="'.$API->app_path() .'/">', '</a>');
    	    $details = $Page->to_array();
    	}
                
    }
    
    if (isset($_GET['created']) && !$message) {
        $message = $HTML->success_message('Your page has been successfully created. Return to %spage listing%s', '<a href="'.$API->app_path() .'">', '</a>');
        $created = true;
    }
?>