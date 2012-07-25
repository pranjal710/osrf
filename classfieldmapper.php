<?php 
 
include ("/openils/var/web/osrf/fieldmapper_class_abstract.php"); 
 Class mups extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'usr', "1" => 'forgive_payment', "2" => 'work_payment', "3" => 'credit_payment', "4" => 'goods_payment'); 
} 
 
Class mwps extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'workstation', "1" => 'cash_payment', "2" => 'check_payment', "3" => 'credit_card_payment'); 
} 
 
Class brn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'children', "2" => 'owner_doc', "3" => 'intra_doc_id', "4" => 'parent_node', "5" => 'node_type', "6" => 'namespace_uri', "7" => 'name', "8" => 'value'); 
} 
 
Class mvr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'title', "1" => 'author', "2" => 'doc_id', "3" => 'doc_type', "4" => 'pubdate', "5" => 'isbn', "6" => 'publisher', "7" => 'tcn', "8" => 'subject', "9" => 'types_of_resource', "10" => 'call_numbers', "11" => 'edition', "12" => 'online_loc', "13" => 'synopsis', "14" => 'physical_description', "15" => 'toc', "16" => 'copy_count', "17" => 'series', "18" => 'serials', "19" => 'foreign_copy_maps'); 
} 
 
Class ex extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'err_msg', "1" => 'type'); 
} 
 
Class perm_ex extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'err_msg', "1" => 'type'); 
} 
 
Class amtr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'matchpoint', "1" => 'success', "2" => 'fail_part'); 
} 
 
Class accs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'num_circs', "1" => 'start_time', "2" => 'checkout_workstation', "3" => 'last_renewal_time', "4" => 'last_stop_fines', "5" => 'last_stop_fines_time', "6" => 'last_renewal_workstation', "7" => 'last_checkin_workstation', "8" => 'last_checkin_time', "9" => 'last_checkin_scan_time'); 
} 
 
Class rhr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'public_name', "1" => 'target_url', "2" => 'target_coverage', "3" => 'target_embargo'); 
} 
 
Class vmp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'add_spec', "4" => 'replace_spec', "5" => 'strip_spec', "6" => 'preserve_spec', "7" => 'lwm_ratio'); 
} 
 
Class vibtf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'field'); 
} 
 
Class vii extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'record', "2" => 'definition', "3" => 'import_error', "4" => 'error_detail', "5" => 'imported_as', "6" => 'import_time', "7" => 'owning_lib', "8" => 'circ_lib', "9" => 'call_number', "10" => 'copy_number', "11" => 'status', "12" => 'location', "13" => 'circulate', "14" => 'deposit', "15" => 'deposit_amount', "16" => 'ref', "17" => 'holdable', "18" => 'price', "19" => 'barcode', "20" => 'circ_modifier', "21" => 'circ_as_type', "22" => 'alert_message', "23" => 'pub_note', "24" => 'priv_note', "25" => 'opac_visible'); 
} 
 
Class viiad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'tag', "4" => 'keep', "5" => 'owning_lib', "6" => 'circ_lib', "7" => 'call_number', "8" => 'status', "9" => 'location', "10" => 'circulate', "11" => 'deposit', "12" => 'deposit_amount', "13" => 'ref', "14" => 'holdable', "15" => 'price', "16" => 'barcode', "17" => 'circ_modifier', "18" => 'circ_as_type', "19" => 'alert_message', "20" => 'pub_note', "21" => 'priv_note', "22" => 'opac_visible', "23" => 'copy_number'); 
} 
 
Class vbq extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'complete', "4" => 'queue_type', "5" => 'match_set', "6" => 'item_attr_def'); 
} 
 
Class vie extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'description'); 
} 
 
Class vqbr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'create_time', "2" => 'import_time', "3" => 'marc', "4" => 'queue', "5" => 'bib_source', "6" => 'imported_as', "7" => 'import_error', "8" => 'error_detail', "9" => 'purpose', "10" => 'attributes', "11" => 'matches', "12" => 'import_items', "13" => 'quality'); 
} 
 
Class vqbrad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'xpath', "4" => 'remove'); 
} 
 
Class vqbra extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'record', "2" => 'field', "3" => 'attr_value'); 
} 
 
Class vbm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'queued_record', "2" => 'eg_record', "3" => 'quality', "4" => 'match_score'); 
} 
 
Class vaq extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'complete', "4" => 'queue_type', "5" => 'match_set'); 
} 
 
Class vqar extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'create_time', "2" => 'import_time', "3" => 'marc', "4" => 'queue', "5" => 'imported_as', "6" => 'import_error', "7" => 'error_detail', "8" => 'purpose', "9" => 'attributes', "10" => 'matches', "11" => 'quality'); 
} 
 
Class vqarad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'xpath', "4" => 'remove'); 
} 
 
Class vqara extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'record', "2" => 'field', "3" => 'attr_value'); 
} 
 
Class vam extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'queued_record', "2" => 'eg_record', "3" => 'quality'); 
} 
 
Class vms extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'owner', "3" => 'mtype'); 
} 
 
Class vmsp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parent', "2" => 'match_set', "3" => 'bool_op', "4" => 'svf', "5" => 'tag', "6" => 'subfield', "7" => 'negate', "8" => 'quality', "9" => 'children'); 
} 
 
Class vmsq extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'match_set', "2" => 'svf', "3" => 'tag', "4" => 'subfield', "5" => 'value', "6" => 'quality'); 
} 
 
Class auoi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'opt_in_ws', "2" => 'staff', "3" => 'usr', "4" => 'org_unit', "5" => 'opt_in_ts'); 
} 
 
Class cgf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label', "2" => 'value', "3" => 'enabled'); 
} 
 
Class cin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'description', "3" => 'func', "4" => 'param_count'); 
} 
 
Class cmfinm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'field', "2" => 'norm', "3" => 'params', "4" => 'pos'); 
} 
 
Class crad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label', "2" => 'description', "3" => 'filter', "4" => 'sorter', "5" => 'tag', "6" => 'sf_list', "7" => 'joiner', "8" => 'xpath', "9" => 'format', "10" => 'start_pos', "11" => 'string_len', "12" => 'fixed_field', "13" => 'phys_char_sf', "14" => 'normalizers'); 
} 
 
Class csc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'region', "2" => 'name', "3" => 'active', "4" => 'email_gateway'); 
} 
 
Class mra extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'attrs'); 
} 
 
Class crainm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'attr', "2" => 'norm', "3" => 'params', "4" => 'pos'); 
} 
 
Class ccvm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'ctype', "2" => 'code', "3" => 'value', "4" => 'description'); 
} 
 
Class cracct extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'label', "2" => 'host', "3" => 'username', "4" => 'password', "5" => 'account', "6" => 'path', "7" => 'owner', "8" => 'last_activity'); 
} 
 
Class czs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label', "2" => 'host', "3" => 'port', "4" => 'db', "5" => 'record_format', "6" => 'transmission_format', "7" => 'auth', "8" => 'attrs', "9" => 'use_perm'); 
} 
 
Class cza extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'source', "2" => 'name', "3" => 'label', "4" => 'code', "5" => 'format', "6" => 'truncation'); 
} 
 
Class ateo extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'create_time', "2" => 'data', "3" => 'is_error', "4" => 'events', "5" => 'error_events'); 
} 
 
Class ath extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'key', "1" => 'core_type', "2" => 'description', "3" => 'passive'); 
} 
 
Class atcol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'module', "1" => 'description'); 
} 
 
Class atval extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'module', "1" => 'description'); 
} 
 
Class atreact extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'module', "1" => 'description'); 
} 
 
Class atclean extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'module', "1" => 'description'); 
} 
 
Class atenv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'event_def', "2" => 'path', "3" => 'collector', "4" => 'label'); 
} 
 
Class atevdef extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'active', "2" => 'owner', "3" => 'hook', "4" => 'validator', "5" => 'reactor', "6" => 'cleanup_success', "7" => 'cleanup_failure', "8" => 'delay', "9" => 'max_delay', "10" => 'delay_field', "11" => 'group_field', "12" => 'template', "13" => 'name', "14" => 'granularity', "15" => 'usr_field', "16" => 'opt_in_setting', "17" => 'env', "18" => 'params'); 
} 
 
Class atev extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'target', "2" => 'event_def', "3" => 'add_time', "4" => 'run_time', "5" => 'start_time', "6" => 'update_time', "7" => 'complete_time', "8" => 'state', "9" => 'user_data', "10" => 'template_output', "11" => 'error_output', "12" => 'async_output', "13" => 'update_process'); 
} 
 
Class atevparam extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'event_def', "2" => 'param', "3" => 'value'); 
} 
 
Class aws extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'owning_lib', "3" => 'toolbars', "4" => 'circulations'); 
} 
 
Class ccm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'name', "2" => 'description', "3" => 'sip2_media_type', "4" => 'magnetic_media', "5" => 'avg_wait_time'); 
} 
 
Class aiit extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'name', "2" => 'prorate'); 
} 
 
Class acqim extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'name'); 
} 
 
Class ccpbt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'label'); 
} 
 
Class ccnbt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'label'); 
} 
 
Class bpt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name'); 
} 
 
Class bpbcm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'peer_type', "2" => 'peer_record', "3" => 'target_copy'); 
} 
 
Class cbrebt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'label'); 
} 
 
Class cubt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'label'); 
} 
 
Class cvrfm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'value'); 
} 
 
Class chmw extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'user_home_ou', "3" => 'request_ou', "4" => 'pickup_ou', "5" => 'item_owning_ou', "6" => 'item_circ_ou', "7" => 'usr_grp', "8" => 'requestor_grp', "9" => 'circ_modifier', "10" => 'marc_type', "11" => 'marc_form', "12" => 'marc_bib_level', "13" => 'marc_vr_format', "14" => 'juvenile_flag', "15" => 'ref_flag', "16" => 'item_age'); 
} 
 
Class ccmw extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'is_renewal', "3" => 'org_unit', "4" => 'copy_circ_lib', "5" => 'copy_owning_lib', "6" => 'user_home_ou', "7" => 'grp', "8" => 'circ_modifier', "9" => 'marc_type', "10" => 'marc_form', "11" => 'marc_bib_level', "12" => 'marc_vr_format', "13" => 'ref_flag', "14" => 'juvenile_flag', "15" => 'usr_age_lower_bound', "16" => 'usr_age_upper_bound', "17" => 'item_age'); 
} 
 
Class cwa extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'active', "2" => 'org_unit', "3" => 'circ_weights', "4" => 'hold_weights'); 
} 
 
