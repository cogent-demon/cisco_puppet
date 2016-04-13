<?php
$cisco_bgp_commands = array(
'ensure' => array ('ensure', array('absent', 'present', )),
'asn' => array ('asn', array('<string>', '<integer>', )),
'vrf' => array ('vrf', array('present', 'default', '<string>', )),
'route distinguisher' => array ('route_distinguisher', array('auto', 'default', '<string>', )),
'router id' => array ('router_id', array('default', '<string>', )),
'cluster id' => array ('cluster_id', array('default', '<string>', )),
'confederation id' => array ('confederation_id', array('default', '<string>', )),
'confederation peers' => array ('confederation_peers', array('default', '<string>', )),
'disable policy batching' => array ('disable_policy_batching', array('true', 'false', 'default', )),
'disable policy batching ip' => array ('disable_policy_batching_ipv4', array('default', '<string>', )),
'disable policy batching ipv6' => array ('disable_policy_batching_ipv6', array('default', '<string>', )),
'enforce first as' => array ('enforce_first_as', array('true', 'false', 'default', )),
'event history cli' => array ('event_history_cli', array('sizemedium', 'false', 'sizedisable', 'true', 'sizesmall', 'default', 'sizelarge', )),
'event history detail' => array ('event_history_detail', array('sizemedium', 'false', 'sizedisable', 'true', 'sizesmall', 'default', 'sizelarge', )),
'event history events' => array ('event_history_events', array('sizemedium', 'false', 'sizedisable', 'true', 'sizesmall', 'default', 'sizelarge', )),
'event history periodic' => array ('event_history_periodic', array('sizemedium', 'false', 'sizedisable', 'true', 'sizesmall', 'default', 'sizelarge', )),
'fast external fallover' => array ('fast_external_fallover', array('true', 'false', 'default', )),
'flush routes' => array ('flush_routes', array('true', 'false', 'default', )),
'isolate' => array ('isolate', array('true', 'false', 'default', )),
'maxas limit' => array ('maxas_limit', array('default', '<integer>', )),
'neighbor down fib accelerate' => array ('neighbor_down_fib_accelerate', array('true', 'false', 'default', )),
'shutdown' => array ('shutdown', array('true', 'false', 'default', )),
'supress fib pending' => array ('supress_fib_pending', array('true', 'false', 'default', )),
'log neighbor changes' => array ('log_neighbor_changes', array('true', 'false', 'default', )),
'bestpath always compare med' => array ('bestpath_always_compare_med', array('true', 'false', 'default', )),
'bestpath aspath multipath relax' => array ('bestpath_aspath_multipath_relax', array('true', 'false', 'default', )),
'bestpath compare routerid' => array ('bestpath_compare_routerid', array('true', 'false', 'default', )),
'bestpath cost community ignore' => array ('bestpath_cost_community_ignore', array('true', 'false', 'default', )),
'bestpath med confed' => array ('bestpath_med_confed', array('true', 'false', 'default', )),
'bestpath med missing as worst' => array ('bestpath_med_missing_as_worst', array('true', 'false', 'default', )),
'bestpath med non deterministic' => array ('bestpath_med_non_deterministic', array('true', 'false', 'default', )),
'timer bestpath limit' => array ('timer_bestpath_limit', array('default', '<integer>', )),
'timer bestpath limit always' => array ('timer_bestpath_limit_always', array('true', 'false', 'default', )),
'graceful restart' => array ('graceful_restart', array('true', 'false', 'default', )),
'graceful restart helper' => array ('graceful_restart_helper', array('true', 'false', 'default', )),
'graceful restart timers restart' => array ('graceful_restart_timers_restart', array('default', '<integer>', )),
'graceful restart timers stalepath time' => array ('graceful_restart_timers_stalepath_time', array('default', '<integer>', )),
'timer bgp keepalive' => array ('timer_bgp_keepalive', array('default', '<integer>', )),
'timer bgp hold' => array ('timer_bgp_hold', array('default', '<integer>', )),
);
?>