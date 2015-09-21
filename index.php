<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>On click event with pure javascript</title>
    <style>
li {
        display: inline-block;
        float: left;
        margin: 0 30px;
    }
    .block img {
            display: inline-block !important;
        }
        .no-block img {
            display: none !important;
        }
        #imagePlace {
            width: 700px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding-top: 600px;
        }
    </style>
    <script src=
    "http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type=
    "text/javascript"></script><!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <ul id="images-section">
            <li>
                <a href="#">image-1<img alt="image-1" class='img-class' src=
                "http://www.bikesdoctor.com/wp-content/uploads/2014/08/honda-crf-450-r-ready-for-test.jpg"
                style="display:none;"></a>
            </li>


            <li>
                <a href="#">image-2<img alt="image-2" class='img-class' src=
                "http://www.bikesdoctor.com/wp-content/uploads/2014/08/honda-crf-450-r-ready-for-test.jpg"
                style="display:none;"></a>
            </li>


            <li>
                <a href="#">image-3<img alt="image-3" class='img-class' src=
                "http://www.bikesdoctor.com/wp-content/uploads/2014/08/honda-crf-450-r-ready-for-test.jpg"
                style="display:none;"></a>
            </li>


            <li>
                <a href="#">image-4<img alt="image-4" class='img-class' src=
                "http://www.bikesdoctor.com/wp-content/uploads/2014/08/honda-crf-450-r-ready-for-test.jpg"
                style="display:none;"></a>
            </li>


            <li>
                <a href="#">image-5<img alt="image-5" class='img-class' src=
                "http://www.bikesdoctor.com/wp-content/uploads/2014/08/honda-crf-450-r-ready-for-test.jpg"
                style="display:none;"></a>
            </li>
        </ul>
    </div>


    <div id="imagePlace">
        The name of image is:
    </div>
    <script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) { 
            // IE doesnt support target attribute so just use this.
            function getEventTarget(e) {
                e = e || window.event;
                return e.target || e.srcElement; 
            }

            var ul = document.getElementById('images-section');

            ul.onclick = function(event) {
                var target = getEventTarget(event);
                removeClassBlock();
                target.className = target.className + "block";


                var altValue = target.getElementsByTagName('img')[0].getAttribute('alt');

                var div = document.getElementById('imagePlace');
                div.innerHTML =  'The name of image is: ' + altValue;


            };
            function removeClassBlock(){
                var ul = document.getElementById('images-section');     
                var total = ul.querySelectorAll("a");

                [].forEach.call(total, function(el){
                    el.classList.remove("block");
                });

            }
        });
    </script>
</body>
</html>