Class chmm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'active', "2" => 'strict_ou_match', "3" => 'user_home_ou', "4" => 'request_ou', "5" => 'pickup_ou', "6" => 'item_owning_ou', "7" => 'item_circ_ou', "8" => 'usr_grp', "9" => 'requestor_grp', "10" => 'circ_modifier', "11" => 'marc_type', "12" => 'marc_form', "13" => 'marc_bib_level', "14" => 'marc_vr_format', "15" => 'ref_flag', "16" => 'item_age', "17" => 'holdable', "18" => 'distance_is_from_owner', "19" => 'transit_range', "20" => 'max_holds', "21" => 'include_frozen_holds', "22" => 'age_hold_protect_rule'); 
} 
 
Class ccmm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'is_renewal', "2" => 'active', "3" => 'org_unit', "4" => 'copy_circ_lib', "5" => 'copy_owning_lib', "6" => 'user_home_ou', "7" => 'grp', "8" => 'circ_modifier', "9" => 'marc_type', "10" => 'marc_form', "11" => 'marc_bib_level', "12" => 'marc_vr_format', "13" => 'ref_flag', "14" => 'juvenile_flag', "15" => 'usr_age_lower_bound', "16" => 'usr_age_upper_bound', "17" => 'item_age', "18" => 'circulate', "19" => 'duration_rule', "20" => 'recurring_fine_rule', "21" => 'max_fine_rule', "22" => 'hard_due_date', "23" => 'renewals', "24" => 'grace_period', "25" => 'script_test', "26" => 'total_copy_hold_ratio', "27" => 'available_copy_hold_ratio'); 
} 
 
Class cclg extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'description'); 
} 
 
Class ccls extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'owning_lib', "3" => 'items_out', "4" => 'depth', "5" => 'global', "6" => 'description'); 
} 
 
Class ccmlsm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'matchpoint', "2" => 'limit_set', "3" => 'fallthrough', "4" => 'active'); 
} 
 
Class cclscmm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'limit_set', "2" => 'circ_mod'); 
} 
 
Class cclsgm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'limit_set', "2" => 'limit_group', "3" => 'check_only'); 
} 
 
Class cit extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name'); 
} 
 
Class asvq extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'answers', "1" => 'responses', "2" => 'id', "3" => 'question', "4" => 'survey'); 
} 
 
Class mbts extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'balance_owed', "1" => 'id', "2" => 'last_billing_note', "3" => 'last_billing_ts', "4" => 'last_billing_type', "5" => 'last_payment_note', "6" => 'last_payment_ts', "7" => 'last_payment_type', "8" => 'total_owed', "9" => 'total_paid', "10" => 'usr', "11" => 'xact_finish', "12" => 'xact_start', "13" => 'xact_type'); 
} 
 
Class mbtslv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'balance_owed', "1" => 'id', "2" => 'last_billing_note', "3" => 'last_billing_ts', "4" => 'last_billing_type', "5" => 'last_payment_note', "6" => 'last_payment_ts', "7" => 'last_payment_type', "8" => 'total_owed', "9" => 'total_paid', "10" => 'usr', "11" => 'xact_finish', "12" => 'xact_start', "13" => 'xact_type', "14" => 'billing_location'); 
} 
 
Class aun extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'create_date', "1" => 'creator', "2" => 'id', "3" => 'pub', "4" => 'title', "5" => 'usr', "6" => 'value'); 
} 
 
Class aupr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'uuid', "2" => 'usr', "3" => 'request_time', "4" => 'has_been_reset'); 
} 
 
Class aus extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'usr', "3" => 'value'); 
} 
 
Class mafe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'id', "2" => 'source', "3" => 'value'); 
} 
 
Class aihu extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'item', "2" => 'org_unit', "3" => 'staff', "4" => 'use_time'); 
} 
 
Class ancihu extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'item_type', "2" => 'org_unit', "3" => 'staff', "4" => 'use_time'); 
} 
 
Class atc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'copy_status', "1" => 'dest', "2" => 'dest_recv_time', "3" => 'id', "4" => 'persistant_transfer', "5" => 'prev_hop', "6" => 'source', "7" => 'prev_dest', "8" => 'source_send_time', "9" => 'target_copy', "10" => 'hold_transit_copy'); 
} 
 
Class asvr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'answer', "1" => 'answer_date', "2" => 'effective_date', "3" => 'id', "4" => 'question', "5" => 'response_group_id', "6" => 'survey', "7" => 'usr'); 
} 
 
Class ccbi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'bucket', "1" => 'id', "2" => 'target_copy', "3" => 'create_time', "4" => 'pos', "5" => 'notes'); 
} 
 
Class ccbin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'item', "2" => 'note'); 
} 
 
Class acs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'description', "3" => 'authority_fields', "4" => 'thesauri'); 
} 
 
Class acsaf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'main_entry', "2" => 'control_set', "3" => 'tag', "4" => 'sf_list', "5" => 'nfi', "6" => 'name', "7" => 'description', "8" => 'sub_entries', "9" => 'bib_fields', "10" => 'thesauri', "11" => 'axis_maps'); 
} 
 
Class acsbf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'authority_field', "2" => 'tag'); 
} 
 
Class at extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'control_set', "2" => 'name', "3" => 'description'); 
} 
 
Class aba extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'name', "2" => 'sorter', "3" => 'description', "4" => 'fields', "5" => 'maps'); 
} 
 
Class abaafm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'field', "2" => 'axis'); 
} 
 
Class are extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'active', "1" => 'create_date', "2" => 'creator', "3" => 'deleted', "4" => 'edit_date', "5" => 'editor', "6" => 'id', "7" => 'last_xact_id', "8" => 'marc', "9" => 'source', "10" => 'control_set', "11" => 'owner', "12" => 'fixed_fields', "13" => 'notes', "14" => 'bib_links'); 
} 
 
Class ard extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'char_encoding', "1" => 'id', "2" => 'record', "3" => 'record_status', "4" => 'thesaurus'); 
} 
 
Class abl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'bib', "2" => 'authority'); 
} 
 
Class clm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'value'); 
} 
 
Class mccp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'accepting_usr', "1" => 'amount', "2" => 'amount_collected', "3" => 'approval_code', "4" => 'cash_drawer', "5" => 'cc_first_name', "6" => 'cc_last_name', "7" => 'cc_number', "8" => 'cc_order_number', "9" => 'cc_type', "10" => 'cc_processor', "11" => 'expire_month', "12" => 'expire_year', "13" => 'id', "14" => 'note', "15" => 'payment_ts', "16" => 'xact', "17" => 'payment_type', "18" => 'payment'); 
} 
 
Class cxt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'namespace_uri', "2" => 'prefix', "3" => 'xslt'); 
} 
 
Class cmsa extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'alias', "1" => 'field_class', "2" => 'field'); 
} 
 
Class cmc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label', "2" => 'buoyant', "3" => 'restrict', "4" => 'fields'); 
} 
 
Class cmf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field_class', "1" => 'id', "2" => 'name', "3" => 'label', "4" => 'xpath', "5" => 'weight', "6" => 'format', "7" => 'search_field', "8" => 'facet_field', "9" => 'facet_xpath', "10" => 'browse_field', "11" => 'browse_xpath', "12" => 'restrict'); 
} 
 
Class cbfp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'xpath', "3" => 'format', "4" => 'first_word'); 
} 
 
Class cam extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'description', "2" => 'value'); 
} 
 
Class cifm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'value'); 
} 
 
Class acnc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'normalizer', "3" => 'field'); 
} 
 
Class acns extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'label', "2" => 'label_sortkey', "3" => 'owning_lib'); 
} 
 
Class acnp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'label', "2" => 'label_sortkey', "3" => 'owning_lib'); 
} 
 
Class acn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'copies', "1" => 'create_date', "2" => 'creator', "3" => 'deleted', "4" => 'edit_date', "5" => 'editor', "6" => 'id', "7" => 'label', "8" => 'owning_lib', "9" => 'record', "10" => 'notes', "11" => 'uri_maps', "12" => 'uris', "13" => 'label_sortkey', "14" => 'label_class', "15" => 'prefix', "16" => 'suffix'); 
} 
 
Class auri extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'href', "2" => 'label', "3" => 'use_restriction', "4" => 'active', "5" => 'call_number_maps', "6" => 'call_numbers'); 
} 
 
Class auricnm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'uri', "2" => 'call_number'); 
} 
 
Class cst extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'value'); 
} 
 
Class mous extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'balance_owed', "1" => 'total_owed', "2" => 'total_paid', "3" => 'usr'); 
} 
 
Class mct extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'collector', "1" => 'enter_time', "2" => 'id', "3" => 'location', "4" => 'usr'); 
} 
 
Class bre extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'call_numbers', "1" => 'fixed_fields', "2" => 'active', "3" => 'create_date', "4" => 'creator', "5" => 'deleted', "6" => 'edit_date', "7" => 'editor', "8" => 'fingerprint', "9" => 'id', "10" => 'last_xact_id', "11" => 'marc', "12" => 'quality', "13" => 'source', "14" => 'tcn_source', "15" => 'tcn_value', "16" => 'owner', "17" => 'share_depth', "18" => 'metarecord', "19" => 'language', "20" => 'notes', "21" => 'keyword_field_entries', "22" => 'subject_field_entries', "23" => 'title_field_entries', "24" => 'identifier_field_entries', "25" => 'author_field_entries', "26" => 'series_field_entries', "27" => 'full_record_entries', "28" => 'simple_record', "29" => 'authority_links', "30" => 'subscriptions', "31" => 'attrs'); 
} 
 
Class aouhoo extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'dow_0_close', "1" => 'dow_0_open', "2" => 'dow_1_close', "3" => 'dow_1_open', "4" => 'dow_2_close', "5" => 'dow_2_open', "6" => 'dow_3_close', "7" => 'dow_3_open', "8" => 'dow_4_close', "9" => 'dow_4_open', "10" => 'dow_5_close', "11" => 'dow_5_open', "12" => 'dow_6_close', "13" => 'dow_6_open', "14" => 'id', "15" => 'org_unit'); 
} 
 
Class bmp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'record', "2" => 'label', "3" => 'label_sortkey'); 
} 
 
Class acpm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'target_copy', "2" => 'part'); 
} 
 
Class aoucd extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'close_end', "1" => 'close_start', "2" => 'id', "3" => 'org_unit', "4" => 'reason'); 
} 
 
Class crcd extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'extended', "1" => 'id', "2" => 'max_renewals', "3" => 'name', "4" => 'normal', "5" => 'shrt'); 
} 
 
Class chdd extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'forceto', "3" => 'ceiling_date', "4" => 'owner'); 
} 
 
Class chddv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'hard_due_date', "2" => 'ceiling_date', "3" => 'active_date'); 
} 
 
Class mobts extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'balance_owed', "1" => 'id', "2" => 'last_billing_note', "3" => 'last_billing_ts', "4" => 'last_billing_type', "5" => 'last_payment_note', "6" => 'last_payment_ts', "7" => 'last_payment_type', "8" => 'total_owed', "9" => 'total_paid', "10" => 'usr', "11" => 'xact_finish', "12" => 'xact_start', "13" => 'xact_type', "14" => 'xact', "15" => 'grocery', "16" => 'circulation', "17" => 'reservation', "18" => 'billing_location'); 
} 
 
