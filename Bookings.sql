CREATE DATABASE IF NOT EXISTS motueka;
USE motueka;

-- The Bookings for the bed and breakfast
DROP TABLE IF EXISTS bookings;
CREATE TABLE IF NOT EXISTS bookings (
  bookingID int unsigned NOT NULL auto_increment,
  customerID int NOT NULL,
  roomID int NOT NULL,
  checkInDate date NOT NULL,
  checkOutDate date NOT NULL,
  contactNumber varchar(20) NOT NULL,
  bookingExtras varchar(300),
  review varchar(300),
  PRIMARY KEY (bookingID)
) AUTO_INCREMENT=1;

INSERT INTO bookings (bookingID,customerID,roomID,checkInDate,checkOutDate,contactNumber,bookingExtras,review) VALUES 
(1,3,4,'2024-12-25','2025-01-10','0274569870','Please leave extra set of towels',''),
(2,3,5,'2025-01-10','2025-01-20','0274569870','Please leave extra set of towels',''),
(3,6,2,'2024-07-01','2024-07-15','0218521963','Late check out','');