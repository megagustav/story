# Story
Minimal, full-screen online portfolio for job applications. Potential employers are sent a `yourwebsite.com/company` URL and they only see the projects they're supposed to see. You set up your projects once, and then send out multiple websites with no effort at all.

# Installation
Drag this project to the root of your server, or into a folder but then you'll have to use URL redirects from your domain host to make this nice and clean

It's a work in progress, but for now it goes as follows:
1. Add folders to `/projects` with project titles. For example `intro`, `suitcase` or `bikesharing`.
2. The `page.php` file inside the project folder is the project content. `index.php` allows the project to be visited without being part of a portfolio.
3. Add images to the same project folder.
4. In `settings.php` define the project folders

# Files and Folders
You'll see three folders: `portfolio`, `projects` and `system`.
`projects` is your projects folder — it's where you'll put all your projects. Duh. They can be accessed individually if they have an `index` file. Projects can be private or part of portfolios only without the `index`.
`system` is the background action. Ideally you don't have to touch it.
`portfolio` is one of many folders you'll use for applications. It contains folders with company names and in there is `settings.php` and `index.php`, which projects from the `projects` folder to display, define project titles, and their order. 

# update 29.02.20
New in v2.0:
You can also give people your website.com/project links to individual projects without it being a full portfolio.

added the intro "project" where there's also a `letter.txt` — your cover letter for that company.
