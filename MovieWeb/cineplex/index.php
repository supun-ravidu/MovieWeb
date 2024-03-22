

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cineplex</title>
    <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-5C5L5eE7K5Hz6I9m9Hq6eEQh2tWJZL9S6/s5Wvz9SxvHl3vGSx4CkO3a3s0RPIgy" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


        <script src="https://kit.fontawesome.com/d97b87339f.js" crossorigin="anonymous"></script>




        <a href="cineplex/search_page.php">Search Page</a>
 <!-- edt  -->
    <style>
        #background-video {
        width: 100%; 
        height: auto; 
    }
    </style>

</head>


<body>


    <video autoplay loop muted playsinline id="background-video">
        <source src="yt1s.com - Sony Digital Cinema 4K  THEATRICAL INTRO  TRAILER  HD _1080p.mp4" type="video/mp4">
    </video>


    <header class="header">
        <a href="#" class="logo"> Cineplex.com</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a  href="#home"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>home</em></a>
            <a href="#Movielisting" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>Movie listing</em></a>
            <a href="#showtimes"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>show times</em></a>
            <a href="theater_info.html"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>information about the theater</em></a>
            <a href="#specialevents"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>special events</em></a>
            <a href="theater_info.html#promotion"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>promotion</em></a> <!-- Updated Link -->
            <a href="#contact"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>contact</em></a>
            <a href="#Booking"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>Booking</em></a>
            <a href="viewStaffMembers.php" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>Staff Member</em></a>
        

            <div class="search-box">
                <input class="search-input" type="text" placeholder="Search something..">
                <button class="search-btn"><i class="fas fa-search"></i></button>
              </div>

              <a href="register.html"class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>Register</em></a> <!-- Add this line for Register -->

            <a href="adminlogin.php" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green"><em>Admin Login</em></a>

            
        </nav>

        

        
        
    </header>


    <section class="home" id="home">
   
        <div class="wrapper">
           
                <div class="box" style="background: url(images/home1.jpg) no-repeat;">
                <div class="content">
                    <span>We’re doing our part to help keep you safe.</span>
                    <h5>Now you can experience Cineplex Theatre in three different ways, enjoying everything from the perks you love to the everyday value you seek.</h5>
                    <a href="#category" class="btn">get started</a>            
                </div>  
        </div>
    </section>

    <!-- Now Showing -->

    <section class="Movielisting" id="Movielisting">

        <h1 class="heading">Now Showing!</h1>
    
        <div class="box-container">
    
                <div class="box">
                    <img src="images/category-1.jpg" alt="Aquaman and the Lost Kingdom (3D)">
                    <h3>Aquaman and the Lost Kingdom (3D)</h3>
                    <p>Black Manta, still driven by the need to avenge his father's death and wielding the power of the mythic Black Trident, will stop at nothing to take Aquaman down once and for all. To defeat him, Aquaman must turn to his imprisoned brother Orm, the former King of Atlantis, to forge an unlikely alliance in order to save the world from irreversible destruction.</p>
                    <a href="https://www.imdb.com/title/tt9663764/" class="btn">read more</a>
                </div>
    
            <div class="box">
                <img src="images/category-2.jpg" alt="Migration">
                <h3>Migration </h3>
                <p>After a migrating duck family alights on their pond with thrilling tales of far-flung places, the Mallard family embarks on a family road trip, via New York City, to tropical Jamaica.</p>
                <a href="https://en.wikipedia.org/wiki/Migration_(2023_film)" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="images/category-3.jpg" alt="The Beekeeper">
                <h3>The Beekeeper</h3>
                <p>One man’s campaign for vengeance takes on national stakes after he is revealed to be a former operative of a powerful and clandestine organization known as Beekeepers.</p>
                <a href="https://en.wikipedia.org/wiki/The_Beekeeper_(2024_film)" class="btn">read more</a>
            </div>
    
        </div>
