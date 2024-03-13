<?php
/**
 * Template Name: Talent & Growth Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>


<?php get_header(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="talent_growth_podcastmain">
    <div class="inner_podcastmain">
        <div class="left_podcasttext">
            <img src="/wp-content/uploads/2023/03/SKILL-POINT-LOGO-1.svg">
            <div class="talent_title">
                On a mission to <span style="color: #23F95F;">level-up</span> recruitment marketing
            </div>
            <div class="talent_desc">
                Join Haydn Morgans on the Skill Point Podcast as he digs deep into the success, failures, tactics, and insights from leading experts in and outside of the industry.
            </div>
            <div class="Listen_here">
                <div class="Listen_heretext">Listen here:</div>
                <a href="#"><img src="/wp-content/uploads/2023/03/Vector.png"></a>
                <a href="#"><img src="/wp-content/uploads/2023/03/Vector1.png"></a>
                <a href="#"><img src="/wp-content/uploads/2023/03/Vector2.png"></a>
                <a href="#"><img src="/wp-content/uploads/2023/03/Vector3.png"></a>
                <a href="#"><img src="/wp-content/uploads/2023/03/Vector4.png"></a>
            </div>
        </div>

        <div class="right_podcast-banner">
            <img src="/wp-content/uploads/2023/03/Group-140.png">
        </div>
    </div>
</div>
<div class="featured_podcast_latest">
  <?php
  $args = array(
    'post_type' => 'podcast',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => '1',
    'paged' => 1,
);
  $blog_posts = new WP_Query( $args );
  ?>

  <?php if ( $blog_posts->have_posts() ) : ?>
    <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
        <div class="featured_data">
            <div class="featured_imahge_podcast">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
            </div>

            <div class="insight_allinfo">
                <span class="date_published-cpt"><?php the_field('podcast_pub_date'); ?></span>
                <div class="insight_title">
                    <?php the_title(); ?>
                </div>
                <div class="service_description">
                    <h3><?php the_field('wporg_guest_id'); ?></h3>
                </div>
                <a class="read_article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Listen to episode <img src="/wp-content/uploads/2023/03/icons8-play-4-2.svg"> </a>
            </div>
            <a class="read_article_inner" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>
<div id="all_podcasts-row" class="stories_market">
    <div class="all-insight-row">
        <div class="col-md-3 stories_leading">
            Latest episodes
        </div>
        <div style="display: flex;" class="col-md-9 view_all_case-btn">
          <input placeholder="Search Episodes" id="cat_title" type="text" name="title">
          <input placeholder="Guest Name" id="guest_name" type="text" name="guest_name">
          <?php
          global $wpdb;
          $contents = $wpdb->get_results( "SELECT DISTINCT `meta_value` FROM `wp_3769c6b6bb_postmeta` where `meta_key` = 'wporg_box_id' && `meta_value` != 'NULL'");
          echo '<select class="cat_select dokan-form-control" name="category">';
          echo '<option value=""> Filter Category </option>';
          foreach( $contents as $content)
          {
            echo '<option value="'.$content->meta_value.'"> '.$content->meta_value.' </option>';
        }
        echo '</select>';
        ?>

        <?php 
         /* $field_key = "field_62260f7dd849f";
          $field = get_field_object($field_key);
          $cat_arr = array();
          if( $field )
          {
            echo '<div class="acf-task-difficulty-values">';
            echo'<select class="cat_select dokan-form-control" name="plocation">';
            echo'<option value="">Filter category</option>';
            foreach( $field['choices'] as $k => $v )
            {
                $cat_arr[$k]=$v;

                echo'<option class="level-0" value='.$k.'>' . $v . '</option>';
            }
            echo'</select>';
            echo '</div>';echo"<br>";


        }

    */

        ?>
        <button class="search_cat_telent">Search</button>

        
        <script>  
            $(document).ready (function () { 
                var all_post =  $(".insight_data").length;
                var arr_shown = new Array();
                var j1;
                for(j1=0;j1<all_post;j1++){
                    arr_shown.push(j1);
                }
                $("#prev").attr("disabled", true);
                console.log(arr_shown);
                $( '.insight_data').fadeOut(5);
                for(i1=0;i1<6;i1++){
                    $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
                }
                var pi=0,pii,i1,mainc=all_post;
                
               // arr_shown.push(0);
                $('.no_insight_data').fadeOut(10);
                $.expr[":"].contains = $.expr.createPseudo(function(arg) {
                    return function( elem ) {
                        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
                    };
                });
             $(".search_cat_telent").click (function () { mainc=0; 
                arr_shown.length = 0;
                pi=0;
               // unset($arr_shown);
                $('.insight_data').fadeOut(500);
                var selectedCat = $('select.cat_select').children("option:selected").val();  
              var selectedtitle = $('#cat_title').val(); //alert(selectedtitle);// console.log(selectedtitle.length + "test");
              var selectedguest = $('#guest_name').val(); // console.log(selectedguest.length + "test");
              var val,val_title,flag=false,view=false,guest_title;
              var arr2 = new Array();
              var arr = new Array();
              
              var arr1 = new Array();
              if(selectedCat.length>0){ 

                var numItems = $('.cat_name').length;
                for(var j =0; j<numItems;j++){     
                      val = $( '.cat_name:eq(' + j +  ')');//console.log(val_title + ":contains('" + selectedtitle.toLowerCase() + "')");
                      if(val.is(':contains(' + selectedCat+ ')')) { 
                       // $(this).closest('.insight_data').fadeIn(500);    
                       arr.push(j); //alert(j);
                       //console.log("guest name = " +$(this).closest('.insight_data').index());
                       console.log(selectedtitle + " = title " + ", index =  "  + j);
                   }

               }


               flag=true;
           }
              if(selectedtitle.length>0){ //alert(selectedtitle);
                var numItems = $('.insight_title_inner').length;
                for(var j =0; j<numItems;j++){     
                  // $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);   
                      val_title = $( '.insight_title_inner:eq(' + j +  ')');//console.log(val_title + ":contains('" + selectedtitle.toLowerCase() + "')");
                      if(val_title.is(':contains(' + selectedtitle+ ')')) { 
                       // $(this).closest('.insight_data').fadeIn(500);    
                       arr1.push(j); //alert(j);
                       //console.log("guest name = " +$(this).closest('.insight_data').index());
                       console.log(selectedtitle + " = title " + ", index =  "  + j);
                   }

               }
               flag=true;


           }
           if(selectedguest.length>0){ var numItems = $('.service_guest').length;val_title = '';//alert(selectedguest);
           for(var j =0; j<numItems;j++){     
                  // $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);   
                      guest_title = $( '.service_guest:eq(' + j +  ')');//console.log(guest_title + ":contains('" + selectedtitle.toLowerCase() + "')");
                      if(guest_title.is(':contains(' + selectedguest+ ')')) { 
                       // $(this).closest('.insight_data').fadeIn(500);    
                       arr2.push(j); 
                       //console.log("guest name = " +$(this).closest('.insight_data').index());
                       console.log(selectedguest + " = title " + ", index =  "  + j);
                   }

               }

               flag=true;              

           }

         //arr category , arr1 title , arr2 guest name
           if(flag){
              if(selectedCat.length > 0 && selectedtitle.length > 0 && selectedguest.length > 0){ 
                for(var t=0;t<arr1.length;t++){
                    for(var c=0;c<arr.length;c++){
                        for(var g=0;g<arr2.length;g++){

                     if(arr1[t] ==  arr[c] && arr[c] == arr2[g]){  //arr_shown
                         //alert("arr.length > 0 && arr1.length > 0 && arr2.length > 0");
                        index = arr2[g]// = arr[c];
                        //console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true;
                        mainc = mainc + 1;
                        arr_shown.push(index);
                    }
                }
            }
        }
        
    }
    
    else if(selectedguest.length > 0 && selectedtitle.length == 0  && selectedCat.length == 0){ 
        //for(var t=0;t<arr1.length;t++){
            //for(var c=0;c<arr.length;c++){
        for(var g=0;g<arr2.length;g++){
//alert('hi');
                    //if(arr1[t] == arr[c] == arr2[g]){  

                        index = arr2[g]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);
                    //}
                    }
            //}
        //}
                }
                else if(selectedCat.length > 0  && selectedtitle.length == 0  && selectedguest.length == 0){ 
        //for(var t=0;t<arr1.length;t++){
                    for(var c=0;c<arr.length;c++){
                //for(var g=0;g<arr2.length;g++){

                    //if(arr1[t] == arr[c] == arr2[g]){  

                        index = arr[c]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);
                    //}
                //}
                    }
        //}
                }

        else if(selectedtitle.length > 0  && selectedCat.length == 0  && selectedguest.length == 0){ //alert("mmmm");
            for(var t=0;t<arr1.length;t++){ 
            //for(var c=0;c<arr.length;c++){
                //for(var g=0;g<arr2.length;g++){

                    //if(arr1[t] == arr[c] == arr2[g]){  

                        index = arr1[t]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);
                    //}
                //}
            //}
                    }
                }
                
        else if(selectedtitle.length > 0  && selectedCat.length == 0  && selectedguest.length == 0){ //alert("nnn");
            for(var t=0;t<arr1.length;t++){
            //for(var c=0;c<arr.length;c++){
                //for(var g=0;g<arr2.length;g++){

                    //if(arr1[t] == arr[c] == arr2[g]){  

                        index = arr1[t]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);
                    //}
                //}
            //}
                    }
                }
                
                else if(selectedtitle.length == 0  && selectedCat.length > 0  && selectedguest.length > 0){ 
       // for(var t=0;t<arr1.length;t++){
                    for(var c=0;c<arr.length;c++){
                        for(var g=0;g<arr2.length;g++){

                         if( arr[c] == arr2[g]){  

                        index = arr[c]// = arr[c];
                        //index = arr1[t]// = arr[c];
                        //index = arr2[g]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);
                    //}
                    }
                }
            }
        }
        
        else if(selectedtitle.length > 0  && selectedCat.length == 0  && selectedguest.length > 0){ 
            for(var t=0;t<arr1.length;t++){
            //for(var c=0;c<arr.length;c++){
                for(var g=0;g<arr2.length;g++){

                 if( arr1[t] == arr2[g]){  

                        //index = arr[c]// = arr[c];
                        index = arr1[t]// = arr[c];
                        //index = arr2[g]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);
                    }
                }
            //}
            }
        }
        
        else if(selectedtitle.length > 0  && selectedCat.length > 0  && selectedguest.length == 0){ 
            for(var t=0;t<arr1.length;t++){
                for(var c=0;c<arr.length;c++){
                //for(var g=0;g<arr2.length;g++){

                 if( arr1[t] == arr[c]){  

                        index = arr[c]// = arr[c];
                        //index = arr1[t]// = arr[c];
                        //index = arr2[g]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);
                    }
                //}
                }
            }
        }

        else{
           $('.insight_data').fadeOut(500);
           $('.no_insight_data').fadeIn(500);
           view = false;
       }




   }
   if(selectedtitle.length < 1 && selectedCat.length < 1 && selectedguest.length < 1 ){
//alert("hiiiiiiiiiiiiiiiiiiiiiiiiiiiii");
    mainc = all_post;
       // alert(mainc);
    for(j1=0;j1<all_post;j1++){
        arr_shown.push(j1);
    }
    console.log("arr_shown");
    $( '.insight_data').fadeOut(5);
    for(i1=0;i1<6;i1++){
        $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
    }

      //$('.insight_data').fadeIn(500);
    $('.no_insight_data').fadeOut(500);
    view = true;
}

