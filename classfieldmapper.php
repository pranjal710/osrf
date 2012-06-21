<?php 

abstract class fieldmapper_class{
private $values = array();

function __set($field, $value) 
{
$this->values[$field] = $value;
}

function __get($field) 
{
if (array_key_exists($field, $this->$values)) {
            return $this->$values[$field];
        }
else
return NULL;
        
}

}


/*-----------------------------------------------------------------------------------------------------------------*/


Class mups extends fieldmapper_class{
private $properties = array("usr", "forgive_payment", "work_payment", "credit_payment", "goods_payment"); 
} 
 
Class mwps extends fieldmapper_class{
private $properties = array("workstation", "cash_payment", "check_payment", "credit_card_payment"); 
} 
 
Class brn extends fieldmapper_class{
private $properties = array("id", "children", "owner_doc", "intra_doc_id", "parent_node", "node_type", "namespace_uri", "name", "value"); 
} 
 
Class mvr extends fieldmapper_class{
private $properties = array("title", "author", "doc_id", "doc_type", "pubdate", "isbn", "publisher", "tcn", "subject", "types_of_resource", "call_numbers", "edition", "online_loc", "synopsis", "physical_description", "toc", "copy_count", "series", "serials", "foreign_copy_maps"); 
} 
 
Class ex extends fieldmapper_class{
private $properties = array("err_msg", "type"); 
} 
 
Class perm_ex extends fieldmapper_class{
private $properties = array("err_msg", "type"); 
} 
 
Class amtr extends fieldmapper_class{
private $properties = array("matchpoint", "success", "fail_part"); 
} 
 
Class accs extends fieldmapper_class{
private $properties = array("num_circs", "start_time", "checkout_workstation", "last_renewal_time", "last_stop_fines", "last_stop_fines_time", "last_renewal_workstation", "last_checkin_workstation", "last_checkin_time", "last_checkin_scan_time"); 
} 
 
Class rhr extends fieldmapper_class{
private $properties = array("public_name", "target_url", "target_coverage", "target_embargo"); 
} 
 
Class vmp extends fieldmapper_class{
private $properties = array("id", "owner", "name", "add_spec", "replace_spec", "strip_spec", "preserve_spec"); 
} 
 
Class vibtf extends fieldmapper_class{
private $properties = array("id", "owner", "field"); 
} 
 
Class vii extends fieldmapper_class{
private $properties = array("id", "record", "definition", "owning_lib", "circ_lib", "call_number", "copy_number", "status", "location", "circulate", "deposit", "deposit_amount", "ref", "holdable", "price", "barcode", "circ_modifier", "circ_as_type", "alert_message", "pub_note", "priv_note", "opac_visible"); 
} 
 
Class viiad extends fieldmapper_class{
private $properties = array("id", "owner", "name", "tag", "keep", "owning_lib", "circ_lib", "call_number", "status", "location", "circulate", "deposit", "deposit_amount", "ref", "holdable", "price", "barcode", "circ_modifier", "circ_as_type", "alert_message", "pub_note", "priv_note", "opac_visible", "copy_number"); 
} 
 
Class vbq extends fieldmapper_class{
private $properties = array("id", "owner", "name", "complete", "queue_type", "item_attr_def"); 
} 
 
Class vqbr extends fieldmapper_class{
private $properties = array("id", "create_time", "import_time", "marc", "queue", "bib_source", "imported_as", "purpose", "attributes", "matches"); 
} 
 
Class vqbrad extends fieldmapper_class{
private $properties = array("id", "code", "description", "xpath", "remove", "ident"); 
} 
 
Class vqbra extends fieldmapper_class{
private $properties = array("id", "record", "field", "attr_value"); 
} 
 
Class vbm extends fieldmapper_class{
private $properties = array("id", "queued_record", "matched_attr", "eg_record", "field_type"); 
} 
 
Class vaq extends fieldmapper_class{
private $properties = array("id", "owner", "name", "complete", "queue_type"); 
} 
 
Class vqar extends fieldmapper_class{
private $properties = array("id", "create_time", "import_time", "marc", "queue", "imported_as", "purpose", "attributes", "matches"); 
} 
 
Class vqarad extends fieldmapper_class{
private $properties = array("id", "code", "description", "xpath", "remove", "ident"); 
} 
 
Class vqara extends fieldmapper_class{
private $properties = array("id", "record", "field", "attr_value"); 
} 
 
Class vam extends fieldmapper_class{
private $properties = array("id", "queued_record", "matched_attr", "eg_record"); 
} 
 
Class auoi extends fieldmapper_class{
private $properties = array("id", "opt_in_ws", "staff", "usr", "org_unit", "opt_in_ts"); 
} 
 
Class cgf extends fieldmapper_class{
private $properties = array("name", "label", "value", "enabled"); 
} 
 
Class cin extends fieldmapper_class{
private $properties = array("id", "name", "description", "func", "param_count"); 
} 
 
Class cmfinm extends fieldmapper_class{
private $properties = array("id", "field", "norm", "params", "pos"); 
} 
 
Class crad extends fieldmapper_class{
private $properties = array("name", "label", "description", "filter", "sorter", "tag", "sf_list", "joiner", "xpath", "format", "start_pos", "string_len", "fixed_field", "phys_char_sf", "normalizers"); 
} 
 
Class mra extends fieldmapper_class{
private $properties = array("id", "attrs"); 
} 
 
Class crainm extends fieldmapper_class{
private $properties = array("id", "attr", "norm", "params", "pos"); 
} 
 
Class ccvm extends fieldmapper_class{
private $properties = array("id", "ctype", "code", "value", "description"); 
} 
 
Class cracct extends fieldmapper_class{
private $properties = array("id", "label", "host", "username", "password", "account", "path", "owner", "last_activity"); 
} 
 
Class czs extends fieldmapper_class{
private $properties = array("name", "label", "host", "port", "db", "record_format", "transmission_format", "auth", "attrs"); 
} 
 
Class cza extends fieldmapper_class{
private $properties = array("id", "source", "name", "label", "code", "format", "truncation"); 
} 
 
Class ateo extends fieldmapper_class{
private $properties = array("id", "create_time", "data", "is_error", "events", "error_events"); 
} 
 
Class ath extends fieldmapper_class{
private $properties = array("key", "core_type", "description", "passive"); 
} 
 
Class atcol extends fieldmapper_class{
private $properties = array("module", "description"); 
} 
 
Class atval extends fieldmapper_class{
private $properties = array("module", "description"); 
} 
 
Class atreact extends fieldmapper_class{
private $properties = array("module", "description"); 
} 
 
Class atclean extends fieldmapper_class{
private $properties = array("module", "description"); 
} 
 
Class atenv extends fieldmapper_class{
private $properties = array("id", "event_def", "path", "collector", "label"); 
} 
 
Class atevdef extends fieldmapper_class{
private $properties = array("id", "active", "owner", "hook", "validator", "reactor", "cleanup_success", "cleanup_failure", "delay", "max_delay", "delay_field", "group_field", "template", "name", "granularity", "usr_field", "opt_in_setting", "env", "params"); 
} 
 
Class atev extends fieldmapper_class{
private $properties = array("id", "target", "event_def", "add_time", "run_time", "start_time", "update_time", "complete_time", "state", "user_data", "template_output", "error_output", "async_output", "update_process"); 
} 
 
Class atevparam extends fieldmapper_class{
private $properties = array("id", "event_def", "param", "value"); 
} 
 
Class aws extends fieldmapper_class{
private $properties = array("id", "name", "owning_lib", "circulations"); 
} 
 
Class ccm extends fieldmapper_class{
private $properties = array("code", "name", "description", "sip2_media_type", "magnetic_media", "avg_wait_time"); 
} 
 
Class aiit extends fieldmapper_class{
private $properties = array("code", "name", "prorate"); 
} 
 
Class acqim extends fieldmapper_class{
private $properties = array("code", "name"); 
} 
 
Class ccpbt extends fieldmapper_class{
private $properties = array("code", "label"); 
} 
 
Class ccnbt extends fieldmapper_class{
private $properties = array("code", "label"); 
} 
 
Class bpt extends fieldmapper_class{
private $properties = array("id", "name"); 
} 
 
Class bpbcm extends fieldmapper_class{
private $properties = array("id", "peer_type", "peer_record", "target_copy"); 
} 
 
Class cbrebt extends fieldmapper_class{
private $properties = array("code", "label"); 
} 
 
Class cubt extends fieldmapper_class{
private $properties = array("code", "label"); 
} 
 
Class cvrfm extends fieldmapper_class{
private $properties = array("code", "value"); 
} 
 
