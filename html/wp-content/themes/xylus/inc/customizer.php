<?php
/**
 * Xylus Customizer support
 *
 * @package Xylus
 */

function xylus_customize_register($wp_customize) {
    $wp_customize->add_section( 'xylus-footer-copyright', array(
        'title'          => __('Footer copyright', 'xylus' ),
        'description'    => __('', 'xylus' ),
        'priority'       => 35,
    ) );

    $wp_customize->add_setting(
        'xylus_copyright',
        array(
            'default' => __('Copyright 2015 Xylus Wordress Theme', 'xylus' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'xylus_copyright',
        array(
            'label' => __('Footer copyright text', 'xylus' ),
            'section' => 'xylus-footer-copyright',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'hide_copyright',
        array(
            'sanitize_callback' => 'xylus_checkbox_sanitize'
        )
    );
    $wp_customize->add_control(
        'hide_copyright',
        array(
            'type' => 'checkbox',
            'label' => 'Hide copyright text',
            'section' => 'xylus-footer-copyright',
        )
    );
    function xylus_checkbox_sanitize( $input ) {
        if ( $input == 1 ) {
            return 1;
        } else {
            return '';
        }
    }


    $wp_customize->add_section( 'xylus-footer-social', array(
        'title'          => __('Footer Social Links', 'xylus' ),
        'description'    => __('', 'xylus' ),
        'priority'       => 35,
    ) );

    $wp_customize->add_setting(
        'xylus_facebook',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_facebook',
        array(
            'label' => __('Facebook', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_twitter',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_twitter',
        array(
            'label' => __('Twitter', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );


    $wp_customize->add_setting(
        'xylus_googleplus',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_googleplus',
        array(
            'label' => __('Google plus', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_linkedin',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_linkedin',
        array(
            'label' => __('LinkedIn', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_github',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_github',
        array(
            'label' => __('Github', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_skype',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_skype',
        array(
            'label' => __('Skype', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_youtube',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_youtube',
        array(
            'label' => __('Youtube', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_wordpress',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_wordpress',
        array(
            'label' => __('Wordpress', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_tumblr',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_tumblr',
        array(
            'label' => __('Tumblr', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'xylus_pinterest',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'xylus_pinterest',
        array(
            'label' => __('Pinterest', 'xylus' ),
            'section' => 'xylus-footer-social',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'hide_social',
        array(
            'sanitize_callback' => 'xylus_checkbox_sanitize'
        )
    );

    $wp_customize->add_control(
        'hide_social',
        array(
            'type' => 'checkbox',
            'label' => 'Hide Social links',
            'section' => 'xylus-footer-social',
        )
    );

    $wp_customize->add_section( 'xylus_general_settings', array(
        'title'          => __('General Settings', 'xylus' ),
        'description'    => __('Add/Edit General Settings of Site Here', 'xylus' ),
        'priority'       => 35,
    ) );

    $wp_customize->add_setting('xylus_site_logo', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'xylus_site_logo', array(
        'label'    => __('Site Logo', 'xylus'),
        'description'    => __('Upload/ Change Site Logo Here', 'xylus' ),
        'section'  => 'xylus_general_settings',
        'settings' => 'xylus_site_logo',
    )));

    $wp_customize->add_setting('xylus_header_title', array(
        'capability'     => 'edit_theme_options',
        'default' => __('Xylus Themes', 'xylus' ),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('xylus_header_title', array(
        'label'       => __('Header Title', 'xylus'),
        'description' => __('Add/Edit Header Title Here', 'xylus'),
        'section'     => 'xylus_general_settings',
        'settings'    => 'xylus_header_title',
    ));

    $wp_customize->add_setting( 'xylus_header_desc', array(
        'capability'        => 'edit_theme_options',
        'default'           => __('Xylus Themes', 'xylus' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new XT_Customize_Textarea_Control( $wp_customize, 'xylus_header_desc', array(
        'label'       => __('Header Description', 'xylus'),
        'description' => __('Add/Edit Header Description Here', 'xylus'),
        'section'     => 'xylus_general_settings',
        'settings'    => 'xylus_header_desc',
    ) ) );

}
add_action( 'customize_register', 'xylus_customize_register' );

if (class_exists('WP_Customize_Control')){
    class XT_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';

        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
        }
    }
}