Class au extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'addresses', "1" => 'cards', "2" => 'checkouts', "3" => 'hold_requests', "4" => 'permissions', "5" => 'settings', "6" => 'standing_penalties', "7" => 'stat_cat_entries', "8" => 'survey_responses', "9" => 'ws_ou', "10" => 'wsid', "11" => 'active', "12" => 'alert_message', "13" => 'barred', "14" => 'billing_address', "15" => 'card', "16" => 'claims_returned_count', "17" => 'claims_never_checked_out_count', "18" => 'create_date', "19" => 'credit_forward_balance', "20" => 'day_phone', "21" => 'dob', "22" => 'email', "23" => 'evening_phone', "24" => 'expire_date', "25" => 'family_name', "26" => 'first_given_name', "27" => 'home_ou', "28" => 'id', "29" => 'ident_type', "30" => 'ident_type2', "31" => 'ident_value', "32" => 'ident_value2', "33" => 'last_xact_id', "34" => 'mailing_address', "35" => 'master_account', "36" => 'net_access_level', "37" => 'other_phone', "38" => 'passwd', "39" => 'photo_url', "40" => 'prefix', "41" => 'profile', "42" => 'second_given_name', "43" => 'standing', "44" => 'suffix', "45" => 'super_user', "46" => 'usrgroup', "47" => 'usrname', "48" => 'alias', "49" => 'juvenile', "50" => 'last_update_time', "51" => 'groups', "52" => 'deleted', "53" => 'notes', "54" => 'demographic', "55" => 'billable_transactions', "56" => 'money_summary', "57" => 'open_billable_transactions_summary', "58" => 'checkins', "59" => 'performed_circulations', "60" => 'fund_alloc_pcts', "61" => 'reservations', "62" => 'usr_activity'); 
} 
 
Class cuat extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'ewho', "2" => 'ewhat', "3" => 'ehow', "4" => 'label', "5" => 'egroup', "6" => 'enabled', "7" => 'transient'); 
} 
 
Class auact extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'usr', "2" => 'etype', "3" => 'event_time'); 
} 
 
Class atb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'usr', "2" => 'org', "3" => 'ws', "4" => 'label', "5" => 'layout'); 
} 
 
Class csg extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label'); 
} 
 
Class cust extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label', "2" => 'description', "3" => 'datatype', "4" => 'fm_class', "5" => 'grp', "6" => 'opac_visible'); 
} 
 
Class coust extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label', "2" => 'description', "3" => 'datatype', "4" => 'view_perm', "5" => 'update_perm', "6" => 'fm_class', "7" => 'grp'); 
} 
 
Class aous extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'org_unit', "3" => 'value'); 
} 
 
Class acpn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'create_date', "1" => 'creator', "2" => 'id', "3" => 'owning_copy', "4" => 'pub', "5" => 'title', "6" => 'value'); 
} 
 
Class mfr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'ind1', "2" => 'ind2', "3" => 'record', "4" => 'subfield', "5" => 'tag', "6" => 'value'); 
} 
 
Class mmr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fingerprint', "1" => 'id', "2" => 'master_record', "3" => 'mods', "4" => 'source_records'); 
} 
 
Class cnal extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name'); 
} 
 
Class ppl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'description', "2" => 'id'); 
} 
 
Class mmrsm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'metarecord', "2" => 'source'); 
} 
 
Class mfae extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'field', "2" => 'source', "3" => 'value'); 
} 
 
Class mbe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'value', "2" => 'def_maps'); 
} 
 
Class mbedm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'entry', "2" => 'def', "3" => 'source'); 
} 
 
Class mfe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'id', "2" => 'source', "3" => 'value'); 
} 
 
Class mkfe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'id', "2" => 'source', "3" => 'value'); 
} 
 
Class mcp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'accepting_usr', "1" => 'amount', "2" => 'amount_collected', "3" => 'cash_drawer', "4" => 'id', "5" => 'note', "6" => 'payment_ts', "7" => 'xact', "8" => 'payment_type', "9" => 'payment'); 
} 
 
Class mfp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'accepting_usr', "1" => 'amount', "2" => 'amount_collected', "3" => 'id', "4" => 'note', "5" => 'payment_ts', "6" => 'xact', "7" => 'payment_type', "8" => 'payment'); 
} 
 
Class mrd extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'audience', "1" => 'bib_level', "2" => 'cat_form', "3" => 'char_encoding', "4" => 'control_type', "5" => 'enc_level', "6" => 'id', "7" => 'item_form', "8" => 'item_lang', "9" => 'item_type', "10" => 'lit_form', "11" => 'pub_status', "12" => 'record', "13" => 'type_mat', "14" => 'vr_format', "15" => 'date1', "16" => 'date2'); 
} 
 
Class csp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'label', "3" => 'block_list', "4" => 'staff_alert', "5" => 'org_depth'); 
} 
 
Class pgpt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'grp', "2" => 'penalty', "3" => 'threshold', "4" => 'org_unit'); 
} 
 
Class ccs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'holdable', "1" => 'id', "2" => 'name', "3" => 'opac_visible', "4" => 'copy_active', "5" => 'restrict_copy_delete'); 
} 
 
Class ausp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'set_date', "2" => 'usr', "3" => 'staff', "4" => 'standing_penalty', "5" => 'org_unit', "6" => 'stop_date', "7" => 'note'); 
} 
 
Class aua extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'address_type', "1" => 'city', "2" => 'country', "3" => 'county', "4" => 'id', "5" => 'post_code', "6" => 'state', "7" => 'street1', "8" => 'street2', "9" => 'usr', "10" => 'valid', "11" => 'within_city_limits', "12" => 'replaces', "13" => 'pending'); 
} 
 
Class aal extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'active', "3" => 'match_all', "4" => 'alert_message', "5" => 'street1', "6" => 'street2', "7" => 'city', "8" => 'county', "9" => 'state', "10" => 'country', "11" => 'post_code', "12" => 'mailing_address', "13" => 'billing_address'); 
} 
 
Class auss extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'create_date', "4" => 'query_text', "5" => 'query_type', "6" => 'target'); 
} 
 
Class acnn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'call_number', "1" => 'create_date', "2" => 'creator', "3" => 'id', "4" => 'pub', "5" => 'title', "6" => 'value'); 
} 
 
Class arn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'create_date', "1" => 'creator', "2" => 'edit_date', "3" => 'editor', "4" => 'id', "5" => 'record', "6" => 'value'); 
} 
 
Class ocirccount extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'usr', "1" => 'out', "2" => 'overdue', "3" => 'lost', "4" => 'claims_returned', "5" => 'long_overdue'); 
} 
 
Class ocirclist extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'usr', "1" => 'out', "2" => 'overdue', "3" => 'lost', "4" => 'claims_returned', "5" => 'long_overdue'); 
} 
 
Class circ extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'checkin_lib', "1" => 'checkin_staff', "2" => 'checkin_time', "3" => 'circ_lib', "4" => 'circ_staff', "5" => 'desk_renewal', "6" => 'due_date', "7" => 'duration', "8" => 'duration_rule', "9" => 'fine_interval', "10" => 'id', "11" => 'max_fine', "12" => 'max_fine_rule', "13" => 'opac_renewal', "14" => 'phone_renewal', "15" => 'recurring_fine', "16" => 'recurring_fine_rule', "17" => 'renewal_remaining', "18" => 'grace_period', "19" => 'stop_fines', "20" => 'stop_fines_time', "21" => 'target_copy', "22" => 'usr', "23" => 'xact_finish', "24" => 'xact_start', "25" => 'create_time', "26" => 'workstation', "27" => 'checkin_workstation', "28" => 'checkin_scan_time', "29" => 'parent_circ', "30" => 'billings', "31" => 'payments', "32" => 'billable_transaction', "33" => 'circ_type', "34" => 'billing_total', "35" => 'payment_total', "36" => 'unrecovered', "37" => 'copy_location', "38" => 'aaactsc_entries', "39" => 'aaasc_entries'); 
} 
 
Class combcirc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'checkin_lib', "1" => 'checkin_staff', "2" => 'checkin_time', "3" => 'circ_lib', "4" => 'circ_staff', "5" => 'desk_renewal', "6" => 'due_date', "7" => 'duration', "8" => 'duration_rule', "9" => 'fine_interval', "10" => 'id', "11" => 'max_fine', "12" => 'max_fine_rule', "13" => 'opac_renewal', "14" => 'phone_renewal', "15" => 'recurring_fine', "16" => 'recurring_fine_rule', "17" => 'renewal_remaining', "18" => 'grace_period', "19" => 'stop_fines', "20" => 'stop_fines_time', "21" => 'target_copy', "22" => 'usr_post_code', "23" => 'xact_finish', "24" => 'xact_start', "25" => 'create_time', "26" => 'billings', "27" => 'payments', "28" => 'billable_transaction', "29" => 'circ_type', "30" => 'billing_total', "31" => 'payment_total', "32" => 'usr_home_ou', "33" => 'usr_profile', "34" => 'usr_birth_year', "35" => 'copy_call_number', "36" => 'copy_location', "37" => 'copy_owning_lib', "38" => 'copy_circ_lib', "39" => 'copy_bib_record', "40" => 'aaactsc_entries', "41" => 'aaasc_entries'); 
} 
 
Class acirc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'checkin_lib', "1" => 'checkin_staff', "2" => 'checkin_time', "3" => 'circ_lib', "4" => 'circ_staff', "5" => 'desk_renewal', "6" => 'due_date', "7" => 'duration', "8" => 'duration_rule', "9" => 'fine_interval', "10" => 'id', "11" => 'max_fine', "12" => 'max_fine_rule', "13" => 'opac_renewal', "14" => 'phone_renewal', "15" => 'recurring_fine', "16" => 'recurring_fine_rule', "17" => 'renewal_remaining', "18" => 'grace_period', "19" => 'stop_fines', "20" => 'stop_fines_time', "21" => 'target_copy', "22" => 'usr_post_code', "23" => 'xact_finish', "24" => 'xact_start', "25" => 'create_time', "26" => 'workstation', "27" => 'checkin_workstation', "28" => 'checkin_scan_time', "29" => 'parent_circ', "30" => 'billings', "31" => 'payments', "32" => 'billable_transaction', "33" => 'circ_type', "34" => 'billing_total', "35" => 'payment_total', "36" => 'usr_home_ou', "37" => 'usr_profile', "38" => 'usr_birth_year', "39" => 'copy_call_number', "40" => 'copy_location', "41" => 'copy_owning_lib', "42" => 'copy_circ_lib', "43" => 'copy_bib_record', "44" => 'aaactsc_entries', "45" => 'aaasc_entries'); 
} 
 
