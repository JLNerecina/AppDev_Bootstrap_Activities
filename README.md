# AppDev Bootstrap Activities

A small collection of Bootstrap-based learning activities and demo pages used for practicing responsive layout and basic web development workflows. This repo contains static examples and small interactive exercises used during Applications Development coursework.

**Contents**
- **Project:** A set of activity folders demonstrating Bootstrap usage and simple web examples.
- **Root files:** `index.html`, project Bootstrap assets, and activity folders (`Activity1`..`Activity5`).

**Prerequisites**
- **Browser:** Any modern web browser to view the static pages.
- **PHP (optional):** `Activity1` contains `index.php` and requires a PHP server to run dynamic PHP pages.

**Run locally**
- **Static files:** Serve the repo root and open `index.html`.

	- Quick (Python):

		```bash
		python3 -m http.server 8000
		# then open http://localhost:8000/
		```

	- Or open `index.html` directly in your browser for static-only pages.

- **Activity1 (PHP):** From the repository root, run:

	```bash
	php -S localhost:8000
	# then open http://localhost:8000/Activity1/
	```

**Project structure (high level)**
- `index.html` — main landing file.
- `Activity1/` — contains `index.php` and Bootstrap-based example(s).
- `css/`, `js/`, `fonts/` — local Bootstrap assets used by activities.
- `Activity2/`, `Activity3/`, `Activity4/`, `Activity5/` — additional activity folders (placeholders or exercises).

**How to use**
- Browse the activities to see example layouts and components.
- Use the Bootstrap CSS/JS files in `css/` and `js/` to experiment with components and responsiveness.

**Contributing**
- Add new activity folders or improve existing examples.
- Open a PR with descriptive commits and a brief README for complex activities.

**License & contact**
- No license file is included. Add a `LICENSE` if you want to specify reuse terms.
- Repository owner: JLNerecina (GitHub)