Class chmw extends fieldmapper_class{
private $properties = array("id", "name", "user_home_ou", "request_ou", "pickup_ou", "item_owning_ou", "item_circ_ou", "usr_grp", "requestor_grp", "circ_modifier", "marc_type", "marc_form", "marc_bib_level", "marc_vr_format", "juvenile_flag", "ref_flag"); 
} 
 
Class ccmw extends fieldmapper_class{
private $properties = array("id", "name", "is_renewal", "org_unit", "copy_circ_lib", "copy_owning_lib", "user_home_ou", "grp", "circ_modifier", "marc_type", "marc_form", "marc_bib_level", "marc_vr_format", "ref_flag", "juvenile_flag", "usr_age_lower_bound", "usr_age_upper_bound"); 
} 
 
Class cwa extends fieldmapper_class{
private $properties = array("id", "active", "org_unit", "circ_weights", "hold_weights"); 
} 
 
Class chmm extends fieldmapper_class{
private $properties = array("id", "active", "strict_ou_match", "user_home_ou", "request_ou", "pickup_ou", "item_owning_ou", "item_circ_ou", "usr_grp", "requestor_grp", "circ_modifier", "marc_type", "marc_form", "marc_bib_level", "marc_vr_format", "ref_flag", "holdable", "distance_is_from_owner", "transit_range", "max_holds", "include_frozen_holds", "age_hold_protect_rule"); 
} 
 
Class ccmm extends fieldmapper_class{
private $properties = array("id", "is_renewal", "active", "org_unit", "copy_circ_lib", "copy_owning_lib", "user_home_ou", "grp", "circ_modifier", "marc_type", "marc_form", "marc_bib_level", "marc_vr_format", "ref_flag", "juvenile_flag", "usr_age_lower_bound", "usr_age_upper_bound", "circulate", "duration_rule", "recurring_fine_rule", "max_fine_rule", "hard_due_date", "renewals", "grace_period", "script_test", "total_copy_hold_ratio", "available_copy_hold_ratio"); 
} 
 
Class ccmcmt extends fieldmapper_class{
private $properties = array("id", "matchpoint", "items_out"); 
} 
 
Class ccmcmtm extends fieldmapper_class{
private $properties = array("id", "circ_mod_test", "circ_mod"); 
} 
 
Class cit extends fieldmapper_class{
private $properties = array("id", "name"); 
} 
 
Class asvq extends fieldmapper_class{
private $properties = array("answers", "responses", "id", "question", "survey"); 
} 
 
Class mbts extends fieldmapper_class{
private $properties = array("balance_owed", "id", "last_billing_note", "last_billing_ts", "last_billing_type", "last_payment_note", "last_payment_ts", "last_payment_type", "total_owed", "total_paid", "usr", "xact_finish", "xact_start", "xact_type"); 
} 
 
Class mbtslv extends fieldmapper_class{
private $properties = array("balance_owed", "id", "last_billing_note", "last_billing_ts", "last_billing_type", "last_payment_note", "last_payment_ts", "last_payment_type", "total_owed", "total_paid", "usr", "xact_finish", "xact_start", "xact_type", "billing_location"); 
} 
 
Class aun extends fieldmapper_class{
private $properties = array("create_date", "creator", "id", "pub", "title", "usr", "value"); 
} 
 
Class aupr extends fieldmapper_class{
private $properties = array("id", "uuid", "usr", "request_time", "has_been_reset"); 
} 
 
Class aus extends fieldmapper_class{
private $properties = array("id", "name", "usr", "value"); 
} 
 
Class mafe extends fieldmapper_class{
private $properties = array("field", "id", "source", "value"); 
} 
 
Class aihu extends fieldmapper_class{
private $properties = array("id", "item", "org_unit", "staff", "use_time"); 
} 
 
Class ancihu extends fieldmapper_class{
private $properties = array("id", "item_type", "org_unit", "staff", "use_time"); 
} 
 
Class atc extends fieldmapper_class{
private $properties = array("copy_status", "dest", "dest_recv_time", "id", "persistant_transfer", "prev_hop", "source", "prev_dest", "source_send_time", "target_copy", "hold_transit_copy"); 
} 
 
Class asvr extends fieldmapper_class{
private $properties = array("answer", "answer_date", "effective_date", "id", "question", "response_group_id", "survey", "usr"); 
} 
 
Class ccbi extends fieldmapper_class{
private $properties = array("bucket", "id", "target_copy", "create_time", "pos", "notes"); 
} 
 
Class ccbin extends fieldmapper_class{
private $properties = array("id", "item", "note"); 
} 
 
Class are extends fieldmapper_class{
private $properties = array("active", "create_date", "creator", "deleted", "edit_date", "editor", "id", "last_xact_id", "marc", "source", "owner", "fixed_fields", "notes", "bib_links"); 
} 
 
Class ard extends fieldmapper_class{
private $properties = array("char_encoding", "id", "record", "record_status"); 
} 
 
Class abl extends fieldmapper_class{
private $properties = array("id", "bib", "authority"); 
} 
 
Class clm extends fieldmapper_class{
private $properties = array("code", "value"); 
} 
 
Class mccp extends fieldmapper_class{
private $properties = array("accepting_usr", "amount", "amount_collected", "approval_code", "cash_drawer", "cc_first_name", "cc_last_name", "cc_number", "cc_order_number", "cc_type", "cc_processor", "expire_month", "expire_year", "id", "note", "payment_ts", "xact", "payment_type", "payment"); 
} 
 
Class cxt extends fieldmapper_class{
private $properties = array("name", "namespace_uri", "prefix", "xslt"); 
} 
 
Class cmsa extends fieldmapper_class{
private $properties = array("alias", "field_class", "field"); 
} 
 
Class cmc extends fieldmapper_class{
private $properties = array("name", "label", "fields"); 
} 
 
Class cmf extends fieldmapper_class{
private $properties = array("field_class", "id", "name", "label", "xpath", "weight", "format", "search_field", "facet_field", "facet_xpath"); 
} 
 
Class cbfp extends fieldmapper_class{
private $properties = array("id", "name", "xpath", "format", "first_word"); 
} 
 
Class cam extends fieldmapper_class{
private $properties = array("code", "description", "value"); 
} 
 
Class cifm extends fieldmapper_class{
private $properties = array("code", "value"); 
} 
 
Class acnc extends fieldmapper_class{
private $properties = array("id", "name", "normalizer", "field"); 
} 
 
Class acns extends fieldmapper_class{
private $properties = array("id", "label", "label_sortkey", "owning_lib"); 
} 
 
Class acnp extends fieldmapper_class{
private $properties = array("id", "label", "label_sortkey", "owning_lib"); 
} 
 
Class acn extends fieldmapper_class{
private $properties = array("copies", "create_date", "creator", "deleted", "edit_date", "editor", "id", "label", "owning_lib", "record", "notes", "uri_maps", "uris", "label_sortkey", "label_class", "prefix", "suffix"); 
} 
 
Class auri extends fieldmapper_class{
private $properties = array("id", "href", "label", "use_restriction", "active", "call_number_maps", "call_numbers"); 
} 
 
Class auricnm extends fieldmapper_class{
private $properties = array("id", "uri", "call_number"); 
} 
 
Class cst extends fieldmapper_class{
private $properties = array("id", "value"); 
} 
 
Class mous extends fieldmapper_class{
private $properties = array("balance_owed", "total_owed", "total_paid", "usr"); 
} 
 
Class mct extends fieldmapper_class{
private $properties = array("collector", "enter_time", "id", "location", "usr"); 
} 
 
Class bre extends fieldmapper_class{
private $properties = array("call_numbers", "fixed_fields", "active", "create_date", "creator", "deleted", "edit_date", "editor", "fingerprint", "id", "last_xact_id", "marc", "quality", "source", "tcn_source", "tcn_value", "owner", "share_depth", "metarecord", "language", "notes", "keyword_field_entries", "subject_field_entries", "title_field_entries", "identifier_field_entries", "author_field_entries", "series_field_entries", "full_record_entries", "simple_record", "authority_links", "subscriptions", "attrs"); 
} 
 
Class aouhoo extends fieldmapper_class{
private $properties = array("dow_0_close", "dow_0_open", "dow_1_close", "dow_1_open", "dow_2_close", "dow_2_open", "dow_3_close", "dow_3_open", "dow_4_close", "dow_4_open", "dow_5_close", "dow_5_open", "dow_6_close", "dow_6_open", "id", "org_unit"); 
} 
 
Class bmp extends fieldmapper_class{
private $properties = array("id", "record", "label", "label_sortkey"); 
} 
 
Class acpm extends fieldmapper_class{
private $properties = array("id", "target_copy", "part"); 
} 
 
