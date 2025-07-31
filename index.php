<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

    <title>Fit Life</title>
</head>
<body>
    
    <!--  HEADER SECION CODE -->
    <header>
        <a href="#home" class="logo">Fit <span>Life</span></a>
        <div class='bx  bx-menu' id="menu-icon"></div> 
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#bmi">BMI</a></li>
            <li><a href="#gym">Gym Workouts</a></li>
            <li><a href="#yoga">Yoga Workouts</a></li>
            <li><a href="#dietplan">Diet Plan</a></li>
            <li><a href="#premium">Premium</a></li>
            <li><a href="#review">Review</a></li>
        </ul>

        <div class="top-btn">
            <a href="register.php" class="nav-btn">Join Us</a>

        </div>
    </header>
    
      <!--Home SEction COde-->

        <section class="home" id="home">
            <div class="home-con">
                <h3> Build Your </h3>
                <h1>Dream Physique</h1>
                <h3><span class="multi-txt">Bodybuilding</span></h3>
                <p>Join us to transform your fitness journey with personalized training and nutrition plans.</p>
                <a href="#" class="btn">Join the journey</a>
            </div>
        </section>

        <!--BMI Section Code-->
        <section class="bmi" id="bmi">
            <h1 class="bmi-head">BMI <span>Calculator</span></h1>
            <div class="bmi-con">
                <h1>BMI Calculator</h1>

                <p>Height (cm)</p>
                <input type="number" id="height">

                <p>Weight (kg)</p>
                <input type="number" id="weight">

                <button id="calculate-btn">Calculate BMI</button>
                <div id="result"></div>
            </div>
        </section>

       

      <!--GYM workouts section -->
        <section class="gym" id="gym">
            <h2 class="heading">Gym<span> Workouts Plans</span></h2>
        
        
            <div class="gym-con">
                <div class="row"> 
                    <img src="images/bodystrength.jpg" alt="">
                    <h4>Muscle Building</h4>
                </div>

                <div class="row"> 
                    <img src="images/weightlift.jpg" alt="">
                    <h4>Weight Gain</h4>
                </div>

                <div class="row"> 
                    <img src="images/weightgain.jpg" alt="">
                    <h4>Weight Loss</h4>
                </div>

                <div class="row"> 
                   <img src="images/phys_build.jpg" alt="">
                   <h4>Strength Training</h4>
                </div>

                <div class="row"> 
                   <img src="images/cardio.jpg" alt="">
                   <h4>Cardio Workouts</h4>
                </div>

                <div class="row"> 
                   <img src="images/pushups.jpg" alt="">
                   <h4>HIITs Workouts</h4>
                </div>
            </div>
        </section>

        <!--Yoga Workouts section -->
        <section class="yoga" id="yoga">
            <h2 class="headings">Yoga <span>Workout Plans</span></h2>
            <div class="yoga-con">
                <div class="card"> 
                    <img src="images/yoga_weightgain.jpg" alt="">
                    <h4>Weight Gain</h4>
                </div>

                <div class="card"> 
                    <img src="images/yoga_weightloss.jpg" alt="">
                    <h4>Weight Loss</h4>
                </div>

                <div class="card"> 
                    <img src="images/stressrelief.jpg" alt="">
                    <h4>Yoga for Stress Relief</h4>
                </div>

                <div class="card"> 
                   <img src="images/flexibilty.jpg" alt="">
                   <h4>yoga for Flexibility</h4>
                </div>

                <div class="card"> 
                   <img src="images/morning_yoga.jpg" alt="">
                   <h4>Morning Yoga</h4>
                </div>

                <div class="card"> 
                   <img src="images/pcos_yoga.jpg" alt="">
                   <h4>Yoga for PCOS</h4>
                </div>
            </div>
        </section>

 <!-- Diet Plan Section -->
<section class="dietplan" id="dietplan">
  <h2 class="headings">Diet <span> Plan</span></h2>

  <div class="diet-tabs">
    <button class="tab-btn active" onclick="showDiet('loss', this)">Weight Loss</button>
    <button class="tab-btn" onclick="showDiet('gain', this)">Weight Gain</button>
    <button class="tab-btn" onclick="showDiet('strength', this)">Strength Building</button>

    <button class="tab-btn" onclick="showDiet('daily', this)">Daily Diet</button>
  </div>

  <div class="diet-content" id="diet-loss">
    <h3>Weight Loss Plan</h3>
    <ul>
      <li><strong>Breakfast:</strong> Oats with banana & almonds</li>
      <li><strong>Lunch:</strong> Brown rice + rajma curry + cucumber salad</li>
      <li><strong>Dinner:</strong> Palak paneer + 1 phulka + carrot salad</li>
      <li><strong>Snacks:</strong> Greek yogurt, nuts</li>
    </ul>
    <p><strong>Calories:</strong> ~1800/day • <strong>Macros:</strong> 40% Protein, 35% Carbs, 25% Fat</p>
  </div>

  <div class="diet-content hidden" id="diet-gain">
    <h3>Weight Gain Plan</h3>
    <ul>
      <li><strong>Breakfast:</strong> Peanut butter toast (2–3 slices) + banana smoothie</li>
      <li><strong>Lunch:</strong>3 rotis + dal tadka + rice + paneer sabzi + salad</li>
      <li><strong>Dinner:</strong> Veg pulao + curd + ghee</li>
      <li><strong>Snacks:</strong>Milkshake (mango/banana) + 1 boiled sweet potato</li>
    </ul>
    <p><strong>Calories:</strong> ~2800/day • <strong>Macros:</strong> 30% Protein, 50% Carbs, 20% Fat</p>
  </div>
   
  <div class="diet-content hidden" id="diet-strength">
  <h3>Muscle Building Plan</h3>
  <ul>
    <li><strong>Breakfast:</strong> Paneer-stuffed paratha + curd + 1 banana</li>
    <li><strong>Mid-Morning:</strong> Banana + whey protein shake</li>
    <li><strong>Lunch:</strong>  3 rotis + dal tadka + rice + mixed sabzi + salad</li>
    <li><strong>Evening Snack:</strong> Boiled eggs, almonds</li>
    <li><strong>Dinner:</strong> Soya curry + brown rice + green beans</li>
    <li><strong>Post-Workout:</strong> Whey shake or sprout chaat + coconut water</li>
  </ul>
  <p><strong>Calories:</strong> ~3000/day • <strong>Macros:</strong> 40% Protein, 35% Carbs, 25% Fats</p>
