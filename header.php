<head>
        <link rel='stylesheet' href='style.css'>
        <link rel='stylesheet' href='badge.css'>
        <script src="playerData.js"></script>
    </head>
    <body style='margin:0px'>
        <div id='header' class="lion_header">
            <section id='clubsites'>
                <a href="./dashboard.php"><img class='floatLeft' src='images/premier-league-logo-header.svg' alt='logo' title='logo' /></a>
                <div class='floatLeft' id='padding17'>Club Sites</div>
                <div id='paddingAuto'>
                    <img class='crest' src='images/team-crest-afcb.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-chelsea.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-tots.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-liverpool.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-mcity.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-manchester.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-lcity.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-burnly.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-watford.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-wolf.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-cardiff.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-crystal.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-newcastle.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-fulham.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-huddersfiled.png' alt='logo' title='logo' />
                    <img class='crest' src='images/team-crest-south.png' alt='logo' title='logo' />
                    <span class='badge-25 ACM'></span>
                </div>
                </section>
            <section id='mainHeader'>
                <img src='images/premier-league-logo-header-mob.svg' id='mobileLogo' alt='logo' title='logo' />
                <div class='floatLeft'>
                    Premier League
                </div>
                <a href="./dashboard.php">
                    <div class='button' id='stats'>
                        Stats
                    </div>
                </a>
                <a href='index.php'>
                    <div class='button floatRight' id='signin'>
                        <script>
                            document.write('Logout, ' + localStorage.getItem('username'))
                            
                        </script>
                    </div>
                </a>
            </section>
        </div>
        <div class='content'>
                <div id='title' class="stats_centre">
                    <h1 class='floatLeft padding10'>Stats Centre</h1>
                    <div class='padding25 floatRight' id="searchBtn">
                        <form>
                            <input type='text' name='search' id='playerNameBtn' placeholder='Enter Player Name' />
                            <input type='submit' value='Search' />
                        </form>
                        <?php
                        include 'playerData.php';
                        
                        $connString = "mysql:host=localhost;dbname=soccer_site";
                        $user = "cs310";
                        $pass = "cs310";
                        
                        $pdo = new PDO($connString,$user,$pass);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $possible = [];
                        if(empty($_GET)){

                        }else if(isset($_GET['search'])){
                            $search = $_GET['search'];
                            $statement1 = $pdo->prepare("SELECT Name FROM attackers WHERE Name LIKE '%$search%'");
                            $statement2 = $pdo->prepare("SELECT Name FROM defenders WHERE Name LIKE '%$search%'");
                            $statement3 = $pdo->prepare("SELECT Name FROM goalkeepers WHERE Name LIKE '%$search%'");
                            $statement1->execute();
                            $statement2->execute();
                            $statement3->execute();
                            $counter1=$statement1->rowCount();
                            $counter2=$statement2->rowCount();
                            $counter3=$statement3->rowCount();
                            $R1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                            $R2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
                            $R3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
                            
                            for($z = 0; $z < $counter3; $z++){
                                array_push($possible,$R3[$z]['Name']);
                            }
                            for($x = 0; $x < $counter1; $x++){
                                array_push($possible,$R1[$x]['Name']);     
                            }
                            for($y = 0; $y < $counter2; $y++){
                                array_push($possible,$R2[$y]['Name']);     
                            }
                            for($i = 0; $i < count($possible);$i++){
                                echo "<p>$possible[$i]</p>";
                            } 
                            
                        }

                        
                        ?>
                    </div>
                </div>
            </div>
            <div id='height100' class='contentSideNav'>
                <div class='hasSideNav'>
                    <div id='height35'></div>
                    <a href='./dashboard.php'>
                        <div class='sideNavButton'>Dashboard
                            <i class='floatRight chevron fas fa-chevron-right'></i>
                        </div>
                    </a>
                    <a href='./playerstats.php'>
                        <div class='sideNavButton'>Player Stats
                            <i class='floatRight chevron fas fa-chevron-right'></i>
                        </div>
                    </a>
                    <a href='./clubstats.php'>
                        <div class='sideNavButton'>Club Stats
                            <i class='floatRight chevron fas fa-chevron-right'></i>
                        </div>
                    </a>
                    <!-- <a href='./allStats.php'>
                    <div class='sideNavButton'>All-time Stats
                        <i class='floatRight chevron fas fa-chevron-right'></i>
                    </div>
                    </a> -->
                    <a href='./contactUs.html'>
                    <div class='sideNavButton'>Contact Us
                        <i class='floatRight chevron fas fa-chevron-right'></i>
                    </div>
                    <a href='./aboutUs.html'>
                    <div class='sideNavButton'>About Us
                        <i class='floatRight chevron fas fa-chevron-right'></i>
                    </div>
                    </a>
                </div>
        </div>