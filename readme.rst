#####################
Ignite - GroceryCRUD
#####################
This repository is powered by CodeIgniter and GroceryCRUD framework. The purpose of this repository is to showcase
what CodeIgniter is capable of, and for personal practices. GroceryCRUD is also an easy framework to apply the
concepts of Create, Read, Update, Delete to your own websites!
This repository is live at: https://nicholasdw.com/grocery/

***************
Acknowledgement
***************
I'd like to thank the CodeIgniter team and GroceryCRUD team.
- CodeIgniter Team: https://codeigniter.com/
- GroceryCRUD (John Skoumbourdis): https://www.grocerycrud.com/

*****************************
Architecture and Philosophies
*****************************
- Object Oriented
- Model View Controller Application Architecture
- HTML, CSS, JavaScript, Bootstrap, and jQuery for the Front-End
- PHP (CodeIgniter), MariaDB, and GroceryCRUD for the Back-End
- Hosted on a Cloud Provider
- Coded in English

*******************
Server Requirements
*******************
PHP version 5.6 or newer is recommended (CodeIgniter).
It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************
- Download or fork the repository.
- Import the database that is located at ``assets/sql`` folder.
- Make sure the create a new database before importing the database!
- The name of the database could be anything, default is ``dealership``.
- Set the database credentials at ``application/config/database.php``, usually username, password, and database name.
- Copy the folder in your ``htdocs`` or webroot folder.
- Run XAMPP/MAMP/Spark and launch the application.
- Enjoy!
(*) I added several more folders inside CI's default folders like ``includes``, ``assets``, etcetera for modularization.

*******
Editing
*******
The place where I schedule my GroceryCRUD code is located at ``application/controllers/Data.php`` (controller)
and ``application/views/table_display.php``

*******
License
*******
Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********
-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to CodeIgniter's `Security Panel <mailto:security@codeigniter.com>`_
or via CodeIgniter's `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.
