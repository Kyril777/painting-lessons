<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <!-- SASS-powered Stylesheets. -->
    <link type="text/css" rel="stylesheet" href="css/reset.css" />
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
  </head>

  <body>

    <!-- Header. -->
    <header>
      <nav id="main-nav">
        <div class="wrapper">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#lessons">Lessons</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <div class="lead-banner">
        <img src="images/young-artist.png" />
        <div class="banner-content">
          <div class="wrapper">
            <span class="title">Learn How to Paint</span>
            <span class="sub-title">In 4 weeks</span>
          </div>
        </div>
      </div>
    </header>

    <!-- Services section. -->
    <section id="about">
      <div class="wrapper">
        <h1>About Me</h1>
        <ul>
          <li>
            <img id="paint-stroke" src="images/red-paint-stroke.png" />
            <p>Recording<br />Services</p>
          </li>
          <li>
            <img id="paint-drop" src="images/paint-drop.png" />
            <p>Get a Printed<br />Certificate</p>
          </li>
          <li>
            <img id="paint-blot" src="images/yellow-paint-blot.png" />
            <p>Lessons via<br />Skype</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- Lessons section. -->
    <div class="lessons-banner" id="lessons">
      <img src="images/artist-at-work.png" />
      <div class="banner-content">
        <div class="wrapper">
          <span class="title">My Lessons Are Easy, Fun and Convenient</span>
          <ul id="lesson-types">
            <li>Lorem ipsum dolor sit amet, consectetur.</li>
            <li>Aenean commodo ligula eget dolor. </li>
            <li>Cum sociis natoque penatibus et magnis.</li>
            <li>Donec quam felis, ultricies nec.</li>
            <li>Donec pede justo, fringilla vel, aliquet nec.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Portfolio section. -->
    <section id="portfolio">
      <div class="wrapper">
        <h1>My Portfolio</h1>
        <ul>
          <li><img src="images/colorful-universe.jpg" /></li>
          <li><img src="images/decorative-floral-elements.jpg" /></li>
          <li><img src="images/painting-crop-field.jpg" /></li>
          <li><img src="images/grunge-hand.jpg" /></li>
          <li><img src="images/gradient-abstract.jpg" /></li>
          <li><img src="images/illustration-of-a-mermaid.jpg" /></li>
        </ul>
      </div>
    </section>


    <!-- Contact. -->
    <section id="contact">
      <div class="wrapper">
        <h1>Contact Me</h1>
          <div id="contact-container">
            <form action="/action_page.php">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">

              <label for="email">Email</label>
              <input type="text" id="email" name="email" placeholder="Your email address..">

              <label for="preference">Your Preferred Lesson</label>
              <select id="preference" name="preference">
                <option value="personal">Personal</option>
                <option value="group">Group</option>
                <option value="skype">Skype</option>
              </select>

              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </section>

    <!-- Footer. -->
    <footer id="footer">
      <h5>Learn in 4 Weeks</h5>
      <p>Design by iKyril.com</p>
    </footer>

  </body>
</html>
