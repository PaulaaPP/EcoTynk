<?php


add_shortcode(
    'galery', 
function (){
    $query = new WP_Query(
        array(
            'post_type' => 'galery',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
   

    $i = 1;
    $str = '<div class="elementor-row galery">';

    while ($query->have_posts()):
        $query->the_post();
        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'galery');
        $str .= '
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elemntor-widget-wrap">
        
                        <div class="team-member-info">
                            <a href="'.get_the_permalink().'">
                            <h3>'.do_shortcode('[acf field="title"]').'</h3>
                            <h3>'.do_shortcode('[acf field="data"]').'</h3>
                            </a>
                            
                        </div>
        
                        <div class="image-wrapper">
                            <a href="'.get_the_permalink().'" title="'.get_the_title().'"><img src="'.$thumbnail_url.'" alt="'.get_the_title().'" ></a>
                        </div>
                    
                    </div>
                </div>
            </div>';

        if($i % 3 == 0):
            $str .= '</div>';
            $str .= '<div class="elementor-row galery">';
        endif;
        $i++;


    endwhile;

    wp_reset_postdata();
    return $str;
}
); 