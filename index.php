<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create A Bracket</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            
        <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles.css" media="screen"/>

    </head>
    <script>
        var bracketarray = new Array(62);
        bracketarray = bracketarray.fill("Z", 0);
        var champion = ' ';
    </script>
    <body>
        <?php 
        session_start();
        require('connect.php');

        $champion = "champion";
        if(isset($_COOKIE[$champion])) {
            $con = new mysqli($hostname, $username, $password, $dbname);
            
            if(mysqli_connect_errno()) {
                echo "Can't Connect to MySQL Server. Error Code: " . mysqli_connect_error();
                return null;
            }
            
            $_SESSION["username"] = 'john';
            $sqlCHECKUSER ="SELECT * FROM maintable WHERE username= " . $_SESSION["username"];
            $result = mysqli_query($con, $sqlCHECKUSER);

            $sqlUPDATEUSER = "UPDATE maintable SET bracket = '".$_COOKIE['bracketarray']."', winner= '".$_COOKIE[$champion]."' WHERE username = '". $_SESSION["username"] ."'";
            //echo $sqlUPDATEUSER;
            mysqli_query($con, $sqlUPDATEUSER);
            mysqli_close($con);
            
        }
        ?>
        <!--Navbar-->
        <div class="flex-container title-container">
            <div id="logo">Logo Here</div>
            <div class="title-content"><a href="leaderboard.html">Scoreboard</a></div>
            <div class="title-content"><a href="index.html">Create</a></div>
            <div class="title-content"><a href="index.html">Your Bracket</a></div>
            <div class="title-content"><a href="login.php">Logout</a></div>
        </div>
        <!--This is for the Title Business-->
        <div class="headerbar">
            <h1 class="header-text">Create A Bracket</h1>
            <h2 class="header-text">Your Projected Point Score: </h2> <!--this will be addressed in the backend or in future javascript-->
            <h2 class="header-text">Predicted Average Wins: </h2>
        </div>
        <!--This is for the Title Business-->
        <div class="titlebar">
            <h2>Midwest</h2>
            <h2>East</h2>
        </div>
        <!--Midwest Region Games-->
        <div class="regions">
            <div class="region-container">
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="1" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">1</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Kansas</p>
                            </div>
                        </div>
                        <div class="team-box" id="2" onclick="ro64select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text">16</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">NC A&T</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="3" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">8</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Arizona</p>
                            </div>
                        </div>
                        <div class="team-box" id="4" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">9</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">LSU</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="5" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">5</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">BYU</p>
                            </div>
                        </div>
                        <div class="team-box" id="6" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">12</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">TX Tech</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="7" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">4</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Kentucky</p>
                            </div>
                        </div>
                        <div class="team-box" id="8" onclick="ro64select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text">13</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Yale</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="9" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">6</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">WVU</p>
                            </div>
                        </div>
                        <div class="team-box" id="10" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">11</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Providence</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="11" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">3</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">MSU</p>
                            </div>
                        </div>
                        <div class="team-box" id="12" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">14</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">UC Irvine</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="13" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">7</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Houston</p>
                            </div>
                        </div>
                        <div class="team-box" id="14" onclick="ro64select(this, 0)">
                            <div class="ranking">
                                <p class="ranking-text">10</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Stanford</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="15" onclick="ro64select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text">2</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Seton Hall</p>
                            </div>
                        </div>
                        <div class="team-box" id="16" onclick="ro64select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text">15</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Colgate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="17" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="18" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="19" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="20" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="21" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="22" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="23" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="24" onclick="ro32select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1 gc2 ">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="25" onclick="ro16select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="26" onclick="ro16select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="27" onclick="ro16select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="28" onclick="ro16select(this , 0)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="29" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="30" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--West Region Games-->
            <div class="region-container-reverse">
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="31" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">1</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">SDSU</p>
                            </div>
                        </div>
                        <div class="team-box" id="32" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">16</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Montana</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="33" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">8</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">St. Mary's</p>
                            </div>
                        </div>
                        <div class="team-box" id="34" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">9</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Florida</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box" >
                        <div class="team-box tb-underline" id="35" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">5</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Penn St.</p>
                            </div>
                        </div>
                        <div class="team-box" id="36" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">12</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">ETSU</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="37" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">4</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Louisville</p>
                            </div>
                        </div>
                        <div class="team-box" id="38" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">13</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Vermont</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="39" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">6</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Illinois</p>
                            </div>
                        </div>
                        <div class="team-box" id="40" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">11</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">UCLA</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="41" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">3</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Villanova</p>
                            </div>
                        </div>
                        <div class="team-box" id="42" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">14</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Hofstra</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="43" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">7</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Colorado</p>
                            </div>
                        </div>
                        <div class="team-box" id="44" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">10</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Oklahoma</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="45" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">2</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Dayton</p>
                            </div>
                        </div>
                        <div class="team-box" id="46" onclick="ro64select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text">15</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Wright St.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="47" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="48" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="49" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="50" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="51" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="52" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="53" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="54" onclick="ro32select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="55" onclick="ro16select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="56" onclick="ro16select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="57" onclick="ro16select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="58" onclick="ro16select(this , 30)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="59" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="60" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Champion Box -->
        <form action="index.php" method="post" class="champion">
            <h2>Champion</h2>
            <h2 id="finalchamp"></h2>
            <hr/>
            <p id="saveupdate"></p>
            <button class="btn btn-success btn-lg" onclick="yourbracketsave()" 
            type="submit">Save</button>
        </form>
        <!-- Semi-finals and Championship Game Box -->
        <div class="champions-bracket">
            <div class="score-box">
                <div class="team-box tb-underline" id="61" onclick="ffselect(this)">
                    <div class="ranking">
                        <p class="ranking-text"></p>
                    </div>
                    <div class="team-name">
                        <p class="team-name-text"></p>
                    </div>
                </div>
                <div class="team-box" id="62" onclick="ffselect(this)">
                    <div class="ranking">
                        <p class="ranking-text"></p>
                    </div>
                    <div class="team-name">
                        <p class="team-name-text"></p>
                    </div>
                </div>
            </div>
            <div class="score-box">
                <div class="team-box tb-underline" id="63" onclick="champselect(this)">
                    <div class="ranking">
                        <p class="ranking-text"></p>
                    </div>
                    <div class="team-name">
                        <p class="team-name-text"></p>
                    </div>
                </div>
                <div class="team-box" id="64" onclick="champselect(this)">
                    <div class="ranking">
                        <p class="ranking-text"></p>
                    </div>
                    <div class="team-name">
                        <p class="team-name-text"></p>
                    </div>
                </div>
            </div>
            <div class="score-box">
                <div class="team-box tb-underline" id="65" onclick="ffselect(this)">
                    <div class="ranking">
                        <p class="ranking-text"></p>
                    </div>
                    <div class="team-name">
                        <p class="team-name-text"></p>
                    </div>
                </div>
                <div class="team-box" id="66" onclick="ffselect(this)">
                    <div class="ranking">
                        <p class="ranking-text"></p>
                    </div>
                    <div class="team-name">
                        <p class="team-name-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Titlebar -->
        <div class="titlebar">
            <h2>North</h2>
            <h2>South</h2>
        </div>
        <!--North Region Games-->
        <div class="regions" style="margin-bottom: 100px;">
            <div class="region-container">
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="67" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">1</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Baylor</p>
                            </div>
                        </div>
                        <div class="team-box" id="68" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">16</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Radford</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="69" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">8</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Xavier</p>
                            </div>
                        </div>
                        <div class="team-box" id="70" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">9</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">AZ St.</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="71" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">5</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Butler</p>
                            </div>
                        </div>
                        <div class="team-box" id="72" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">12</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Akron</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline"id="73" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">4</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Auburn</p>
                            </div>
                        </div>
                        <div class="team-box" id="74" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">13</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Liberty</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="75" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">6</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Wisconsin</p>
                            </div>
                        </div>
                        <div class="team-box" id="76" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">11</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">N. Iowa</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="77" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">3</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Creighton</p>
                            </div>
                        </div>
                        <div class="team-box" id="78" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">14</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">N. Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="79" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">7</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Michigan</p>
                            </div>
                        </div>
                        <div class="team-box" id="80" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">10</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Wichita St.</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="81" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">2</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">FL St.</p>
                            </div>
                        </div>
                        <div class="team-box" id="82" onclick="ro64select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text">15</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Belmont</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1" >
                    <div class="score-box">
                        <div class="team-box tb-underline" id="83" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="84" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="85" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="86" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="87" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="88" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="89" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="90" onclick="ro32select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="91" onclick="ro16select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="92" onclick="ro16select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="93" onclick="ro16select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="94" onclick="ro16select(this , 66)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="95" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="96" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- South Region Box -->
            <div class="region-container-reverse">
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="97" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">1</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Gonzaga</p>
                            </div>
                        </div>
                        <div class="team-box" id="98" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">16</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Sienna</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="99" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">8</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">USC</p>
                            </div>
                        </div>
                        <div class="team-box" id="100" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">9</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Indiana</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="101" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">5</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Ohio St.</p>
                            </div>
                        </div>
                        <div class="team-box" id="102" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">12</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">SF Austin</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="103" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">4</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Oregon</p>
                            </div>
                        </div>
                        <div class="team-box" id="104" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">13</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">NMSU</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="105" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">6</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Iowa</p>
                            </div>
                        </div>
                        <div class="team-box" id="106" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">11</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="107" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">3</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Duke</p>
                            </div>
                        </div>
                        <div class="team-box" id="108" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">14</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">L. Rock</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="109" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">7</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Marquette</p>
                            </div>
                        </div>
                        <div class="team-box" id="110" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">10</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Virginia</p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="111" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">2</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">Maryland</p>
                            </div>
                        </div>
                        <div class="team-box" id="112" onclick="ro64select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text">15</p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text">NDSU</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="113" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="114" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="115" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="116" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="117" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="118" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="119" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="120" onclick="ro32select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="121" onclick="ro16select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="122" onclick="ro16select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="score-box">
                        <div class="team-box tb-underline" id="123" onclick="ro16select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="124" onclick="ro16select(this , 96)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-container-1">
                    <div class="score-box">
                        <div class="team-box tb-underline" id="125" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                        <div class="team-box" id="126" onclick="eeselect(this)">
                            <div class="ranking">
                                <p class="ranking-text"></p>
                            </div>
                            <div class="team-name">
                                <p class="team-name-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="bracket.js"></script>
        <!--Emmet generate 64 teams-->
        <!--(div.grid-container>div.score-box>div.team-box*2>(div.ranking>p.ranking-text)+div.team-name>p.team-name-text)*64-->
    </body>
</html>