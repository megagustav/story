# Story
Minimal, full-screen online portfolio for job applications. Potential employers are sent a `yourwebsite.com/company` URL and they only see the projects they're supposed to see. You set up your projects once, and then send out multiple websites with no effort at all.

# Installation
Drag this project to the root of your server, or into a folder but then you'll have to use URL redirects from your domain host to make this nice and clean

# Files and Folders
You'll see three folders: `company-name`, `_chapters` and `_system`.
`_chapters` is your projects folder — it's where you'll put all your projects.
`_system` is the background action. Ideally you don't have to touch it.
`company-name` is one of many folders you'll use for applications. It contains `settings.php` and `index.php`, where you define company name, which projects from the `_chapters` folder to display, define project titles, and their order. There's also a `letter.txt` — your cover letter for that company.

It's a work in progress, but for now it goes as follows:
1. Add folders to `/_chapters` with project titles. For example `intro`, `suitcase` or `bikesharing`.
2. The `page.php` file inside the project folder is the project content.
3. Add images to the same project folder including background images for title spreads
4. In `settings.php` define the project folders

# `settings.php`
Use the `$variables` to set your name, the company, the date, etc.

*Make sure the URL set in `settings.php` matches the name of the project folder.*