Class brt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'fine_interval', "3" => 'fine_amount', "4" => 'max_fine', "5" => 'owner', "6" => 'catalog_item', "7" => 'record', "8" => 'transferable', "9" => 'elbow_room', "10" => 'resources', "11" => 'resource_attrs', "12" => 'tgt_rsrc_types'); 
} 
 
Class brsrc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'type', "3" => 'overbook', "4" => 'barcode', "5" => 'deposit', "6" => 'deposit_amount', "7" => 'user_fee', "8" => 'attr_maps', "9" => 'tgt_rsrcs', "10" => 'curr_rsrcs', "11" => 'catalog_item'); 
} 
 
Class bra extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'resource_type', "4" => 'required', "5" => 'valid_values', "6" => 'attr_maps'); 
} 
 
Class brav extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'attr', "3" => 'valid_value', "4" => 'attr_maps', "5" => 'attr_val_maps'); 
} 
 
Class bram extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'resource', "2" => 'resource_attr', "3" => 'value'); 
} 
 
Class bresv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'usr', "2" => 'xact_finish', "3" => 'xact_start', "4" => 'unrecovered', "5" => 'billings', "6" => 'payments', "7" => 'billing_total', "8" => 'payment_total', "9" => 'summary', "10" => 'request_time', "11" => 'start_time', "12" => 'end_time', "13" => 'capture_time', "14" => 'cancel_time', "15" => 'pickup_time', "16" => 'return_time', "17" => 'booking_interval', "18" => 'fine_interval', "19" => 'fine_amount', "20" => 'max_fine', "21" => 'target_resource_type', "22" => 'target_resource', "23" => 'current_resource', "24" => 'request_lib', "25" => 'pickup_lib', "26" => 'capture_staff', "27" => 'email_notify', "28" => 'attr_val_maps'); 
} 
 
Class bravm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'reservation', "2" => 'attr_value'); 
} 
 
Class ccnbi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'bucket', "1" => 'id', "2" => 'target_call_number', "3" => 'create_time', "4" => 'pos', "5" => 'notes'); 
} 
 
Class ccnbin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'item', "2" => 'note'); 
} 
 
Class cbreb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'items', "1" => 'btype', "2" => 'id', "3" => 'name', "4" => 'description', "5" => 'owner', "6" => 'pub', "7" => 'create_time'); 
} 
 
Class cbrebn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'bucket', "2" => 'note'); 
} 
 
Class ahcm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'hold', "1" => 'id', "2" => 'target_copy'); 
} 
 
Class ahn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'hold', "1" => 'id', "2" => 'method', "3" => 'note', "4" => 'notify_staff', "5" => 'notify_time'); 
} 
 
Class acpl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'circulate', "1" => 'holdable', "2" => 'hold_verify', "3" => 'id', "4" => 'name', "5" => 'opac_visible', "6" => 'owning_lib', "7" => 'orders', "8" => 'copies', "9" => 'label_prefix', "10" => 'label_suffix', "11" => 'checkin_alert'); 
} 
 
Class acplg extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'opac_visible', "3" => 'owner', "4" => 'pos', "5" => 'top', "6" => 'location_maps'); 
} 
 
Class acplgm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'lgroup', "2" => 'location'); 
} 
 
Class acplo extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'location', "2" => 'org', "3" => 'position'); 
} 
 
Class svr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'sre_id', "1" => 'location', "2" => 'owning_lib', "3" => 'basic_holdings', "4" => 'basic_holdings_add', "5" => 'supplement_holdings', "6" => 'supplement_holdings_add', "7" => 'index_holdings', "8" => 'index_holdings_add', "9" => 'online', "10" => 'missing', "11" => 'incomplete'); 
} 
 
Class sre extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'active', "1" => 'record', "2" => 'create_date', "3" => 'creator', "4" => 'deleted', "5" => 'edit_date', "6" => 'editor', "7" => 'id', "8" => 'last_xact_id', "9" => 'marc', "10" => 'source', "11" => 'owning_lib'); 
} 
 
Class scap extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'subscription', "2" => 'type', "3" => 'create_date', "4" => 'start_date', "5" => 'end_date', "6" => 'active', "7" => 'pattern_code', "8" => 'enum_1', "9" => 'enum_2', "10" => 'enum_3', "11" => 'enum_4', "12" => 'enum_5', "13" => 'enum_6', "14" => 'chron_1', "15" => 'chron_2', "16" => 'chron_3', "17" => 'chron_4', "18" => 'chron_5'); 
} 
 
Class ssub extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owning_lib', "2" => 'start_date', "3" => 'end_date', "4" => 'record_entry', "5" => 'expected_date_offset', "6" => 'distributions', "7" => 'issuances', "8" => 'scaps', "9" => 'notes'); 
} 
 
Class ssubn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'subscription', "2" => 'creator', "3" => 'create_date', "4" => 'pub', "5" => 'title', "6" => 'value'); 
} 
 
Class sdist extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'record_entry', "2" => 'summary_method', "3" => 'subscription', "4" => 'holding_lib', "5" => 'label', "6" => 'receive_call_number', "7" => 'receive_unit_template', "8" => 'bind_call_number', "9" => 'bind_unit_template', "10" => 'unit_label_prefix', "11" => 'unit_label_suffix', "12" => 'display_grouping', "13" => 'streams', "14" => 'notes', "15" => 'basic_summary', "16" => 'supplement_summary', "17" => 'index_summary'); 
} 
 
Class sdistn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'distribution', "2" => 'creator', "3" => 'create_date', "4" => 'pub', "5" => 'title', "6" => 'value'); 
} 
 
Class sstr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'distribution', "2" => 'routing_label', "3" => 'items', "4" => 'routing_list_users'); 
} 
 
Class srlu extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'stream', "2" => 'pos', "3" => 'reader', "4" => 'department', "5" => 'note'); 
} 
 
Class siss extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'creator', "2" => 'editor', "3" => 'create_date', "4" => 'edit_date', "5" => 'subscription', "6" => 'caption_and_pattern', "7" => 'label', "8" => 'date_published', "9" => 'holding_code', "10" => 'holding_type', "11" => 'holding_link_id', "12" => 'items'); 
} 
 
Class sunit extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'age_protect', "2" => 'alert_message', "3" => 'barcode', "4" => 'call_number', "5" => 'circ_as_type', "6" => 'circ_lib', "7" => 'circ_modifier', "8" => 'circulate', "9" => 'copy_number', "10" => 'create_date', "11" => 'active_date', "12" => 'creator', "13" => 'deleted', "14" => 'dummy_isbn', "15" => 'deposit', "16" => 'deposit_amount', "17" => 'dummy_author', "18" => 'dummy_title', "19" => 'edit_date', "20" => 'editor', "21" => 'fine_level', "22" => 'holdable', "23" => 'loan_duration', "24" => 'location', "25" => 'opac_visible', "26" => 'price', "27" => 'ref', "28" => 'status', "29" => 'status_changed_time', "30" => 'mint_condition', "31" => 'floating', "32" => 'cost', "33" => 'sort_key', "34" => 'summary_contents', "35" => 'detailed_contents', "36" => 'notes', "37" => 'stat_cat_entry_copy_maps', "38" => 'circulations', "39" => 'total_circ_count', "40" => 'holds', "41" => 'stat_cat_entries'); 
} 
 
Class sitem extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'creator', "2" => 'editor', "3" => 'create_date', "4" => 'edit_date', "5" => 'issuance', "6" => 'stream', "7" => 'unit', "8" => 'uri', "9" => 'date_expected', "10" => 'date_received', "11" => 'status', "12" => 'notes', "13" => 'shadowed'); 
} 
 
Class sin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'item', "2" => 'creator', "3" => 'create_date', "4" => 'pub', "5" => 'title', "6" => 'value'); 
} 
 
Class sasum extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'summary_type', "1" => 'id', "2" => 'distribution', "3" => 'generated_coverage', "4" => 'show_generated'); 
} 
 
Class smhc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'issuance', "2" => 'holding_type', "3" => 'ind1', "4" => 'ind2', "5" => 'subfield', "6" => 'value'); 
} 
 
Class sbsum extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'distribution', "2" => 'generated_coverage', "3" => 'textual_holdings', "4" => 'show_generated'); 
} 
 
Class sssum extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'distribution', "2" => 'generated_coverage', "3" => 'textual_holdings', "4" => 'show_generated'); 
} 
 
Class sisum extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'distribution', "2" => 'generated_coverage', "3" => 'textual_holdings', "4" => 'show_generated'); 
} 
 
Class ascecm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owning_copy', "2" => 'stat_cat', "3" => 'stat_cat_entry'); 
} 
 
Class citm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'value'); 
} 
 
Class cblvl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'value'); 
} 
 
Class sra extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'active', "2" => 'field', "3" => 'bump_type', "4" => 'multiplier'); 
} 
 
Class lasso extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name'); 
} 
 
Class lmap extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'lasso', "2" => 'org_unit'); 
} 
 
Class aoup extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'from_org', "2" => 'to_org', "3" => 'prox'); 
} 
 
Class ssr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'rel', "2" => 'record', "3" => 'total', "4" => 'checked', "5" => 'visible', "6" => 'deleted', "7" => 'excluded'); 
} 
 
Class asv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'questions', "1" => 'responses', "2" => 'description', "3" => 'end_date', "4" => 'id', "5" => 'name', "6" => 'opac', "7" => 'owner', "8" => 'poll', "9" => 'required', "10" => 'start_date', "11" => 'usr_summary'); 
} 
 
Class aoa extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'address_type', "1" => 'city', "2" => 'country', "3" => 'county', "4" => 'id', "5" => 'org_unit', "6" => 'post_code', "7" => 'state', "8" => 'street1', "9" => 'street2', "10" => 'valid', "11" => 'san'); 
} 
 
Class ahr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'status', "1" => 'transit', "2" => 'capture_time', "3" => 'current_copy', "4" => 'email_notify', "5" => 'expire_time', "6" => 'fulfillment_lib', "7" => 'fulfillment_staff', "8" => 'fulfillment_time', "9" => 'hold_type', "10" => 'holdable_formats', "11" => 'id', "12" => 'phone_notify', "13" => 'sms_notify', "14" => 'sms_carrier', "15" => 'pickup_lib', "16" => 'prev_check_time', "17" => 'request_lib', "18" => 'request_time', "19" => 'requestor', "20" => 'selection_depth', "21" => 'selection_ou', "22" => 'target', "23" => 'usr', "24" => 'cancel_time', "25" => 'notify_time', "26" => 'notify_count', "27" => 'notifications', "28" => 'bib_rec', "29" => 'eligible_copies', "30" => 'frozen', "31" => 'thaw_date', "32" => 'shelf_time', "33" => 'cancel_cause', "34" => 'cancel_note', "35" => 'cut_in_line', "36" => 'mint_condition', "37" => 'shelf_expire_time', "38" => 'notes', "39" => 'current_shelf_lib'); 
} 
 
