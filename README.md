# Mingley

Welcome to **Mingley**, a dynamic and engaging social media web application crafted using a robust tech stack. Mingley enables users to connect, share content, and interact with each other in an intuitive, user-friendly platform.

## Table of Contents

- [About the Project](#about-the-project)
- [Visuals](#visuals-of-mingley)
- [Built With](#built-with)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Database](#database)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## About the Project

Mingley is a feature-rich social media web app that allows users to create profiles, post content, comment on posts, and connect with others. The platform is built on a stack that optimizes performance, responsiveness, and user interaction, making Mingley a vibrant and seamless social experience.


## Visuals of Mingley:

<details>
  <summary>Click Here to see the visuals of Mingley...</summary>
  <br>

### SignUp Page:
![image](https://github.com/user-attachments/assets/b2524298-44d7-4cd4-ba03-2892055a4326)

### Login Page:
![image](https://github.com/user-attachments/assets/a01fd5e7-f28a-4c88-8594-1543746d8575)

### Feed/Home Page:
![image](https://github.com/user-attachments/assets/e0be847a-e237-420a-890c-6be1bda8e194)

### Two-way communication (realtime chat) Page:
![image](https://github.com/user-attachments/assets/cbe6815c-9254-4f30-b753-07db8622a956)
![image](https://github.com/user-attachments/assets/2084914b-182e-49c6-a86e-92fe571c51f8)

### Profile Page:
![image](https://github.com/user-attachments/assets/02ae4331-e55f-4844-b9bd-55c2c619bdbb)

### Friend's Profile Page:
![image](https://github.com/user-attachments/assets/0382f0e6-28d3-4170-a35b-b2b2da275e3c)


### Admin Panel:
![image](https://github.com/user-attachments/assets/d1d07d24-2cc2-4af7-ba7d-944b4249513a)

 
 <br>
</details>



## Built With

Mingley is powered by:

- **PHP** - Backend scripting
- **JavaScript** & **jQuery** - Interactivity and front-end logic
- **AJAX** - Asynchronous content updates
- **HTML** & **CSS** - Structuring and styling
- **Bootstrap** - Responsive and mobile-first design
- **phpMyAdmin** & **MySQL** - Database management and storage

## Features

- User Registration and Authentication
- User Profile Management
- Post Creation, Editing, and Deletion
- Comments and Likes
- Real-time Notifications (powered by AJAX)
- Responsive Design for mobile and desktop
- Admin Panel for user and content management

## Getting Started

Follow these instructions to get a local copy of Mingley up and running.

### Prerequisites

- **PHP** (version 7.x or higher)
- **MySQL** (or any MySQL-compatible database)
- **phpMyAdmin** (for database management)
- **Web Server** (e.g., Apache)

### Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/princid/Mingley.git
   cd Mingley
   git checkout developmentV1
2. **Database Setup**
Create a new MySQL database.
Import the database structure from the provided mingley.sql file in the root directory.
Update your database credentials in the config.php file.
Run Mingley Locally
Start your PHP server:

Copy code
```
php -S localhost:8000

```
Access Mingley at http://localhost:8000 in your browser.
***Usage***

Once installed, you can access Mingley through your browser, register as a new user, create and manage posts, view content from other users, and interact with others on the platform.

###Database

The MySQL database for Mingley includes tables for:

Users
Posts
Comments
Likes
Notifications
Each table is designed to support the dynamic interactions in Mingley and can be customized to fit additional features or data requirements.

###Contributing

Contributions are welcome! Please follow these steps:

Fork the repository.
Checkout to the current dev branch:
```
git checkout developmentV1
```
Then, create a new branch 
```
git checkout -b feature/YourFeature
```
Commit your changes
```
git commit -m 'Add YourFeature'
```
Push to the branch 
```
git push origin feature/YourFeature
```
Open a pull request.
###License

Distributed under the MIT License. See LICENSE for more information.

