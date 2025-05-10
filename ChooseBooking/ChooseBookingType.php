<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChooseBookingType</title>
    <!-- Import Swipper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="ChooseBookingType.css">
</head>
<body>
    <section class="ChooseBookingType">
    <!-- First Row -->
    <div class="container swiper">
        <div class="wrapper">
            <div class="card-list swiper-wrapper">
                <!-- Card1 -->
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="img-booking/basketball icon.png" alt="badminton">
                        <p class="card-tag">Basketball Court</p>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Basketball Court</h3>
                        <div class="card-footer">
                        <a href="#" class="card-button" onclick="submitCourtType('Basketball Court')">Book Now</a>                              </div>
                    </div>
                </div>
                <!-- Card2 -->
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="img-booking/volleyball icon.png" alt="Volleyball" margin= "10px">
                        <p class="card-tag">Volleyball Court</p>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Volleyball Court</h3>
                        <div class="card-footer">
                            <a href="#" class="card-button" onclick="submitCourtType('Volleyball Court')">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Card3 -->
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="img-booking/badminton icon.png" alt="Badminton">
                        <p class="card-tag">Badminton Court</p>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Badminton Court</h3>
                        <div class="card-footer">
                            <a href="#" class="card-button" onclick="submitCourtType('Badminton Court')">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Card4 -->
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="img-booking/Meeting room icon.jpg" alt="Meeting-room">
                        <p class="card-tag">Meeting Room</p>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Meeting Room</h3>
                        <div class="card-footer">
                            <a href="#" class="card-button" onclick="submitCourtType('Meeting Room')">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    </section>
    <form id="quizForm" action="ChooseBookingTime.php" method="POST" style="display: none;">
        <input type="hidden" name="courttype" id="courttype">
    </form>
    
    <script>
        function submitCourtType(type) {
            document.getElementById('courttype').value = type;
            document.getElementById('quizForm').submit();
        }
    </script>

    <!-- Import Swipper JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Linking Custom Script (Which we can customize the js code for swiper animation) -->
    <script src="ChooseBookingType.js"></script>
</body>
</html>