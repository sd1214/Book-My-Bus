<!DOCTYPE html>
<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css" >
     <title>Booking_page</title>
  </head>

  <body>
      <header>
          <h1></h1>
      </header>
    <section class="banner2">
    	<img src="hill.jpg" height="700px" width="1400px"  alt="welcome banner">
    </section>
    <nav class="book_nav">
            <ul>
              <li><a href="logout.php" class="home">LOGOUT</a></li>
              <li><a href="my_booking.php" >MY BOOKINGS</a></li>
              <li><a href="cancel_booking.php">CANCEL BOOKING</a></li>
              <li><a href="payment_detail.php">PAYMENT DETAILS</a></li>
            </ul>
        </nav>
    <div class="form">
        <form>
                <label for="source">SOURCE</label><br>
                <input type="text" name="source" id="source">
                <label for="destination">DESTINATION</label><br>
                <input type="text" name="destination" id="destination">
                <label for="date">DATE</label><br>
                <input type="date" name="date" id="date">
                <label for="seats">NUMBER OF SEATS</label><br>
                <input type="text" name="seats" id="seats">
                <Button class="submit">Search Buses</button>
        </form>
        
    </div>