</div>

  <div class="diet-content hidden" id="diet-daily">
    <div class="daily-toggle">
      <h3>Daily Balanced Diet <span id="daily-label">(Option 1)</span></h3>
      <button class="toggle-btn" onclick="toggleDailyDiet()">Another Option</button>
    </div>

    <div id="daily-opt1">
      <ul>
        <li><strong>Breakfast:</strong> Besan chilla (2) + curd + mint chutney</li>
        <li><strong>Lunch:</strong> 2 chapatis + dal + seasonal sabzi + salad + curd</li>
        <li><strong>Dinner:</strong> Mixed vegetable soup + 1 multigrain toast + sautéed paneer</li>
        <li><strong>Snacks:</strong> Sprout chaat with lemon and masala</li>
      </ul>
      <p><strong>Calories:</strong> ~2200/day • <strong>Macros:</strong> 33% Protein, 40% Carbs, 27% Fat</p>
    </div>

    <div id="daily-opt2" class="hidden">
      <ul>
        <li><strong>Breakfast:</strong> Smoothie (banana + oats + nuts + milk)</li>
        <li><strong>Lunch:</strong> Moong sprouts salad + veg khichdi + papad</li>
        <li><strong>Dinner:</strong> Moong dal khichdi + salad + curd</li>
        <li><strong>Snacks:</strong> Multigrain toast with peanut butter</li>
      </ul>
      <p><strong>Calories:</strong> ~2200/day • <strong>Macros:</strong> 35% Protein, 40% Carbs, 25% Fat</p>
    </div>
  </div>
</section>


        <!--Premium Section Code-->
        <section class="premium" id="premium">
            <h2 class="headings">Our <span>Membership</span></h2>
            <div class="premium-head">

                <div class="box">
                    <h3>BASIC</h3>
                    <h2><span>$100/Month</span></h2>
                    <ul>
                        <li>Access to basic workout plans</li>
                        <li>Monthly fitness newsletter</li>
                        <li>Community support</li>
                    </ul>
                    <a href="join_payment.php" class="btn">
                        Join Now
                        <i class='bxr  bx-arrow-right'></i> 
                    </a>
                </div>

                <div class="box">
                    <h3>PRO</h3>
                    <h2><span>$150/Month</span></h2>
                    <ul>
                        <li>Access to advanced workout plans</li>
                        <li>Personalized nutrition guidance</li>
                        <li>24/7 support from trainers</li>           
                    </ul>

                    <a href="join_payment.php" class="btn">
                        Join Now
                        <i class='bxr  bx-arrow-right'></i> 
                    </a>
                </div>

                <div class="box">
                    <h3>PREMIUM</h3>
                    <h2><span>$300/Month</span></h2>
                    <ul>
                        <li>All PRO features</li>
                        <li>One-on-one coaching sessions</li>
                        <li>Exclusive access to premium content</li>
                        <li>Priority support</li>
                        <li>Access to special events</li>
                    </ul>

                    <a href="join_payment.php" class="btn">
                        Join Now
                        <i class='bxr  bx-arrow-right'></i> 
                    </a>
                </div>
                
            </div>
        </section>
    <!--review section-->

  <section class="review-section" id="review">
  <h1 class="headings">Review <span>Section</span></h1>
  <h2 class="review-subtitle">Share your experience with us!</h2>

  <form action="submit_review.php" method="POST" class="review-form">
    <input type="text" name="username" placeholder="Your Name" required>

    <div class="star-rating">
      <?php for ($i = 5; $i >= 1; $i--): ?>
        <input type="radio" name="rating" value="<?= $i ?>" id="star<?= $i ?>" required>
        <label for="star<?= $i ?>">★</label>
      <?php endfor; ?>
    </div>

    <textarea name="comment" placeholder="Write your review here..." required></textarea>
    <button type="submit">Submit Review</button>
  </form>

  <div class="review-list">
    <?php
      include 'db.php';
      $result = mysqli_query($conn, "SELECT * FROM reviews ORDER BY created_at DESC");
      while ($row = mysqli_fetch_assoc($result)):
    ?>
      <div class="review-card">
        <div class="review-header">
          <strong><?= htmlspecialchars($row['username']) ?></strong>
          <span class="stars"><?= str_repeat('★', $row['rating']) ?></span>
        </div>
        <p><?= htmlspecialchars($row['comment']) ?></p>
        <small><?= $row['created_at'] ?></small>
      </div>
    <?php endwhile; ?>
  </div>
</section>





    <!--Footer Section-->
        <footer class="footer">
            <div class="social">
                <a href="#"><i class='bx  bxl-facebook'></i></a>
                <a href="#"><i class='bx  bxl-instagram'></i></a>
                <a href="#"><i class='bx  bxl-twitter'></i></a>
                <a href="#"><i class='bx  bxl-linkedin'></i></a>
            </div>

            <p class="copyright">
                &copy; 2025 Fit Life. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </p>
        </footer>


<script src="bmi.js"></script>
<script src="script.js"></script>
<script src="login.js"></script>


</body>
</html>