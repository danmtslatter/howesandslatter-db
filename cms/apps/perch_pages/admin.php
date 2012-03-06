<?php
    $this->register_app('perch_pages', 'Pages', 2, 'Create and manage new pages', '2.5.1');
    $this->require_version('perch_blog', '1.7.3');
    $this->add_setting('perch_pages_editorMayDeletePages', 'Editors may delete pages', 'checkbox', true);
    $this->add_setting('perch_pages_folders', 'Create new pages in these folders', 'textarea', false, false, 'One per line.');
?>
