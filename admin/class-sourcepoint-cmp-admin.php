<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://sourcepoint.com
 * @since      1.0.0
 *
 * @package    Sourcepoint_Cmp
 * @subpackage Sourcepoint_Cmp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sourcepoint_Cmp
 * @subpackage Sourcepoint_Cmp/admin
 * @author     Atanur Demirci <atanur@sourcepoint.com>
 */
class Sourcepoint_Cmp_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sourcepoint_Cmp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sourcepoint_Cmp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sourcepoint-cmp-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sourcepoint_Cmp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sourcepoint_Cmp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sourcepoint-cmp-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_menu_items(){
    	add_menu_page("Sourcepoint-CMP", "Sourcepoint-CMP",  'manage_options', 'sp-settings-handle', array($this, 'sp_settings'), 'dashicons-privacy' ,2  );
 
        add_action('admin_init', array( $this, 'registerAndBuildFields' ));

    }

    public function sp_settings() {
        require_once plugin_dir_path(__FILE__) . 'partials/sourcepoint-cmp-admin-display.php';
    }
 

    public function registerAndBuildFields(){

    	 add_settings_section(
        // ID used to identify this section and with which to register options
            'sourcepoint_general_section',
            // Title to be displayed on the administration page
            '',
            // Callback used to render the description of the section
            array( $this, 'sourcepoint_display_general_account' ),
            // Page on which to add this section of options
            'sourcepoint_general_settings'
        );

        add_settings_field(
            'sourcepoint_account_setting',
            'Account Number',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype'   => 'text',
                'id'    => 'sourcepoint_account_setting',
                'name'      => 'sourcepoint_account_setting',
                'required' => 'true',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_account_setting'
        );

        add_settings_field(
            'sourcepoint_propertyHref_setting',
            'propertyHref',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype'   => 'text',
                'id'    => 'sourcepoint_propertyHref_setting',
                'name'      => 'sourcepoint_propertyHref_setting',
                'required' => 'false',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_propertyHref_setting'
        );

        add_settings_field(
            'sourcepoint_joinHref_setting',
            'enable joinHref',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype' => "checkbox",
                'id'    => 'sourcepoint_joinHref_setting',
                'name'      => 'sourcepoint_joinHref_setting',
                'required' => 'false',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_joinHref_setting'
        );

        add_settings_field(
            'sourcepoint_propertyID_setting',
            'propertyID',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype'   => 'text',
                'id'    => 'sourcepoint_propertyID_setting',
                'name'      => 'sourcepoint_propertyID_setting',
                'required' => 'false',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_propertyID_setting'
        );



        add_settings_field(
            'sourcepoint_baseendpoint_setting',
            'BaseEndpoint',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype'   => 'text',
                'id'    => 'sourcepoint_baseendpoint_setting',
                'name'      => 'sourcepoint_baseendpoint_setting',
                'required' => 'false',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_baseendpoint_setting'
        );


        add_settings_field(
            'sourcepoint_enableGDPR_setting',
            'enableGDPR',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype' => "checkbox",
                'id'    => 'sourcepoint_enableGDPR_setting',
                'name'      => 'sourcepoint_enableGDPR_setting',
                "label" => 'fff',
                'required' => 'false',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_enableGDPR_setting'
        );

        add_settings_field(
            'sourcepoint_enableUSNAT_setting',
            'enableUSNAT',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype' => "checkbox",
                'id'    => 'sourcepoint_enableUSNAT_setting',
                'name'      => 'sourcepoint_enableUSNAT_setting',
                "label" => 'fff',
                'required' => 'false',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_enableCCPA_setting'
        );


        add_settings_field(
            'sourcepoint_enableCCPA_setting',
            'enableCCPA',
            array( $this, 'sourcepoint_render_settings_field' ),
            'sourcepoint_general_settings',
            'sourcepoint_general_section',
            array (
                'type'      => 'input',
                'subtype' => "checkbox",
                'id'    => 'sourcepoint_enableCCPA_setting',
                'name'      => 'sourcepoint_enableCCPA_setting',
                "label" => 'fff',
                'required' => 'false',
                'get_options_list' => '',
                'value_type'=>'normal',
                'wp_data' => 'option'
            )
        );

        register_setting(
            'sourcepoint_general_settings',
            'sourcepoint_enableUSNAT_setting'
        );

 
 
  




    }

    public function sourcepoint_display_general_account() {
        echo '<p>You can get your property and account details in the soucepoint ui or reach out to your account manager</p>';
    }
    public function sourcepoint_render_settings_field($args) {

        /* EXAMPLE INPUT
                            'type'      => 'input',
                            'subtype'   => '',
                            'id'    => $this->plugin_name.'_example_setting',
                            'name'      => $this->plugin_name.'_example_setting',
                            'required' => 'required="required"',
                            'get_option_list' => "",
                                'value_type' = serialized OR normal,
        'wp_data'=>(option or post_meta),
        'post_id' =>
        */
        if($args['wp_data'] == 'option'){
            $wp_data_value = get_option($args['name']);
        } elseif($args['wp_data'] == 'post_meta'){
            $wp_data_value = get_post_meta($args['post_id'], $args['name'], true );
        }

        switch ($args['type']) {
            case 'input':
                $value = ($args['value_type'] == 'serialized') ? serialize($wp_data_value) : $wp_data_value;
                if($args['subtype'] != 'checkbox'){
                    $prependStart = (isset($args['prepend_value'])) ? '<div class="input-prepend"> <span class="add-on">'.$args['prepend_value'].'</span>' : '';
                    $prependEnd = (isset($args['prepend_value'])) ? '</div>' : '';
                    $step = (isset($args['step'])) ? 'step="'.$args['step'].'"' : '';
                    $min = (isset($args['min'])) ? 'min="'.$args['min'].'"' : '';
                    $max = (isset($args['max'])) ? 'max="'.$args['max'].'"' : '';
                    if(isset($args['disabled'])){
                        // hide the actual input bc if it was just a disabled input the info saved in the database would be wrong - bc it would pass empty values and wipe the actual information
                        echo $prependStart.'<input type="'.$args['subtype'].'" id="'.$args['id'].'_disabled" '.$step.' '.$max.' '.$min.' name="'.$args['name'].'_disabled" size="40" disabled value="' . esc_attr($value) . '" /><input type="hidden" id="'.$args['id'].'" '.$step.' '.$max.' '.$min.' name="'.$args['name'].'" size="40" value="' . esc_attr($value) . '" />'.$prependEnd;
                    } else {
                        echo $prependStart.'<input type="'.$args['subtype'].'" id="'.$args['id'].'" "'.$args['required'].'" '.$step.' '.$max.' '.$min.' name="'.$args['name'].'" size="40" value="' . esc_attr($value) . '" />'.$prependEnd;
                    }
                    /*<input required="required" '.$disabled.' type="number" step="any" id="'.$this->plugin_name.'_cost2" name="'.$this->plugin_name.'_cost2" value="' . esc_attr( $cost ) . '" size="25" /><input type="hidden" id="'.$this->plugin_name.'_cost" step="any" name="'.$this->plugin_name.'_cost" value="' . esc_attr( $cost ) . '" />*/

                } else {
                    $checked = ($value) ? 'checked' : '';
                    echo '<input type="'.$args['subtype'].'" id="'.$args['id'].'" "'.$args['required'].'" name="'.$args['name'].'" size="40" value="1" '.$checked.' />';
                }
                break;
            default:
                # code...
                break;
        }
    }



}
