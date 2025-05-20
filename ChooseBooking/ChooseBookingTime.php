<?php
if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["courttype"])) {
    header("Location: ChooseBookingType.php");
    exit(); 
}
$courttype = $_POST["courttype"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="ChooseBookingTime.css">
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
                <img src="img-booking/profile.jpg" alt="User Profile">
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
    <div class="container">
        <div class="content-box">
            <h1><?php echo "$courttype"; ?></h1>

            <div class="date-picker">
                <label for="reservation-date" class="date-label">Choose Date:</label>
                <input type="date" id="reservation-date" name="reservation-date" class="date-input">
            </div>

            <h3>Choose Desired Court/Room</h3>
            <div class="court-options">
                <div class="court-btn" onclick="selectCourt(1)" id="court1">Court 1</div>
                <div class="court-btn" onclick="selectCourt(2)" id="court2">Court 2</div>
                <div class="court-btn" onclick="selectCourt(3)" id="court3">Court 3</div>
                <div class="court-btn" onclick="selectCourt(4)" id="court4">Court 4</div>
            </div>

            <h3>Choose Time Slot</h3>
            <div class="time-slots">
                <div class="time-btn" onclick="selectTime(1)" id="time1" data-slot="1">9.00 am - 10.59 am</div>
                <div class="time-btn booked" onclick="selectTime(2)" id="time2" data-slot="2">11.00 am - 12.59 pm</div>
                <div class="time-btn" onclick="selectTime(3)" id="time3" data-slot="3">1.00 pm - 2.59 pm</div>
                <div class="time-btn" onclick="selectTime(4)" id="time4" data-slot="4">3.00 pm - 4.59 pm</div>
            </div>

            <div class="submit-button">
                <button class="book-btn" onclick="bookCourt()">Book Room/Court</button>
            </div>
        </div>
        
    </div>
    <script>
        const dateInput = document.getElementById('reservation-date');

        const today = new Date();
        const tomorrow = new Date();
        const nextWeek = new Date();
        tomorrow.setDate(today.getDate() + 1)
        nextWeek.setDate(today.getDate() + 8);

        const formatDate = (date) => {
        return date.toISOString().split('T')[0];
        };

        dateInput.min = formatDate(tomorrow);
        dateInput.max = formatDate(nextWeek);

        dateInput.addEventListener('change', () => {
        const selectedDate = dateInput.value;
        console.log("Selected date:", selectedDate);
        });
    </script>
    <script>
        let selectedCourt = null;
        let selectedTime = null;
    
        function selectCourt(courtId) {
            selectedCourt = courtId;
            document.querySelectorAll(".court-btn").forEach(btn => btn.classList.remove("selected"));
            document.getElementById(`court${courtId}`).classList.add("selected");
        }
    
        function selectTime(timeSlot) {
            const btns = document.querySelectorAll(".time-btn");

            btns.forEach(btn => {
                btn.classList.remove("selected");
            });

            const selectedBtn = document.querySelector(`.time-btn[data-slot="${timeSlot}"]`);

            if (selectedBtn.classList.contains("booked")) {
                selectedTime = null;
                return;
            }

            selectedBtn.classList.add("selected");
            selectedTime = timeSlot;
        }
    
        function bookCourt() {
            const date = document.getElementById("reservation-date").value;
            if (!selectedCourt || !selectedTime || !date) {
                alert("Please select date, court, and timeslot.");
                return;
            }
    
            alert(`Booking confirmed:\nCourt ${selectedCourt}\nTime: ${selectedTime}\nDate: ${date}`);
            // Here, you can submit a form or make a fetch() request
        }
    </script>

    <script src="template.js"></script>
</body>
</html>