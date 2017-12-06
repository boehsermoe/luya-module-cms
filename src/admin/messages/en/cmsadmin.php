<?php

return [
    
    'view_index_add_type' => 'Page Type',
    'view_index_type_page' => 'Page',
    'view_index_type_module' => 'Module',
    'view_index_type_redirect' => 'Forwarding',
    'view_index_as_draft' => 'As template',
    'view_index_as_draft_help' => 'Do you want to define the new page as a template?',
    'view_index_no' => 'No',
    'view_index_yes' => 'Yes',
    'view_index_page_title' => 'Page Title',
    'view_index_page_alias' => 'URL Path segment',
    'view_index_page_meta_description' => 'Description (Meta Description for Google)',
    'view_index_page_nav_container' => 'Navigation Container',
    'view_index_page_parent_page' => 'Parent Page',
    'view_index_page_success' => 'Successfully created the page',
    'view_index_page_parent_root' => 'on Root level',
    'view_index_page_use_draft' => 'Use a template?',
    'view_index_page_select_draft' => 'Do you want to select a template?',
    'view_index_page_layout' => 'Layout selection',
    'view_index_page_btn_save' => 'Save new page',
    'view_index_module_select' => 'Module name',
    'view_index_sidebar_new_page' => 'Create new page',
    'view_index_sidebar_drafts' => 'Templates',
    'view_index_sidebar_move' => 'Move',
    'view_update_drop_blocks' => 'Drop the content blocks here',
    'view_update_blockcontent' => 'Block content',
    'view_update_configs' => 'Optional Configurations',
    'view_update_settings' => 'Settings',
    'view_update_btn_save' => 'Save',
    'view_update_btn_cancel' => 'Abort',
    'view_update_holder_state_on' => 'Fold placeholders',
    'view_update_holder_state_off' => 'Unfold placeholders',
    'view_update_is_draft_mode' => 'Editing in draft mode.',
    'view_update_is_homepage' => 'Homepage',
    'view_update_properties_title' => 'Page properties',
    'view_update_no_properties_exists' => 'No properties have been stored yet for this page.',
    'view_update_draft_no_lang_error' => 'The template is not set up in this language.',
    'view_update_no_translations' => 'This page has not been translated yet.',
    'view_update_page_is_module' => 'This page is a <strong>module</strong>.',
    'view_update_page_is_redirect_internal' => 'This page is an <strong>internal redirection</strong> to <show-internal-redirection nav-id="typeData.value" />.',
    'view_update_page_is_redirect_external' => 'This page is an <strong>external redirection</strong> to <a ng-href="{{typeData.value}}">{{typeData.value}}</a>',
    'menu_node_cms' => 'Pages',
    'menu_node_cmssettings' => 'Settings',
    'menu_group_env' => 'Environment',
    'menu_group_item_env_container' => 'Containers',
    'menu_group_item_env_layouts' => 'Layouts',
    'menu_group_elements' => 'Content elements',
    'menu_group_item_elements_blocks' => 'Blocks Management',
    'menu_group_item_elements_group' => 'Groups Management',
    'btn_abort' => 'Abort',
    'btn_refresh' => 'Refresh',
    'btn_save' => 'Save',

// added translation in 1.0.0-beta3:

    'model_navitemmodule_module_name_label' => 'Module name',
    'model_navitem_title_label' => 'Page title',
    'model_navitem_alias_label' => 'URL Path segment',
    'model_navitempage_layout_label' => 'Layout',
    'model_navitemredirect_type_label' => 'Type of redirection',
    'model_navitemredirect_value_label' => 'Target of redirection',
    
    'view_index_add_title' => 'Add new page',
    'view_index_add_page_from_language' => 'Add page from language',
    'view_index_add_page_from_language_info' => 'Would you like to copy the contents from another language when creating this page?',
    'view_index_add_page_empty' => 'Add new empty page',
    'view_index_language_loading' => 'Loading page',
    'draft_title' => 'Templates',
    'draft_text' => 'Edit existing templates. Templates can be applied when creating a new page.',
    'draft_column_id' => 'ID',
    'draft_column_title' => 'Title',
    'draft_column_action' => 'Action',
    'draft_edit_button' => 'Edit',
    'js_added_translation_ok' => 'The translation of this page was created successfully.',
    'js_added_translation_error' => 'An error occurred while creating the translation',
    'js_page_add_exists' => 'A page "%title" with the same URL already exists in this group (id=%id%).',
    'js_page_property_refresh' => 'The properties were updated.',
    'js_page_confirm_delete' => 'Do you really want to delete this page?',
    'js_page_delete_error_cause_redirects' => 'This page can not be deleted. You first have to delete all redirections to this page.',
    'js_state_online' => '%title% online',
    'js_state_offline' => '%title% offline',
    'js_state_hidden' => '%title% hidden',
    'js_state_visible' => '%title% visible',
    'js_state_is_home' => '%title% is root page',
    'js_state_is_not_home' => '%title% is no root page',
    'js_page_item_update_ok' => 'The page «%title%» was updated.',
    'js_page_block_update_ok' => 'The block «%name%» was updated.',
    'js_page_block_remove_ok' => 'The block «%name%» was deleted.',
    'js_page_block_visbility_change' => 'The visibility of «%name%» was changed successfully.',

// added translation in 1.0.0-beta4:

// added translation in 1.0.0-beta5:
    
    'view_update_blockholder_clipboard' => 'Clipboard',

// added translation in 1.0.0-beta6:

   
    'js_page_block_delete_confirm' => 'Do you really want to delete the block «%name%»?',
    'view_index_page_meta_keywords' => 'Keywords for SEO analytics (example: restaurant, pizza, italy)',
    'current_version' => 'Working version',
    'Initial' => 'First version',
    'view_index_page_version_chooser' => 'Published version',
    'versions_selector' => 'Versions',
    'page_has_no_version' => 'This page has no version and no layout yet. Create a new version by clicking the add icon <i class="material-icons green-text">add</i> to the right.',
    'version_edit_title' => 'Edit version',
    'version_input_name' => 'Name',
    'version_input_layout' => 'Layout',
    'version_create_title' => 'Add new version',
    'version_create_info' => 'You can create any number of page versions with different contents. Publish a version to make it visible on the website.',
    'version_input_copy_chooser' => 'Version to copy',
    'version_create_copy' => 'Create copy of an existing version.',
    'version_create_new' => 'Create a new, empty version.',
    'js_version_update_success' => 'The version has been updated successfully.',
    'js_version_error_empty_fields' => 'One or more fields are empty or have an invalid value.',
    'js_version_create_success' => 'The new version has been created successfully.',

// added translation in 1.0.0-beta7:

    
    'view_index_create_page_please_choose' => 'Please choose',
    'view_index_sidebar_autopreview' => 'Auto Preview',
    
// added translation in 1.0.0-beta8

    'module_permission_add_new_page' => 'Create new page',
    'module_permission_update_pages' => 'Page Edit',
    'module_permission_edit_drafts' => 'Templates Edit',
    'module_permission_page_blocks' => 'Page Content Blocks',
    'js_version_delete_confirm' => 'Are you sure you want to delete the page version «%alias%»?',
    'js_version_delete_confirm_success' => 'The page version %alias% has been deleted successfully.',
    'log_action_insert_cms_nav_item' => 'Added new language <strong>{info}</strong>',
    'log_action_insert_cms_nav' => 'Added new page <strong>{info}</strong>',
    'log_action_insert_cms_nav_item_page_block_item' => 'Inserted a new block <strong>{info}</strong>',
    'log_action_insert_unkown' => 'Added a new row',
    'log_action_update_cms_nav_item' => 'Updated the language of page <strong>{info}</strong>',
    'log_action_update_cms_nav' => 'Updated the status of page <strong>{info}</strong>',
    'log_action_update_cms_nav_item_page_block_item' => 'Updated the content or configuration of block <strong>{info}</strong>',
    'log_action_update_unkown' => 'Updated an existing row',
    'log_action_delete_cms_nav_item' => 'Removed a language version of <strong>{info}</strong>',
    'log_action_delete_cms_nav' => 'Removed page <strong>{info}</strong>',
    'log_action_delete_cms_nav_item_page_block_item' => 'Deleted block <strong>{info}</strong>',
    'log_action_delete_unkown' => 'Deleted a row',
    'block_group_favorites' => 'Favorites',
    'button_create_version' => 'Create Version',
    'button_update_version' => 'Update Version',
    'menu_group_item_env_permission' => 'Page Permissions',
    
// rc1

    'page_update_actions_deepcopy_text' => 'Create a copy of the current page with all its contents. They copy will include all languages but only the published version.',
    'page_update_actions_deepcopy_btn' => 'Create Copy',
    
// rc2
    'model_navitem_title_tag_label' => 'Title Tag (SEO)',
    
// rc3
    'model_navitempage_empty_draft_id' => 'Unable to create page from empty template.',
    'view_update_variation_select' => 'Normal',
    'menu_group_item_env_config' => 'Config',
    'js_config_update_success' => 'Configuration successfully updated.',
    'config_index_httpexceptionnavid' => 'Specify the page 404 errors will redirect to.<br /><small>Tip: Create a 404 page containing your error message and mark it as hidden.',
    'module_permission_update_config' => 'CMS Configurations',
    'module_permission_delete_pages' => 'Delete Page',
    'page_update_actions_deepcopy_title' => 'Copy Page',
    'page_update_actions_layout_title' => 'Layout File',
    'page_update_actions_layout_text' => 'Specify another layout file to be rendered instead of the main layout file (file extension ".php" can be omitted, path aliases can be used). If empty, `main.php` will be used as a default.',
    'page_update_actions_layout_file_field' => 'Layout File',
    'page_update_actions_modal_title' => 'Page Settings',
    'js_page_update_layout_save_success' => 'The layout file has been updated',
    'js_page_create_copy_success' => 'The page copy has been created.',
    'view_update_offline_info' => 'Change offline/online state. If a page is offline, it is not accessible by URL.',
    'view_update_hidden_info' => 'Change visibility state. If a page is hidden, it is accessible by URL but hidden in navigations.',
    'view_update_homepage_info' => 'Set this page as Homepage.',
    'view_update_block_tooltip_copy' => 'Add to clipboard',
    'view_update_block_tooltip_visible' => 'Make page invisible in navigations',
    'view_update_block_tooltip_invisible' => 'Make page visible in navigations',
    'view_update_block_tooltip_edit' => 'Edit',
    'view_update_block_tooltip_editcfg' => 'Configure',
    'view_update_block_tooltip_delete' => 'Delete',
    'view_update_block_tooltip_close' => 'Close',

// 1.0.0
    'cmsadmin_dashboard_lastupdate' => 'Last page updates',
    'cmsadmin_settings_homepage_title' => 'Default page',
    'cmsadmin_settings_trashpage_title' => 'Delete page',
    'cmsadmin_settings_modal_title' => 'Settings',
    'cmsadmin_item_settings_titleslug' => 'Page informations',
    'cmsadmin_created_at' => 'Created at',
    'cmsadmin_version_remove' => 'Remove version',
    'view_index_sidebar_container_no_pages' => 'Empty container',
    'view_update_set_as_homepage_btn' => 'Set as homepage',
	'cmsadmin_settings_time_title' => 'Scheduler',
	'cmsadmin_settings_time_title_from' => 'From',
	'cmsadmin_settings_time_title_till' => 'Till',
	'view_index_page_meta_timestamp_create' => 'Page creation date',
    'nav_item_model_error_modulenacd /var   meexists' => 'The alias "{alias}" exists already as module. Use another alias name or rename the module with this alias in your config.',
    'nav_item_model_error_parentnavidcannotnull' =>  'The parent nav id can not be null, something went wrong while extending from parent page.',
    'nav_item_model_error_urlsegementexistsalready' => 'This alias exists already, please take another name.',
    'menu_group_item_env_redirections' => 'Redirects',
    'redirect_model_atr_timestamp_create' => 'Create timestamp',
    'redirect_model_atr_catch_path' => 'From path',
    'redirect_model_atr_catch_path_hint' => 'The path which should be catched. If you want to match everything of a certain path you can use the * wildcard like /blog* will match everything behind blog.',
    'redirect_model_atr_catch_path_error' => 'The from path must start with a slash.',
    'redirect_model_atr_redirect_path' => 'Destination',
    'redirect_model_atr_redirect_path_hint' => 'You can either use a full domain (can be external) en absolute path starting with a / or a relative path.',
    'redirect_model_atr_redirect_status_code' => 'HTTP status code',
    'redirect_model_atr_redirect_status_code_hint' => 'Redirection type, by default its recommend to use 302. When using 301 redirects, you have to clear the cache when changing the destination value.',
    'redirect_model_atr_redirect_status_code_opt_301' => '301: Moved Permanently',
    'redirect_model_atr_redirect_status_code_opt_302' => '302: Temporary',
];
