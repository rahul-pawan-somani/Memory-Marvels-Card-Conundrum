# Memory Marvels Card Conundrum

A small browser-based Pairs memory card game built as an early web development project. Players register a username, choose a simple avatar, play a card-matching game, and view their score on a static leaderboard page.

This project is intentionally simple. It does not use database persistence, authentication, a backend framework, or production-grade security controls.

## Features

- Username registration stored in browser cookies.
- Avatar customisation using selectable skin, eye, and mouth assets.
- Randomised 10-card Pairs memory game.
- Card flip and match-checking interactions implemented with JavaScript.
- Score calculation based on the number of attempts.
- Static sample leaderboard with the current player's cookie-based score.

## Technologies

- PHP
- HTML
- CSS
- Vanilla JavaScript
- Bootstrap CSS via CDN
- Browser cookies for local state

## Run Locally

This project can be served with PHP's built-in development server:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000/index.php
```

## Known Limitations

- Scores and avatar choices are stored in browser cookies, not a database.
- The leaderboard contains static sample entries and is not shared between users.
- The application does not implement real accounts, login, or authentication.
- The layout is designed for a desktop-sized browser and is not fully responsive.
- Automated tests and continuous integration are not included.

## Future Improvements

- Move embedded CSS and JavaScript into separate files.
- Add automated tests for the JavaScript game logic.
- Improve responsive layout and accessibility.
- Store leaderboard scores in a small backend data store.
- Add clearer game state handling for matched and unmatched cards.