Class aoucd extends fieldmapper_class{
private $properties = array("close_end", "close_start", "id", "org_unit", "reason"); 
} 
 
Class crcd extends fieldmapper_class{
private $properties = array("extended", "id", "max_renewals", "name", "normal", "shrt"); 
} 
 
Class chdd extends fieldmapper_class{
private $properties = array("id", "name", "forceto", "ceiling_date", "owner"); 
} 
 
Class chddv extends fieldmapper_class{
private $properties = array("id", "hard_due_date", "ceiling_date", "active_date"); 
} 
 
Class mobts extends fieldmapper_class{
private $properties = array("balance_owed", "id", "last_billing_note", "last_billing_ts", "last_billing_type", "last_payment_note", "last_payment_ts", "last_payment_type", "total_owed", "total_paid", "usr", "xact_finish", "xact_start", "xact_type", "xact", "grocery", "circulation", "billing_location"); 
} 
 
Class au extends fieldmapper_class{
private $properties = array("addresses", "cards", "checkouts", "hold_requests", "permissions", "settings", "standing_penalties", "stat_cat_entries", "survey_responses", "ws_ou", "wsid", "active", "alert_message", "barred", "billing_address", "card", "claims_returned_count", "claims_never_checked_out_count", "create_date", "credit_forward_balance", "day_phone", "dob", "email", "evening_phone", "expire_date", "family_name", "first_given_name", "home_ou", "id", "ident_type", "ident_type2", "ident_value", "ident_value2", "last_xact_id", "mailing_address", "master_account", "net_access_level", "other_phone", "passwd", "photo_url", "prefix", "profile", "second_given_name", "standing", "suffix", "super_user", "usrgroup", "usrname", "alias", "juvenile", "groups", "deleted", "notes", "demographic", "billable_transactions", "money_summary", "open_billable_transactions_summary", "checkins", "performed_circulations", "fund_alloc_pcts", "reservations"); 
} 
 
Class csg extends fieldmapper_class{
private $properties = array("name", "label"); 
} 
 
Class cust extends fieldmapper_class{
private $properties = array("name", "label", "description", "datatype", "fm_class", "grp", "opac_visible"); 
} 
 
Class coust extends fieldmapper_class{
private $properties = array("name", "label", "description", "datatype", "view_perm", "update_perm", "fm_class", "grp"); 
} 
 
Class aous extends fieldmapper_class{
private $properties = array("id", "name", "org_unit", "value"); 
} 
 
Class acpn extends fieldmapper_class{
private $properties = array("create_date", "creator", "id", "owning_copy", "pub", "title", "value"); 
} 
 
Class mfr extends fieldmapper_class{
private $properties = array("id", "ind1", "ind2", "record", "subfield", "tag", "value"); 
} 
 
Class mmr extends fieldmapper_class{
private $properties = array("fingerprint", "id", "master_record", "mods", "source_records"); 
} 
 
Class cnal extends fieldmapper_class{
private $properties = array("id", "name"); 
} 
 
Class ppl extends fieldmapper_class{
private $properties = array("code", "description", "id"); 
} 
 
Class mmrsm extends fieldmapper_class{
private $properties = array("id", "metarecord", "source"); 
} 
 
Class mfae extends fieldmapper_class{
private $properties = array("id", "field", "source", "value"); 
} 
 
Class mfe extends fieldmapper_class{
private $properties = array("field", "id", "source", "value"); 
} 
 
Class mkfe extends fieldmapper_class{
private $properties = array("field", "id", "source", "value"); 
} 
 
Class mcp extends fieldmapper_class{
private $properties = array("accepting_usr", "amount", "amount_collected", "cash_drawer", "id", "note", "payment_ts", "xact", "payment_type", "payment"); 
} 
 
Class mfp extends fieldmapper_class{
private $properties = array("accepting_usr", "amount", "amount_collected", "id", "note", "payment_ts", "xact", "payment_type", "payment"); 
} 
 
Class mrd extends fieldmapper_class{
private $properties = array("audience", "bib_level", "cat_form", "char_encoding", "control_type", "enc_level", "id", "item_form", "item_lang", "item_type", "lit_form", "pub_status", "record", "type_mat", "vr_format", "date1", "date2"); 
} 
 
Class csp extends fieldmapper_class{
private $properties = array("id", "name", "label", "block_list", "org_depth"); 
} 
 
Class pgpt extends fieldmapper_class{
private $properties = array("id", "grp", "penalty", "threshold", "org_unit"); 
} 
 
Class ccs extends fieldmapper_class{
private $properties = array("holdable", "id", "name", "opac_visible"); 
} 
 
Class ausp extends fieldmapper_class{
private $properties = array("id", "set_date", "usr", "staff", "standing_penalty", "org_unit", "stop_date", "note"); 
} 
 
Class aua extends fieldmapper_class{
private $properties = array("address_type", "city", "country", "county", "id", "post_code", "state", "street1", "street2", "usr", "valid", "within_city_limits", "replaces", "pending"); 
} 
 
Class auss extends fieldmapper_class{
private $properties = array("id", "owner", "name", "create_date", "query_text", "query_type", "target"); 
} 
 
Class acnn extends fieldmapper_class{
private $properties = array("call_number", "create_date", "creator", "id", "pub", "title", "value"); 
} 
 
Class arn extends fieldmapper_class{
private $properties = array("create_date", "creator", "edit_date", "editor", "id", "record", "value"); 
} 
 
Class ocirccount extends fieldmapper_class{
private $properties = array("usr", "out", "overdue", "lost", "claims_returned", "long_overdue"); 
} 
 
Class ocirclist extends fieldmapper_class{
private $properties = array("usr", "out", "overdue", "lost", "claims_returned", "long_overdue"); 
} 
 
Class circ extends fieldmapper_class{
private $properties = array("checkin_lib", "checkin_staff", "checkin_time", "circ_lib", "circ_staff", "desk_renewal", "due_date", "duration", "duration_rule", "fine_interval", "id", "max_fine", "max_fine_rule", "opac_renewal", "phone_renewal", "recurring_fine", "recurring_fine_rule", "renewal_remaining", "grace_period", "stop_fines", "stop_fines_time", "target_copy", "usr", "xact_finish", "xact_start", "create_time", "workstation", "checkin_workstation", "checkin_scan_time", "parent_circ", "billings", "payments", "billable_transaction", "circ_type", "billing_total", "payment_total", "unrecovered"); 
} 
 
Class combcirc extends fieldmapper_class{
private $properties = array("checkin_lib", "checkin_staff", "checkin_time", "circ_lib", "circ_staff", "desk_renewal", "due_date", "duration", "duration_rule", "fine_interval", "id", "max_fine", "max_fine_rule", "opac_renewal", "phone_renewal", "recurring_fine", "recurring_fine_rule", "renewal_remaining", "grace_period", "stop_fines", "stop_fines_time", "target_copy", "usr_post_code", "xact_finish", "xact_start", "create_time", "billings", "payments", "billable_transaction", "circ_type", "billing_total", "payment_total", "usr_home_ou", "usr_profile", "usr_birth_year", "copy_call_number", "copy_location", "copy_owning_lib", "copy_circ_lib", "copy_bib_record"); 
} 
 
Class acirc extends fieldmapper_class{
private $properties = array("checkin_lib", "checkin_staff", "checkin_time", "circ_lib", "circ_staff", "desk_renewal", "due_date", "duration", "duration_rule", "fine_interval", "id", "max_fine", "max_fine_rule", "opac_renewal", "phone_renewal", "recurring_fine", "recurring_fine_rule", "renewal_remaining", "grace_period", "stop_fines", "stop_fines_time", "target_copy", "usr_post_code", "xact_finish", "xact_start", "create_time", "workstation", "checkin_workstation", "checkin_scan_time", "parent_circ", "billings", "payments", "billable_transaction", "circ_type", "billing_total", "payment_total", "usr_home_ou", "usr_profile", "usr_birth_year", "copy_call_number", "copy_location", "copy_owning_lib", "copy_circ_lib", "copy_bib_record"); 
} 
 
Class brt extends fieldmapper_class{
private $properties = array("id", "name", "fine_interval", "fine_amount", "max_fine", "owner", "catalog_item", "record", "transferable", "elbow_room", "resources", "resource_attrs", "tgt_rsrc_types"); 
} 
 
Class brsrc extends fieldmapper_class{
private $properties = array("id", "owner", "type", "overbook", "barcode", "deposit", "deposit_amount", "user_fee", "attr_maps", "tgt_rsrcs", "curr_rsrcs", "catalog_item"); 
} 
 
Class bra extends fieldmapper_class{
private $properties = array("id", "owner", "name", "resource_type", "required", "valid_values", "attr_maps"); 
} 
 
