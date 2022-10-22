## About The Project

Dutylogs-webpage is a simple solution to display department dutylogs online, for FiveM server. This webpage will support any dutylogs script, although you may have to do a bit of edition to change the necessary tables. This webpage is navitly designed for Knight Staff Duty, found here: https://knightdev.tebex.io/package/4225733.

Some of the features:
* Display department specific data
* Sorted by dutytime from highest to lowest
* simple setup

## Getting Started

### Prerequisites

Before you do anything, you must make sure your webserver supports php. If it does, create a subdomain such as dutylogs.example.com, and add the files into the directory.

### Installation

1. Open up database.php, and enter your MySQL database credentials.

2. Open up department-sync.php, and change WHERE dept='department' on line #19 to the department of your choosing.

3. In department-sync.php, edit the details on line #5 and #6 to match your database.

4. Rename department-sync.php to the department name of your choosing. (bcso-sync.php)

5. Open up department.php, and update line #2 to match your new department-sync.php file name.

6. Edit lines #18 through #22 to match the perfered names of your tables.

7. Edit lines #32 through #36 to match your table names from department-sync.php.

8. Rename department.php to the department name of your choosing. (bcso.php)

9. Repeat steps #2 through #8 for each additional department.

Your dutylogs should be found on http(s)://dutylogs.example.com/(department).php
   
<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.
