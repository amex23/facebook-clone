



<!--   ////////.........start header tob bar................//////-->
    <?php include 'include/header.php'; ?>
    <!--   ////////.........end header tob bar................//////-->


    <!--   ////////.........start main area................//////-->
    <main class="h-full">

        <div class="w-full">
              <div class="main_area mt-16">
                  <!--   ////////.........start first section................//////-->

                  <div class="first-section w-1/2 ml-32">
                      
                      <div class="news-feed">
                          <a href="index.php" class="active-wrap-2">
                              <div class="right-nav-icon">
                                  <img src="assets/image/newsfeed.JPG" alt="">
                              </div>
                              <div class="right-nav-text">&nbsp;Jobs Feed</div>
                          </a>
                      </div>


                      <div class="news-feed ">
                          <a href="messenger.php" class="active-wrap-3">
                              <div class="right-nav-icon">
                                  <img src="assets/image/msginnews.JPG" alt="">
                              </div>
                              <div class="right-nav-text">Messages</div>
                          </a>
                      </div>


                      <div class="news-feed ">
                          <a href="watch.php" class="active-wrap-3">
                              <div class="right-nav-icon">
                                  <img src="assets/image/watchnewsfeed.JPG" alt="">
                              </div>
                              <div class="right-nav-text">&nbsp;Hub</div>
                          </a>
                      </div>

                  </div>

              
                  <div class="second-section">
                      <!--                ............ Start Status write part................-->
                      <?php include 'include/status.php'; ?>
                      <!--                ............ end Status write part................-->

                      <!--                ............ Start timeline part................-->

                      <div class="news-feed-comp">
                      <?php $loadFromPost->homePosts($userid, $profileId, 20) ?>

                      </div>
                      <div class="loader-wrap align-middle " style="width: 100%;">

                      </div>
                  </div>
            </div> 
        </div>

    </main>

 <script src="assets/js/jquery.js "></script>
        <script src="assets/dist/emojionearea.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>


