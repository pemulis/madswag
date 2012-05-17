      <?php
        include 'lockoutcountdown.html';
      ?>
      <div class = 'left'>
        <?php
          //v1.014 made the What We Do section modular
          include 'whatwedo.html';
        ?>
        <div id = "likeButton">
          <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fmadswag.com&amp;layout=standard&amp;show_faces=true&amp;width=350&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:80px;" allowTransparency="true"></iframe>
        </div>
      </div>
      <div class = 'right'>
        <?php
        //get the user's ID
        $userID = $_SESSION['identifier'];
        
        //connect to the database
        $db = do_connect_to_database();
        
        //find their username to personalize the index
        $username = find_username($db, $userID);
        
        //echo their personalized greeting
        echo "<h3 class = 'center'>What's up, $username</h3>";
        ?>
        <p class = "center">
          Here's some stuff to click on:
        </p>
        <h4 class = "center">
          <a href = "games.php">Current Games</a>
        </h4>
        <h4 class = "center">
          <a href = "leaderboard.php">Leaderboard</a>
        </h4>
        <h4 class = "center">
          <a href = "findbar.php">Find A Bar</a>
        </h4>
        <h4 class = "center">
          <a href = "changepassword.php">Change Password</a>
        </h4>
        <h4 class = "center">
          <a href="logout.php">Log out</a>
        </h4>
      </div>