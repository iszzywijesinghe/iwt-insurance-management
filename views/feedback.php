<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="../asserts/css/feedbackstyles.css">

</head>

<body>
    <div class="heading1">
        <h2>Customer Feedback</h2>
    </div>
    <div class="container">
        <div class="headings">
            <h3 class="heading2">Dear Customer</h3>
            <h1 class="heading2">We Are Like To Hear</h1>
            <h1 class="heading2">From You!</h1>
            <h4 class="heading2">Rate Us.</h4>
        </div>
        <div class="formSection">
            <form action="" method="post">
                <div class="stars" onclick="selectStars(1)"></div>
                <div class="stars" onclick="selectStars(2)"></div>
                <div class="stars" onclick="selectStars(3)"></div>
                <div class="stars" onclick="selectStars(4)"></div>
                <div class="stars" onclick="selectStars(5)"></div>
                <input type="hidden" name="rating" id="ratingInput">
                <div class="fbText">
                    <textarea name="fb_note" id="fb_note" rows="6" cols="50"></textarea>
                </div>
                <button type="submit" name>Submit</button>
            </form>
        </div>
    </div>
    <script src="../asserts/js/feedback.js"></script>
</body>

</html>