Class alhr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'status', "1" => 'transit', "2" => 'capture_time', "3" => 'current_copy', "4" => 'email_notify', "5" => 'expire_time', "6" => 'fulfillment_lib', "7" => 'fulfillment_staff', "8" => 'fulfillment_time', "9" => 'hold_type', "10" => 'holdable_formats', "11" => 'id', "12" => 'phone_notify', "13" => 'pickup_lib', "14" => 'prev_check_time', "15" => 'request_lib', "16" => 'request_time', "17" => 'requestor', "18" => 'selection_depth', "19" => 'selection_ou', "20" => 'target', "21" => 'usr', "22" => 'cancel_time', "23" => 'notify_time', "24" => 'notify_count', "25" => 'notifications', "26" => 'bib_rec', "27" => 'eligible_copies', "28" => 'frozen', "29" => 'thaw_date', "30" => 'shelf_time', "31" => 'cancel_cause', "32" => 'cancel_note', "33" => 'cut_in_line', "34" => 'mint_condition', "35" => 'shelf_expire_time', "36" => 'notes', "37" => 'current_shelf_lib'); 
} 
 
Class ahrn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'hold', "2" => 'title', "3" => 'body', "4" => 'slip', "5" => 'pub', "6" => 'staff'); 
} 
 
Class aou extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'children', "1" => 'billing_address', "2" => 'holds_address', "3" => 'id', "4" => 'ill_address', "5" => 'mailing_address', "6" => 'name', "7" => 'ou_type', "8" => 'parent_ou', "9" => 'shortname', "10" => 'email', "11" => 'phone', "12" => 'opac_visible', "13" => 'fiscal_calendar', "14" => 'users', "15" => 'closed_dates', "16" => 'circulations', "17" => 'settings', "18" => 'addresses', "19" => 'checkins', "20" => 'workstations', "21" => 'fund_alloc_pcts', "22" => 'copy_location_orders', "23" => 'atc_prev_dests', "24" => 'resv_requests', "25" => 'resv_pickups', "26" => 'rsrc_types', "27" => 'resources', "28" => 'rsrc_attrs', "29" => 'attr_vals', "30" => 'hours_of_operation'); 
} 
 
Class aouct extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'active', "2" => 'purpose'); 
} 
 
Class aouctn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'tree', "2" => 'org_unit', "3" => 'parent_node', "4" => 'sibling_order', "5" => 'children'); 
} 
 
Class ccnb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'items', "1" => 'btype', "2" => 'id', "3" => 'name', "4" => 'description', "5" => 'owner', "6" => 'pub', "7" => 'create_time'); 
} 
 
Class ccnbn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'bucket', "2" => 'note'); 
} 
 
Class asc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'entries', "1" => 'id', "2" => 'name', "3" => 'opac_visible', "4" => 'owner', "5" => 'sip_field', "6" => 'sip_format', "7" => 'required', "8" => 'checkout_archive'); 
} 
 
Class ac extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'active', "1" => 'barcode', "2" => 'id', "3" => 'usr'); 
} 
 
Class actscsf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'name', "2" => 'one_only'); 
} 
 
Class actsc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'entries', "1" => 'default_entries', "2" => 'id', "3" => 'name', "4" => 'opac_visible', "5" => 'owner', "6" => 'usr_summary', "7" => 'sip_field', "8" => 'sip_format', "9" => 'checkout_archive', "10" => 'required', "11" => 'allow_freetext'); 
} 
 
Class msefe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'id', "2" => 'source', "3" => 'value'); 
} 
 
Class cub extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'items', "1" => 'btype', "2" => 'id', "3" => 'name', "4" => 'description', "5" => 'owner', "6" => 'pub', "7" => 'create_time'); 
} 
 
Class cubn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'bucket', "2" => 'note'); 
} 
 
Class mcrp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'accepting_usr', "1" => 'amount', "2" => 'amount_collected', "3" => 'id', "4" => 'note', "5" => 'payment_ts', "6" => 'xact', "7" => 'payment_type', "8" => 'payment'); 
} 
 
Class afr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'ind1', "2" => 'ind2', "3" => 'record', "4" => 'subfield', "5" => 'tag', "6" => 'value'); 
} 
 
Class cnct extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'circ_duration', "1" => 'id', "2" => 'in_house', "3" => 'name', "4" => 'owning_lib'); 
} 
 
Class aout extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'children', "1" => 'can_have_users', "2" => 'can_have_vols', "3" => 'depth', "4" => 'id', "5" => 'name', "6" => 'opac_label', "7" => 'parent', "8" => 'org_units'); 
} 
 
Class bren extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'create_date', "1" => 'creator', "2" => 'edit_date', "3" => 'editor', "4" => 'id', "5" => 'pub', "6" => 'record', "7" => 'value'); 
} 
 
Class mucs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'balance_owed', "1" => 'total_owed', "2" => 'total_paid', "3" => 'usr'); 
} 
 
Class mg extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'billing_location', "1" => 'id', "2" => 'note', "3" => 'usr', "4" => 'xact_finish', "5" => 'xact_start', "6" => 'billings', "7" => 'payments', "8" => 'billable_transaction', "9" => 'billing_total', "10" => 'payment_total'); 
} 
 
Class cbs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'quality', "2" => 'source', "3" => 'transcendant', "4" => 'can_have_copies'); 
} 
 
Class mbt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'usr', "2" => 'xact_finish', "3" => 'xact_start', "4" => 'unrecovered', "5" => 'grocery', "6" => 'circulation', "7" => 'billings', "8" => 'payments', "9" => 'billing_total', "10" => 'payment_total', "11" => 'summary'); 
} 
 
Class actsce extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'stat_cat', "3" => 'value', "4" => 'default_entries'); 
} 
 
Class actsced extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'stat_cat_entry', "2" => 'stat_cat', "3" => 'owner'); 
} 
 
Class cubi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'bucket', "1" => 'id', "2" => 'target_user', "3" => 'create_time', "4" => 'pos', "5" => 'notes'); 
} 
 
Class cubin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'item', "2" => 'note'); 
} 
 
Class mus extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'balance_owed', "1" => 'total_owed', "2" => 'total_paid', "3" => 'usr'); 
} 
 
Class clfm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'description', "2" => 'value'); 
} 
 
Class mwp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'accepting_usr', "1" => 'amount', "2" => 'amount_collected', "3" => 'id', "4" => 'note', "5" => 'payment_ts', "6" => 'xact', "7" => 'payment', "8" => 'payment_type'); 
} 
 
Class mgp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'accepting_usr', "1" => 'amount', "2" => 'amount_collected', "3" => 'id', "4" => 'note', "5" => 'payment_ts', "6" => 'xact', "7" => 'payment', "8" => 'payment_type'); 
} 
 
Class aoc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'checkin_lib', "1" => 'checkin_staff', "2" => 'checkin_time', "3" => 'circ_lib', "4" => 'circ_staff', "5" => 'desk_renewal', "6" => 'due_date', "7" => 'duration', "8" => 'duration_rule', "9" => 'fine_interval', "10" => 'id', "11" => 'max_fine', "12" => 'max_fine_rule', "13" => 'opac_renewal', "14" => 'phone_renewal', "15" => 'recurring_fine', "16" => 'recurring_fine_rule', "17" => 'renewal_remaining', "18" => 'grace_period', "19" => 'stop_fines', "20" => 'stop_fines_time', "21" => 'target_copy', "22" => 'usr', "23" => 'xact_finish', "24" => 'xact_start', "25" => 'circulation'); 
} 
 
Class msfe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'id', "2" => 'source', "3" => 'value'); 
} 
 
Class crrf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'high', "1" => 'id', "2" => 'low', "3" => 'name', "4" => 'normal', "5" => 'recurrence_interval', "6" => 'grace_period'); 
} 
 
Class mckp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'accepting_usr', "1" => 'amount', "2" => 'amount_collected', "3" => 'cash_drawer', "4" => 'check_number', "5" => 'id', "6" => 'note', "7" => 'payment_ts', "8" => 'xact', "9" => 'payment', "10" => 'payment_type'); 
} 
 
Class acp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'age_protect', "1" => 'alert_message', "2" => 'barcode', "3" => 'call_number', "4" => 'circ_as_type', "5" => 'circ_lib', "6" => 'circ_modifier', "7" => 'circulate', "8" => 'copy_number', "9" => 'create_date', "10" => 'active_date', "11" => 'creator', "12" => 'deleted', "13" => 'dummy_isbn', "14" => 'deposit', "15" => 'deposit_amount', "16" => 'dummy_author', "17" => 'dummy_title', "18" => 'edit_date', "19" => 'editor', "20" => 'fine_level', "21" => 'holdable', "22" => 'id', "23" => 'loan_duration', "24" => 'location', "25" => 'opac_visible', "26" => 'price', "27" => 'ref', "28" => 'status', "29" => 'status_changed_time', "30" => 'mint_condition', "31" => 'floating', "32" => 'cost', "33" => 'notes', "34" => 'stat_cat_entry_copy_maps', "35" => 'circulations', "36" => 'total_circ_count', "37" => 'last_circ', "38" => 'holds', "39" => 'stat_cat_entries', "40" => 'parts', "41" => 'peer_record_maps', "42" => 'peer_records', "43" => 'last_captured_hold'); 
} 
 
Class act extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owning_lib', "2" => 'creator', "3" => 'editor', "4" => 'create_date', "5" => 'edit_date', "6" => 'name', "7" => 'circ_lib', "8" => 'status', "9" => 'location', "10" => 'loan_duration', "11" => 'fine_level', "12" => 'age_protect', "13" => 'circulate', "14" => 'deposit', "15" => 'ref', "16" => 'holdable', "17" => 'deposit_amount', "18" => 'price', "19" => 'circ_modifier', "20" => 'circ_as_type', "21" => 'alert_message', "22" => 'opac_visible', "23" => 'floating', "24" => 'mint_condition'); 
} 
 
Class crahp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'age', "1" => 'id', "2" => 'name', "3" => 'prox'); 
} 
 
Class crmf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'amount', "1" => 'id', "2" => 'name', "3" => 'is_percent'); 
} 
 
Class pgt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'children', "1" => 'description', "2" => 'id', "3" => 'name', "4" => 'parent', "5" => 'perm_interval', "6" => 'application_perm', "7" => 'usergroup', "8" => 'hold_priority'); 
} 
 
Class asva extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'responses', "1" => 'answer', "2" => 'id', "3" => 'question'); 
} 
 
Class ancc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'circ_lib', "1" => 'circ_time', "2" => 'id', "3" => 'item_type', "4" => 'patron', "5" => 'staff', "6" => 'duedate'); 
} 
 
Class moucs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'balance_owed', "1" => 'total_owed', "2" => 'total_paid', "3" => 'usr'); 
} 
 
Class aufh extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'circ_lib', "1" => 'current_copy', "2" => 'fail_time', "3" => 'hold', "4" => 'id'); 
} 
 
Class mife extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'id', "2" => 'source', "3" => 'value'); 
} 
 
