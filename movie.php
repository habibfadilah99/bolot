<?php $judulnya = isset($_GET['q']) ? strip_tags(str_replace('-', ' ', ucwords($_GET['q']))) :  'Movie';?>
<!DOCTYPE html>
<html class="no-js en">
<title>Watch <?php echo $judulnya;?> Online</title>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1,user-scalable=1">
<meta name=robots content="NOINDEX, NOFOLLOW" />
<title></title>
<link rel=stylesheet href="assets/css/main.css">
<script src="assets/js/modernizr.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel=stylesheet>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="assets/img/club-logo.png" />
<link rel="icon" type="image/png" href="favicon.png">

<body onload="randomNumber(); randomLikes();">

    <!-- Content -->
    <div class="header-wrapper">
        <div class="video-header">
            <div class="header-container">
                <div class="header-logo">
                    <img src="assets/img/movies-logo.png" alt="Putlocker Movies">
                </div>
                <div class="header-title">
                    <a href="supportus.php" class="x-domain">
                        <div class="your-search">Your Search:</div>
                        <div class="title-keyword"><?php echo $judulnya;?></div>
                    </a>
                </div>

                <div class="header-subtitle">1.26:12 MIN | 4K ULTRAHD | FULL HD (1080p) | SD</div>
                <div class="header-related">
                    <div id="random-number"></div> related files found for ""<?php echo $judulnya;?>""</div>
            </div>

            <div class="header-right"><img class="media-icon" data-interchange="[assets/img/facebook-icon.png, (mobile)], [assets/img/facebook-icon.png,, (desktop)]" alt="">
                <div class="media-likes" id="media-likes-facebook">2</div><img class="media-icon" data-interchange="[assets/img/googleplus-icon.png, (mobile)], [assets/img/googleplus-icon.png,, (desktop)]" alt="">
                <div class="media-likes" id="media-likes-googleplus">3</div><img class="media-icon" data-interchange="[assets/img/twitter-icon.png, (mobile)], [assets/img/twitter-icon.png,, (desktop)]" alt="">
                <div class="media-likes" id="media-likes-twitter">5</div>
            </div>
        </div>
    </div>
    <div class="row no-mod">
        <div class="large-12 medium-10 small-no-mod columns medium-centered">

            <div class="video-container">
                <div class="video-player">
                    <div class="video">
                        <div class="overlay-video"></div>
                        <div class="percent-container">
                            <p><img class="loader" src="assets/img/video-throbber.gif" alt="">
                            </p>
                            <p class="percent"></p>
                        </div>
                        <div class="img-bg"><img class="video-img" src="assets/img/openingscenewide_EN.jpg" alt="Putlocker">
                        </div>
                        <div class="form-container">
                            <form>
                                <div class="row">
                                    <div class="small-12 medium-10 medium-centered columns text-center">
                                        <div class="small-12 columns text-center cone"><img class="popcorn-img" data-interchange="[assets/img/movie-popcorn-icon.png, (mobile)], [assets/img/movie-popcorn-icon.png,, (desktop)]" alt="">
                                        </div>
                                        <div class="small-12 columns">
                                            <p><span class="video-popup-text">You must be logged in to stream ""<?php echo $judulnya;?>"". Please create a FREE account. </span>
                                            </p> <a href="supportus.php" class="submit-button x-domain" style="border:none !important;">Create a Free Account Now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="controls">
                        <div class="small-1 medium-1 large-1 no-col-hd-pad columns"><i class="icon-play"></i><a href="supportus.php" class="x-domain"><i class="icon-pause"></i></a>
                        </div>
                        <div class="small-9 medium-8 large-5 columns">
                            <div class="time">
                                <div class="time-full buffer-play"></div>
                                <div class="time-buffer buffer"></div>
                            </div>
                        </div>
                        <div class="small-0 medium- 0 large-1 columns show-for-large-up"><span class="timer">1.26:12</span>
                        </div>
                        <div class="small-1 medium-1 columns hide-for-large-up"><i class="icon-vol"></i>
                        </div>
                        <div class="small-0 medium-0 large-3 columns no-col-left-pad show-for-large-up">
                            <div class="small-0 medium-0 large-3 columns"><i class="icon-vol"></i>
                            </div>
                            <div class="small-0 medium-0 medium-9 columns">
                                <input type="text" data-slider="true" value="0.4" data-slider-highlight="true">
                            </div>
                        </div>
                        <div class="small-0 medium-1 large-1 columns no-col-hd-pad show-for-medium-up"><a href="supportus.php" class="x-domain"><i class="icon-hd"></i></a>
                        </div>
                        <div class="small-0 medium-1 large-1 columns no-col-left-pad show-for-medium-up"><a href="supportus.php" class="x-domain"><i class="icon-fullscreen"></i></a>
                        </div>
                    </div>

                    <div class="movie-data">
                        <div class="available-formats-wrapper">
                            <div class="available-formats">Available Formats</div>
                            <div class="available-formats-img"><img data-interchange="[assets/img/available-formats-img.png, (mobile)], [assets/img/available-formats-img.png,, (desktop)]" alt=""> </div>
                            <div class="available-formats-img-mobile"><img data-interchange="[assets/img/available-formats-img-mobile.png, (mobile)], [assets/img/available-formats-img-mobile.png,, (desktop)]" alt=""> </div>
                            <a href="supportus.php" class="x-domain">
                                <div class="download-button"><img data-interchange="[assets/img/download-cloud.png, (mobile)], [assets/img/download-cloud.png,, (desktop)]" alt="">
                                    <div class="download-text">Continue
                                        <br>
                                        <div class="related-videos">
                                            <div id="random-number3"></div>related videos</div>
                                    </div>
                                </div>
                            </a>
                            <div class="secure-wrapper">
                                <div class="secure">Secure Verified</div><img data-interchange="[assets/img/secure-icon.png, (mobile)], [assets/img/secure-icon.png,, (desktop)]" alt=""> </div>
                        </div>

                        <div class='small-12 medium-8 large-9 no-col-pad columns' style="width:99%;">
                            <div class="members-title">Members Reviews</div>
                            <div class="members-your-search">Your Search: </div>
                            <div class="members-title-keyword"><?php echo $judulnya;?></div>
                            <div class='clear'></div>
                            <div class="members-related">
                                <div id="random-number2"></div>related files found</div>
                            <div class="members-stars"><img data-interchange="[assets/img/stars-icons.jpg, (mobile)], [assets/img/stars-icons.jpg,, (desktop)]" alt="">
                            </div>
                            <div class='clear'></div>
                            <div class="members-subtitle">1.26:12 MIN | 4K ULTRAHD | FULL HD (1080p) | SD</div>
                        </div>
                        <div class='clear'></div>
                        <div class="comment-box">
                            <div class="comment-user-icon">
                                <img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-username">JPEREZ650</div>
                            <div class='clear'></div>
                            <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-days">3 hours ago</div>
                            <div class='clear'></div>
                            <div class="comment-msg">love this place! A+++</div>
                        </div>
                        <div class="comment-box">
                            <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-username">xKevMas</div>
                            <div class='clear'></div>
                            <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-days">5 hours ago</div>
                            <div class='clear'></div>
                            <div class="comment-msg">Fastest service ive ever seen in my life and really great quality. I recommend using this site for everything!!!</div>
                        </div>
                        <div class="comment-box">
                            <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-username">miracoolix</div>
                            <div class='clear'></div>
                            <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-days">2 days ago</div>
                            <div class='clear'></div>
                            <div class="comment-msg">Thank you very much - i was looking for this for a veeery long time!</div>
                        </div>
                        <div class="comment-box">
                            <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-username">MjrTom</div>
                            <div class='clear'></div>
                            <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                            </div>
                            <div class="comment-days">2 days ago</div>
                            <div class='clear'></div>
                            <div class="comment-msg">Glad to have found you
                                <3</div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-username">Movie Hunter</div>
                                <div class='clear'></div>
                                <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-days">3 days ago</div>
                                <div class='clear'></div>
                                <div class="comment-msg">great stuff all around, fantastic quality</div>
                                <div class="comment-box-reply">
                                    <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                                    </div>
                                    <div class="comment-username">Anne Marie D</div>
                                    <div class='clear'></div>
                                    <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                                    </div>
                                    <div class="comment-days">3 days ago</div>
                                    <div class='clear'></div>
                                    <div class="comment-msg">I agree :)</div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-username">majoryX</div>
                                <div class='clear'></div>
                                <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-days">4 days ago</div>
                                <div class='clear'></div>
                                <div class="comment-msg">Wow!!!</div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-username">veereenaa</div>
                                <div class='clear'></div>
                                <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-days">5 days ago</div>
                                <div class='clear'></div>
                                <div class="comment-msg">oh - even works on my telly</div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-username">DontAskMeThat</div>
                                <div class='clear'></div>
                                <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-days">5 days ago</div>
                                <div class='clear'></div>
                                <div class="comment-msg">pleaazze also offer airplay!</div>
                                <div class="comment-box-reply">
                                    <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                                    </div>
                                    <div class="comment-username">Olivierwifi</div>
                                    <div class='clear'></div>
                                    <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                                    </div>
                                    <div class="comment-days">5 days ago</div>
                                    <div class='clear'></div>
                                    <div class="comment-msg">Yeah! Apple TV rules!</div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-user-icon"><img data-interchange="[assets/img/user-icon.png, (mobile)], [assets/img/user-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-username">CindyCoops</div>
                                <div class='clear'></div>
                                <div class="comment-time-icon"><img data-interchange="[assets/img/clock-icon.png, (mobile)], [assets/img/clock-icon.png,, (desktop)]" alt="">
                                </div>
                                <div class="comment-days">6 days ago</div>
                                <div class='clear'></div>
                                <div class="comment-msg">these are some of the best movies i've ever seen!</div>
                            </div>
                        </div>
                        <div></div>
                        <div class="footer">
                            <div class="footer-copyright"> *This filename has been transmitted via an external affiliate, we can therefore furnish no guarantee for the existence of this file on our servers. We match keywords, searched from 3rd-party sites, to affiliate-networks offering unlimited access to licensed entertainment content. We allows visitors, otherwise looking for free-content to enjoy more for less.
                                <br>
                                <br>&copy; 2005 - 2015</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jQuery.js"></script>
        <script src=//ajax.googleapis.com/ajax/libs/webfont/1.4.2/webfont.js></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Open Sans']
                }
            });
            $(document).foundation();
        </script>
</body>
</html>