Class brav extends fieldmapper_class{
private $properties = array("id", "owner", "attr", "valid_value", "attr_maps", "attr_val_maps"); 
} 
 
Class bram extends fieldmapper_class{
private $properties = array("id", "resource", "resource_attr", "value"); 
} 
 
Class bresv extends fieldmapper_class{
private $properties = array("id", "usr", "xact_finish", "xact_start", "unrecovered", "billings", "payments", "billing_total", "payment_total", "summary", "request_time", "start_time", "end_time", "capture_time", "cancel_time", "pickup_time", "return_time", "booking_interval", "fine_interval", "fine_amount", "max_fine", "target_resource_type", "target_resource", "current_resource", "request_lib", "pickup_lib", "capture_staff", "attr_val_maps"); 
} 
 
Class bravm extends fieldmapper_class{
private $properties = array("id", "reservation", "attr_value"); 
} 
 
Class ccnbi extends fieldmapper_class{
private $properties = array("bucket", "id", "target_call_number", "create_time", "pos", "notes"); 
} 
 
Class ccnbin extends fieldmapper_class{
private $properties = array("id", "item", "note"); 
} 
 
Class cbreb extends fieldmapper_class{
private $properties = array("items", "btype", "id", "name", "owner", "pub", "create_time"); 
} 
 
Class cbrebn extends fieldmapper_class{
private $properties = array("id", "bucket", "note"); 
} 
 
Class ahcm extends fieldmapper_class{
private $properties = array("hold", "id", "target_copy"); 
} 
 
Class ahn extends fieldmapper_class{
private $properties = array("hold", "id", "method", "note", "notify_staff", "notify_time"); 
} 
 
Class acpl extends fieldmapper_class{
private $properties = array("circulate", "holdable", "hold_verify", "id", "name", "opac_visible", "owning_lib", "orders", "copies", "label_prefix", "label_suffix"); 
} 
 
Class acplo extends fieldmapper_class{
private $properties = array("id", "location", "org", "position"); 
} 
 
Class svr extends fieldmapper_class{
private $properties = array("sre_id", "location", "owning_lib", "basic_holdings", "basic_holdings_add", "supplement_holdings", "supplement_holdings_add", "index_holdings", "index_holdings_add", "online", "missing", "incomplete"); 
} 
 
Class sre extends fieldmapper_class{
private $properties = array("active", "record", "create_date", "creator", "deleted", "edit_date", "editor", "id", "last_xact_id", "marc", "source", "owning_lib"); 
} 
 
Class scap extends fieldmapper_class{
private $properties = array("id", "subscription", "type", "create_date", "start_date", "end_date", "active", "pattern_code", "enum_1", "enum_2", "enum_3", "enum_4", "enum_5", "enum_6", "chron_1", "chron_2", "chron_3", "chron_4", "chron_5"); 
} 
 
Class ssub extends fieldmapper_class{
private $properties = array("id", "owning_lib", "start_date", "end_date", "record_entry", "expected_date_offset", "distributions", "issuances", "scaps", "notes"); 
} 
 
Class ssubn extends fieldmapper_class{
private $properties = array("id", "subscription", "creator", "create_date", "pub", "title", "value"); 
} 
 
Class sdist extends fieldmapper_class{
private $properties = array("id", "record_entry", "summary_method", "subscription", "holding_lib", "label", "receive_call_number", "receive_unit_template", "bind_call_number", "bind_unit_template", "unit_label_prefix", "unit_label_suffix", "streams", "notes", "basic_summary", "supplement_summary", "index_summary"); 
} 
 
Class sdistn extends fieldmapper_class{
private $properties = array("id", "distribution", "creator", "create_date", "pub", "title", "value"); 
} 
 
Class sstr extends fieldmapper_class{
private $properties = array("id", "distribution", "routing_label", "items", "routing_list_users"); 
} 
 
Class srlu extends fieldmapper_class{
private $properties = array("id", "stream", "pos", "reader", "department", "note"); 
} 
 
Class siss extends fieldmapper_class{
private $properties = array("id", "creator", "editor", "create_date", "edit_date", "subscription", "caption_and_pattern", "label", "date_published", "holding_code", "holding_type", "holding_link_id", "items"); 
} 
 
Class sunit extends fieldmapper_class{
private $properties = array("id", "age_protect", "alert_message", "barcode", "call_number", "circ_as_type", "circ_lib", "circ_modifier", "circulate", "copy_number", "create_date", "creator", "deleted", "dummy_isbn", "deposit", "deposit_amount", "dummy_author", "dummy_title", "edit_date", "editor", "fine_level", "holdable", "loan_duration", "location", "opac_visible", "price", "ref", "status", "status_changed_time", "mint_condition", "floating", "cost", "sort_key", "summary_contents", "detailed_contents", "notes", "stat_cat_entry_copy_maps", "circulations", "total_circ_count", "holds", "stat_cat_entries"); 
} 
 
Class sitem extends fieldmapper_class{
private $properties = array("id", "creator", "editor", "create_date", "edit_date", "issuance", "stream", "unit", "uri", "date_expected", "date_received", "status", "notes", "shadowed"); 
} 
 
Class sin extends fieldmapper_class{
private $properties = array("id", "item", "creator", "create_date", "pub", "title", "value"); 
} 
 
Class sbsum extends fieldmapper_class{
private $properties = array("id", "distribution", "generated_coverage", "textual_holdings", "show_generated"); 
} 
 
Class sssum extends fieldmapper_class{
private $properties = array("id", "distribution", "generated_coverage", "textual_holdings", "show_generated"); 
} 
 
Class sisum extends fieldmapper_class{
private $properties = array("id", "distribution", "generated_coverage", "textual_holdings", "show_generated"); 
} 
 
Class ascecm extends fieldmapper_class{
private $properties = array("id", "owning_copy", "stat_cat", "stat_cat_entry"); 
} 
 
Class citm extends fieldmapper_class{
private $properties = array("code", "value"); 
} 
 
Class cblvl extends fieldmapper_class{
private $properties = array("code", "value"); 
} 
 
Class sra extends fieldmapper_class{
private $properties = array("id", "active", "field", "bump_type", "multiplier"); 
} 
 
Class lasso extends fieldmapper_class{
private $properties = array("id", "name"); 
} 
 
Class lmap extends fieldmapper_class{
private $properties = array("id", "lasso", "org_unit"); 
} 
 
Class aoup extends fieldmapper_class{
private $properties = array("id", "from_org", "to_org", "prox"); 
} 
 
Class ssr extends fieldmapper_class{
private $properties = array("id", "rel", "record", "total", "checked", "visible", "deleted", "excluded"); 
} 
 
Class asv extends fieldmapper_class{
private $properties = array("questions", "responses", "description", "end_date", "id", "name", "opac", "owner", "poll", "required", "start_date", "usr_summary"); 
} 
 
Class aoa extends fieldmapper_class{
private $properties = array("address_type", "city", "country", "county", "id", "org_unit", "post_code", "state", "street1", "street2", "valid", "san"); 
} 
 
Class ahr extends fieldmapper_class{
private $properties = array("status", "transit", "capture_time", "current_copy", "email_notify", "expire_time", "fulfillment_lib", "fulfillment_staff", "fulfillment_time", "hold_type", "holdable_formats", "id", "phone_notify", "pickup_lib", "prev_check_time", "request_lib", "request_time", "requestor", "selection_depth", "selection_ou", "target", "usr", "cancel_time", "notify_time", "notify_count", "notifications", "bib_rec", "eligible_copies", "frozen", "thaw_date", "shelf_time", "cancel_cause", "cancel_note", "cut_in_line", "mint_condition", "shelf_expire_time", "notes"); 
} 
 
Class ahrn extends fieldmapper_class{
private $properties = array("id", "hold", "title", "body", "slip", "pub", "staff"); 
} 
 
Class aou extends fieldmapper_class{
private $properties = array("children", "billing_address", "holds_address", "id", "ill_address", "mailing_address", "name", "ou_type", "parent_ou", "shortname", "email", "phone", "opac_visible", "fiscal_calendar", "users", "closed_dates", "circulations", "settings", "addresses", "checkins", "workstations", "fund_alloc_pcts", "copy_location_orders", "atc_prev_dests", "resv_requests", "resv_pickups", "rsrc_types", "resources", "rsrc_attrs", "attr_vals", "hours_of_operation"); 
} 
 
Class ccnb extends fieldmapper_class{
private $properties = array("items", "btype", "id", "name", "owner", "pub", "create_time"); 
} 
 
Class ccnbn extends fieldmapper_class{
private $properties = array("id", "bucket", "note"); 
} 
 
