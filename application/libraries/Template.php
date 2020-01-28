<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();

		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}

		function load($template = '', $view = '' , $menu = '', $assist = '', $aostime = '', $order = '', $view_data = array(), $return = FALSE)
		{
			$this->CI =& get_instance();
			$this->set('footer', $this->CI->load->view($view, $view_data, TRUE));

			if($menu==""){
			}else{
				$this->set('navbar', $this->CI->load->view($menu, $view_data, TRUE));
			}

			$this->set('assist', $this->CI->load->view($assist, $view_data, TRUE));

			$this->set('aostime', $this->CI->load->view($aostime, $view_data, TRUE));

			$this->set('order', $this->CI->load->view($order, $view_data, TRUE));

			return $this->CI->load->view($template, $this->template_data, $return);
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
