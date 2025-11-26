# Real-Estate

## Header / Navbar (Updated)

I fixed and improved the site header to use a semantic, accessible and responsive navigation bar.

What I changed
- Replaced the old header markup with a semantic header/nav + a mobile menu toggle in `Home.html`.
- Added CSS for a responsive, off-canvas mobile menu and desktop layout in `styles.css`.
- Implemented a small accessible toggle script (sets `aria-expanded` and toggles `.open`) in `Home.html`.

How to preview
1. Open `Home.html` in a browser.
2. Resize the window under ~768px to see the mobile hamburger menu appear. Click the button to open/close the menu.

Accessibility notes
- The toggle uses `aria-expanded` and the nav has `role="navigation"` and `aria-label`.
- A `.sr-only` helper is included for screen reader-only text.