Class mtfe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'id', "2" => 'source', "3" => 'value'); 
} 
 
Class actscecm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'stat_cat', "2" => 'stat_cat_entry', "3" => 'target_usr'); 
} 
 
Class pgpm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'depth', "1" => 'grantable', "2" => 'grp', "3" => 'id', "4" => 'perm'); 
} 
 
Class ccb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'items', "1" => 'btype', "2" => 'id', "3" => 'name', "4" => 'description', "5" => 'owner', "6" => 'pub', "7" => 'create_time'); 
} 
 
Class ccbn extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'bucket', "2" => 'note'); 
} 
 
Class puwoum extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'usr', "2" => 'work_ou'); 
} 
 
Class pupm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'depth', "1" => 'grantable', "2" => 'id', "3" => 'perm', "4" => 'usr'); 
} 
 
Class puopm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'object_id', "1" => 'grantable', "2" => 'id', "3" => 'perm', "4" => 'usr', "5" => 'object_type'); 
} 
 
Class mp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'amount', "1" => 'id', "2" => 'note', "3" => 'payment_ts', "4" => 'payment_type', "5" => 'xact', "6" => 'voided', "7" => 'cash_payment', "8" => 'credit_card_payment', "9" => 'credit_payment', "10" => 'check_payment', "11" => 'work_payment', "12" => 'forgive_payment', "13" => 'goods_payment'); 
} 
 
Class mbp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'amount', "1" => 'id', "2" => 'note', "3" => 'payment_ts', "4" => 'payment_type', "5" => 'xact', "6" => 'voided', "7" => 'cash_payment', "8" => 'credit_card_payment', "9" => 'credit_payment', "10" => 'check_payment', "11" => 'work_payment', "12" => 'forgive_payment', "13" => 'goods_payment'); 
} 
 
Class mndp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'amount', "1" => 'id', "2" => 'note', "3" => 'payment_ts', "4" => 'payment_type', "5" => 'xact', "6" => 'voided', "7" => 'work_payment', "8" => 'forgive_payment', "9" => 'goods_payment', "10" => 'credit_payment'); 
} 
 
Class mdp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'amount', "1" => 'id', "2" => 'note', "3" => 'payment_ts', "4" => 'payment_type', "5" => 'xact', "6" => 'accepting_usr', "7" => 'cash_drawer', "8" => 'voided', "9" => 'cash_payment', "10" => 'credit_card_payment', "11" => 'check_payment'); 
} 
 
Class cbrebi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'bucket', "1" => 'id', "2" => 'target_biblio_record_entry', "3" => 'create_time', "4" => 'pos', "5" => 'notes'); 
} 
 
Class cbrebin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'item', "2" => 'note'); 
} 
 
Class asce extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'stat_cat', "3" => 'value'); 
} 
 
Class ascsf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'field', "1" => 'name', "2" => 'one_only'); 
} 
 
Class ahrcc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'label'); 
} 
 
Class artc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'copy_status', "1" => 'dest', "2" => 'dest_recv_time', "3" => 'reservation', "4" => 'id', "5" => 'persistant_transfer', "6" => 'prev_hop', "7" => 'source', "8" => 'source_send_time', "9" => 'target_copy', "10" => 'transit_copy', "11" => 'prev_dest'); 
} 
 
Class ahtc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'copy_status', "1" => 'dest', "2" => 'dest_recv_time', "3" => 'hold', "4" => 'id', "5" => 'persistant_transfer', "6" => 'prev_hop', "7" => 'source', "8" => 'source_send_time', "9" => 'target_copy', "10" => 'transit_copy', "11" => 'prev_dest'); 
} 
 
Class mb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'amount', "1" => 'billing_ts', "2" => 'billing_type', "3" => 'id', "4" => 'note', "5" => 'void_time', "6" => 'voided', "7" => 'voider', "8" => 'xact', "9" => 'btype'); 
} 
 
Class pugm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'grp', "1" => 'id', "2" => 'usr'); 
} 
 
Class i18n extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fq_field', "2" => 'identity_value', "3" => 'translation', "4" => 'string'); 
} 
 
Class fdoc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fm_class', "2" => 'field', "3" => 'owner', "4" => 'string'); 
} 
 
Class i18n_l extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'marc_code', "2" => 'name', "3" => 'description'); 
} 
 
Class cbt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'owner', "3" => 'default_price'); 
} 
 
Class aurt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'label'); 
} 
 
Class aur extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'usr', "2" => 'request_type', "3" => 'hold', "4" => 'pickup_lib', "5" => 'holdable_formats', "6" => 'phone_notify', "7" => 'email_notify', "8" => 'lineitem', "9" => 'eg_bib', "10" => 'request_date', "11" => 'need_before', "12" => 'max_fee', "13" => 'isxn', "14" => 'title', "15" => 'volume', "16" => 'author', "17" => 'article_title', "18" => 'article_pages', "19" => 'publisher', "20" => 'location', "21" => 'pubdate', "22" => 'mentioned', "23" => 'other_info', "24" => 'cancel_reason'); 
} 
 
Class acqct extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'label'); 
} 
 
Class acqexr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'from_currency', "2" => 'to_currency', "3" => 'ratio'); 
} 
 
Class acqpro extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'owner', "3" => 'currency_type', "4" => 'code', "5" => 'holding_tag', "6" => 'addresses', "7" => 'san', "8" => 'edi_default', "9" => 'active', "10" => 'prepayment_required', "11" => 'url', "12" => 'email', "13" => 'phone', "14" => 'fax_phone', "15" => 'default_claim_policy'); 
} 
 
Class acqpron extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'provider', "2" => 'creator', "3" => 'create_time', "4" => 'edit_time', "5" => 'editor', "6" => 'value'); 
} 
 
Class acqipm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'name'); 
} 
 
Class acqinv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'receiver', "2" => 'provider', "3" => 'shipper', "4" => 'recv_date', "5" => 'recv_method', "6" => 'inv_type', "7" => 'inv_ident', "8" => 'payment_auth', "9" => 'payment_method', "10" => 'note', "11" => 'complete', "12" => 'entries', "13" => 'items'); 
} 
 
Class acqie extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'invoice', "2" => 'purchase_order', "3" => 'lineitem', "4" => 'inv_item_count', "5" => 'phys_item_count', "6" => 'note', "7" => 'billed_per_item', "8" => 'cost_billed', "9" => 'actual_cost', "10" => 'amount_paid'); 
} 
 
Class acqii extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'invoice', "2" => 'purchase_order', "3" => 'fund_debit', "4" => 'inv_item_type', "5" => 'title', "6" => 'author', "7" => 'note', "8" => 'cost_billed', "9" => 'actual_cost', "10" => 'fund', "11" => 'amount_paid', "12" => 'po_item', "13" => 'target'); 
} 
 
Class acqpa extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'address_type', "1" => 'city', "2" => 'country', "3" => 'county', "4" => 'id', "5" => 'provider', "6" => 'post_code', "7" => 'state', "8" => 'street1', "9" => 'street2', "10" => 'valid', "11" => 'fax_phone'); 
} 
 
Class acqpc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'provider', "2" => 'name', "3" => 'role', "4" => 'email', "5" => 'phone'); 
} 
 
Class acqpca extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'address_type', "1" => 'city', "2" => 'country', "3" => 'county', "4" => 'id', "5" => 'post_code', "6" => 'state', "7" => 'street1', "8" => 'street2', "9" => 'contact', "10" => 'valid', "11" => 'fax_phone'); 
} 
 
Class acqftr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'src_fund', "2" => 'src_amount', "3" => 'dest_fund', "4" => 'dest_amount', "5" => 'transfer_time', "6" => 'transfer_user', "7" => 'note', "8" => 'funding_source_credit'); 
} 
 
Class acqfc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'years'); 
} 
 
Class acqfy extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'calendar', "2" => 'year', "3" => 'year_begin', "4" => 'year_end'); 
} 
 
Class acqfs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'name', "2" => 'owner', "3" => 'currency_type', "4" => 'code', "5" => 'summary', "6" => 'allocations', "7" => 'credits', "8" => 'fund_alloc_pcts'); 
} 
 
Class acqfscred extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'funding_source', "2" => 'amount', "3" => 'note', "4" => 'deadline_date', "5" => 'effective_date'); 
} 
 
Class acqofscred extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'sort_priority', "2" => 'sort_date', "3" => 'funding_source', "4" => 'amount', "5" => 'note'); 
} 
 
Class acqfdeb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fund', "2" => 'origin_amount', "3" => 'origin_currency_type', "4" => 'amount', "5" => 'encumbrance', "6" => 'debit_type', "7" => 'create_time'); 
} 
 
Class acqf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'org', "2" => 'name', "3" => 'year', "4" => 'currency_type', "5" => 'code', "6" => 'rollover', "7" => 'propagate', "8" => 'active', "9" => 'balance_warning_percent', "10" => 'balance_stop_percent', "11" => 'summary', "12" => 'allocations', "13" => 'debits', "14" => 'tags', "15" => 'allocation_total', "16" => 'debit_total', "17" => 'encumbrance_total', "18" => 'spent_total', "19" => 'combined_balance', "20" => 'spent_balance'); 
} 
 
Class acqfat extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqfdt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqfet extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqfst extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqfcb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqafat extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqafet extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqafst extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqafsb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqafcb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqfsrcct extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'funding_source', "1" => 'amount'); 
} 
 
Class acqfsrcat extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'funding_source', "1" => 'amount'); 
} 
 
Class acqfsrcb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'funding_source', "1" => 'amount'); 
} 
 
Class acqfsb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'fund', "1" => 'amount'); 
} 
 
Class acqfa extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fund', "2" => 'funding_source', "3" => 'amount', "4" => 'allocator', "5" => 'note', "6" => 'create_time'); 
} 
 
Class acqfap extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'funding_source', "2" => 'org', "3" => 'fund_code', "4" => 'percent', "5" => 'allocator', "6" => 'note', "7" => 'create_time'); 
} 
 
Class acqpl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'org_unit', "3" => 'name', "4" => 'create_time', "5" => 'edit_time', "6" => 'entries', "7" => 'entry_count', "8" => 'creator', "9" => 'editor'); 
} 
 
Class acqcr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'org_unit', "2" => 'label', "3" => 'description', "4" => 'keep_debits'); 
} 
 
Class acqpo extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'create_time', "3" => 'edit_time', "4" => 'provider', "5" => 'state', "6" => 'ordering_agency', "7" => 'creator', "8" => 'editor', "9" => 'order_date', "10" => 'name', "11" => 'cancel_reason', "12" => 'prepayment_required', "13" => 'lineitems', "14" => 'notes', "15" => 'lineitem_count', "16" => 'amount_encumbered', "17" => 'amount_spent', "18" => 'po_items'); 
} 
 
