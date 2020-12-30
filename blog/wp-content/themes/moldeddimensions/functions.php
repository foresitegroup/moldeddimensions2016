<?php
// Enable feature images
add_theme_support('post-thumbnails');

// Don't resize Featured Images
add_action('after_setup_theme', 'my_thumbnail_size', 11);
function my_thumbnail_size() {
  set_post_thumbnail_size();
}

// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}

function fg_excerpt($limit, $more = '') {
  return wp_trim_words(get_the_excerpt(), $limit, $more);
}





function redirect_homepage() {
  if (is_home()) {
    wp_redirect(home_url()."/category/blog/");
    exit();
  }
}
add_action('template_redirect', 'redirect_homepage');

add_action('add_meta_boxes', 'newsblog_mb');
function newsblog_mb() {
  add_meta_box('newsblog_mb_radio', 'News or Blog?', 'newsblog_mb_content_radio', 'post', 'side', 'high');
  add_meta_box('newsblog_mb_input', 'Byline & Link', 'newsblog_mb_content_input', 'post', 'normal', 'high');
}

// Place fields after the title
add_action('edit_form_after_title', 'newsblog_after_title');
function newsblog_after_title($post) {
  if (get_post_type() == 'post') {
    echo '<input type="text" name="newsblog_subtitle" placeholder="Enter subtitle here" value="';
    if ($post->newsblog_subtitle != "") echo $post->newsblog_subtitle;
    echo '" id="newsblog_subtitle">';
  }
}

function newsblog_mb_content_radio($post) {
  $newsblog_tab = $post->newsblog_tab;
  if ($newsblog_tab == "") $newsblog_tab = "blog";
  ?>
  <label><input type="radio" name="newsblog_tab" value="news" id="news"<?php if ($newsblog_tab == "news") echo " checked"; ?>> News</label><br>
  <label><input type="radio" name="newsblog_tab" value="blog" id="blog"<?php if ($newsblog_tab == "blog") echo " checked"; ?>> Blog</label>

  <script>
    jQuery(function($) {
      if ($('#blog').is(':checked')) {
        $('#newsblog_mb_input, #newsblog_subtitle, #postimagediv').hide();
        $('#in-category-223').prop('checked', false);
        $('#in-category-222').prop('checked', true);
        $('#newsblog_source, #newsblog_link').val('');
      } else {
        $('#newsblog_mb_input, #newsblog_subtitle, #postimagediv').show();
        $('#in-category-223').prop('checked', true);
        $('#in-category-222').prop('checked', false);
      }

      $('input[type=radio]').change(function(){
        if (this.value == 'blog') {
          $('#newsblog_mb_input, #newsblog_subtitle, #postimagediv').hide();
          $('#in-category-223').prop('checked', false);
          $('#in-category-222').prop('checked', true);
          $('#newsblog_subtitle, #newsblog_source, #newsblog_link').val('');
        } else {
          $('#newsblog_mb_input, #newsblog_subtitle, #postimagediv').show();
          $('#in-category-223').prop('checked', true);
          $('#in-category-222').prop('checked', false);
        }
      });
    });
  </script>
  <?php
}

function newsblog_mb_content_input($post) {
  ?>
  <input type="text" name="newsblog_byline" id="newsblog_byline" placeholder="Byline" value="<?php if ($post->newsblog_byline != "") echo $post->newsblog_byline; ?>">
  <input type="text" name="newsblog_link" id="newsblog_link" placeholder="Link" value="<?php if ($post->newsblog_link != "") echo $post->newsblog_link; ?>">
  <?php
}

add_action('admin_head', 'newsblog_css');
function newsblog_css() {
  if (get_post_type() == 'post') {
    echo '<style>
      #newsblog_subtitle,
      #newsblog_mb_input INPUT[type="text"] { width: 100%; margin: 0.5em 0; padding: 0.32em 8px; box-sizing: border-box; }
      #newsblog_mb_input LABEL { margin-right: 1em; }
    </style>';
  }
}

add_action('save_post', 'newsblog_save');
function newsblog_save($post_id) {
  if (get_post_type() == 'post') {
    if (!empty($_POST['newsblog_subtitle'])) {
      update_post_meta($post_id, 'newsblog_subtitle', $_POST['newsblog_subtitle']);
    } else {
      delete_post_meta($post_id, 'newsblog_subtitle');
    }
    if (!empty($_POST['newsblog_tab'])) {
      update_post_meta($post_id, 'newsblog_tab', $_POST['newsblog_tab']);
    } else {
      delete_post_meta($post_id, 'newsblog_tab');
    }
    if (!empty($_POST['newsblog_byline'])) {
      update_post_meta($post_id, 'newsblog_byline', $_POST['newsblog_byline']);
    } else {
      delete_post_meta($post_id, 'newsblog_byline');
    }
    if (!empty($_POST['newsblog_link'])) {
      update_post_meta($post_id, 'newsblog_link', $_POST['newsblog_link']);
    } else {
      delete_post_meta($post_id, 'newsblog_link');
    }
  }
}
?>