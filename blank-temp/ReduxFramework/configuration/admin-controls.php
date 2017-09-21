<?php 
   Redux::setArgs( $opt_name, $args );
    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );
    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );
    // -> START Additional Types
    Redux::setSection( $opt_name, array(
        'title' => __( 'Header ', 'redux-framework-demo' ),
        'id'    => 'Header',
        'desc'  => __( '', 'redux-framework-demo' ),
        'icon'  => 'el el-magic',
        'fields' => array(
            array(
                'id'       => 'opt-media',
                'type'     => 'media',
                'alt'      => true,
                'url'      => true,
                'title'    => __('Logo', 'redux-framework-demo'),
                'desc'     => __('Basic media uploader with disabled URL input field.'  , 'redux-framework-demo'),
                'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                'default'  => array(
                    'url'=>'',
                    'alt' => ''
                ),
            ),
        )
    ) );

     Redux::setSection( $opt_name, array(
        'title' => __( 'General Settings ', 'redux-framework-demo' ),
        'id'    => 'general_settings',
        'desc'  => __( '', 'redux-framework-demo' ),
        'icon'  => 'el el-arrow-up',
        'fields' => ''


    ) );
     Redux::setSection( $opt_name, array(
            'title' => __( 'CSS ', 'redux-framework-demo' ),
            'id'    => 'css_file',
            'desc'  => __( '', 'redux-framework-demo' ),
            'icon'  => 'el el-adult',
            'subsection' => true,
            'fields' => array(array(
                        'id'       => 'css_editor',
                        'type'     => 'ace_editor',
                        'title'    => __('CSS Code', 'redux-framework-demo'),
                        'subtitle' => __('Paste your CSS code here.', 'redux-framework-demo'),
                        'mode'     => 'css',
                        'theme'    => 'monokai',
                        'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default'  => "#header{\nmargin: 0 auto;\n}"
                    ),

                )

        ));
            Redux::setSection( $opt_name, array(
                    'title' => __( 'Social Media ', 'redux-framework-demo' ),
                    'id'    => 'social_media',
                    'desc'  => __( '', 'redux-framework-demo' ),
                    'icon'  => 'el el-adjust',
                    'subsection' => true,
                    'fields' => ''
                ));
 
          Redux::setSection( $opt_name, array(
            'title' => __( 'Footer ', 'redux-framework-demo' ),
            'id'    => 'Footer',
            'desc'  => __( '', 'redux-framework-demo' ),
            'icon'  => 'el el-file-new',
            'fields' => array(array (
                                'id'       => 'copyright',
                                'type'     => 'text',
                                'title'    => __('Copy Right Message', 'redux-framework-demo'),
                                'msg'      => 'custom error message',
                                'default'  => 'test@test.com'
                            ))


        ));


?>