Class asc extends fieldmapper_class{
private $properties = array("entries", "id", "name", "opac_visible", "owner", "required"); 
} 
 
Class ac extends fieldmapper_class{
private $properties = array("active", "barcode", "id", "usr"); 
} 
 
Class actsc extends fieldmapper_class{
private $properties = array("entries", "id", "name", "opac_visible", "owner", "usr_summary"); 
} 
 
Class msefe extends fieldmapper_class{
private $properties = array("field", "id", "source", "value"); 
} 
 
Class cub extends fieldmapper_class{
private $properties = array("items", "btype", "id", "name", "owner", "pub", "create_time"); 
} 
 
Class cubn extends fieldmapper_class{
private $properties = array("id", "bucket", "note"); 
} 
 
Class mcrp extends fieldmapper_class{
private $properties = array("accepting_usr", "amount", "amount_collected", "id", "note", "payment_ts", "xact", "payment_type", "payment"); 
} 
 
Class afr extends fieldmapper_class{
private $properties = array("id", "ind1", "ind2", "record", "subfield", "tag", "value"); 
} 
 
Class cnct extends fieldmapper_class{
private $properties = array("circ_duration", "id", "in_house", "name", "owning_lib"); 
} 
 
Class aout extends fieldmapper_class{
private $properties = array("children", "can_have_users", "can_have_vols", "depth", "id", "name", "opac_label", "parent", "org_units"); 
} 
 
Class bren extends fieldmapper_class{
private $properties = array("create_date", "creator", "edit_date", "editor", "id", "pub", "record", "value"); 
} 
 
Class mucs extends fieldmapper_class{
private $properties = array("balance_owed", "total_owed", "total_paid", "usr"); 
} 
 
Class mg extends fieldmapper_class{
private $properties = array("billing_location", "id", "note", "usr", "xact_finish", "xact_start", "billings", "payments", "billable_transaction", "billing_total", "payment_total"); 
} 
 
Class cbs extends fieldmapper_class{
private $properties = array("id", "quality", "source", "transcendant"); 
} 
 
Class mbt extends fieldmapper_class{
private $properties = array("id", "usr", "xact_finish", "xact_start", "unrecovered", "grocery", "circulation", "billings", "payments", "billing_total", "payment_total", "summary"); 
} 
 
Class actsce extends fieldmapper_class{
private $properties = array("id", "owner", "stat_cat", "value"); 
} 
 
Class cubi extends fieldmapper_class{
private $properties = array("bucket", "id", "target_user", "create_time", "pos", "notes"); 
} 
 
Class cubin extends fieldmapper_class{
private $properties = array("id", "item", "note"); 
} 
 
Class mus extends fieldmapper_class{
private $properties = array("balance_owed", "total_owed", "total_paid", "usr"); 
} 
 
Class clfm extends fieldmapper_class{
private $properties = array("code", "description", "value"); 
} 
 
Class mwp extends fieldmapper_class{
private $properties = array("accepting_usr", "amount", "amount_collected", "id", "note", "payment_ts", "xact", "payment", "payment_type"); 
} 
 
Class mgp extends fieldmapper_class{
private $properties = array("accepting_usr", "amount", "amount_collected", "id", "note", "payment_ts", "xact", "payment", "payment_type"); 
} 
 
Class aoc extends fieldmapper_class{
private $properties = array("checkin_lib", "checkin_staff", "checkin_time", "circ_lib", "circ_staff", "desk_renewal", "due_date", "duration", "duration_rule", "fine_interval", "id", "max_fine", "max_fine_rule", "opac_renewal", "phone_renewal", "recurring_fine", "recurring_fine_rule", "renewal_remaining", "grace_period", "stop_fines", "stop_fines_time", "target_copy", "usr", "xact_finish", "xact_start", "circulation"); 
} 
 
Class msfe extends fieldmapper_class{
private $properties = array("field", "id", "source", "value"); 
} 
 
Class crrf extends fieldmapper_class{
private $properties = array("high", "id", "low", "name", "normal", "recurrence_interval", "grace_period"); 
} 
 
Class mckp extends fieldmapper_class{
private $properties = array("accepting_usr", "amount", "amount_collected", "cash_drawer", "check_number", "id", "note", "payment_ts", "xact", "payment", "payment_type"); 
} 
 
Class acp extends fieldmapper_class{
private $properties = array("age_protect", "alert_message", "barcode", "call_number", "circ_as_type", "circ_lib", "circ_modifier", "circulate", "copy_number", "create_date", "creator", "deleted", "dummy_isbn", "deposit", "deposit_amount", "dummy_author", "dummy_title", "edit_date", "editor", "fine_level", "holdable", "id", "loan_duration", "location", "opac_visible", "price", "ref", "status", "status_changed_time", "mint_condition", "floating", "cost", "notes", "stat_cat_entry_copy_maps", "circulations", "total_circ_count", "holds", "stat_cat_entries", "parts", "peer_record_maps", "peer_records"); 
} 
 
Class act extends fieldmapper_class{
private $properties = array("id", "owning_lib", "creator", "editor", "create_date", "edit_date", "name", "circ_lib", "status", "location", "loan_duration", "fine_level", "age_protect", "circulate", "deposit", "ref", "holdable", "deposit_amount", "price", "circ_modifier", "circ_as_type", "alert_message", "opac_visible", "floating", "mint_condition"); 
} 
 
Class crahp extends fieldmapper_class{
private $properties = array("age", "id", "name", "prox"); 
} 
 
Class crmf extends fieldmapper_class{
private $properties = array("amount", "id", "name", "is_percent"); 
} 
 
Class pgt extends fieldmapper_class{
private $properties = array("children", "description", "id", "name", "parent", "perm_interval", "application_perm", "usergroup", "hold_priority"); 
} 
 
Class asva extends fieldmapper_class{
private $properties = array("responses", "answer", "id", "question"); 
} 
 
Class ancc extends fieldmapper_class{
private $properties = array("circ_lib", "circ_time", "id", "item_type", "patron", "staff", "duedate"); 
} 
 
Class moucs extends fieldmapper_class{
private $properties = array("balance_owed", "total_owed", "total_paid", "usr"); 
} 
 
Class aufh extends fieldmapper_class{
private $properties = array("circ_lib", "current_copy", "fail_time", "hold", "id"); 
} 
 
Class mife extends fieldmapper_class{
private $properties = array("field", "id", "source", "value"); 
} 
 
Class mtfe extends fieldmapper_class{
private $properties = array("field", "id", "source", "value"); 
} 
 
Class actscecm extends fieldmapper_class{
private $properties = array("id", "stat_cat", "stat_cat_entry", "target_usr"); 
} 
 
Class pgpm extends fieldmapper_class{
private $properties = array("depth", "grantable", "grp", "id", "perm"); 
} 
 
Class ccb extends fieldmapper_class{
private $properties = array("items", "btype", "id", "name", "owner", "pub", "create_time"); 
} 
 
Class ccbn extends fieldmapper_class{
private $properties = array("id", "bucket", "note"); 
} 
 
Class puwoum extends fieldmapper_class{
private $properties = array("id", "usr", "work_ou"); 
} 
 
Class pupm extends fieldmapper_class{
private $properties = array("depth", "grantable", "id", "perm", "usr"); 
} 
 
Class puopm extends fieldmapper_class{
private $properties = array("object_id", "grantable", "id", "perm", "usr", "object_type"); 
} 
 
Class mp extends fieldmapper_class{
private $properties = array("amount", "id", "note", "payment_ts", "payment_type", "xact", "voided", "cash_payment", "credit_card_payment", "credit_payment", "check_payment", "work_payment", "forgive_payment", "goods_payment"); 
} 
 
Class mbp extends fieldmapper_class{
private $properties = array("amount", "id", "note", "payment_ts", "payment_type", "xact", "voided", "cash_payment", "credit_card_payment", "credit_payment", "check_payment", "work_payment", "forgive_payment", "goods_payment"); 
} 
 
Class mndp extends fieldmapper_class{
private $properties = array("amount", "id", "note", "payment_ts", "payment_type", "xact", "voided", "work_payment", "forgive_payment", "goods_payment", "credit_payment"); 
} 
 
Class mdp extends fieldmapper_class{
private $properties = array("amount", "id", "note", "payment_ts", "payment_type", "xact", "accepting_usr", "cash_drawer", "voided", "cash_payment", "credit_card_payment", "check_payment"); 
} 
 
Class cbrebi extends fieldmapper_class{
private $properties = array("bucket", "id", "target_biblio_record_entry", "create_time", "pos", "notes"); 
} 
 
Class cbrebin extends fieldmapper_class{
private $properties = array("id", "item", "note"); 
} 
 
