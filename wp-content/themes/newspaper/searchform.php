        

        <form id="formsearch" name="formsearch" method="post" action="<?php echo home_url( '/' ); ?>">
          <span>
          <input name="s" class="editbox_search" id="editbox_search" maxlength="80" value="<?php echo get_search_query() ?>"  type="search" placeholder="Search" />
          </span>
          <input name="button_search" src="<?php echo get_template_directory_uri(); ?>/images/search.gif" class="button_search" type="image" />
        </form>