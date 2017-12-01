<?php

// ---------------------------------------------
// Blog Section
// ---------------------------------------------
$wp_customize->add_section( 'tyros_blog_section', array(
    'title'                 => __( 'Blog Layout', 'tyros'),
    'description'           => __( 'Customize the Blog of your site', 'tyros' ),
    'priority'              => 10
) );

    // Blog Layout - Include Left Sidebar?
    $wp_customize->add_setting( 'tyros[tyros_blog_layout_left]', array(
        'default'               => 'col1',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'tyros_sanitize_col_sidebar_left',
        'type'                  => 'option'
    ) );
    $wp_customize->add_control( 'tyros[tyros_blog_layout_left]', array(
        'label'   => __( 'Include the left sidebar on the blog?', 'tyros' ),
        'section' => 'tyros_blog_section',
        'type'    => 'radio',
        'choices'    => array(
            'col1'      => __( 'No Sidebar', 'tyros' ),
            'col2l'     => __( 'Left Sidebar', 'tyros' ),
        )
    ));
    
    // Blog Layout - Include Sidebar?
    $wp_customize->add_setting( 'tyros[tyros_blog_layout]', array(
        'default'               => 'col2r',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'tyros_sanitize_col_sidebar',
        'type'                  => 'option'
    ) );
    $wp_customize->add_control( 'tyros[tyros_blog_layout]', array(
        'label'   => __( 'Include the right sidebar on the blog?', 'tyros' ),
        'section' => 'tyros_blog_section',
        'type'    => 'radio',
        'choices'    => array(
            'col1'      => __( 'No Sidebar', 'tyros' ),
            'col2r'     => __( 'Right Sidebar', 'tyros' ),
        )
    ));

    // Show / Hide Post images on the Blog?
    $wp_customize->add_setting( 'tyros[tyros_blog_featured]', array(
         'default'               => 'on',
         'transport'             => 'refresh',
         'sanitize_callback'     => 'tyros_sanitize_on_off',
         'type'                  => 'option'
    ) );
    $wp_customize->add_control( 'tyros[tyros_blog_featured]', array(
        'label'   => __( 'Show or Hide the Post images on the blog page?', 'tyros' ),
        'section' => 'tyros_blog_section',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Show', 'tyros' ),
            'off'   => __( 'Hide', 'tyros' ),
        )
    ));

    // "Show latest posts" Blog Style
    $wp_customize->add_setting( 'tyros[blog_layout_style]', array(
         'default'               => 'carousel',
         'transport'             => 'refresh',
         'sanitize_callback'     => 'tyros_sanitize_blog_style',
         'type'                  => 'option'
    ) );
    $wp_customize->add_control( 'tyros[blog_layout_style]', array(
        'label'         => __( 'Select a layout style for the Homepage Blog', 'tyros' ),
        'description'   => __( 'Takes effect when the Static Front Page setting is "Your latest posts"', 'tyros' ),
        'section' => 'tyros_blog_section',
        'type'    => 'radio',
        'choices'    => array(
            'carousel'    => __( 'Carousel', 'tyros' ),
            'alternate'   => __( 'Alternate', 'tyros' ),
            'masonry'   => __( 'Masonry - A', 'tyros' ),
            'masonry2'   => __( 'Masonry - B', 'tyros' ),
        )
    ));

    // Dedicated Posts Page Blog Style
    $wp_customize->add_setting( 'tyros[index_blog_layout_style]', array(
         'default'               => 'masonry',
         'transport'             => 'refresh',
         'sanitize_callback'     => 'tyros_sanitize_blog_style',
         'type'                  => 'option'
    ) );
    $wp_customize->add_control( 'tyros[index_blog_layout_style]', array(
        'label'         => __( 'Select a layout style for the dedicated Posts page', 'tyros' ),
        'description'   => __( 'Takes effect when the Static Front Page setting is "A static page", and a "Posts page" is set there', 'tyros' ),
        'section' => 'tyros_blog_section',
        'type'    => 'radio',
        'choices'    => array(
            'carousel'    => __( 'Carousel', 'tyros' ),
            'alternate'   => __( 'Alternate', 'tyros' ),
            'masonry'   => __( 'Masonry - A', 'tyros' ),
            'masonry2'   => __( 'Masonry - B', 'tyros' ),
        )
    ));
    
    

    
    