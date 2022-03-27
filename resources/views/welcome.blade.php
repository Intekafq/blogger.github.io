<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
    body {
        margin-top: 20px;
    }

    .card-style2 {
        position: relative;
        display: flex;
        transition: all 300ms ease;
        border: 1px solid rgba(0, 0, 0, 0.09);
        padding: 0;
        height: 100%;
    }

    .card-style2 .card-img {
        position: relative;
        display: block;
        background: #ffffff;
        overflow: hidden;
        border-radius: 0.25rem;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .card-style2 .card-img img {
        transition: all 0.3s linear 0s;
    }

    .card-style2:hover .card-img img {
        transform: scale(1.05);
    }

    .card-style2 .date {
        position: absolute;
        right: 30px;
        top: 30px;
        z-index: 1;
        color: #16bae1;
        overflow: hidden;
        padding-bottom: 10px;
        line-height: 24px;
        text-align: center;
        border: 2px solid #ededed;
        display: inline-block;
        background-color: #ffffff;
        text-transform: uppercase;
        border-radius: 0.25rem;
    }

    .card-style2 .date span {
        position: relative;
        color: #ffffff;
        font-weight: 500;
        font-size: 20px;
        display: block;
        text-align: center;
        padding: 12px;
        margin-bottom: 10px;
        background-color: #00baee;
        border-radius: 0.25rem;
    }

    .card-style2 .card-body {
        position: relative;
        display: block;
        background: #ffffff;
        padding: 2rem;
    }

    .card-style2 .card-body h3 {
        margin-bottom: 0.8rem;
    }

    .card-style2 .card-body h3 a {
        color: #004975;
    }

    .card-style2 .card-body h3 a:hover {
        color: #00baee;
    }

    .card-style2 .card-footer {
        border-top: 1px solid rgba(0, 0, 0, 0.09);
        background: transparent;
        padding-right: 2rem;
        padding-left: 2rem;
        -ms-flex-align: end;
        align-items: flex-end;
    }

    .card-style2 .card-footer ul {
        display: flex;
        justify-content: space-between;
        list-style: none;
        margin-bottom: 0;
    }

    .card-style2 .card-footer ul li {
        font-size: 15px;
    }

    .card-style2 .card-footer ul li a {
        color: #394952;
    }

    .card-style2 .card-footer ul li a:hover {
        color: #00baee;
    }

    .card-style2 .card-footer ul li i {
        color: #00baee;
        font-size: 14px;
        margin-right: 8px;
    }
    </style>
</head>

<body>
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="">Blogger</a>

            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6  sm:block">
                @auth
                <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">{{ Auth::user()->name }}</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
                @endif
                @endauth
            </div>
            @endif

    </nav>
    <section>
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="text-primary h6 pt-2">Latest Blog</h5>
                <h2 class="display-20 display-md-18 display-lg-16">Most recent our blog</h2>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 mb-2-6">
                    <article class="card card-style2">
                        <div class="card-img">
                        <img class="rounded-top" src="{{ asset($post->image ?? '') }}" alt="{{ $post->title }}" width="350px" height="280px">
                            <!-- <img class="rounded-top" src="https://via.placeholder.com/350x280/6A5ACD/000000" alt="..."> -->
                            <!-- <div class="date"><span>15</span>Sep</div> -->
                        </div>
                        <div class="card-body">
                            <h3 class="h5"><a href="#!">{{$post->title}}</a></h3>
                            <p class="display-30">{{$post->body}}</p>
                            <a href="{{ route('single') }}" class="read-more">read more</a>
                        </div>
                        <div class="card-footer">
                            <ul>
                                <li><a href="#!"><i class="fa fa-user"></i>{{$post->user->name}}</a></li>
                                <li><a href="#!"><i class="far fa-comment-dots"></i><span>26</span></a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                @endforeach

                
            </div>

        </div>
        </div>
    </section>
    <br>
   
    <!-- <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>{{$post->title}}</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;"><img src="{{ asset($post->image ?? '') }}" alt=""></div>
      
      <p></p>
    </div> -->
    <div class="whatsapp">
    <a href="https://wa.me/+919166933150?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank"> 
    <img src="{{ asset('WhatsApp.png') }}" alt="" width="100px" height="100px">

    </a>
</div>

    <div class="d-flex justify-content-center">
    {{$posts->links()}}
        </div>
    <div class="container">
        <span></span>
</div>
<style>
    .w-5{
        display:none;
    }
    .whatsapp{
        bottom:10px;
        left:10px;
        position: fixed;
    }
</style>
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */


/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}



/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/624041b20bfe3f4a876fe767/1fv5g19ea';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>