<?php defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database','nsmarty','session', 'user_agent', 'lib');
$autoload['helper'] = array('url', 'general_helper');
$autoload['drivers'] = array();
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('mbackend', 'siteinfo', 'warehouse', 'progresAtf', 'masterMaterialAtf', 'materialAtf', 'progresPmr', 'materialPmr');

/* End of file autoload.php */
/* Location: ./application/config/autoload.php */