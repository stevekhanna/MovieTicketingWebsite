# MovieTicketingWebsite
CPSC 471: Database Final Project

Authors: Masroor Syed
Heejun Kim 
Steve Khanna


**Abstract:** In the age of information, it has become trivial for any business to have a
website/app to make it easy for users to buy products from anywhere in the world;
rather than having to go to the physical location of that business. This movie
ticketing website allows you to do just that. The idea with this website is to allow
users to browse through movies playing in the theatre and book tickets. Additionally,
users have the option to buy snacks and rent theatres. First, we describe the scope of
the project and our plan to solve the given problem. Later, we dive into all of the
functionality of this website and finally, we reach a conclusion that the website is
successful in achieving all the goals mentioned above.
**Introduction:** Almost all of us have had to suffer through the long, seemingly
unending queues at movie theatres just to find out that the movie was completely
booked out. The movie ticketing website allows you to skip the hassle of waiting in
line and book tickets, buy snacks and rent theatres from the comfort of your own
home.
This project achieves a way for users to skip the line, book movie tickets, buy snacks
and additional services offered by the theatre. This is done through the means of a
website. Customers can browse through and ultimately book movie tickets,
showtimes and other services offered by the theatre without having to be physically
present at the theatre.


**Project Design:** There are three types of users for our movie ticketing website.
Namely, regular customers (denoted as customers), members, and admins. The
extended entity relationship diagram explains how these three types are related to the
database.
Admins are responsible for adding and managing all information fed to the database
so that customers and members can view and book accordingly. This includes things
like, adding movies, services-snacks and renting-, theatres, timeslots, designated
theatres and timeslots to movies, designated theatres and timeslots for renting.
Furthermore, admins can view all data in the database (other than sensitive
information like passwords). Admins can view movies that are playing in the
cinema, snacks and the information related to them like name of snack and quantity,
renting information, accounts in the database, theatres, and all payments made for
bookkeeping.
Customers are categorized by anyone viewing the website and purchasing some
product that is not a member. Customers can browse the movies playing and book
the particular one they want to watch, select the quantity of tickets they want to buy,
and finally are redirected to the payment page. Right before the payment page, we
take in an email from that customer to add to the database. Customers are also able
to buy snacks if they so choose, by selecting the snack they want to buy and
selecting the quantity for it. The idea with this is that when they arrive at the theatre,
they can just skip the line and be given their snacks from the concession right away
with the evidence of a receipt.
Members are categorized by anyone who signs up for the movie ticketing website.
Sign up page can be accessed using the login button on the top righthand side and
clicking on sign up when redirected. Members have the same functionality as
customers. With the additional feature of being able to view and update their account
information.

Since the presentation, one new relationship called renting assignment was added.
This is needed because we want to make sure that a rentable timeslot in a particular
theatre cannot be used for assignment for movie. This ensures that if a user A has
booked a movie M1 in theatre 1 between start time = ST1 and end time = ET1 for a
particular date = D1; any other user cannot rent theatre 1 on date D1 between ST
and ET1 and vice versa. It also ensures that no theatres are allowed to be rented if
not within the time constraint provided by the admin.


**Implementation:**
The algorithm mentioned in lecture was followed fully for converting the EER to the
relational model. (The citation for the textbook is at the end). There were no unusual
decisions made during this process.
The DBMS of choice was phpMyAdmin. The SQL queries are provided below.



