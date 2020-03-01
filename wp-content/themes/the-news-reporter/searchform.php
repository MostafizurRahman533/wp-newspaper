            <form action="<?php echo home_url( '/' ); ?>" method="get">
                <input type="search" name="s" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>"/>
                <button type="submit" style="color:white; height:30px;width:70px;font-weight: bold; font-size: 12px; background: red; border: none; margin-top: 10px;"><i class="fa fa-search" aria-hidden="true" >SEARCH</i></button>
            </form>