Class asce extends fieldmapper_class{
private $properties = array("id", "owner", "stat_cat", "value"); 
} 
 
Class ahrcc extends fieldmapper_class{
private $properties = array("id", "label"); 
} 
 
Class artc extends fieldmapper_class{
private $properties = array("copy_status", "dest", "dest_recv_time", "reservation", "id", "persistant_transfer", "prev_hop", "source", "source_send_time", "target_copy", "transit_copy", "prev_dest"); 
} 
 
Class ahtc extends fieldmapper_class{
private $properties = array("copy_status", "dest", "dest_recv_time", "hold", "id", "persistant_transfer", "prev_hop", "source", "source_send_time", "target_copy", "transit_copy", "prev_dest"); 
} 
 
Class mb extends fieldmapper_class{
private $properties = array("amount", "billing_ts", "billing_type", "id", "note", "void_time", "voided", "voider", "xact", "btype"); 
} 
 
Class pugm extends fieldmapper_class{
private $properties = array("grp", "id", "usr"); 
} 
 
Class i18n extends fieldmapper_class{
private $properties = array("id", "fq_field", "identity_value", "translation", "string"); 
} 
 
Class fdoc extends fieldmapper_class{
private $properties = array("id", "fm_class", "field", "owner", "string"); 
} 
 
Class i18n_l extends fieldmapper_class{
private $properties = array("code", "marc_code", "name", "description"); 
} 
 
Class cbt extends fieldmapper_class{
private $properties = array("id", "name", "owner", "default_price"); 
} 
 
Class aurt extends fieldmapper_class{
private $properties = array("id", "label"); 
} 
 
Class aur extends fieldmapper_class{
private $properties = array("id", "usr", "request_type", "hold", "pickup_lib", "holdable_formats", "phone_notify", "email_notify", "lineitem", "eg_bib", "request_date", "need_before", "max_fee", "isxn", "title", "volume", "author", "article_title", "article_pages", "publisher", "location", "pubdate", "mentioned", "other_info", "cancel_reason"); 
} 
 
Class acqct extends fieldmapper_class{
private $properties = array("code", "label"); 
} 
 
Class acqexr extends fieldmapper_class{
private $properties = array("id", "from_currency", "to_currency", "ratio"); 
} 
 
Class acqpro extends fieldmapper_class{
private $properties = array("id", "name", "owner", "currency_type", "code", "holding_tag", "addresses", "san", "edi_default", "active", "prepayment_required", "url", "email", "phone", "fax_phone", "default_claim_policy"); 
} 
 
Class acqpron extends fieldmapper_class{
private $properties = array("id", "provider", "creator", "create_time", "edit_time", "editor", "value"); 
} 
 
Class acqipm extends fieldmapper_class{
private $properties = array("code", "name"); 
} 
 
Class acqinv extends fieldmapper_class{
private $properties = array("id", "receiver", "provider", "shipper", "recv_date", "recv_method", "inv_type", "inv_ident", "payment_auth", "payment_method", "note", "complete", "entries", "items"); 
} 
 
Class acqie extends fieldmapper_class{
private $properties = array("id", "invoice", "purchase_order", "lineitem", "inv_item_count", "phys_item_count", "note", "billed_per_item", "cost_billed", "actual_cost", "amount_paid"); 
} 
 
Class acqii extends fieldmapper_class{
private $properties = array("id", "invoice", "purchase_order", "fund_debit", "inv_item_type", "title", "author", "note", "cost_billed", "actual_cost", "fund", "amount_paid", "po_item", "target"); 
} 
 
Class acqpa extends fieldmapper_class{
private $properties = array("address_type", "city", "country", "county", "id", "provider", "post_code", "state", "street1", "street2", "valid", "fax_phone"); 
} 
 
Class acqpc extends fieldmapper_class{
private $properties = array("id", "provider", "name", "role", "email", "phone"); 
} 
 
Class acqpca extends fieldmapper_class{
private $properties = array("address_type", "city", "country", "county", "id", "post_code", "state", "street1", "street2", "contact", "valid", "fax_phone"); 
} 
 
Class acqftr extends fieldmapper_class{
private $properties = array("id", "src_fund", "src_amount", "dest_fund", "dest_amount", "transfer_time", "transfer_user", "note", "funding_source_credit"); 
} 
 
Class acqfc extends fieldmapper_class{
private $properties = array("id", "name", "years"); 
} 
 
Class acqfy extends fieldmapper_class{
private $properties = array("id", "calendar", "year", "year_begin", "year_end"); 
} 
 
Class acqfs extends fieldmapper_class{
private $properties = array("id", "name", "owner", "currency_type", "code", "summary", "allocations", "credits", "fund_alloc_pcts"); 
} 
 
Class acqfscred extends fieldmapper_class{
private $properties = array("id", "funding_source", "amount", "note", "deadline_date", "effective_date"); 
} 
 
Class acqofscred extends fieldmapper_class{
private $properties = array("id", "sort_priority", "sort_date", "funding_source", "amount", "note"); 
} 
 
Class acqfdeb extends fieldmapper_class{
private $properties = array("id", "fund", "origin_amount", "origin_currency_type", "amount", "encumbrance", "debit_type", "create_time"); 
} 
 
Class acqf extends fieldmapper_class{
private $properties = array("id", "org", "name", "year", "currency_type", "code", "rollover", "propagate", "active", "balance_warning_percent", "balance_stop_percent", "summary", "allocations", "debits", "tags"); 
} 
 
Class acqfat extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqfdt extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqfet extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqfst extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqfcb extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqafat extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqafet extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqafst extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqafsb extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqafcb extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqfsrcct extends fieldmapper_class{
private $properties = array("funding_source", "amount"); 
} 
 
Class acqfsrcat extends fieldmapper_class{
private $properties = array("funding_source", "amount"); 
} 
 
Class acqfsrcb extends fieldmapper_class{
private $properties = array("funding_source", "amount"); 
} 
 
Class acqfsb extends fieldmapper_class{
private $properties = array("fund", "amount"); 
} 
 
Class acqfa extends fieldmapper_class{
private $properties = array("id", "fund", "funding_source", "amount", "allocator", "note", "create_time"); 
} 
 
Class acqfap extends fieldmapper_class{
private $properties = array("id", "funding_source", "org", "fund_code", "percent", "allocator", "note", "create_time"); 
} 
 
Class acqpl extends fieldmapper_class{
private $properties = array("id", "owner", "org_unit", "name", "create_time", "edit_time", "entries", "entry_count", "creator", "editor"); 
} 
 
Class acqcr extends fieldmapper_class{
private $properties = array("id", "org_unit", "label", "description", "keep_debits"); 
} 
 
Class acqpo extends fieldmapper_class{
private $properties = array("id", "owner", "create_time", "edit_time", "provider", "state", "ordering_agency", "creator", "editor", "order_date", "name", "cancel_reason", "prepayment_required", "lineitems", "notes", "lineitem_count", "amount_encumbered", "amount_spent", "po_items"); 
} 
 
Class acqpoh extends fieldmapper_class{
private $properties = array("audit_id", "audit_time", "audit_action", "id", "owner", "creator", "editor", "ordering_agency", "create_time", "edit_time", "provider", "state", "order_date", "name", "cancel_reason", "prepayment_required"); 
} 
 
Class acqpon extends fieldmapper_class{
private $properties = array("id", "purchase_order", "creator", "create_time", "edit_time", "editor", "value", "vendor_public"); 
} 
 
Class acqpoi extends fieldmapper_class{
private $properties = array("id", "purchase_order", "fund_debit", "inv_item_type", "title", "author", "note", "estimated_cost", "fund", "target"); 
} 
 
Class jub extends fieldmapper_class{
private $properties = array("id", "selector", "picklist", "purchase_order", "provider", "create_time", "edit_time", "marc", "eg_bib_id", "source_label", "expected_recv_time", "state", "creator", "editor", "claim_policy", "cancel_reason", "estimated_unit_price", "item_count", "attributes", "lineitem_details", "lineitem_notes", "distribution_formulas", "invoice_entries", "order_summary"); 
} 
 
Class acqlih extends fieldmapper_class{
private $properties = array("audit_id", "audit_time", "audit_action", "id", "creator", "editor", "selector", "provider", "purchase_order", "picklist", "expected_recv_time", "create_time", "edit_time", "marc", "eg_bib_id", "source_label", "state", "claim_policy", "cancel_reason", "estimated_unit_price"); 
} 
 
Class acqliat extends fieldmapper_class{
private $properties = array("id", "code", "description", "owning_lib"); 
} 
 
Class acqlin extends fieldmapper_class{
private $properties = array("id", "lineitem", "creator", "create_time", "edit_time", "editor", "value", "alert_text", "vendor_public"); 
} 
 
