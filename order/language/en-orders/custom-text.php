<?php
/*
 * ==> HOW TO CUSTOMIZE TEXT
 *
 * Follow this guide:
 * http://www.hesk.com/knowledgebase/?article=88
 *
 * ==> IMPORTANT: FILE ENCODING
 *
 * This file *must* be saved in UTF-8 encoding without byte order mark (BOM)
 * Test chars: àáâãäåæ
 *
 * http://www.hesk.com/knowledgebase/?article=87
 *
 */

// ADD AND MODIFY TEXT BELOW THIS LINE

// Native name of language, for example: Deutsch
$hesklang['LANGUAGE']='English-Orders';

// English name of language, for example: German
$hesklang['LANGUAGE_EN']='English-Orders';

// EMAIL SUBJECTS
$hesklang['new_ticket_staff']       = '[#%%TRACK_ID%%] New order: %%SUBJECT%%';
$hesklang['ticket_received']        = '[#%%TRACK_ID%%] Order received: %%SUBJECT%%';
$hesklang['ticket_assigned_to_you'] = '[#%%TRACK_ID%%] Order assigned: %%SUBJECT%%';
$hesklang['forgot_ticket_id']       = 'List of your orders';
$hesklang['ticket_closed']			= '[#%%TRACK_ID%%] Order closed/delivered'; // New in 2.6.0
$hesklang['ticket_not_found']='Order not found! Please make sure you have entered the correct tracking ID!';
$hesklang['del_selected']='Delete selected orders';
$hesklang['show_tickets']='Show orders';
$hesklang['tickets_page']='orders per page';
$hesklang['find_ticket']='Find order';
$hesklang['ticket']='Order';
$hesklang['tickets']='Orders';
$hesklang['ticket_been']='This order has been';
$hesklang['view_ticket']='View order';
$hesklang['open_tickets']='Open orders';
$hesklang['ticket_marked']='This order has been marked';
$hesklang['ticket_status']='Order status';
$hesklang['ticket_trackID']='Order tracking ID';
$hesklang['tickets_deleted']='Orders deleted';
$hesklang['users_intro']='Here you are able to manage users who can login to the admin panel and
answer orders. Administrators can view/edit orders in any category and have access
to all functions of the admin panel (manage users, manage categories, ...) while
other users may only view and reply to orders within their categories.';
$hesklang['new_ticket_submitted']='New order submitted';
$hesklang['close_selected']='Mark selected orders Resolved';
$hesklang['tickets_closed']='Orders closed';
$hesklang['num_tickets_closed']='<b>%d</b> orders have been closed';
$hesklang['tid_not_found']='No orders with your email address were found';
$hesklang['tid_sent']='Order tracking ID sent';
$hesklang['tid_sent2']='An email with details about your orders has been sent to your address';


// CUSTOMER INTERFACE
$hesklang['your_ticket_been']='Your order has been';
$hesklang['submit_ticket']='Place an order';
$hesklang['before_submit']='Before ordering please make sure of the following';
$hesklang['reply_submitted_success']='Your reply to this order has been successfully submitted';
$hesklang['view_your_ticket']='View your order';
$hesklang['ticket_submitted']='Order placed';
$hesklang['ticket_submitted_success']='Your order has been successfully placed! Order ID';
$hesklang['your_ticket']='Your order';

$hesklang['tid_not_found']='No orders with your email address were found';
$hesklang['tid_sent2']='An email with details about your orders has been sent to your address';
$hesklang['enter_message']='Please enter your order';
$hesklang['message']='Order';
$hesklang['sub_ticket']='Place Order';
$hesklang['how_can_we_help'] = 'Hello, how can Shake and Loony help you?';
$hesklang['view_existing_tickets']='View existing orders';
$hesklang['view_existing']='View existing order';
$hesklang['open_ticket']='Groceries, produce, and supplies';
$hesklang['vet']='View orders you placed in the past';
$hesklang['sub_support']='Place an order';
$hesklang['tickets_on_pages']='Number of orders: %d | Number of pages: %d'; // First %d is replaced with number of tickets, second %d with number of pages
$hesklang['can_man_settings']='Manage order process settings';
$hesklang['can_del_notes']='Delete any order notes';
$hesklang['can_view_tickets']='View orders';
$hesklang['can_reply_tickets']='Reply to orders';
$hesklang['can_assign_tickets']='Assign orders';
$hesklang['can_del_tickets']='Delete orders';
$hesklang['can_edit_tickets']='Edit order replies';

