<?php include "header.php"; ?>

<body class="hide-overlay">
    <nav>
        <ul>
            <li class="list one"></li>
            <!-- <li class="list two"></li>
            <li class="list three"></li>
            <li class="list four"></li>
            <li class="list five"></li>
            <li class="list six"></li> -->
        </ul>
        <ul style="display:none;">
            <li class="list lines">
            	<span contenteditable="false" class="l1"></span>
            	<span contenteditable="false" class="l2"></span>
            	<span contenteditable="false" class="l3"></span>
            </li>
            <!-- <li class="list two"></li>
            <li class="list three"></li>
            <li class="list four"></li>
            <li class="list five"></li>
            <li class="list six"></li> -->
        </ul>
    </nav>
    <div class="overlay">
        <div class="overlay-content">
            <!-- <div id="title">
    <h1>Title</h1>
   </div> -->
            <div id="close"><span>close</span>
            </div>
            <ul id="weblist">
            </ul>
        </div>
    </div>
    <div class="background-content">
        <section class="offset60">
            <h1 contenteditable="false" id="title"></h1>
        </section>
        <section class="offset0">
            <div id="image" class="imgHero" style="background-image: url()"></div>
        </section>
        <section class="offset60_2">
            <h3><a contenteditable="false" id="link" target="_blank" href="http://gifpaint.hulea.org/"></a></h3>
            <p id="description" contenteditable="false"> </p>
        </section>
        <section class="offset40">
            <a id="next" class="next" href=""><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </section>
    </div>
    <div id="load"><div><b>Loading ...</b></div></div>
        <?php include "footer.php"; ?>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
