<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="lib/css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-image: url('./images/pexels-evgeniy-grozev-960919.jpg'); background-size: cover; z-index: -1;object-fit: cover;">
    <nav class="nav blue-grey darken-2" >
    <div class="nav-wrapper">
    <a href="#" class="brand-logo" style="margin-top: 0.5%; margin-left: 1%; height: 120px!important; width:160px!important"><img src="./images/devprox-logo-white.svg"></a> 
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Explore</a></li>
        <li><a href="#">Offers</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">For Business</a></li>
        <li><a href="#">Hot Deals</a></li>
        <li><a href="#">Specials</a></li>
      </ul>
    </div>
    </nav>
    <div class="row ContentOne">
      <div class="ContentOne col s12 m6 xs12">
      <?php
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);
      ?>
    <div class="card horizontal">
    <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
          <div class="card-panel blue-grey darken-3">
            <span class="blue-text" style="font-size:x-large ;font-weight:bolder;"> <i class="small material-icons">cloud_upload</i>Upload  File</span>
          </div>
                <p>Simply click file below to upload and browse the required document from you computer.</p>
          </div>
            <div class="card-action grey lighten-2">
              <? include('upload.php'); ?>
            <form action="index.php" method='post'>
              <div class="file-field input-field">
                  <div class="btn blue-grey darken-3">
                      <span>File</span>
                      <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                      <input class="file-path validate" id="date" name="date" type="text">
                  </div>
                  <button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                    <!-- <button class="btn waves-effect waves-light blue-grey darken-3 right" name='submit' type="submit" style=" align-items: left!important;" type="submit" name="action">Upload
                        <i class="material-icons right">keyboard_arrow_right</i>
                  </button> -->
                </div>
               
            </form>   
            </div>
          </div>
        </div>

      </div>
      <div class="ContentTwo col s12 m6 xs12 text-white">
      <div class="card horizontal">
      
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
      <div class="card-panel blue-grey darken-3">
        <span class="blue-text" style="font-size:x-large ;font-weight:bolder"><i class="small material-icons">list</i>Generic Records</span>
      </div>
      <div class="card-panel white-text blue-grey darken-3" style="font-size:small; font-style: oblique;">
      <p>
          <?php
        $myfile = fopen("newfile3.csv", "w") or die("Unable to open file!");
        $names = array("Washington", "Free", "Barnes", "Frasier", "Clinton", "Sean", "Harry", "David", "Modric", "Zain", "Begue", "Simson", "Williams", "West", "Khubeka", "Thompsom", "Watson", "Queens", "Foden", "Gundwaon");
        $namesStr = implode(", ",$names);
        $name_list = array(1 => "Kim", 2 => "Paul", 3 => "Jessica", 4 => "Sammy", 5 => "Isaac", 6 => "Lee", 7 => "Tom", 8 => "Jessica", 9 => "Carey", 10 => "Gary", 11 => "Steve", 12 => "Mpho", 13 => "Genevieve", 14 => "Sammy", 15 => "Austin", 16 => "Lee", 17 => "Alix", 18 => "Jessica", 19 => "Carey", 20 => "Micheal");
        $surnames = array("Washington", "Free", "Barnes", "Frasier", "Clinton", "Sean", "Harry", "David", "Modric", "Zain", "Begue", "Simson", "Williams", "West", "Khubeka", "Thompsom", "Watson", "Queens", "Foden", "Gundwaon");
        
        // $surnamesStr = implode(", ",$surnames);
        shuffle($name_list);
        shuffle($surnames);
        // print_r($country_list);
        $randonMax= array(10,1000);

        $c=array_combine($name_list,$surnames);
        // print_r($c);
        for ($i = 0; $i < 2; ++$i) {
          foreach($c as $x => $val) {
          
            $abrev_key_l = 2;
            $abrev = "ABCDAGSHSXHJFYKLYUBNMUVECWXWCCGECAF";
            $randonAbrv = substr(str_shuffle($abrev), 0, $abrev_key_l);
            // print_r($randonAbrv);
  
            $randonAge = rand(10,100);
            $currTime =  date("h:i:sa");
            $int= mt_rand(1262055681,1262055681);
            $string = date("Y-m-d",$int);

            // print_r($randonAge);
            // print_r($currTime);
              echo "$x, $val,  $randonAbrv, $randonAge, $string<br>";
              $wyaviii = "$x, $val , $randonAbrv, $randonAge, $string\n";
              
              fwrite($myfile, $wyaviii);
        }
        }
        ?>
          </p>
      </div>
        
        </div>
        <!-- <div class="card-action">
          <a href="#">This is a link</a>
        </div> -->
      </div>
    </div>
      
        <?php
       

        // $dob = $randonAge

        


  

        $abrev_key_l = 2;
        $abrev = "ABCDAGSHSXHJFYKLYUBNMUVECWXWCCGECAF";
        $randonAbrv = substr(str_shuffle($abrev), 0, $abrev_key_l);
        // print_r($randonAbrv);

        // echo count($names);
        // echo count($names);

        // $max = count($names);
        // $done = false;
        // while(!$done){
        //     $numbers = range(0, $max);
            
        //     shuffle($numbers);
        //     $done = true;
        //     foreach($numbers as $key => $val){
        //         if($key == $val){
        //             $done = false;
        //             fwrite($myfile, $namesStr);
        //             echo $namesStr;
        //             break;
        //         }
        //     }
        // }

        // fwrite($myfile, $nameArr);

        // $surnames = array("Washington", "Free", "Barnes", "Frasier", "Clinton");
        // $surnamesStr = implode(", ",$surnames);
        // echo count($surnames);
        // fwrite($myfile, $surnamesStr);

        // $txt = "Minnie Mouse\n";
        // fwrite($myfile, $txt);
        // fclose($myfile);
        ?>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
  </html>