$hesklang['use_form_below']='<i>Use this form to place an order. Required fields are marked with</i>';
$hesklang['submit_a_support_request'] = 'Place an order';
$hesklang['s_onin']='on <a href="../" target="_blank">Ordering system index</a> page';
$hesklang['hesk_url']='Ordering system URL';
$hesklang['hesk_title']='Ordering system title';
$hesklang['hd']='Ordering system settings';
$hesklang['seqid']='Order number';
$hesklang['archived2']='Tagged Order';
$hesklang['add_archive']='Tag this order';
$hesklang['add_archive_quick']='Tag selected orders';
$hesklang['remove_archive']='Untag this order';
$hesklang['remove_archive_quick']='Untag selected orders';
$hesklang['added_archive']='Order Tagged';
$hesklang['removed_archive']='Order Untagged';
$hesklang['added2archive']='Order has been tagged';
$hesklang['removedfromarchive']='Order has been untagged';
$hesklang['num_tickets_tag']='<b>%d</b> orders have been tagged';
$hesklang['num_tickets_untag']='<b>%d</b> orders have been untagged';
$hesklang['can_add_archive']='Can tag orders';
$hesklang['disp_only_archived']='Only tagged orders';
$hesklang['search_only_archived']='Only tagged orders';
$hesklang['eytid']='Enter your order tracking ID.';
$hesklang['cot']='Don\'t force Critical orders on top';
$hesklang['gbou']='These orders are <b>Unassigned</b>:';
$hesklang['gbom']='Orders assigned to <b>me</b>:';
$hesklang['gboo']='Orders assigned to <b>%s</b>:';
$hesklang['perat']='%s of all orders'; // will change to "23% of all tickets"
$hesklang['aaon']='Auto-assign of orders enabled (click to disable)';
$hesklang['aaoff']='Auto-assign of orders disabled (click to enable)';
$hesklang['taasy']='This order has been auto-assigned to you';
$hesklang['can_view_unassigned']='Can view unassigned orders';
$hesklang['ycovtay']='You can only view orders assigned to you';
$hesklang['tab_2']='Ordering System';
$hesklang['viewvtic']='View orders';
$hesklang['reqetv']='Require email to view an order';
$hesklang['subnot2']='Show notice to customers submitting orders';
$hesklang['saass']='Auto-assign orders';
$hesklang['noopen']='No open orders found for this email address.';
$hesklang['maxopen']='You have reached maximum open orders (%d of %d). Please wait until your existing orders are resolved before opening new orders.';
$hesklang['ntnote']='Someone adds a note to an order assigned to me';
$hesklang['cat_aa']='Auto-assign orders in this category.';
$hesklang['ool']='List only open orders in &quot;Forgot tracking ID&quot; email';
$hesklang['mop']='Max open orders';
$hesklang['can_merge_tickets']='Merge orders';
$hesklang['mer_selected']='Merge selected orders';
$hesklang['merged']='Selected orders have been merged into one.';
$hesklang['merge_err']='There was a problem merging orders:';
$hesklang['merr1']='select at least two orders.';
$hesklang['merr2']='target order not found.';
$hesklang['merr3']='order in a category you don\'t have access to.';
$hesklang['tme']='Order %s has been merged with this order (%s).';
$hesklang['tme1']='Order %s has been merged with order %s';
$hesklang['twu']='Time worked on order has been updated.';
$hesklang['autoss']='Automatically start timer when I open an order';
$hesklang['sconfe2']='Show a &quot;Confirm email&quot; field on the submit an order form';
$hesklang['use_form_below']='<i>Use this form to place an order. Required fields are marked with</i>';
$hesklang['wrepo']='Please write a reply after re-opening the order.';
$hesklang['can_export']='Can export orders';
$hesklang['roo']='<i>(only orders assigned to you are included in the report)</i>';
$hesklang['export_btn']='Export orders'; // Button title
$hesklang['export_intro']='This tool allows you to export orders into an XML spreadsheet that can be opened in Excel.';
$hesklang['stte']='Select orders to export';
$hesklang['ticket_tpl']='Order templates';
$hesklang['can_man_ticket_tpl']='Manage order templates'; // Permission title
$hesklang['ticket_tpl_man']='Manage order templates'; // Page/link title
$hesklang['ticket_tpl_intro']='Create and edit order templates that you can use to quickly submit new orders from the admin interface.';
$hesklang['no_ticket_tpl']='No order templates';
$hesklang['new_ticket_tpl']='Add or Edit a order template';
$hesklang['ticket_tpl_edit']='Edit selected order template';
$hesklang['save_ticket_tpl']='Save order template';
$hesklang['ticket_tpl_saved']='Your order template has been saved for future use';
$hesklang['ticket_tpl_removed']='Selected order template has been removed from the database';
$hesklang['ticket_tpl_not_found']='Order template not found';
$hesklang['sel_ticket_tpl']='Select the order template you would like to edit';
$hesklang['ticket_tpl_id']='Missing order template ID';
$hesklang['select_ticket_tpl']='Select an order template';
$hesklang['list_tickets_cat']='List all orders in this category';
$hesklang['mm2']='In order to perform scheduled maintenance, our ordering system has shut down temporarily.';
$hesklang['mma2']='Customers are not able to use the ordering system.';
$hesklang['banemail_intro']='Prevent certain email addresses from submitting orders to your system.';
$hesklang['baned_e']='You have been banned from submitting new orders.';
$hesklang['baned_ip']='You have been banned from this ordering system.';
$hesklang['banip_intro']='Visitors from banned IP addresses will not be able to view or submit orders and login into the ordering system.';
$hesklang['notnew']='A new order is submitted';
$hesklang['notclo']='An order is marked Resolved';
$hesklang['reset_password']='Reset your ordering system password'; // Email subject
$hesklang['oon1']='Send me only open orders';
$hesklang['oon2']='Send me all my orders';
$hesklang['yhbr']='You have been locked out the system for %s minutes because of too many replies to an order.';
$hesklang['atbr']='This order needs to be assigned before it can be replied to.';
$hesklang['attm']='Assign this order to me';
$hesklang['taat']='This order is already assigned to <b>%s</b>.';
$hesklang['default_subject']='Online order from %s'; // Default ticket subject, %s will be replaced with name
$hesklang['desc_forgot_ticket_id']       = '(Customer) Forgot order tracking ID';
$hesklang['desc_new_ticket']             = '(Customer) Order received';
$hesklang['desc_ticket_closed']          = '(Customer) Order closed/resolved';
$hesklang['desc_category_moved']         = '(Staff) Order moved to a new category';
$hesklang['desc_new_ticket_staff']       = '(Staff) New order submitted';
$hesklang['desc_ticket_assigned_to_you'] = '(Staff) An order was assigned to you';
$hesklang['desc_new_note']               = '(Staff) New note on an order assigned to you';
$hesklang['ticket_url']='Order URL';
$hesklang['et_num']='Number of orders';
$hesklang['et_list']='List of orders';
$hesklang['select_category_staff']='Select order category';
$hesklang['can_resolve']='Can resolve orders';
$hesklang['can_change_cat']='Change order category (to any)';
$hesklang['can_change_own_cat']='Change order category (to allowed)';
$hesklang['can_submit_any_cat']='Can submit orders to any category';
$hesklang['noauth_submit']='You are not authorized to submit orders to this category!';
$hesklang['noauth_move']='You are not authorized to move orders to this category!';
$hesklang['noauth_resolve']='You are not authorized to resolve orders!';
$hesklang['enn']='Except for orders from emails if email subject contains:';
$hesklang['statuses_intro']='Use this tool to add custom order statuses to your ordering system';
$hesklang['can_view_ass_by']='Can view orders he/she assigned to others';
$hesklang['can_privacy']='Can anonymize orders';
$hesklang['confirm_anony']='Anonymize this order';
$hesklang['anon_selected']='Anonymize selected orders';
$hesklang['privacy_anon_info']='Remove all personally-identifiable data and content from orders (customer name, email, message, attachments, IP...), but keep orders in the database for statistics (right to be forgotten).';
$hesklang['success_anon']='Order successfully anonymized';
$hesklang['num_tickets_anon']='Number of orders anonymized: <b>%d</b>';
$hesklang['num_tickets_deleted']='Number of orders deleted: <b>%d</b>';
$hesklang['print_selected']='Print selected orders';
$hesklang['assign_1']='Selected orders have been set to Unassigned.';
$hesklang['assign_2']='Order ID %1$s set to Unassigned'; // %1$s = ticket numerical ID
$hesklang['btn_lock']='Lock order';
$hesklang['btn_unlock']='Unlock order';
$hesklang['btn_tag']='Tag order';
$hesklang['btn_untag']='Untag order';
$hesklang['btn_anony']='Anonymize order';
$hesklang['btn_delt']='Delete order';
$hesklang['tns']='Order notifications were sent again';
$hesklang['rns']='Reply notifications were sent again';
$hesklang['export_selected']='Export selected orders';
$hesklang['export']='Export Orders'; // Tab title
$hesklang['submit_a_support_request'] = 'Submit a new order';
$hesklang['ticket_details'] = 'Order Details';
$hesklang['ticket_tpl_add']='New order template';
$hesklang['help_desk']='Ordering System'; // Displayed on staff sidebar menu

// DO NOT CHANGE BELOW
if (!defined('IN_SCRIPT')) die('PHP syntax OK!');