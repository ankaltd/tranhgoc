<?php extract($args); ?>

<div class="<?php echo $class; ?>">
    <div class="container">
        <div class="row py-2 text-center">

            <!-- Bottom Left Header -->
            <div class="<?php echo $class; ?>-left col-1">
                <svg height="20" height="30" aria-hidden="true" focusable="false" role="presentation" class="icon icon-nav" viewBox="0 0 25 25">
                    <path d="M0 4.062h25v2H0zm0 7h25v2H0zm0 7h25v2H0z"></path>
                </svg>
            </div>

            <!-- Bottom Center Header -->
            <div class="<?php echo $class; ?>-center col-10">
                <a href="/" class="wep_logo">
                    <img height="30" width="auto" src="<?php echo THEME_URL . '/logo.png' ?>" alt="Logo">
                </a>
            </div>

            <!-- Bottom Right Header -->
            <div class="<?php echo $class; ?>-right col-1">
                <svg height="20" height="30" aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart" viewBox="0 0 25 25">
                    <path d="M5.058 23a2 2 0 104.001-.001A2 2 0 005.058 23zm12.079 0c0 1.104.896 2 2 2s1.942-.896 1.942-2-.838-2-1.942-2-2 .896-2 2zM0 1a1 1 0 001 1h1.078l.894 3.341L5.058 13c0 .072.034.134.042.204l-1.018 4.58A.997.997 0 005.058 19h16.71a1 1 0 000-2H6.306l.458-2.061c.1.017.19.061.294.061h12.31c1.104 0 1.712-.218 2.244-1.5l3.248-6.964C25.423 4.75 24.186 4 23.079 4H5.058c-.157 0-.292.054-.438.088L3.844.772A1 1 0 002.87 0H1a1 1 0 00-1 1zm5.098 5H22.93l-3.192 6.798c-.038.086-.07.147-.094.19-.067.006-.113.012-.277.012H7.058v-.198l-.038-.195L5.098 6z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>