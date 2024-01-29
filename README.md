# Readme of Code Challenge - Thiago Mota 📜

Welcome to **Readme of Code Challenge - Thiago Mota**! Here you will find everything about what i have done.

## About the Challenge ☕️

The main goal of this challenge is to build a web application to handle Zen Quotes and its API.

## About the Stacks 📜

For this challenge, i decided to use Laravel v9.52, and PHP v8.0.11 for **BACK-END**;
For **FRONT-END**, Bootstrap v5.3.2, Ajax and JQuery;
For **DATABASE**, MySQL (MariaDB);

## Technical Issues 🦄

To start the project, i implemented 3 Seeders:
**FavoriteQuoteSeeder**;
**QuoteSeeder**;
**UserSeeder**;

According to the challenge, each user must have 3 favorite quotes, so you need to run the seeder command **php artisan db:seed**. Remember: Before running seeders, you need to run the **migrations** command line :D

[implemented] There is a main Controller named **FavoriteQuoteController** that you can see the GET, POST and DELETE methods used in this challenge.

[tested] There are few Tests to take. You can find them at **FavoriteQuoteTest** and **Auth**.

To run this challenge, you will need to implement the .env file to set the Database name as follow:
**DB_DATABASE=quotesdb**.

All Zen Quotes API endpoints used in this challenge are provided by: **[Zen Quote API DOC](https://zenquotes.io/)**.

For this challenge, i performed with CDN calls (JQuery, Bootstrap and Font Awesome).

## Live Demo ❤️

You can watch a Live Demo of this challenge by accessing YouTube link: **[PLAY LIVE DEMO VIDEO](https://youtu.be/3D5OoWKo6dI)**.