Class acqlia extends fieldmapper_class{
private $properties = array("id", "lineitem", "attr_type", "attr_name", "attr_value", "definition"); 
} 
 
Class acqlid extends fieldmapper_class{
private $properties = array("id", "lineitem", "eg_copy_id", "barcode", "cn_label", "recv_time", "fund", "fund_debit", "owning_lib", "location", "circ_modifier", "note", "collection_code", "cancel_reason", "claims"); 
} 
 
Class acqliad extends fieldmapper_class{
private $properties = array("id", "code", "description", "ident"); 
} 
 
Class acqlimad extends fieldmapper_class{
private $properties = array("id", "code", "description", "xpath", "ident", "remove"); 
} 
 
Class acqligad extends fieldmapper_class{
private $properties = array("id", "code", "description", "xpath", "ident"); 
} 
 
Class acqliuad extends fieldmapper_class{
private $properties = array("id", "code", "description", "usr", "ident"); 
} 
 
Class acqlipad extends fieldmapper_class{
private $properties = array("id", "code", "description", "xpath", "provider", "ident", "remove"); 
} 
 
Class acqphsm extends fieldmapper_class{
private $properties = array("id", "provider", "name", "subfield"); 
} 
 
Class acqlilad extends fieldmapper_class{
private $properties = array("id", "code", "description", "ident"); 
} 
 
Class acqedi extends fieldmapper_class{
private $properties = array("id", "label", "host", "username", "password", "account", "path", "owner", "last_activity", "provider", "in_dir", "vendacct", "vendcode"); 
} 
 
Class acqedim extends fieldmapper_class{
private $properties = array("id", "account", "remote_file", "create_time", "translate_time", "process_time", "error_time", "status", "edi", "jedi", "error", "purchase_order", "message_type"); 
} 
 
Class rof extends fieldmapper_class{
private $properties = array("id", "parent", "owner", "create_time", "name", "shared", "share_with", "children", "outputs"); 
} 
 
Class rtf extends fieldmapper_class{
private $properties = array("id", "parent", "owner", "create_time", "name", "shared", "share_with", "children", "templates"); 
} 
 
Class rrf extends fieldmapper_class{
private $properties = array("id", "parent", "owner", "create_time", "name", "shared", "share_with", "children", "reports"); 
} 
 
Class rt extends fieldmapper_class{
private $properties = array("id", "owner", "create_time", "name", "data", "folder", "description", "reports"); 
} 
 
Class rr extends fieldmapper_class{
private $properties = array("id", "owner", "create_time", "template", "data", "folder", "recur", "recurrence", "name", "description", "runs"); 
} 
 
Class rs extends fieldmapper_class{
private $properties = array("id", "runner", "start_time", "complete_time", "run_time", "email", "excel_format", "csv_format", "html_format", "error_code", "error_text", "report", "folder", "chart_pie", "chart_bar", "chart_line"); 
} 
 
Class rmsr extends fieldmapper_class{
private $properties = array("id", "fingerprint", "quality", "tcn_source", "tcn_value", "title", "author", "publisher", "pubdate", "isbn", "issn", "biblio_record"); 
} 
 
Class rssr extends fieldmapper_class{
private $properties = array("id", "fingerprint", "quality", "tcn_source", "tcn_value", "title", "author", "publisher", "pubdate", "isbn", "issn", "biblio_record"); 
} 
 
Class rsr extends fieldmapper_class{
private $properties = array("id", "metarecord", "fingerprint", "quality", "tcn_source", "tcn_value", "title", "uniform_title", "author", "publisher", "pubdate", "series_title", "series_statement", "summary", "isbn", "issn", "topic_subject", "geographic_subject", "genre", "name_subject", "corporate_subject", "external_uri", "biblio_record"); 
} 
 
Class rud extends fieldmapper_class{
private $properties = array("id", "dob", "general_division"); 
} 
 
Class rcirct extends fieldmapper_class{
private $properties = array("id", "type"); 
} 
 
Class rhrr extends fieldmapper_class{
private $properties = array("id", "target", "hold_type", "bib_record"); 
} 
 
Class rxbt extends fieldmapper_class{
private $properties = array("xact", "unvoided", "voided", "total"); 
} 
 
Class rxpt extends fieldmapper_class{
private $properties = array("xact", "unvoided", "voided", "total"); 
} 
 
Class ergbhu extends fieldmapper_class{
private $properties = array("id", "holding_update", "update_type"); 
} 
 
Class erfcc extends fieldmapper_class{
private $properties = array("id", "circ_count"); 
} 
 
Class acqdf extends fieldmapper_class{
private $properties = array("id", "owner", "name", "skip_count", "entries", "use_count"); 
} 
 
Class acqdfe extends fieldmapper_class{
private $properties = array("id", "formula", "position", "item_count", "owning_lib", "location"); 
} 
 
Class acqdfa extends fieldmapper_class{
private $properties = array("id", "creator", "create_time", "formula", "lineitem"); 
} 
 
Class acqda extends fieldmapper_class{
private $properties = array("id", "fund_debit", "debit_amount", "funding_source_credit", "credit_amount"); 
} 
 
Class acqclt extends fieldmapper_class{
private $properties = array("id", "org_unit", "code", "description"); 
} 
 
Class acqclet extends fieldmapper_class{
private $properties = array("id", "org_unit", "code", "description", "library_initiated"); 
} 
 
Class acqcl extends fieldmapper_class{
private $properties = array("id", "type", "lineitem_detail"); 
} 
 
Class acqcle extends fieldmapper_class{
private $properties = array("id", "type", "claim", "event_date", "creator", "note"); 
} 
 
Class acqscl extends fieldmapper_class{
private $properties = array("id", "type", "item"); 
} 
 
Class acqscle extends fieldmapper_class{
private $properties = array("id", "type", "claim", "event_date", "creator", "note"); 
} 
 
Class acqclp extends fieldmapper_class{
private $properties = array("id", "org_unit", "name", "description"); 
} 
 
Class acqclpa extends fieldmapper_class{
private $properties = array("id", "claim_policy", "action_interval", "action"); 
} 
 
Class stgu extends fieldmapper_class{
private $properties = array("row_id", "row_date", "usrname", "profile", "email", "passwd", "ident_type", "first_given_name", "second_given_name", "family_name", "day_phone", "evening_phone", "home_ou", "dob", "complete"); 
} 
 
Class stgc extends fieldmapper_class{
private $properties = array("row_id", "row_date", "usrname", "barcode", "complete"); 
} 
 
Class stgma extends fieldmapper_class{
private $properties = array("row_id", "row_date", "usrname", "street1", "street2", "city", "state", "country", "post_code", "complete"); 
} 
 
Class stgba extends fieldmapper_class{
private $properties = array("row_id", "row_date", "usrname", "street1", "street2", "city", "state", "country", "post_code", "complete"); 
} 
 
Class stgsc extends fieldmapper_class{
private $properties = array("row_id", "row_date", "usrname", "statcat", "value", "complete"); 
} 
 
Class afs extends fieldmapper_class{
private $properties = array("id", "owner", "owning_lib", "status", "creation_time", "scheduled_time", "applied_time", "classname", "name", "stored_query", "pkey_value"); 
} 
 
Class afscv extends fieldmapper_class{
private $properties = array("id", "fieldset", "col", "val"); 
} 
 
Class aufhl extends fieldmapper_class{
private $properties = array("hold", "circ_lib", "count"); 
} 
 
Class aufhml extends fieldmapper_class{
private $properties = array("hold", "min"); 
} 
 
Class aufhil extends fieldmapper_class{
private $properties = array("hold", "circ_lib", "count"); 
} 
 
Class aufhmxl extends fieldmapper_class{
private $properties = array("hold", "max"); 
} 
 
Class aufhol extends fieldmapper_class{
private $properties = array("hold", "circ_lib", "count"); 
} 
 
Class qsq extends fieldmapper_class{
private $properties = array("id", "type", "use_all", "use_distinct", "from_clause", "where_clause", "having_clause", "limit_count", "offset_count"); 
} 
 
Class qseq extends fieldmapper_class{
private $properties = array("id", "parent_query", "seq_no", "child_query"); 
} 
 
Class qdt extends fieldmapper_class{
private $properties = array("id", "datatype_name", "is_numeric", "is_composite"); 
} 
 
Class qsf extends fieldmapper_class{
private $properties = array("id", "composite_type", "seq_no", "subfield_type"); 
} 
 
Class qfs extends fieldmapper_class{
private $properties = array("id", "function_name", "return_type", "is_aggregate"); 
} 
 
