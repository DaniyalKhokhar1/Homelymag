jQuery(document).ready(function($) {
	$.post(ajax_tptn_tracker.ajax_url, {
		action: 'tptn_tracker',
        top_ten_id: ajax_tptn_tracker.top_ten_id,
        top_ten_blog_id: ajax_tptn_tracker.top_ten_blog_id,
        activate_counter: ajax_tptn_tracker.activate_counter,
        top_ten_debug: ajax_tptn_tracker.top_ten_debug
	});
});
