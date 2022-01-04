 <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <title>Photo Wall</title>
    <link type="text/css" rel="stylesheet" href="phase2.css">
    <script src="phase2.js" type="text/javascript"></script>

</head>

<body>
<div class="total">  
      
    <div class="icon">
        <img src="icon/titleicon.png" width="50px"class="tag"/>
        <br><br>
        <img src="icon/home.png" width="35px"class="tag"/>
        <br><br>
        <img src="icon/hashtag.png" width="35px"class="tag"/>
        <br><br>
        <img src="icon/bell.png" width="35px"class="tag"/>
        <br><br>
        <img src="icon/mail.png" width="35px"class="tag"/>
        <br><br>
        <img src="icon/user.png" width="35px"class="tag"/>
        <br><br>
        <img src="icon/bell.png" width="35px"class="tag"/>
    </div>

    <div class="tool">
        <div class="list">
            <img src="icon/more.png" width="35px"class="tag"/>
        </div>
        <div class="list">
            <img src="icon/delete.png" width="35px"class="tag"/>
        </div>
        <div class="list">
            <img src="icon/edit-button.png" width="35px"class="tag"/>
        </div>
    </div>

    <div class="row">
    <div class="intro">
        <div class="search"><input value="search here" style="font-size:25px"><div>
        <div class="check">
            <p class="title"><strong>Who to follow</strong></p>
            <div class="blog">
                <img src="自介/bobo.jpg" alt="" class="photo">
                <p class="small2"><strong class="big">BOBO</strong><br>@hefhewlfre</p>
                <button class="unfollow" onclick="unfollow()">follow</button>
            </div>
            <div class="blog">
                <img src="自介/weiwei.jpg" alt="" class="photo">
                <p class="small2"><strong class="big">WEIWEI</strong><br>@hdjkjgrg</p>
                <button class="unfollow" onclick="unfollow()">follow</button>
            </div>
            <div class="blog">
                <img src="自介/eric.jpg" alt="" class="photo">
                <p class="small2"><strong class="big">ERIC</strong><br>@almeetl5</p>
                <button class="unfollow" onclick="unfollow()">follow</button>
            </div>
            <div class="blog">
                <p class="blue">Show more</p>
            </div>
        </div>
    </div> 
    </div>

    
    
</div>
</body>

</html>