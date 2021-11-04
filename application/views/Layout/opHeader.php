<style>
    #profile-grid { overflow: auto; white-space: normal; }
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:6px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
</style>
        <div id="header">
            <div class="logodanjudul">
                <div id="logo"><img src="<?php echo base_url();?>Design/images/LogoYasiwa.gif" /></div>
                <h1 id="judul">Yasiwa</h1>
                <p id="djudul">Yayasan Konservasi Khatulistiwa Indonesia</p>
                <p id="visi">Maintain biodiversity within mixed-use landscapes</p>
                <!-- <p id="lang">
                    <?php echo anchor('#','English');?> |
                    <?php echo anchor('#','Bahasa');?>
                </p> -->
            </div>
            <div id="slide">
                <div id="slider1_container" style="position: relative; width: 600px;
        height: 255px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo base_url();?>Design/jslider/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 783px; height: 275px;
            overflow: hidden;">
            <?php foreach($result_header as $row):?>
            <div>
                <img u=image src="<?php echo base_url().$row->path;?>" />
<!--                <div u="thumb">Do you notice it scales while window resize?</div>
                <div u="caption" t="L" style="position: absolute; top: 20px; left: 20px; width: 200px; height: 30px; color: #ffffff; font-size: 20px; line-height: 30px;">What about caption?</div>
                <div u="caption" t="CLIP|LR" style="position: absolute; top: 135px; left: 100px; width: 400px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">This is 'CLIP|LR' caption transition</div>-->
            </div><?php endforeach?>
            <!-- <div>
                <img u=image src="<?php echo base_url();?>Design/Image/kolase 1 lahan basah.jpg" /> -->
<!--                <div u="thumb">Do you notice it scales while window resize?</div>
                <div u="caption" t="L" style="position: absolute; top: 20px; left: 20px; width: 200px; height: 30px; color: #ffffff; font-size: 20px; line-height: 30px;">What about caption?</div>
                <div u="caption" t="CLIP|LR" style="position: absolute; top: 135px; left: 100px; width: 400px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">This is 'CLIP|LR' caption transition</div>-->
            <!-- </div>
            <div>
                <img u=image src="<?php echo base_url();?>Design/Image/kolase 2.jpg" /> -->
                <!--<div u="thumb">Do you know this is text format thumbnail?</div>
                <div u="caption" t="MCLIP|L" style="position: absolute; top: 105px; left: 100px; width: 400px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">This is 'MCLIP|L' caption transition</div>
                <div u="caption" t="LISTH|L" style="position: absolute; top: 165px; left: 100px; width: 400px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">This is 'LISTH|L' caption transition</div>-->
            <!-- </div>
            <div>
                <img u=image src="<?php echo base_url();?>Design/Image/kolase 3 kolam.jpg" /> -->
                <!--<div u="thumb">Do you notice the navigator is in multiline?</div>
                <div u="caption" t="WAVE|L" t2="T" style="position: absolute; top: 135px; left: 450px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">WAVE|L</div>
                <div u="caption" t="WAVE|L" t2="T" d="-1150" style="position: absolute; top: 135px; left: 250px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">WAVE|L</div>
                <div u="caption" t="WAVE|L" t2="T" d="-1150" style="position: absolute; top: 135px; left: 50px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">WAVE|L</div>-->
            <!-- </div>
            <div>
                <img u=image src="<?php echo base_url();?>Design/Image/kolase 4 hutan-sawit.jpg" /> -->
                <!--<div u="thumb">Do you like navigator to act by mouse hover?</div>
                <div u="caption" t="JUMPDN|R" t2="B" style="position: absolute; top: 135px; left: 50px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">JUMPDN|R</div>
                <div u="caption" t="JUMPDN|R" t2="B" d="-850" style="position: absolute; top: 135px; left: 250px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">JUMPDN|R</div>
                <div u="caption" t="JUMPDN|R" t2="B" d="-850" style="position: absolute; top: 135px; left: 450px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">JUMPDN|R</div>-->
            <!-- </div>
                        <div>
                <img u=image src="<?php echo base_url();?>Design/Image/kolase lahan basah 5.jpg" /></div> -->
           
        </div>

        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <!-- thumbnail navigator container -->
        <!--<div u="thumbnavigator" class="jssort09" style="position: absolute; bottom: 0px; left: 0px; height:60px; width:782px;">-->
            <!--<div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #ffffff; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>-->
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 60px; TOP: 0; LEFT: 0;">
                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#000; line-height: 60px; font-size:20px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