<br>
<br>
<br>
<br>
<br>
     <!-- edt  -->

     <div class="btn-container">
        <a href="#Booking" class="btn">Book Now</a>
    </div>
        
   
    




















    
    </section>
    <section class="packages" id="packages">

        <h1 class="heading">Coming Soon</h1>
    
        <div class="box-container">
    
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="img-1">
                </div>
                <div class="content">
                    <h3>Dune: Part Two</h3>
                    <h3> In Cinema 1st Of March</h3>
                    <h3> 2h 46m</h3>
                    <p>Follow the mythic journey of Paul Atreides as he unites with Chani and the Fremen while on a warpath of revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the known universe, Paul endeavors to prevent a terrible future only he can foresee.

                    </p>
                    <div class="price">Rs 2400- Rs 3000</div>
                    <h3> Matinee (early showings): 2400 </h3>
                    <h3> 3D/IMAX ticket: Rs 2500 </h3>
                    <h3> Premium theaters with reclining seats, dine-in options, etc.: 3000 </h3>
                    <a href="#Booking" class="btn">Book Now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="img-2">
                </div>
                <div class="content">
                    <h3>The First Omen</h3>
                    <h3> In Cinema 5th Of April</h3>
                    <h3> 2h 15m</h3>
                    <p>When a young American woman is sent to Rome to begin a life of service to the church, she encounters a darkness that causes her to question her own faith and uncovers a terrifying conspiracy that hopes to bring about the birth of evil incarnate.</p>
                    
                    
                    
                    <div class="price">Rs 2800- Rs 5000</div>
                    <h3> Matinee (early showings): 5000 </h3>
                    <h3> 3D/IMAX ticket: Rs 2500 </h3>
                    <h3> Premium theaters with reclining seats, dine-in options, etc.: 4800 </h3>
                    <a href="#Booking" class="btn">Book Now</a>
                </div>
            </div>




    
            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="img-3">
                </div>
                <div class="content">
                    <h3>Ghostbusters: Frozen Empire</h3>
                    <h3> In Cinema 15th Of April</h3>
                    <h3> 2h 36m</h3>
                    <p>The Spengler family returns to where it all started – the iconic New York City firehouse – to team up with the original Ghostbusters, who've developed a top-secret research lab to take busting ghosts to the next level. But when the discovery of an ancient artifact unleashes an evil force, Ghostbusters new and old must join forces to protect their home and save the world from a second Ice Age.</p>
                    
                    
                    <div class="price">Rs 2,999 - Rs 8,999</div>
                    <h3> Matinee (early showings): 5000 </h3>
                    <h3> 3D/IMAX ticket: Rs 6000 </h3>
                    <h3> Premium theaters with reclining seats, dine-in options, etc.: 8,999 </h3>
                    <a href="#Booking" class="btn">Book Now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="img-4">
                </div>
                <div class="content">
                    <h3>Madame Web</h3>
                    <h3> In Cinema 15th Of April</h3>
                    <h3> 1h 56m</h3>
                    <p>Forced to confront revelations about her past, paramedic Cassandra Webb forges a relationship with three young women destined for powerful futures...if they can all survive a deadly present.</p>
                    
                    
                    <div class="price">Rs 4,999 - Rs 8,999</div>
                    <h3> Matinee (early showings): 4999 </h3>
                    <h3> 3D/IMAX ticket: Rs 6000 </h3>
                    <h3> Premium theaters with reclining seats, dine-in options, etc.: 8,999 </h3>
                    <a href="#Booking" class="btn">Book Now</a>
                    
                    
                </div>
            </div>

    
            <div class="box">
                <div class="image">
                    <img src="images/img-5.jpg" alt="img-5">
                </div>
                <div class="content">
                    <h3>Kung Fu Panda 4</h3>
                    <h3> In Cinema 15th Of April</h3>
                    <h3> 1h 56m</h3>
                    <p>Po is gearing up to become the spiritual leader of his Valley of Peace, but also needs someone to take his place as Dragon Warrior. As such, he will train a new kung fu practitioner for the spot and will encounter a villain called the Chameleon who conjures villains from the past.</p>
                    
                    
                    <div class="price">Rs 1,999 - Rs 2,999</div>
                    <h3> Matinee (early showings): 2500 </h3>
                    <h3> 3D/IMAX ticket: Rs 2650 </h3>
                    <h3> Premium theaters with reclining seats, dine-in options, etc.: 2999 </h3>
                    <a href="#Booking" class="btn">Book Now</a>
                </div>
            </div>
    


            <div class="box">
                <div class="image">
                    <img src="images/img-6.jpg" alt="img-6">
                </div>
                <div class="content">
                    <h3>Godzilla x Kong: The New Empire</h3>
                    <h3> In Cinema 15th Of April</h3>
                    <h3> 2h 10m</h3>
                    <p>Following their explosive showdown, Godzilla and Kong must reunite against a colossal undiscovered threat hidden within our world, challenging their very existence – and our own.</p>
                    
                    
                    <div class="price"> Rs 8,999</div>
                    
        
                    <a href="#Booking" class="btn">Book Now</a>
                </div>
                
            </div>




            
    
        </div>

    </section>