console.log("new count = " +  mainc);
console.log("new array = " +  arr_shown);
if(view){  $( '.insight_data').hide();
$(".insight_data").css("display", "none !important");
  $('.no_insight_data').fadeOut(500);
  if(mainc>6){ 
    for(i1=0;i1<6;i1++){
        $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
        $("#next").attr("disabled", false);
        $("#prev").attr("disabled", true);
    }
}
else{ //alert('hi');
  for(i1=0;i1<mainc;i1++){
    $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
}  
}

}else{
  $('.no_insight_data').fadeIn(500);
        //alert("hi11"); 
}
if(mainc<6){ 
    $("#prev").attr("disabled", true);
    $("#next").attr("disabled", true);
}
}); 
var last=0;
$("#next").click (function () { //alert(mainc); alert("gygygygyg");
    pi=pi+1;
    pii = pi * 6;
    $("#prev").attr("disabled", false);
    
    if(mainc<6){ $("#next").attr("disabled", true);
}
if(pii+6 >= mainc){
    $("#next").attr("disabled", true);
       // alert("gygygygyg");
    $('.insight_data').fadeOut(5);
    for(var i3=0;mainc>i3+pii;i3++){// alert(mainc);
        $( '.insight_data:eq(' + arr_shown[i3+pii] +  ')').fadeIn(500);
        last=i3;$("#next").attr("disabled", true);
    }

    }else{ $('.insight_data').fadeOut(5);// alert("gygygygyg");
    for(var i2=0;i2<6;i2++){ 
        $( '.insight_data:eq(' + arr_shown[i2+pii] +  ')').fadeIn(500);
    }
}
});
$("#prev").click (function () {   
    $("#next").attr("disabled", false);
    pi=pi-1;
    pii = pi * 6;
    //alert(pi);
    if(pi==0){
        $("#prev").attr("disabled", true);
    }
    $('.insight_data').fadeOut(5);
    for(var i2=0;i2<6;i2++){ 
        $( '.insight_data:eq(' + arr_shown[i2+pii] +  ')').fadeIn(500);
    }
});
});  
</script>  
</div>
</div>
<div class="pcr-left" id="dom">

    <p class="no_insight_data">No Podcast Found</p>