Class qfpd extends fieldmapper_class{
private $properties = array("id", "function_id", "seq_no", "datatype"); 
} 
 
Class qbv extends fieldmapper_class{
private $properties = array("name", "label", "type", "description", "default_value", "actual_value"); 
} 
 
Class qxp extends fieldmapper_class{
private $properties = array("id", "type", "parenthesize", "parent_expr", "seq_no", "literal", "table_alias", "column_name", "left_operand", "operator", "right_operand", "function_id", "subquery", "cast_type", "negate", "bind_variable"); 
} 
 
Class qcb extends fieldmapper_class{
private $properties = array("id", "parent_expr", "seq_no", "condition", "result"); 
} 
 
Class qfr extends fieldmapper_class{
private $properties = array("id", "type", "table_name", "class_name", "subquery", "function_call", "table_alias", "parent_relation", "seq_no", "join_type", "on_clause"); 
} 
 
Class qrc extends fieldmapper_class{
private $properties = array("id", "from_relation", "seq_no", "column_name", "column_type"); 
} 
 
Class qsi extends fieldmapper_class{
private $properties = array("id", "stored_query", "seq_no", "expression", "column_alias", "grouped_by"); 
} 
 
Class qobi extends fieldmapper_class{
private $properties = array("id", "stored_query", "seq_no", "expression"); 
} 
 
Class xbet extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "left_operand", "negate"); 
} 
 
Class xbind extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "bind_variable"); 
} 
 
Class xbool extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "literal", "negate"); 
} 
 
Class xcase extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "left_operand", "negate"); 
} 
 
Class xcast extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "left_operand", "cast_type", "negate"); 
} 
 
Class xcol extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "table_alias", "column_name", "negate"); 
} 
 
Class xex extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "subquery", "negate"); 
} 
 
Class xfunc extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "column_name", "function_id", "negate"); 
} 
 
Class xin extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "left_operand", "subquery", "negate"); 
} 
 
Class xisnull extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "left_operand", "negate"); 
} 
 
Class xnull extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "negate"); 
} 
 
Class xnum extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "literal"); 
} 
 
Class xop extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "left_operand", "operator", "right_operand", "negate"); 
} 
 
Class xser extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "operator", "negate"); 
} 
 
Class xstr extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "literal"); 
} 
 
Class xsubq extends fieldmapper_class{
private $properties = array("id", "parenthesize", "parent_expr", "seq_no", "subquery"); 
} 
 
Class bmpc extends fieldmapper_class{
private $properties = array("id", "ptype", "subfield", "value", "record"); 
} 
 
Class cmfpm extends fieldmapper_class{
private $properties = array("id", "fixed_field", "tag", "rec_type", "start_pos", "length", "default_val"); 
} 
 
Class cmpctm extends fieldmapper_class{
private $properties = array("ptype_key", "label"); 
} 
 
Class cmpcsm extends fieldmapper_class{
private $properties = array("id", "ptype_key", "subfield", "start_pos", "length", "label"); 
} 
 
Class cmpcvm extends fieldmapper_class{
private $properties = array("id", "value", "ptype_subfield", "label"); 
} 
 
Class cmrtm extends fieldmapper_class{
private $properties = array("code", "type_val", "blvl_val"); 
} 
 
Class rlcd extends fieldmapper_class{
private $properties = array("id", "last_delete_date"); 
} 
 
Class rhcrpb extends fieldmapper_class{
private $properties = array("id", "copy_count", "hold_count", "hold_copy_ratio"); 
} 
 
Class rccc extends fieldmapper_class{
private $properties = array("id", "circ_lib", "circ_lib_id", "xact_start", "circ_type", "copy_id", "circ_modifier", "owning_lib_name", "language", "lit_form", "item_form", "item_type", "shelving_location", "profile_group", "demographic_general_division", "call_number", "call_number_label", "dewey", "patron_id", "patron_home_lib", "patron_home_lib_shortname", "patron_county", "patron_city", "patron_zip", "stat_cat_1", "stat_cat_2", "dewey_range_tens", "dewey_range_hundreds", "dewey_block_tens", "dewey_block_hundreds", "stat_cat_1_value", "stat_cat_2_value"); 
} 
 
Class rsce1 extends fieldmapper_class{
private $properties = array("id", "owner", "value"); 
} 
 
Class rsce2 extends fieldmapper_class{
private $properties = array("id", "owner", "value"); 
} 
 
Class rccbs extends fieldmapper_class{
private $properties = array("id", "billing_location_shortname", "billing_location_name", "billing_location", "usr_home_ou_shortname", "usr_home_ou_name", "usr_home_ou", "barcode", "usr", "xact_start", "xact_finish", "xact_type", "total_paid", "total_owed", "last_payment_ts", "last_payment_note", "last_payment_type", "last_billing_ts", "last_billing_note", "last_billing_type", "demographic_general_division", "patron_county", "patron_city", "patron_zip", "balance_owed", "profile_group"); 
} 
 
Class acrlid extends fieldmapper_class{
private $properties = array("ordering_agency", "purchase_order", "lineitem", "lineitem_detail", "claim_policy_action"); 
} 
 
Class acqlisum extends fieldmapper_class{
private $properties = array("lineitem", "item_count", "recv_count", "cancel_count", "invoice_count", "claim_count", "estimated_amount", "encumbrance_amount", "paid_amount"); 
} 
 
Class iatc extends fieldmapper_class{
private $properties = array("copy_status", "dest", "dest_recv_time", "id", "persistant_transfer", "prev_hop", "source", "source_send_time", "target_copy", "hold_transit_copy"); 
} 
 
Class circbyyr extends fieldmapper_class{
private $properties = array("copy", "count", "year", "is_renewal"); 
} 
 
Class rodcirc extends fieldmapper_class{
private $properties = array("checkin_lib", "checkin_staff", "checkin_time", "circ_lib", "circ_staff", "desk_renewal", "due_date", "duration", "duration_rule", "fine_interval", "id", "max_fine", "max_fine_rule", "opac_renewal", "phone_renewal", "recurring_fine", "recurring_fine_rule", "renewal_remaining", "stop_fines", "stop_fines_time", "target_copy", "usr", "xact_finish", "xact_start", "billings", "payments", "billable_transaction", "circ_type", "billing_total", "payment_total"); 
} 
 
Class rocit extends fieldmapper_class{
private $properties = array("title", "author", "pubdate", "id", "price", "barcode", "call_number_label", "dewey_block_tens", "dewey_block_hundreds", "use_count", "circ_modifier", "shelving_location", "stat_cat_1", "stat_cat_2", "stat_cat_1_value", "stat_cat_2_value", "edit_date", "create_date", "owning_lib_name", "circ_lib_name", "owning_lib", "circ_lib", "creator", "age_protect", "opac_visible", "ref", "deposit_amount", "deleted", "tcn_value", "status", "stop_fines", "due_date", "patron_barcode", "patron_name"); 
} 
 
Class rmocbbol extends fieldmapper_class{
private $properties = array("id", "owning_lib", "billing_type", "billed"); 
} 
 
Class rmobbol extends fieldmapper_class{
private $properties = array("owning_lib", "billing_types", "balance"); 
} 
 
Class rmocbbcol extends fieldmapper_class{
private $properties = array("id", "circ_lib", "owning_lib", "billing_type", "billed"); 
} 
 
Class rmobbcol extends fieldmapper_class{
private $properties = array("circ_lib", "owning_lib", "billing_types", "balance"); 
} 
 
Class rmocbbhol extends fieldmapper_class{
private $properties = array("id", "home_ou", "owning_lib", "billing_type", "billed"); 
} 
 
Class rmobbhol extends fieldmapper_class{
private $properties = array("home_ou", "owning_lib", "billing_types", "balance"); 
} 
 
Class acqft extends fieldmapper_class{
private $properties = array("id", "owner", "name", "map_entries"); 
} 
 
Class acqftm extends fieldmapper_class{
private $properties = array("id", "fund", "tag"); 
} 
 
Class acqmapinv extends fieldmapper_class{
private $properties = array("purchase_order", "lineitem", "invoice", "po_item", "picklist"); 
} 
 
Class cbc extends fieldmapper_class{
private $properties = array("id", "active", "org_unit", "prefix", "suffix", "length", "padding", "padding_end", "asset", "actor"); 
} 
 
Class coustl extends fieldmapper_class{
private $properties = array("id", "date_applied", "org", "original_value", "new_value", "field_name"); 
} 
 
Class aaactsc extends fieldmapper_class{
private $properties = array("id", "xact", "stat_cat", "value"); 
} 
 
Class aaasc extends fieldmapper_class{
private $properties = array("id", "xact", "stat_cat", "value"); 
} 
 
?>
