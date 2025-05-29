<?php
function get_CURL($url)
{
  $curl= curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCceICFydpWImLhBG6-ZoHqQ&key=AIzaSyBQp58HIETL0h__iVE59qinlDfCpcGpZtE');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBQp58HIETL0h__iVE59qinlDfCpcGpZtE&channelId=UCceICFydpWImLhBG6-ZoHqQ&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];


//instagram API
$clientId = '17841403866068575';
$accessToken = 'IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD';

$result = get_CURL('https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');


$usernameIG = $result['username'];
$profilePictureIG = $result['profile_picture_url'];
$followerIG = $result['followers_count'];

//latest IG Post
$resultGambar1 = get_CURL('https://graph.instagram.com/v22.0/18498261607041234?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');
$resultGambar2 = get_CURL('https://graph.instagram.com/v22.0/18051736658243399?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');
$resultGambar3 = get_CURL('https://graph.instagram.com/v22.0/17941680557983138?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');
$resultGambar4 = get_CURL('https://graph.instagram.com/v22.0/17992680457865870?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');
$resultGambar5 = get_CURL('https://graph.instagram.com/v22.0/17995470046825191?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');
$resultGambar6 = get_CURL('https://graph.instagram.com/v22.0/17985012052980023?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');
$resultGambar7 = get_CURL('https://graph.instagram.com/v22.0/17986873654822701?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');
$resultGambar8 = get_CURL('https://graph.instagram.com/v22.0/17886246626762674?fields=media_url&access_token=IGAAKRoLNecQFBZAFBMdnJ6QU1JWlZAEZAlRZAN3VieWJhMlVvaTQ2TUxCRXpOZAV91cnVadmVqSVpOOFBVa1hZAVkxLTjRYZAm1WLW1hZA2poZADI4Q1d2bE9EcFgtNUI3dm1IdjVOdjFuQ3V5ZADlGUFpWU2UwQ21PbjFud1FkbldmTTN5bwZDZD');


$gambar1 = $resultGambar1['media_url'];
$gambar2 = $resultGambar2['media_url'];
$gambar3 = $resultGambar3['media_url'];
$gambar4 = $resultGambar4['media_url'];
$gambar5 = $resultGambar5['media_url'];
$gambar6 = $resultGambar6['media_url'];
$gambar7 = $resultGambar7['media_url'];
$gambar8 = $resultGambar8['media_url'];


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home"> Fauzan Ryderz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profile3.jpg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Muhammad Fauzan</h1>
          <h3 class="lead">Lecturer | Programmer | Youtuber</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
          </div>
          <div class="col-md-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
          </div>
        </div>
      </div>
    </section>

    <!--Youtube & IG -->
    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?=$youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscriber; ?> Subscriber.</p>
                <div class="g-ytsubscribe" data-channelid="UCceICFydpWImLhBG6-ZoHqQ" data-layout="default" data-count="default"></div>
              </div> 
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0"
                allowfullscreen></iframe>
              </div>  
              </div>
            </div>           
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $profilePictureIG; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $usernameIG; ?></h5>
                <p><?=$followerIG; ?> Followers.</p>
              </div>
            </div>

            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar1; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar2; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar3; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar4; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar5; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar6; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar7; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar8; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </section>


    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
              <li class="list-group-item">West Java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2018.</p>
          </div>
        </div>
      </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>