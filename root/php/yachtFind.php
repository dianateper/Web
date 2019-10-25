<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="..\css\header.css" type="text/css"/>
	<link rel="stylesheet" href="..\css\footer.css" type="text/css"/>
	<link rel="stylesheet" href="..\css\style.css" type="text/css">
    <link rel="stylesheet" href="../css/yachtFind.css" type="text/css">
   
</head>
<body>
	<div>
		<?php include 'header.php';?>		
	</div>
    <!--------------------------------------END Header------------------------------------------------------------->
    <section class="yachts">
        <!-- <div class="yachts-text yachts-text1">YACHTS</div>
        <div class="yachts-text yachts-text2">YACHTS</div> -->
        <div class="containerY">
            <div class="yachts-flex">
                <div class="yachts-caption caption">YACHTS FOR CHARTER</div>
                <div class="yachts-data">01/06</div>
            </div>
            <div>
                <div class="yachts-sliderrr">
                    <div class="cardd"></div>
                </div>
                <div class="yachts-flex">
                    <a href="#" class="control"><span class="control-arrow"><</span>&bull;&bull;&bull;&#8195;Previous</a>
                    <a href="#" class="control">Next&#8195;&bull;&bull;&bull;<span class="control-arrow">></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------------------------------------------------------->
    <section class="find">
        <div class="containerY">
            <div class="find-caption caption">FIND YOUR CHOICE</div>
            <form action="">
                <label for="search" class="yachts-flex label">You can search by name<input type="text" name="search" class="form-search"></label>
                <label for="data" class="yachts-flex label">Choose dates<input type="date" name="data" id=""></label>
                <label for="price" class="yachts-flex label">Enter price range<div><input type="number"><input type="number"></div></label>
                <label for="services" class="yachts-flex label">Additional services<select name="services" id=""></select></label>
                <div class="yachts-flex align-items-center">
                    <a href="#" id="btn-hide" class="btn-hide">&bull;&bull;&bull;<span class="control-arrow">></span>&#8195;Show filters by specifications</a>
                    <button type="submit" id="form-btn" class="form-btn">FIND!</button>
                </div>
                <div id="specifications"> sdgsg</div>
            </form>
        </div>
    </section>
    <!--------------------------------------------------------------------------------------------------->
    <section class="about">
        <div class="yachts-text yachts-text1">YACHTS</div>
        <div class="yachts-text yachts-text2">YACHTS</div>
        <div class="containerY">
            <div class="about-caption caption">ABOUT ADDITIONAL SERVICES</div>
            <div class="about-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id sit volutpat laoreet quam donec feugiat 
                bibendum tincidunt. Hac sociis cursus malesuada fringilla ut tristique morbi. Condimentum id tincidunt 
                quisque ac, tristique neque varius donec. Lacus, fusce in molestie vel dolor.
            </div>
            <div class="yachts-flex category">
                <div class="about-category">
                    <button id="btn-1" class="about-category-btn">&bull;&bull;&bull;<span class="control-arrow">></span></button>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu portitor.
                </div>
                <div class="about-category">$2,300</div>
            </div>
            <div id="hide1" class="about-hide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor odio pellentesque vestibulum at sed et nunc nibh eget. Nibh diam turpis.</div>
            <div class="yachts-flex category">
                <div class="about-category">
                    <button id="btn-2" class="about-category-btn">&bull;&bull;&bull;<span class="control-arrow">></span></button>
                    Varius tellus ut.
                </div>
                <div class="about-category">$2,300</div>
            </div>
            <div id="hide2" class="about-hide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor odio pellentesque vestibulum at sed et nunc nibh eget. Nibh diam turpis.</div>
            <div class="yachts-flex category">
                <div class="about-category">
                    <button id="btn-3" class="about-category-btn">&bull;&bull;&bull;<span class="control-arrow">></span></button>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu portitor.
                </div>
                <div class="about-category">$2,300</div>
            </div>
            <div id="hide3" class="about-hide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor odio pellentesque vestibulum at sed et nunc nibh eget. Nibh diam turpis.</div>
            <div class="yachts-flex category">
                <div class="about-category">
                    <button id="btn-4" class="about-category-btn">&bull;&bull;&bull;<span class="control-arrow">></span></button>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu portitor.
                </div>
                <div class="about-category">$2,300</div>
            </div>
            <div id="hide4" class="about-hide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor odio pellentesque vestibulum at sed et nunc nibh eget. Nibh diam turpis.</div>
        </div>
    </section>
    <!----------------------------------------------------FOOTER----------------------------------------------------------------->
	<div>
		<?php include 'footer.php';?>	
	</div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/find.js"></script>
</body>
</html>