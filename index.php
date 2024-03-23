/* The provided code is an HTML document with embedded PHP code snippets. Here is a breakdown of what
the code is doing: */
<!DOCTYPE html>
<html>

<head>
    <title>STUDENT RESULTS RATING</title>
    <!-- Unicode Vietnamese -->
    <meta charset="UTF-8">
    <meta name="author" content="trendemy.com" />
    <!-- css definition file -->
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <h2>CLASSIFICATION OF STUDENT RESULTS</h2>
        <!-- Form to send processing results -->
        <!-- action is the landing page, the # value is sent to the current page itself.
        The method is post. -->
        <form action="#" method="post">
            <!-- Mathematics -->
            <div class="row">
                <div class="lbltitle">
                    <label>Math scores</label>
                </div>
                <div class="lblinput">
                    <!-- name="math" is the variable name sent to the server,
                    isset($_POST['math']) check if the variable is defined or not -->
                    <input type="number" name="math" value="<?php echo isset($_POST['math']) ? $_POST['math'] : ""; ?>" />
                </div>
            </div>
            <!-- TODO: Add similar sections for Physics and Chemistry scores -->

            <!-- Form send button, command button to send results -->
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Ratings" />
                </div>
            </div>
        </form>
        <!-- Display results -->
        <div class="result">
            <h2>Rating results</h2>
            <div class="row">
                <div class="lbltitle">
                    <label>Total points</label>
                </div>
                <div class="lbloutput">
                    <?php echo isset($_POST['btnsubmit']) ? $_POST['math'] + $_POST['physics'] + $_POST['chemistry'] : ""; ?>
                </div>
            </div>
        </div>
        <!--endResult-->

        <!-- TODO: Add similar sections for Rating and Priority points -->

    </div>
</body>

</html>