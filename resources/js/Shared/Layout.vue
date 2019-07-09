<template>
    <main>
        <nav class="nav navbar-expand-lg bg-red container">
            <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#nabarMarkup"
                    aria-controls="navbarMarkup" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMarkup">
                <div class="navbar navbar-nav">
                    <inertia-link href="/" class="nav-item nav-link">Home</inertia-link>
                    <inertia-link href="/about" class="nav-item nav-link">About</inertia-link>
                    <inertia-link href="/contact" class="nav-item nav-link">Contact</inertia-link>
                </div>
            </div>
        </nav>

        <article class="container">
            <slot />
        </article>
    </main>
</template>

<style>
    .bg-red {
        background-color: coral;
    }
</style>