Class acqpoh extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'audit_id', "1" => 'audit_time', "2" => 'audit_action', "3" => 'id', "4" => 'owner', "5" => 'creator', "6" => 'editor', "7" => 'ordering_agency', "8" => 'create_time', "9" => 'edit_time', "10" => 'provider', "11" => 'state', "12" => 'order_date', "13" => 'name', "14" => 'cancel_reason', "15" => 'prepayment_required'); 
} 
 
Class acqpon extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'purchase_order', "2" => 'creator', "3" => 'create_time', "4" => 'edit_time', "5" => 'editor', "6" => 'value', "7" => 'vendor_public'); 
} 
 
Class acqpoi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'purchase_order', "2" => 'fund_debit', "3" => 'inv_item_type', "4" => 'title', "5" => 'author', "6" => 'note', "7" => 'estimated_cost', "8" => 'fund', "9" => 'target'); 
} 
 
Class jub extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'selector', "2" => 'picklist', "3" => 'purchase_order', "4" => 'provider', "5" => 'create_time', "6" => 'edit_time', "7" => 'marc', "8" => 'eg_bib_id', "9" => 'source_label', "10" => 'expected_recv_time', "11" => 'state', "12" => 'creator', "13" => 'editor', "14" => 'claim_policy', "15" => 'cancel_reason', "16" => 'estimated_unit_price', "17" => 'queued_record', "18" => 'item_count', "19" => 'attributes', "20" => 'lineitem_details', "21" => 'lineitem_notes', "22" => 'distribution_formulas', "23" => 'invoice_entries', "24" => 'order_summary'); 
} 
 
Class acqlih extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'audit_id', "1" => 'audit_time', "2" => 'audit_action', "3" => 'id', "4" => 'creator', "5" => 'editor', "6" => 'selector', "7" => 'provider', "8" => 'purchase_order', "9" => 'picklist', "10" => 'expected_recv_time', "11" => 'create_time', "12" => 'edit_time', "13" => 'marc', "14" => 'eg_bib_id', "15" => 'source_label', "16" => 'state', "17" => 'claim_policy', "18" => 'cancel_reason', "19" => 'estimated_unit_price', "20" => 'queued_record'); 
} 
 
Class acqliat extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'owning_lib'); 
} 
 
Class acqlin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'lineitem', "2" => 'creator', "3" => 'create_time', "4" => 'edit_time', "5" => 'editor', "6" => 'value', "7" => 'alert_text', "8" => 'vendor_public'); 
} 
 
Class acqlia extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'lineitem', "2" => 'attr_type', "3" => 'attr_name', "4" => 'attr_value', "5" => 'definition'); 
} 
 
Class acqlid extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'lineitem', "2" => 'eg_copy_id', "3" => 'barcode', "4" => 'cn_label', "5" => 'recv_time', "6" => 'receiver', "7" => 'fund', "8" => 'fund_debit', "9" => 'owning_lib', "10" => 'location', "11" => 'circ_modifier', "12" => 'note', "13" => 'collection_code', "14" => 'cancel_reason', "15" => 'claims'); 
} 
 
Class acqliad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'ident'); 
} 
 
Class acqlimad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'xpath', "4" => 'ident', "5" => 'remove'); 
} 
 
Class acqligad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'xpath', "4" => 'ident'); 
} 
 
Class acqliuad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'usr', "4" => 'ident'); 
} 
 
Class acqlipad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'xpath', "4" => 'provider', "5" => 'ident', "6" => 'remove'); 
} 
 
Class acqphsm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'provider', "2" => 'name', "3" => 'subfield'); 
} 
 
Class acqlilad extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'code', "2" => 'description', "3" => 'ident'); 
} 
 
Class acqedi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'label', "2" => 'host', "3" => 'username', "4" => 'password', "5" => 'account', "6" => 'path', "7" => 'owner', "8" => 'last_activity', "9" => 'provider', "10" => 'in_dir', "11" => 'vendacct', "12" => 'vendcode'); 
} 
 
Class acqedim extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'account', "2" => 'remote_file', "3" => 'create_time', "4" => 'translate_time', "5" => 'process_time', "6" => 'error_time', "7" => 'status', "8" => 'edi', "9" => 'jedi', "10" => 'error', "11" => 'purchase_order', "12" => 'message_type'); 
} 
 
Class rof extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parent', "2" => 'owner', "3" => 'create_time', "4" => 'name', "5" => 'shared', "6" => 'share_with', "7" => 'children', "8" => 'outputs'); 
} 
 
Class rtf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parent', "2" => 'owner', "3" => 'create_time', "4" => 'name', "5" => 'shared', "6" => 'share_with', "7" => 'children', "8" => 'templates'); 
} 
 
Class rrf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parent', "2" => 'owner', "3" => 'create_time', "4" => 'name', "5" => 'shared', "6" => 'share_with', "7" => 'children', "8" => 'reports'); 
} 
 
Class rt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'create_time', "3" => 'name', "4" => 'data', "5" => 'folder', "6" => 'description', "7" => 'reports'); 
} 
 
Class rr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'create_time', "3" => 'template', "4" => 'data', "5" => 'folder', "6" => 'recur', "7" => 'recurrence', "8" => 'name', "9" => 'description', "10" => 'runs'); 
} 
 
Class rs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'runner', "2" => 'start_time', "3" => 'complete_time', "4" => 'run_time', "5" => 'email', "6" => 'excel_format', "7" => 'csv_format', "8" => 'html_format', "9" => 'error_code', "10" => 'error_text', "11" => 'report', "12" => 'folder', "13" => 'chart_pie', "14" => 'chart_bar', "15" => 'chart_line'); 
} 
 
Class rmsr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fingerprint', "2" => 'quality', "3" => 'tcn_source', "4" => 'tcn_value', "5" => 'title', "6" => 'author', "7" => 'publisher', "8" => 'pubdate', "9" => 'isbn', "10" => 'issn', "11" => 'biblio_record'); 
} 
 
Class rssr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fingerprint', "2" => 'quality', "3" => 'tcn_source', "4" => 'tcn_value', "5" => 'title', "6" => 'author', "7" => 'publisher', "8" => 'pubdate', "9" => 'isbn', "10" => 'issn', "11" => 'biblio_record'); 
} 
 
Class rsr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'metarecord', "2" => 'fingerprint', "3" => 'quality', "4" => 'tcn_source', "5" => 'tcn_value', "6" => 'title', "7" => 'uniform_title', "8" => 'author', "9" => 'publisher', "10" => 'pubdate', "11" => 'series_title', "12" => 'series_statement', "13" => 'summary', "14" => 'isbn', "15" => 'issn', "16" => 'topic_subject', "17" => 'geographic_subject', "18" => 'genre', "19" => 'name_subject', "20" => 'corporate_subject', "21" => 'external_uri', "22" => 'biblio_record'); 
} 
 
Class rud extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'dob', "2" => 'general_division'); 
} 
 
Class rcirct extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type'); 
} 
 
Class rhrr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'target', "2" => 'hold_type', "3" => 'bib_record'); 
} 
 
Class rxbt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'xact', "1" => 'unvoided', "2" => 'voided', "3" => 'total'); 
} 
 
Class rxpt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'xact', "1" => 'unvoided', "2" => 'voided', "3" => 'total'); 
} 
 
Class ergbhu extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'holding_update', "2" => 'update_type'); 
} 
 
Class erfcc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'circ_count'); 
} 
 
Class acqdf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'skip_count', "4" => 'entries', "5" => 'use_count'); 
} 
 
Class acqdfe extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'formula', "2" => 'position', "3" => 'item_count', "4" => 'owning_lib', "5" => 'location'); 
} 
 
Class acqdfa extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'creator', "2" => 'create_time', "3" => 'formula', "4" => 'lineitem'); 
} 
 
Class acqda extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fund_debit', "2" => 'debit_amount', "3" => 'funding_source_credit', "4" => 'credit_amount'); 
} 
 
Class acqclt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'org_unit', "2" => 'code', "3" => 'description'); 
} 
 
Class acqclet extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'org_unit', "2" => 'code', "3" => 'description', "4" => 'library_initiated'); 
} 
 
Class acqcl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type', "2" => 'lineitem_detail'); 
} 
 
Class acqcle extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type', "2" => 'claim', "3" => 'event_date', "4" => 'creator', "5" => 'note'); 
} 
 
Class acqscl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type', "2" => 'item'); 
} 
 
Class acqscle extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type', "2" => 'claim', "3" => 'event_date', "4" => 'creator', "5" => 'note'); 
} 
 
Class acqclp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'org_unit', "2" => 'name', "3" => 'description'); 
} 
 
Class acqclpa extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'claim_policy', "2" => 'action_interval', "3" => 'action'); 
} 
 
Class stgu extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'row_id', "1" => 'row_date', "2" => 'usrname', "3" => 'profile', "4" => 'email', "5" => 'passwd', "6" => 'ident_type', "7" => 'first_given_name', "8" => 'second_given_name', "9" => 'family_name', "10" => 'day_phone', "11" => 'evening_phone', "12" => 'home_ou', "13" => 'dob', "14" => 'complete'); 
} 
 
Class stgc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'row_id', "1" => 'row_date', "2" => 'usrname', "3" => 'barcode', "4" => 'complete'); 
} 
 
Class stgma extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'row_id', "1" => 'row_date', "2" => 'usrname', "3" => 'street1', "4" => 'street2', "5" => 'city', "6" => 'state', "7" => 'country', "8" => 'post_code', "9" => 'complete'); 
} 
 
Class stgba extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'row_id', "1" => 'row_date', "2" => 'usrname', "3" => 'street1', "4" => 'street2', "5" => 'city', "6" => 'state', "7" => 'country', "8" => 'post_code', "9" => 'complete'); 
} 
 
Class stgsc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'row_id', "1" => 'row_date', "2" => 'usrname', "3" => 'statcat', "4" => 'value', "5" => 'complete'); 
} 
 
Class afs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'owning_lib', "3" => 'status', "4" => 'creation_time', "5" => 'scheduled_time', "6" => 'applied_time', "7" => 'classname', "8" => 'name', "9" => 'stored_query', "10" => 'pkey_value'); 
} 
 
Class afscv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fieldset', "2" => 'col', "3" => 'val'); 
} 
 
Class aufhl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'hold', "1" => 'circ_lib', "2" => 'count'); 
} 
 
Class aufhml extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'hold', "1" => 'min'); 
} 
 
Class aufhil extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'hold', "1" => 'circ_lib', "2" => 'count'); 
} 
 
Class aufhmxl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'hold', "1" => 'max'); 
} 
 
Class aufhol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'hold', "1" => 'circ_lib', "2" => 'count'); 
} 
 
Class qsq extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type', "2" => 'use_all', "3" => 'use_distinct', "4" => 'from_clause', "5" => 'where_clause', "6" => 'having_clause', "7" => 'limit_count', "8" => 'offset_count'); 
} 
 