<!--        </div>-->
        <!--#endregion ThumbnailNavigator Skin End -->
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="left:0px; bottom: -15px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(<?php echo base_url();?>Design/jslider/img/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 123px; right: -170px;">
        </span>
        
        <!-- Trigger -->
    </div>
    <!-- Jssor Slider End -->
            </div><!-- end slide-->
            <!-- <div id="top_menu">
                <ul class="mainmenu">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="<?php echo base_url();?>AboutUs">About Us</a></li>
                    <li><a href="<?php echo base_url();?>Hww">How We Work</a></li>
                    <li><a href="<?php echo base_url();?>Project">Project</a>
                        <ul class="sublevel1">
                            <li><a href="#">Muara Ancalong</a></li>
                            <li><a href="#">Malinau</a></li>
                            <li><a href="#">Papua</a></li>                            
                        </ul>
                     </li>
                    <li><a href="javascript:void(0);">Gallery</a>
                        <ul class="sublevel1">
                            <li><a href="<?php echo base_url();?>Gallery">Photo</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </li>                 
                </ul>
            </div> -->
        <!-- <div id="menu">
    <ul class="menu">
        <li><a href="<?php echo base_url();?>"><span>Home</span></a>
        </li>
        <li><a href="<?php echo base_url();?>AboutUs"><span>About Us</span></a>
            <div class="columns two">
                <ul class="one">
                    <li><a href="#"><span>Sub Item 1.1</span></a></li>
                    <li><a href="#"><span>Sub Item 1.2</span></a></li>
                    <li><a href="#"><span>Sub Item 1.3</span></a></li>
                    <li><a href="#"><span>Sub Item 1.4</span></a></li>
                    <li><a href="#"><span>Sub Item 1.5</span></a></li>
                    <li><a href="#"><span>Sub Item 1.6</span></a></li>
                    <li><a href="#"><span>Sub Item 1.7</span></a></li>
                </ul>
                <ul class="two">
                    <li><a href="#"><span>Sub Item 2.1</span></a></li>
                    <li><a href="#"><span>Sub Item 2.2</span></a></li>
                    <li><a href="#"><span>Sub Item 2.3</span></a></li>
                    <li><a href="#"><span>Sub Item 2.4</span></a></li>
                    <li><a href="#"><span>Sub Item 2.5</span></a></li>
                    <li><a href="#"><span>Sub Item 2.6</span></a></li>
                </ul>
            </div>
        </li>
        <li><a href="<?php echo base_url();?>Hww"><span>How We Work</span></a></li>
        <li><a href="<?php echo base_url();?>Project"><span>Project</span></a>
        <div>
                    <ul>
                    <li><a href="#"><span>Malinau</span></a></li>
                    <li><a href="#"><span>Muara Ancalong</span></a></li>
                    <li><a href="#"><span>Papua</span></a></li>
                    </ul>
                </div>
        </li>
        <li class="last"><a href="<?php echo base_url();?>Project"><span>Gallery</span></a>
                <div>
                    <ul>
                    <li><a href="#"><span>Foto</span></a></li>
                    <li><a href="#"><span>Download</span></a></li>
                    </ul>
                </div>
        </li>
        <li class="last"><a href="<?php echo base_url();?>Project"><span>Donate</span></a></li>
    </ul>
</div> -->
<?php echo $this->dynamic_menu->build_menu();?>