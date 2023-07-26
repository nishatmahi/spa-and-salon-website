<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content:flex-end;
            align-items: flex-start;
            /* padding: 20px; */
        }

        .buttons {
            position: relative;
        }

        .buttons a {
            display: inline-block;
            margin-bottom: 10px;
            padding: 8px 12px;
            background-color: #FFE4C4;
            color: black;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
        }

        .buttons a:hover {
            background-color: blanchedalmond;
        }

        .image {
            animation: imageFadeIn 1s;
        }

        @keyframes imageFadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .image img {
            max-width: 280px;
            height: 70px;
        }
        p, h2 {
	font-family: "Poiret One", "Roboto Slab", serif;
  }
  .home{
    width:100%;
    height: 100vh;
    position: relative;
    background-image: url("Img/back.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    z-index: -1;
    display: flex;
    flex-flow: column;
    align-items: center;

    justify-content: center;
    background-size: 100% 100%;
    box-shadow: rgba(149,157,165,0.2) 0px 8px 24px;
    animation:changeImage 13s linear infinite;
    margin-top: 0;
}
.home::before{
    content: '';
     position: absolute;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 1;
}
@keyframes changeImage {
    0%{
        background-image: url("frontend/Img/container.jpg");
    }
    25%{
        background-image: url("frontend/Img/back.jpg");
    }
    50%{
        background-image: url("frontend/Img/back4.jpg");
    }
    75%{
        background-image: url("frontend/Img/container.jpg");
    }
    100%{
        background-image: url("frontend/Img/back3.jpg");
    }
}
.home .home-text h1{
    z-index: 2;
    color: whitesmoke;
    text-align: center;
    margin-top: 40px;
    /* text-shadow: #DDA0DD; */
    font-size: 50px;
}
  
    </style>
</head>
<body>
    <div class="container">
    <div class="image">
            <img src="{{url('frontend/Img/name.png')}}" alt="Your Image">
        </div>
        <div class="buttons">
            @if (Route::has('login'))
                <div style="position: fixed; top: 0; left: 0; padding: 6px 8px 4px 6px;">
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
    </div>
        <section class="home" id="home"> 
	<div class="home-text">
		<h1 style="font-family: 'Kanit', sans-serif;margin-left: 190px; font-size: 20x; color: white;">THIS IS YOUR MUSE</h1>
	  </div>
	</section>
    
</body>
</html>