SQL Statements:
Functions and pseudocode:
**Select Movie:**
Inputs: @Movie_Name
Outputs:@Genre, @Role, @Rating, @Release Date Pseudocode: Connect to the
database
Query =
Select * From Movie
Where (Movie_Name=@Movie_Name); Parse Query
Execute Query
Close connection to the database
**Select TimeSlot:**
Inputs: @Time, @Date
Outputs: @Movie_Name, @Theatre Number, @Seat Number Pseudocode: Connect
to the database
Query =
Select * From TimeSlot
Where (Time=@Time) AND (Date = @Date); Parse Query
Execute Query
Close connection to the database
**ADD TimeSlot:**
Inputs: @Time, @Date, @Movie_Name, @Theatre Number, @Seat Number
Outputs: None
Pseudocode: Connect to the database Query =
INSERT INTO Time Slot Values(@Time, @Date, @Movie_Name, @Theatre
Number, @Seat Number);
Parse Query Execute Query
Close connection to the database
**Save TimeSlot:**
Inputs: @Time, @Date Outputs: None
Pseudocode: Connect to the database
Query = INSERT INTO Time Slot Values(@Time, @Date); Parse Query
Execute Query
Close connection to the database
**Add Movie:**
Inputs: @Movie_Name, @Genre, @Role, @Rating, @Release Date Outputs: None
Pseudocode: Connect to the database Query =
INSERT INTO Time Slot Values(@Movie_Name, @Genre, @Role, @Rating,
@Release Date ); Parse Query
Execute Query
Close connection to the database
**Save Movie:**
Inputs: @Movie_Name Outputs: None
Pseudocode: Connect to the database
Query = INSERT INTO Movie Slot Values(@Movie_Name); Parse Query
Execute Query
Close connection to the database
**Select Service:**
Inputs: @ServiceID Outputs:@ServiceName
Pseudocode: Connect to the database Query =
Select * From Service
Where (ServiceID=@ServiceID); Parse Query
Execute Query
Close connection to the database
**Save Service:** Inputs: @ServiceID @ServiceName Outputs: None
Pseudocode: Connect to the database
Query = INSERT INTO Service Values(@ServiceID); Parse Query
Execute Query
Close connection to the database
**Add Renting Assignment:** Inputs: @TheatreID @Date @StartTime @EndTime
Outputs: None
Pseudocode: Connect to the database
Query = SELECT TheatreID from Theatre where ServiceName=Rent
SELECT Date from Timeslot where ServiceName=Rent
SELECT StartTime from Timeslot where ServiceName=Rent
SELECT EndTime from Timeslot where ServiceName=Rent
INSERT INTO Are_assigned_renting Values(@TheatreID, @Date @StartTime
@EndTime ); Parse Query
Execute Query
Close connection to the database


**Add Services:**
Inputs: @ServiceID, @ServiceName Outputs: None
Pseudocode: Connect to the database Query =
INSERT INTO Services Values(@ServiceID, @ServiceName ); Parse Query
Execute Query
Close connection to the database
**View Service:**
Inputs: @Service_id
Outputs: @Service id @Service Name Pseudocode:
Connect to the database Query = Select*
FROM Service Parse Query Execute Query
Close connection to the database
**View Movie:**
Inputs: @null
Outputs: @Name, @Genre, @Role, @Rating, @Release Date Pseudocode:
Connect to the database Query = Select*
FROM Movie Parse Query Execute Query
Close connection to the database
**Select Quantity:** Inputs: @Quantity Outputs:@null
Pseudocode: Connect to the database Query = Select Count Available From seat
Where (
Select all From Seat Except
Select taken seat Where is_taken = true;
)
Parse Query
If (Query > quantity) then
Assign available seats to the user Edit Seat
Execute Query
Close connection to the database
Seat Check:
Inputs: @ seat Number Outputs:@ availability
Pseudocode: Connect to the database Query = Select is_taken from seat
Where (s.seat_number = @ seat Number) and (s.is_taken = true) Parse Query
Execute Query
Close connection to the database Return Query
**Deduce Seat:**
Inputs: @ seat Number Outputs:@ null
Pseudocode: Connect to the database Query = Update is_taken from seat
Set is_taken = true
Where (seat_number = @ seat Number) Parse Query
Execute Query
Close connection to the database Return Query
**Payment Process:**
Inputs: @ Payment_id, @payment method,@amt_paid,@Customer_id,
Outputs:@ null
Pseudocode: Connect to the database
Query = INSERT INTO Paymet Values( @ Payment_id, @payment
method,@amt_paid,@Customer_id, );
Parse Query Execute Query
Close connection to the database Return Query
Generate Invoice:
Inputs: @ Payment_id
Outputs:@ Payment_id, @payment method,@amt_paid,@Customer_id,
Pseudocode: Connect to the database
Query =
Select * From Payments
Where (Payment id=@Payment_id); Parse Query
Execute Query
Close connection to the database


**Citation:**
Images	were	all	taken	from	unsplash.com
(n.d.). Retrieved November 6, 2018, from
https://www.w3schools.com/w3css/tryw3css_templates_start_page.htm?fbclid=Iw
AR3jqaOkMWRxA8lD4enlIVYbS797b3c-_mq9tBCwao2DENrcxXlkUU2jpuo
(n.d.). Retrieved November 6, 2018, from https://templated.co/industrious
(n.d.). Retrieved November 14, 2018, from https://www.techradar.com/news/best-
free-web-hosting-sites-of- 2018	
(n.d.). Retrieved December 2, 2018, from https://www.onlineittuts.com/login-page-
in-php.html
Elmasri,	R.A.,	&Navathe,	S.B.	(2017)	Fundamentals	of	database	Systems.	Boston:	
Pearson