<!-- Special Events Section Start -->
<section class="special-events" id="specialevents">
    <h2 class="section-title">Special Events</h2>
    <div class="events-container">
        <article class="event">
            <img src="images/sp1.jpg" alt="Avatar 5 Movie Poster">
            <div class="event-info">
                <h3>Avatar 5 Movie</h3>
                <p>Who's making Avatar 5: Crew List. A look at the Avatar 5 behind-the-scenes crew and production team. The film's director James Cameron last directed The Abyss and Avatar: The Way of Water. The film's writer James Cameron last wrote Avatar: The Way of Water and Alita: Battle Angel.</p>
            </div>
        </article>
        <article class="event">
            <img src="images/sp2.jpg" alt="Star Wars Untitled (2027) Movie Poster">
            <div class="event-info">
                <h3>Star Wars Untitled (2027) Movie</h3>
                <p>An untitled and unknown Star Wars project to be released in 2027. Adventure Sci-Fi Spin-off</p>
            </div>
        </article>
        <article class="event">
            <img src="images/sp3.jpg" alt="Event 3 Poster">
            <div class="event-info">
                <h3>Star Wars Untitled (2027) Movie</h3>
                <p>No plot details have been announced.</p>
            </div>
        </article>
        <article class="event">
            <img src="images/sp4.jpg" alt="Winnie-the-Pooh: Blood and Honey 2 Movie Poster">
            <div class="event-info">
                <h3>Winnie-the-Pooh: Blood and Honey 2 Movie</h3>
                <p>Who's Involved: Scott Chambers, Peter DeSouza-Feighoney, Alec Newman, Rhys Frake-Waterfield, Stuart Alson, Ryan Oliva, Simon Callow, Nicole Holland, Tallulah Evans, Marcus Massey, Eddy MacKenzie, Lewis Santer</p>
            </div>
        </article>
    </div>
</section>
<!-- Special Events Section End -->










<section class="Booking" id="Booking">
  <div class="wrapper1">
    <div class="title1">
      <h1>Book Now</h1>
    </div>
    <div class="contact-form">
      <form method="post" action="Booking.php">
        <div class="input-fields">
          <select name="movieSelection" class="input">
            <option value="">Select a Movie</option>
            <option value="Aquaman and the Lost Kingdom (3D)">Aquaman and the Lost Kingdom (3D)</option>
            <option value="Migration">Migration</option>
            <option value="The Beekeeper">The Beekeeper</option>
            <!-- movies listed in my category section -->
          </select>
          <input type="text" class="input" placeholder="Name" name="name">
          <input type="email" class="input" placeholder="Email Address" name="email" pattern=".+@gmail\.com">
          <input type="date" class="input" placeholder="Booking Date" name="bookingDate">
          <input type="phone" class="input" placeholder="Phone" name="phone">
          <br>
          <br>

          <label for="price-selection">Prices:</label>
          <select id="price-selection" name="price">
            <option value="1000">Rs 1000</option>
            <option value="3000">Rs 3000</option>
          </select>
          <br>
          <br>
          <br>

          
          <label for="seat-selection">Select Seat:</label>
          <select id="seat-selection" name="seat">
            <option value="">Select Seat Number</option>
            <!-- Dynamically generated seat options or hardcoded examples -->
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
          </select>

          <br>
          <br>

          <label for="car-parking">Car Parking:</label>
<select id="car-parking" name="carParking">
    <option value="No">No, thanks</option>
    <option value="Yes">Yes, please</option>
</select>
<br><br>






          
        </div>
        <div class="msg">
          <div class="btn1"><button type="submit">Book Now <i class="uil uil-message"></i></button></div>
        </div>
      </form>
    </div>
  </div>
