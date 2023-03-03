<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./new-complain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .inputDiv  
        {
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        .inputTitle
        {
            font-weight: bold;
        }
        body
        {
            background-color: rgb(255, 255, 255);
        }
        .inputC
        {
            border-radius: 10px;
            padding: 10px;
        }
    </style>
    <title>Feedback</title>
</head>
<body>
      
<nav>
        <div class="toggle-btn" onclick="toggleNav()">
        </div>
    <div style="display: flex; width: 100%;">
        <div>
            <img src="./SSIP_LOGo.png" style="height: 100px;" alt="">
        </div>  
       <div style="display: flex;flex-direction: column; align-items: center; justify-content: center;width: 100%;">
        <ul style="display: flex;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" id="nav-links">
          <li class="manu" style="margin-left: 25px;margin-right: 50px;"><a href="./new-complain.php">Make complaint</a></li>
          <li class="manu" style="margin-left: 25px;margin-right: 50px;"><a href="./trackinguser.php">Track Complaint</a></li>
          <li class="manu" style="margin-left: 25px;margin-right: 50px;"><a href="./feedback.php">Feedback</a></li>
        </ul>
    </div>
    </div>
      </nav>
      <form action="feedback-mail.php" method="POST" class="was-validated">
    <div class="container" style="z-index: -1;display: flex;flex-direction: column;">
    <div style=" display: flex;justify-content: center; margin-top: 50px;color: rgb(255, 157, 0);font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: italic;">
        <h2>Feedback Form</h2>
    </div>
        <div style="margin-top: 50px; background: linear-gradient(135deg, rgba(225, 204, 110, 0.1), rgba(221, 196, 56, 0.507));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 20px;
        border:1px solid rgba(255, 255, 255, 0.18);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);padding: 20px">
    <div class="inputDiv">
        <span class="inputTitle">Name
        </span>
        <textarea name="Name" class="form-control inputC" id="validationTextarea"
            placeholder="Please write Discription" class="inputC" required>
        </textarea>
    </div>
    <div class="inputDiv">
        <span class="inputTitle">Enter Your Email
        </span>
        <textarea name="Email" class="form-control inputC" id="validationTextarea"
            placeholder="Please write Discription" class="inputC" required>
        </textarea>
    </div>    
    <div class="inputDiv">
        <span class="inputTitle">Subject
        </span>
        <textarea name="subject" class="form-control inputC" id="validationTextarea"
            placeholder="Please write Discription" class="inputC" required>
        </textarea>
    </div>
    <div class="inputDiv">
        <span class="inputTitle">How was Your Experience</span>
        <select name="Experience" class="form-select inputC" id="topic" required
            aria-label="select example" class="inputC">
            <option selected>---Select---</option>
            <option value="Average" id="Average">Average</option required>
            <option value="Good" id="Good">Good</option required>
            <option value="Bad" id="Bad">Bad</option required>
        </select>
    </div>
    <div class="inputDiv">
        <span class="inputTitle">What do you like the most from our Website?</span>
        <textarea name="Best" class="form-control inputC" id="validationTextarea"
            placeholder="Please write Discription" class="inputC" required>
        </textarea>
    </div>
    <div class="inputDiv">
        <span class="inputTitle">What are the drawbacks of our websites?
        </span>
        <textarea name="Worst" class="form-control inputC" id="validationTextarea"
            placeholder="Please write Discription" class="inputC" required>
        </textarea>
    </div>
    <div class="inputDiv">
        <span class="inputTitle">Any other suggestions?
        </span>
        <textarea name="message" class="form-control inputC" id="validationTextarea"
            placeholder="Please write Discription" class="inputC" required>
        </textarea>
    </div>
    <input name="submit" type="submit" style="width: 150px;">
    </div>
    </div>  
    </form>
    <script src="./new-complain.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="response.js"></script>
    <script src="chat.js"></script>
    <script>
        window.onload = function () {
            var subjectSel = document.getElementById("subject");
            var topicSel = document.getElementById("topic");
            var chapterSel = document.getElementById("chapter");
            for (var x in subjectObject) {
                subjectSel.options[subjectSel.options.length] = new Option(x, x);
            }
            subjectSel.onchange = function () {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                    topicSel.options[topicSel.options.length] = new Option(y, y);
                }
            }
            topicSel.onchange = function () {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                }
            }
        }
    </script>
</body>
</html>