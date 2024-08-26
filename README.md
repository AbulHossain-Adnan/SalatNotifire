<br/> <div align="center"> <h3 align="center">Laravel Salat Time Notifier</h3> <p align="center"> A Laravel package to manage Salat (prayer) times and send notifications to a Slack channel. <br/> <a href="https://github.com/yourusername/laravel-salat-notifier"><strong>Explore the docs »</strong></a> <br/> <br/> <a href="https://github.com/yourusername/laravel-salat-notifier/issues/new?labels=bug&template=bug_report.md">Report Bug .</a> <a href="https://github.com/yourusername/laravel-salat-notifier/issues/new?labels=enhancement&template=feature_request.md">Request Feature</a> </p> </div>
Table of Contents

    About The Project
        Built With
    Getting Started
        Prerequisites
        Installation
    Usage
    Roadmap
    Contributing
    License
    Contact
    Acknowledgments

About The Project

This Laravel package allows you to manage Salat (prayer) times and sends notifications to a Slack channel 10 minutes before each Salat time. The package is easily integrated into any Laravel project and can be set up quickly to ensure timely reminders for prayers.
Built With

This project was built using:

    Laravel
    Slack API

Getting Started

To get a local copy up and running, follow these simple steps.
Prerequisites

You need to have the following installed:

    PHP 8.1 or higher
    Composer
    MySQL
    A Slack workspace with a channel named #salat-times

Installation

    Clone the Repository:

    sh

git clone https://github.com/yourusername/laravel-salat-notifier.git

Navigate to the Project Directory:

sh

cd laravel-salat-notifier

Install Dependencies:

sh

composer install

Set Up Environment:

    Copy .env.example to .env
    Configure your database settings and Slack webhook URL in the .env file.

Run Migrations:

sh

php artisan migrate

Symlink the Package:

    Ensure the package is placed in a packages directory.
    Use Composer to create a symlink and autoload the package.

sh

composer config repositories.salat-notifier path packages/welabs/salat-notifier
composer require welabs/salat-notifier:dev-main

Run the Project:

sh

    php artisan serve

Usage

After setting up, the package will automatically send notifications to the Slack channel #salat-times 10 minutes before each prayer time. You can manage Salat times using the CRUD interface provided.
Roadmap

Slack Notification Integration
CRUD Operations for Salat Times
Multi-language Support

    Additional Notification Channels (Email, SMS)

Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

    Fork the Project
    Create your Feature Branch (git checkout -b feature/AmazingFeature)
    Commit your Changes (git commit -m 'Add some AmazingFeature')
    Push to the Branch (git push origin feature/AmazingFeature)
    Open a Pull Request

License

Distributed under the MIT License. See LICENSE for more information.
Contact

Your Name - @yourusername - your.email@example.com

Project Link: https://github.com/yourusername/laravel-salat-notifier
Acknowledgments

    Laravel
    Slack API
    Othneil Drew's Best-README-Template