</section>




    
    












      


    
    </section>
    <section class="contact" id="contact">
    
    <div class="wrapper1">
        <div class="title1">
          <h1>Contact us</h1>
        </div>
        <div class="contact-form">
            <form method = "post" action = "contact_us.php">
          <div class="input-fields">
            
            <input type="text" class="input"  placeholder="Name" name="name">
            <input type="email" class="input"  placeholder="Email Address" name="email" pattern=".+@gmail\.com">
            <input type="phone" class="input"  placeholder="Phone" name="phone">
            <input type="text" class="input"  placeholder="Subject" name="subject">
          </div>
          <div class="msg">
            <textarea placeholder="Message" name="message"></textarea> <br>
            <div class="btn1"><button type="submit">send <i class="uil uil-message"></i></div>
          </div>
          </form>
        </div>
        </div> 
    
    </section>





<!-- Show Times Section Start -->


<!-- If user click navbar auto go the area. to use <section class="showtimes" id="showtimes"> -->

<section class="showtimes" id="showtimes">
    <h1 class="heading">Show Times</h1>
    <div class="showtimes-container">
        <div class="movie">
            <h2>Show Times Aquaman and the Lost Kingdom (3D)</h2>
            <ul>
                <li>10:00 AM</li>
                <li>1:00 PM</li>
                <li>4:00 PM</li>
                <li>7:00 PM</li>
                <li>10:00 PM</li>
            </ul>
        </div>
        <div class="movie">
            <h2>Show Times Migration</h2>
            <ul>
                <li>10:30 AM</li>
                <li>1:30 PM</li>
                <li>4:30 PM</li>
                <li>7:30 PM</li>
                <li>10:30 PM</li>
            </ul>
        </div>
        <div class="movie">
            <h2>Show Times The Beekeeper</h2>
            <ul>
                <li>11:00 AM</li>
                <li>2:00 PM</li>
                <li>5:00 PM</li>
                <li>8:00 PM</li>
                <li>11:00 PM</li>
            </ul>
        </div>
        
    </div>
</section>
<!-- Show Times Section End -->




<section id="faq" class="faq-section">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3 class="faq-question">How do I book tickets?</h3>
            <p class="faq-answer">You can book tickets by visiting our Booking section or by clicking on the movie listings directly.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">What are the payment methods?</h3>
            <p class="faq-answer">We accept all major credit cards, online banking, and payments through select mobile apps.</p>
        </div>
        <h3 class="faq-question">How can I purchase tickets online?</h3>
        <p class="faq-answer">Tickets can be purchased through our website by navigating to the 'Booking' section, selecting your desired movie and showtime, and completing the payment process.</p>
    </div>
    <div class="faq-item">
        <h3 class="faq-question">Are there any discounts available?</h3>
        <p class="faq-answer">Yes, we offer various discounts for students, seniors, and during special promotions. Please check our 'Promotion' section for the latest deals.</p>
    </div>
    <div class="faq-item">
        <h3 class="faq-question">What are the COVID-19 safety measures in place?</h3>
        <p class="faq-answer">Your safety is our priority. We have implemented measures such as limited seating capacity, mandatory mask-wearing, frequent sanitation, and social distancing protocols.</p>
    </div>
    <div class="faq-item">
        <h3 class="faq-question">Can I refund or exchange my tickets?</h3>
        <p class="faq-answer">Tickets can be refunded or exchanged up to 24 hours before the showtime. For more details, please visit our 'Terms and Conditions' page.</p>
    </div>
    <div class="faq-item">
        <h3 class="faq-question">How can I contact customer service?</h3>
        <p class="faq-answer">You can reach out to us via the 'Contact us' section on our website, or call us directly at the phone number provided in the footer. Our team is here to help you with any inquiries or issues.</p>
    </div>    </div>
</section>
















    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>Quick links</h3>
                <a href="#home">home</a>    
                <a href="#packages">packages</a>
            </div>
    
            <div class="box">
                <h3>extra links</h3>
                <a href="#contact">ask questions</a>
                <a href="#packages">cominig soon</a>
                <a href="https://kccmultiplex.lk/privacy-policy/">privacy policy</a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+94776824351"> <i class="fas fa-phone"></i> +94776824351</a>
                <a href="mailto: miningsuppa@gmail.com"> <i class="fas fa-envelope"></i> miningsuppa@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Sri Lanka </a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/kccmultiplex/"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://www.instagram.com/kccmultiplex/"> <i class="fab fa-instagram"></i> instagram </a>
            </div>
        </div>
        <div class="credit">created by <span>Supun Rathnayaka</span> | ICBT Assigment!</div>
    </section>
    <!-- footer section ends -->
    <script src="js/script.js"></script>
</body>
</html> 
