<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="public/custom/css/index.css">
</head>
<body>
    <!-- <h1>?!</h1>
    <ul>
        <li>*</li>
        <li>·</li>
        <li>#</li>
    </ul> -->
    
    <div style="position:fixed;bottom:1rem;right:1rem;z-index:100">
        <label>
            <input 
                id="dark-mode"
                type="checkbox"
                name="dark-mode"
                role="switch"
                aria-checked="false"
            >
            <span>Dark Mode</span>
        </label>
    </div>

    <br><hr class="separator" data-label="Spinner" /><br>

    <div class="spinner" role="status" aria-live="polite" aria-busy="true">
        <span class="sr-only">Loading...</span>
    </div>

    <br><hr class="separator" data-label="Breadcrumb" /><br>

    <nav class="breadcrumb" aria-label="Breadcrumb">
    <ol>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li aria-current="page"><span>Shoes</span></li>
    </ol>
    </nav>
  
    <br><hr class="separator" data-label="Tooltip" /><br>

    <a href="#" class="tooltip" data-tooltip="tooltip" data-position="top">Hover over me</a>
    <button class="tooltip" data-tooltip="Tooltip top" data-position="top">Top</button>
    <button class="tooltip" data-tooltip="Tooltip bottom" data-position="bottom">Bottom</button>
    <button class="tooltip" data-tooltip="Tooltip left" data-position="left">Left</button>
    <button class="tooltip" data-tooltip="Tooltip right" data-position="right">Right</button>

    <br><hr class="separator" data-label="Skeleton" /><br>

    <div class="skeleton" style="--w: 60%; --h: 1.5rem; --r: 0.5rem; --m: 1rem 0;"></div>
    <br>
    <div class="skeleton" style="--w: 3rem; --h: 3rem; --r: 50%;"></div>

    <br><hr class="separator" data-label="Stepper" /><br>

    <nav class="stepper" aria-label="Progress steps">
        <ol>
            <li class="is-completed">
                <div class="circle" aria-hidden="true"></div>
                <span>Account</span>
            </li>

            <li class="is-completed">
                <div class="circle" aria-hidden="true"></div>
                <span>Config</span>
            </li>

            <li class="is-active">
                <div class="circle" aria-current="step"></div>
                <span>Data</span>
            </li>

            <li>
                <div class="circle"></div>
                <span>Confirm</span>
            </li>
        </ol>
    </nav>
    
    <br><hr class="separator" data-label="Floating Label" /><br>
        
    <div class="form-floating">
        <input type="text" class="form-control" id="name" placeholder="Name">
        <label for="name">Name</label>
    </div>

    <br><hr class="separator" data-label="Select" /><br>

    <div class="form-floating">
        <select class="form-control" aria-label="Default select example" id="select-menu">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <label for="select-menu">Menu</label>
    </div>


    <br><hr class="separator" data-label="Input Group" /><br>

  
    <div class="form-group">
        <span class="form-group-text">@</span>
        <div class="form-floating" data-position="right">
            <input type="text" class="form-control" id="username" placeholder="username">
            <label for="username">Username</label>
        </div>
    </div>

    <br>

    <div class="form-group">
        <div class="form-floating" data-position="left">
            <input type="email" class="form-control" id="email" placeholder="email">
            <label for="email">example</label>
        </div>
        <span class="form-group-text">@example.com</span>
    </div>

    <br>

    <div class="form-group">
        <span class="form-group-text">@</span>
        <div class="form-floating">
            <input type="email" class="form-control" placeholder=" " />
            <label>Email</label>
        </div>
        <span class="form-group-text">@domain.com</span>
    </div>

    <br><hr class="separator" data-label="Tabs" /><br>

    <article class="tabulator">
        <input type="radio" name="tabulator-1" id="tabulator1-tab1" checked>
        <input type="radio" name="tabulator-1" id="tabulator1-tab2">
        <input type="radio" name="tabulator-1" id="tabulator1-tab3">
        <input type="radio" name="tabulator-1" id="tabulator1-tab4">
        <input type="radio" name="tabulator-1" id="tabulator1-tab5">

        <div class="tabs">
            <div>
                <h2>Tab 1</h2>
                <p>SEO optimized content</p>
            </div>
            <div>
                <h2>Tab 2</h2>
                <p>Visible content for search engines</p>
            </div>
            <div>
                <h2>Tab 3</h2>
                <p>More indexable content</p>
            </div>
            <div>
                <h2>Tab 4</h2>
                <p>More indexable content,,,</p>
            </div>

            <div>
                <h2>Tab 5</h2>
                <p>More indexable content...</p>
            </div>
        </div>

        <div class="controls">
            <label for="tabulator1-tab1">
                Home
            </label>
            <label for="tabulator1-tab2">
                Settings
            </label>
            <label for="tabulator1-tab3">
                Account
            </label>
            <label for="tabulator1-tab4">
                Billing
            </label>
            <label for="tabulator1-tab5">
                Last one
            </label>
        </div>
    </article>

    <br><hr class="separator" data-label="Slider" /><br>

    <article class="slider" data-loop="true" data-time="3000">
        <input type="radio" name="slider-2" id="slider2-slide1" checked>
        <input type="radio" name="slider-2" id="slider2-slide2">
        <input type="radio" name="slider-2" id="slider2-slide3">

        <div class="slides">
            <div class="slide">
                <h2>Slider 2 - Slide 1</h2>
                <p>SEO optimized content</p>
            </div>
            <div class="slide">
                <h2>Slider 2 - Slide 2</h2>
                <p>Visible content for search engines</p>
            </div>
            <div class="slide">
                <h2>Slider 2 - Slide 3</h2>
                <p>More indexable content</p>
            </div>
        </div>

        <div class="controls">
            <label for="slider2-slide1"></label>
            <label for="slider2-slide2"></label>
            <label for="slider2-slide3"></label>
        </div>
    </article>


    <br><hr class="separator" data-label="Accordion" /><br>

    <div class="accordion">
        <details open>
            <summary>
            <h3>What is your service?</h3>
            </summary>

            <div class="accordion-content">
                <div>
                    <p>
                    We provide professional development services with scalable architecture
                    and modern UI components.
                    </p>
                </div>
            </div>
        </details>

        <details>
            <summary>
                <h3>How does pricing work?</h3>
            </summary>

            <div class="accordion-content">
                <div>
                    <p>
                    Pricing depends on project complexity and required features.
                    </p>
                </div>
            </div>
        </details>

        <details>
            <summary>
                <h3>Do you support dark mode?</h3>
            </summary>

            <div class="accordion-content">
                <div>
                    <p>
                    Yes. The component automatically adapts to light and dark themes
                    using CSS variables.
                    </p>
                </div>
            </div>
        </details>
    </div>

    <br><hr class="separator" data-label="Dropdown" /><br>

    <nav class="dropdown" aria-label="User navigation">

        <button 
            class="dropdown-trigger btn"
            data-variant="transparent-dark"
            aria-expanded="false"
            aria-haspopup="true"
        >
            Menu
        </button>

        <ul class="dropdown-menu" role="menu">
            <li><a role="menuitem" href="#">Profile</a></li>
            <li><a role="menuitem" href="#">Settings</a></li>
            <li><a role="menuitem" href="#">Billing</a></li>
            <li><hr></li>
            <li><a role="menuitem" href="#">Logout</a></li>
        </ul>

    </nav>

    <br><hr class="separator" data-label="Badge" /><br>

    <span class="badge" data-variant="solid-primary">Primary</span>
    <span class="badge" data-variant="solid-secondary">Secondary</span>
    <span class="badge" data-variant="solid-success">Success</span>
    <span class="badge" data-variant="solid-danger">Danger</span>
    <span class="badge" data-variant="solid-warning">Warning</span>
    <span class="badge" data-variant="solid-info">Info</span>
    <span class="badge" data-variant="solid-dark">Dark</span>

    <span class="badge" data-variant="outline-primary">Primary</span>
    <span class="badge" data-variant="outline-secondary">Secondary</span>
    <span class="badge" data-variant="outline-success">Success</span>
    <span class="badge" data-variant="outline-danger">Danger</span>
    <span class="badge" data-variant="outline-warning">Warning</span>
    <span class="badge" data-variant="outline-info">Info</span>
    <span class="badge" data-variant="outline-dark">Dark</span>

    <span class="badge" data-variant="transparent-primary">Primary</span>
    <span class="badge" data-variant="transparent-secondary">Secondary</span>
    <span class="badge" data-variant="transparent-success">Success</span>
    <span class="badge" data-variant="transparent-danger">Danger</span>
    <span class="badge" data-variant="transparent-warning">Warning</span>
    <span class="badge" data-variant="transparent-info">Info</span>
    <span class="badge" data-variant="transparent-dark">Dark</span>


    <br><hr class="separator" data-label="Alert" /><br>

    <div class="alert alert-info">
        <div class="alert-icon">ℹ</div>
        <div class="alert-content">
            <div class="alert-title">Information</div>
            <div class="alert-description">
                This is an informational message.
            </div>
        </div>
    </div>

    <div class="alert alert-warning">
        <div class="alert-icon">⚠</div>
        <div class="alert-content">
            <div class="alert-title">Warning</div>
            <div class="alert-description">
                Be careful with this action.
            </div>
        </div>
    </div>

    <div class="alert alert-warning">
        <div class="alert-icon">⚠</div>
        <div class="alert-content">
            <div class="alert-title">Warning</div>
            <div class="alert-description">
                Be careful with this action.
            </div>
        </div>
    </div>

    <div class="alert alert-error">
        <div class="alert-icon">✖</div>
        <div class="alert-content">
            <div class="alert-title">Error</div>
            <div class="alert-description">
                Something went wrong.
            </div>
        </div>
    </div>

    <br><hr class="separator" data-label="Button" /><br>

    <button class="btn" data-variant="solid-primary" data-ripple="true">Primary</button>
    <button class="btn" data-variant="solid-secondary" data-ripple="true">Secondary</button>
    <button class="btn" data-variant="solid-success" data-ripple="true">Success</button>
    <button class="btn" data-variant="solid-danger" data-ripple="true">Danger</button>
    <button class="btn" data-variant="solid-warning" data-ripple="true">Warning</button>
    <button class="btn" data-variant="solid-info" data-ripple="true">Info</button>
    <button class="btn" data-variant="solid-dark" data-ripple="true">Dark</button>
    
    <button class="btn" data-variant="outline-primary" data-ripple="true">Primary</button>
    <button class="btn" data-variant="outline-secondary" data-ripple="true">Secondary</button>
    <button class="btn" data-variant="outline-success" data-ripple="true">Success</button>
    <button class="btn" data-variant="outline-danger" data-ripple="true">Danger</button>
    <button class="btn" data-variant="outline-warning" data-ripple="true">Warning</button>
    <button class="btn" data-variant="outline-info" data-ripple="true">Info</button>
    <button class="btn" data-variant="outline-dark" data-ripple="true">Dark</button>

    <button class="btn" data-variant="transparent-primary" data-ripple="true">Primary</button>
    <button class="btn" data-variant="transparent-secondary" data-ripple="true">Secondary</button>
    <button class="btn" data-variant="transparent-success" data-ripple="true">Success</button>
    <button class="btn" data-variant="transparent-danger" data-ripple="true">Danger</button>
    <button class="btn" data-variant="transparent-warning" data-ripple="true">Warning</button>
    <button class="btn" data-variant="transparent-info" data-ripple="true">Info</button>
    <button class="btn" data-variant="transparent-dark" data-ripple="true">Dark</button>

    
    <script src="public/custom/js/components/button.js"></script>
    <script src="public/custom/js/components/slider.js"></script>
    <script src="public/custom/js/components/switch.js"></script>
    <script src="public/custom/js/components/dropdown.js"></script>
    <!-- <script src="public/custom/js/components/tabs.js"></script> No needed, It using slider script-->
    <!-- <script src="public/custom/js/components/accordion.js"></script> If you want only one opened -->
    <script src="public/custom/js/helpers/dark-mode.js"></script>
    <script type="module" src="public/custom/js/index.js"></script>
</body>
</html>