<?php //echo "string";
$args2 = array(
    'post_type' => 'podcast',
    'post_status' => 'publish',
    'order'=> 'DESC',
    'posts_per_page' => '-1',
    'paged' => 1,
);
$blog_posts_second = new WP_Query( $args2 );
?>
<?php if ( $blog_posts_second->have_posts() ) : ?>
    <?php while ( $blog_posts_second->have_posts() ) : $blog_posts_second->the_post(); ?>
        <div class="insight_data">
            <div class="featured_imahge_podcast">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
            </div>
            <div style="display: none;" class="cat_name" >
                <?php the_field('wporg_box_id'); ?>
            </div>
            <div class="insight_allinfo">
                <span class="date_published-cpt"><?php the_field('podcast_pub_date'); ?></span>
                <div class="insight_title insight_title_inner">
                    <?php the_title(); ?>
                </div>
                <div class="service_description">
                    <h3 class="service_guest"><?php the_field('wporg_guest_id'); ?></h3>
                </div>
            </div>
            <a class="read_article_inner" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            </a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>
<div class="bottom_next_prev">
    <a href='#all_podcasts-row'><button id="prev"  class=" ">PREV</button></a>
    <a href='#all_podcasts-row'><button id="next"  class=" ">NEXT</button></a>
</div>
<?php wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>