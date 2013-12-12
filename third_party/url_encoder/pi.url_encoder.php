<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * URL Encoder Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Judd Lyon
 * @link		http://juddlyon.com
 */

$plugin_info = array(
	'pi_name'		=> 'URL Encoder',
	'pi_version'	=> '1.0',
	'pi_author'		=> 'Judd Lyon',
	'pi_author_url'	=> 'http://juddlyon.com',
	'pi_description'=> 'Encode URLs using urlencode or rawurlencode',
	'pi_usage'		=> Url_encoder::usage()
);


class Url_encoder {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();

		$tagdata = $this->EE->TMPL->tagdata;

		$method = $this->EE->TMPL->fetch_param('method');

		if ($method == 'rawurlencode')
		{
			$this->return_data = rawurlencode($tagdata);
		} else {
			$this->return_data = urlencode($tagdata);			
		}
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

{exp:url_encoder method='urlencode'}http://example.com?foo=bar{/exp:url_encoder}

{exp:url_encoder method='rawurlencode'}http://example.com?foo=bar{/exp:url_encoder}

If no method is provided, the plugin defaults to urlencode.
{exp:url_encoder}http://example.com?foo=bar{/exp:url_encoder}

<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.url_encoder.php */
/* Location: /system/expressionengine/third_party/url_encoder/pi.url_encoder.php */