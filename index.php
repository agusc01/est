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


    <script src="public/custom/js/components/slider.js"></script>
    <script src="public/custom/js/components/switch.js"></script>
    <script src="public/custom/js/components/tabs.js"></script>
    <script src="public/custom/js/helpers/dark-mode.js"></script>
    <script src="public/custom/js/index.js"></script>
</body>
</html>