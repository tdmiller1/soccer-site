<!DOCTYPE html>
<html style="padding: 0px; margin:0px;">
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="margin:0px">
        <div id="header">
            <section id="clubsites">
                <img class="floatLeft" src="images/premier-league-logo-header.svg" alt="logo" title="logo" />
                <div class="floatLeft" id="padding17">Club Sites</div>
                <div id="paddingAuto">
                    <img class="crest" src="images/team-crest-afcb.png" alt="logo" title="logo" />
                    <img class="crest" src="images/team-crest-afcb.png" alt="logo" title="logo" />
                    <img class="crest" src="images/team-crest-afcb.png" alt="logo" title="logo" />
                    <img class="crest" src="images/team-crest-afcb.png" alt="logo" title="logo" />
                    <img class="crest" src="images/team-crest-afcb.png" alt="logo" title="logo" />
                </div>
                </section>
            <section id="mainHeader">
                <img src="images/premier-league-logo-header-mob.svg" id="mobileLogo" alt="logo" title="logo" />
                <div class="floatLeft">
                    Premier League
                </div>
                <div class="button" id="stats">
                    Stats
                </div>
                <a href="index.html"><div class="button floatRight" id="signin">
                    SignIn
                </div></a>
            </section>
        </div>
        <div class="content">
                <div id="title">
                    <h1 class="floatLeft padding10">Stats Centre</h1>
                    <div class="padding25 floatRight">
                        <input type="text" placeholder="Enter Player Name" />
                        <input type="button" value="Search" />
                    </div>
                    <div id="padding25">
                        <button class="floatRight" id="shareButton">Share</button>
                    </div>
                </div>
            </div>
            <div id="height100" class="contentSideNav">
                <div class="sideNavMobile">Dashboard</div>
                <div class="hide">Test</div>
                <div class="hasSideNav">
                    <div id="height35">

                    </div>
                    <a href="./dashboard.html">
                    <div class="sideNavButton">
                        Dashbard
                        <i class="floatRight chevron fas fa-chevron-right"></i>
                    </div>
                    </a>
                    <a href="./playerstats.html">
                    <div class="sideNavButton">Player Stats
                        <i class="floatRight chevron fas fa-chevron-right"></i>
                    </div>
                    </a>
                    <a href="./clubstats.html">
                        <div class="sideNavButton">Club Stats
                            <i class="floatRight chevron fas fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="./AllStatsStats.html">
                    <div class="sideNavButton">All-time Stats
                        <i class="floatRight chevron fas fa-chevron-right"></i>
                    </div>
                    </a>
                    <a href="./Records.html">
                        <div class="sideNavButton">Records
                            <i class="floatRight chevron fas fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
        </div>
        
            <!--    CONTENT BELOW    -->
            <div class="content-style">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Team</th>
                    <th>Stats</th>
                </tr>
                <?php include 'components/dashboard.php' ?>
            </table>
            </div>
    </body>
</html>