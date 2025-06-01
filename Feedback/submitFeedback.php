<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="submitFeedback.css">
</head>
<body class="lightmode">

    <div class="background-overlay"></div>

    <header class="header">
        <div class="left-group">
            <div class="Logo hideOnMobile">
                <div class="circle red"></div>
                <div class="circle green"></div>
                <div class="circle blue"></div>
                <div class="umt-text">UMT</div>
            </div>
            <nav class="navbar hideOnMobile">
                <a href="#">Timetable</a>
                <a href="#">Library</a>
                <a href="#">Facility Reservation</a>
                <a href="#">Transport Service</a>
                <a href="#">Feedback</a>
            </nav>
        </div>

        <div class="menu-btn" onclick="showSidebar('.sidebar')">
            <a href="#"><i class='bx bx-menu'></i></a>
        </div>

        <div class="right-group">
            <div class="icon-wrapper">
                <i class='bx bx-bell'></i>
            </div>
            <div class="icon-wrapper themeToggle">
                <i id="theme" class='bx bx-sun'></i> 
            </div>
            <a href="#" class="Profile icon-wrapper">
                <img src="img-feedback/profile.jpg" alt="User Profile">
            </a>
        </div>
    </header>

    <header class="sidebar">
        <div class="close" onclick="hideSidebar('.sidebar')">
            <i class='bx bx-x'></i>
        </div>
        <div class="Logo">
            <div class="circle red"></div>
            <div class="circle green"></div>
            <div class="circle blue"></div>
            <div class="umt-text">UMT</div>
        </div>
        <nav class="navbar">
            <a href="#">Timetable</a>
            <a href="#">Library</a>
            <a href="#">Facility Reservation</a>
            <a href="#">Transport Service</a>
            <a href="#">Feedback</a>
        </nav>
    </header>

    <main class="feedback-container">
        <h2>Submit Feedback</h2>
        <form class="feedback-form" id="feedback-form" action="SubmitFeedbackHandler.php" method="POST">
            <div class="form-group">
                <label>Email:</label>
                <span>XXX@ggmail</span>
                <input type="hidden" name="email" value="XXX@ggmail.com">
            </div>
            <div class="form-group">
                <label>UserID:</label>
                <span>TP076143</span>
                <input type="hidden" name="userID" value="TP076143">
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="text" id="contact" name="contact" placeholder="e.g. 0123456789" required>
            </div>
            <div class="form-group">
                <label>Feedback Type:</label>
                <div class="feedback-type">
                    <button type="button" class="type-btn active" onclick="selectType(this)">Suggestion</button>
                    <button type="button" class="type-btn" onclick="selectType(this)">Complaint</button>
                </div>
                <input type="hidden" id="feedbackType" name="feedbackType" value="Suggestion">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" placeholder="Enter your feedback here..." required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>

    </main>










    <script>
        function selectType(button) {
            document.querySelectorAll('.type-btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            document.getElementById('feedbackType').value = button.textContent.trim();
        }
    </script>





    <script src="template.js"></script>
</body>
</html>