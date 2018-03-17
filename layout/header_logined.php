<header>
    <div class="w3ls-header"><!--header-one-->
        <div class="w3ls-header-left">
            <p><a href="mobileapp.html"><i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </a></p>
        </div>
        <div class="w3ls-header-right">
            <ul>
                <li class="dropdown head-dpdn this-dropdown-hover " style="background:#191e21;">
                    <a href="#" aria-expanded="false" class=""><i class="fa fa-user" aria-hidden="true"></i>Account <i class="fa fa-caret-down"></i></a>
                    <i class="fa fa-dropbox"></i>
                    <div class="this-dropdown-content this-text-blue this-padding " style="background:#191e21;">
                        <a href="/profile" class="this-bar-item "> Profile </a><br/>
                        <a href="#" class="this-bar-item">Your Ads</a><br/>
                        <a href="/user/logout" class="this-bar-item ">Logout</a><br/>
                    </div>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
                </li>


            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="container">
        <div class="agile-its-header">
            <div class="logo">
                <h1><a href="/""><span>DAKLOUK.COM</span></a></h1>
            </div>
            <div class="agileits_search">
                <form action="#" method="post">
                    <input name="Search" type="text" placeholder="How can we help you today?" required="" />
                    <select id="agileinfo_search" name="agileinfo_search" required="">
                        <option value="">All Categories</option>
                        <?php
                        if( !empty($list) ) {
                            foreach ($cc as $cc){
                                $__name=$cc->cat_name;
                                ?>
                                <option value="Mobiles">Mobiles</option>

                            <?php }} ?>
                    </select>
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
                <a class="post-w3layouts-ad" href="post-ad.html">Post Free Ad</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>