Class qseq extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parent_query', "2" => 'seq_no', "3" => 'child_query'); 
} 
 
Class qdt extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'datatype_name', "2" => 'is_numeric', "3" => 'is_composite'); 
} 
 
Class qsf extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'composite_type', "2" => 'seq_no', "3" => 'subfield_type'); 
} 
 
Class qfs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'function_name', "2" => 'return_type', "3" => 'is_aggregate'); 
} 
 
Class qfpd extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'function_id', "2" => 'seq_no', "3" => 'datatype'); 
} 
 
Class qbv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'name', "1" => 'label', "2" => 'type', "3" => 'description', "4" => 'default_value', "5" => 'actual_value'); 
} 
 
Class qxp extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type', "2" => 'parenthesize', "3" => 'parent_expr', "4" => 'seq_no', "5" => 'literal', "6" => 'table_alias', "7" => 'column_name', "8" => 'left_operand', "9" => 'operator', "10" => 'right_operand', "11" => 'function_id', "12" => 'subquery', "13" => 'cast_type', "14" => 'negate', "15" => 'bind_variable'); 
} 
 
Class qcb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parent_expr', "2" => 'seq_no', "3" => 'condition', "4" => 'result'); 
} 
 
Class qfr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'type', "2" => 'table_name', "3" => 'class_name', "4" => 'subquery', "5" => 'function_call', "6" => 'table_alias', "7" => 'parent_relation', "8" => 'seq_no', "9" => 'join_type', "10" => 'on_clause'); 
} 
 
Class qrc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'from_relation', "2" => 'seq_no', "3" => 'column_name', "4" => 'column_type'); 
} 
 
Class qsi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'stored_query', "2" => 'seq_no', "3" => 'expression', "4" => 'column_alias', "5" => 'grouped_by'); 
} 
 
Class qobi extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'stored_query', "2" => 'seq_no', "3" => 'expression'); 
} 
 
Class xbet extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'left_operand', "5" => 'negate'); 
} 
 
Class xbind extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'bind_variable'); 
} 
 
Class xbool extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'literal', "5" => 'negate'); 
} 
 
Class xcase extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'left_operand', "5" => 'negate'); 
} 
 
Class xcast extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'left_operand', "5" => 'cast_type', "6" => 'negate'); 
} 
 
Class xcol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'table_alias', "5" => 'column_name', "6" => 'negate'); 
} 
 
Class xex extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'subquery', "5" => 'negate'); 
} 
 
Class xfunc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'column_name', "5" => 'function_id', "6" => 'negate'); 
} 
 
Class xin extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'left_operand', "5" => 'subquery', "6" => 'negate'); 
} 
 
Class xisnull extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'left_operand', "5" => 'negate'); 
} 
 
Class xnull extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'negate'); 
} 
 
Class xnum extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'literal'); 
} 
 
Class xop extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'left_operand', "5" => 'operator', "6" => 'right_operand', "7" => 'negate'); 
} 
 
Class xser extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'operator', "5" => 'negate'); 
} 
 
Class xstr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'literal'); 
} 
 
Class xsubq extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'parenthesize', "2" => 'parent_expr', "3" => 'seq_no', "4" => 'subquery'); 
} 
 
Class bmpc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'ptype', "2" => 'subfield', "3" => 'value', "4" => 'record'); 
} 
 
Class cmfpm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fixed_field', "2" => 'tag', "3" => 'rec_type', "4" => 'start_pos', "5" => 'length', "6" => 'default_val'); 
} 
 
Class cmpctm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'ptype_key', "1" => 'label'); 
} 
 
Class cmpcsm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'ptype_key', "2" => 'subfield', "3" => 'start_pos', "4" => 'length', "5" => 'label'); 
} 
 
Class cmpcvm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'value', "2" => 'ptype_subfield', "3" => 'label'); 
} 
 
Class cmrtm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'code', "1" => 'type_val', "2" => 'blvl_val'); 
} 
 
Class rlcd extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'last_delete_date'); 
} 
 
Class rhcrpb extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'copy_count', "2" => 'hold_count', "3" => 'hold_copy_ratio'); 
} 
 
Class rhcrpbap extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'pickup_lib', "2" => 'holds_at_pickup_library', "3" => 'copy_count_at_pickup_library', "4" => 'holds_everywhere', "5" => 'copy_count_everywhere', "6" => 'pickup_library_ratio', "7" => 'everywhere_ratio'); 
} 
 
Class rlc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'last_circ_or_create', "2" => 'last_circ'); 
} 
 
Class rccc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'circ_lib', "2" => 'circ_lib_id', "3" => 'xact_start', "4" => 'circ_type', "5" => 'copy_id', "6" => 'circ_modifier', "7" => 'owning_lib_name', "8" => 'language', "9" => 'lit_form', "10" => 'item_form', "11" => 'item_type', "12" => 'shelving_location', "13" => 'profile_group', "14" => 'demographic_general_division', "15" => 'call_number', "16" => 'call_number_label', "17" => 'dewey', "18" => 'patron_id', "19" => 'patron_home_lib', "20" => 'patron_home_lib_shortname', "21" => 'patron_county', "22" => 'patron_city', "23" => 'patron_zip', "24" => 'stat_cat_1', "25" => 'stat_cat_2', "26" => 'dewey_range_tens', "27" => 'dewey_range_hundreds', "28" => 'dewey_block_tens', "29" => 'dewey_block_hundreds', "30" => 'stat_cat_1_value', "31" => 'stat_cat_2_value'); 
} 
 
Class rsce1 extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'value'); 
} 
 
Class rsce2 extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'value'); 
} 
 
Class rccbs extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'billing_location_shortname', "2" => 'billing_location_name', "3" => 'billing_location', "4" => 'usr_home_ou_shortname', "5" => 'usr_home_ou_name', "6" => 'usr_home_ou', "7" => 'barcode', "8" => 'usr', "9" => 'xact_start', "10" => 'xact_finish', "11" => 'xact_type', "12" => 'total_paid', "13" => 'total_owed', "14" => 'last_payment_ts', "15" => 'last_payment_note', "16" => 'last_payment_type', "17" => 'last_billing_ts', "18" => 'last_billing_note', "19" => 'last_billing_type', "20" => 'demographic_general_division', "21" => 'patron_county', "22" => 'patron_city', "23" => 'patron_zip', "24" => 'balance_owed', "25" => 'profile_group'); 
} 
 
Class acrlid extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'ordering_agency', "1" => 'purchase_order', "2" => 'lineitem', "3" => 'lineitem_detail', "4" => 'claim_policy_action'); 
} 
 
Class acqlisum extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'lineitem', "1" => 'item_count', "2" => 'recv_count', "3" => 'cancel_count', "4" => 'invoice_count', "5" => 'claim_count', "6" => 'estimated_amount', "7" => 'encumbrance_amount', "8" => 'paid_amount'); 
} 
 
Class iatc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'copy_status', "1" => 'dest', "2" => 'dest_recv_time', "3" => 'id', "4" => 'persistant_transfer', "5" => 'prev_hop', "6" => 'source', "7" => 'source_send_time', "8" => 'target_copy', "9" => 'hold_transit_copy'); 
} 
 
Class circbyyr extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'copy', "1" => 'count', "2" => 'year', "3" => 'is_renewal'); 
} 
 
Class rodcirc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'checkin_lib', "1" => 'checkin_staff', "2" => 'checkin_time', "3" => 'circ_lib', "4" => 'circ_staff', "5" => 'desk_renewal', "6" => 'due_date', "7" => 'duration', "8" => 'duration_rule', "9" => 'fine_interval', "10" => 'id', "11" => 'max_fine', "12" => 'max_fine_rule', "13" => 'opac_renewal', "14" => 'phone_renewal', "15" => 'recurring_fine', "16" => 'recurring_fine_rule', "17" => 'renewal_remaining', "18" => 'stop_fines', "19" => 'stop_fines_time', "20" => 'target_copy', "21" => 'usr', "22" => 'xact_finish', "23" => 'xact_start', "24" => 'billings', "25" => 'payments', "26" => 'billable_transaction', "27" => 'circ_type', "28" => 'billing_total', "29" => 'payment_total'); 
} 
 
Class rocit extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'title', "1" => 'author', "2" => 'pubdate', "3" => 'id', "4" => 'price', "5" => 'barcode', "6" => 'call_number_label', "7" => 'dewey_block_tens', "8" => 'dewey_block_hundreds', "9" => 'use_count', "10" => 'circ_modifier', "11" => 'shelving_location', "12" => 'stat_cat_1', "13" => 'stat_cat_2', "14" => 'stat_cat_1_value', "15" => 'stat_cat_2_value', "16" => 'edit_date', "17" => 'create_date', "18" => 'owning_lib_name', "19" => 'circ_lib_name', "20" => 'owning_lib', "21" => 'circ_lib', "22" => 'creator', "23" => 'age_protect', "24" => 'opac_visible', "25" => 'ref', "26" => 'deposit_amount', "27" => 'deleted', "28" => 'tcn_value', "29" => 'status', "30" => 'stop_fines', "31" => 'due_date', "32" => 'patron_barcode', "33" => 'patron_name'); 
} 
 
Class rmocbbol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owning_lib', "2" => 'billing_type', "3" => 'billed'); 
} 
 
Class rmobbol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'owning_lib', "1" => 'billing_types', "2" => 'balance'); 
} 
 
Class rmocbbcol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'circ_lib', "2" => 'owning_lib', "3" => 'billing_type', "4" => 'billed'); 
} 
 
Class rmobbcol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'circ_lib', "1" => 'owning_lib', "2" => 'billing_types', "3" => 'balance'); 
} 
 
Class rmocbbhol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'home_ou', "2" => 'owning_lib', "3" => 'billing_type', "4" => 'billed'); 
} 
 
Class rmobbhol extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'home_ou', "1" => 'owning_lib', "2" => 'billing_types', "3" => 'balance'); 
} 
 
Class acqft extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'owner', "2" => 'name', "3" => 'map_entries'); 
} 
 
Class acqftm extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'fund', "2" => 'tag'); 
} 
 
Class acqmapinv extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'purchase_order', "1" => 'lineitem', "2" => 'invoice', "3" => 'po_item', "4" => 'picklist'); 
} 
 
Class cbc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'active', "2" => 'org_unit', "3" => 'prefix', "4" => 'suffix', "5" => 'length', "6" => 'padding', "7" => 'padding_end', "8" => 'asset', "9" => 'actor'); 
} 
 
Class coustl extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'date_applied', "2" => 'org', "3" => 'original_value', "4" => 'new_value', "5" => 'field_name'); 
} 
 
Class aaactsc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'xact', "2" => 'stat_cat', "3" => 'value'); 
} 
 
Class aaasc extends 
    Fieldmapper_Class{
protected $_properties = array("0" => 'id', "1" => 'xact', "2" => 'stat_cat', "3" => 'value'); 
} 
 
?>