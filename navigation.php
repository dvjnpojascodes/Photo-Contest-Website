
<div class="top-nav">
    <div id="logo">WordsInPic</div>
    <nav>
      <?php
              if(isset($_SESSION["userEmail"])){
                echo "<a href='homepage.php'>Home</a>";
              } else {
                echo "<a href='index.php'>Home</a>";
              }
            ?>
        <?php
              if(isset($_SESSION["userEmail"])){
                echo "<a href='submitEntry.php'>Submit Entry</a>";
                echo "<a href='vote.php'>Vote</a>";
                echo "<a href='rankings.php'>Rankings</a>";
                echo "<a href='guide.php'> Participation Guide</a>";
              } else {
                echo "<a href='aboutus.php'>About Us</a>";
                echo "<a href='guide.php'>Participation Guide</a>";
              }
            ?>

        <div class="dropdown">
          <?php
              if(isset($_SESSION["userEmail"])){
                echo "<button class='dropbtn'>Logout <i class='fa fa-caret-down'></i>
                </button>";
        
              } else {
                echo "<button class='dropbtn'>Login <i class='fa fa-caret-down'></i>
                </button>";
              }
            ?>
            <div class="dropdown-content">
            
            <?php
              if(isset($_SESSION["userEmail"])){
                echo "<a href='includes/logout.inc.php'> Logout</a>";
              } else {
                echo "<a href='login.php'>Login</a>";
                echo "<a href='signup.php'> Create an Account</a>";
              }
            ?>
            </div>
          </div>
    </nav>
</div>